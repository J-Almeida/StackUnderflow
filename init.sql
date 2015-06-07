drop table if exists registered_user cascade;

create table registered_user(
  userid serial primary key not null,
  name varchar(255) not null,
  surname varchar(255) not null,
  email varchar(100) not null,
  username varchar(255) not null unique,
  password varchar(255) not null,
  bibliography varchar(1024),
  avatar varchar(255),
  company varchar(100),
  lastactivity varchar(1024),
  banned boolean,
  admin boolean
);

drop table if exists question cascade;

create table question(
  questionid serial primary key not null,
  createdby integer not null,
  title varchar(255) not null,
  content text not null,
  foreign key(createdby) references registered_user(userid)
);

drop table if exists tag cascade;

create table tag(
  tagid serial primary key not null,
  name varchar(255) not null
);

drop table if exists question_tag cascade;

create table question_tag(
  tagid integer not null,
  questionid integer not null,
  foreign key (tagid) references tag(tagid),
  foreign key(questionid) references question(questionid),
  primary key(tagid, questionid)
);

drop domain if exists rating cascade;

create domain rating as integer check(value = -1 or value = 1);

drop table if exists question_rating;

create table question_rating(
  question integer not null,
  createdby integer not null, 
  rating rating not null,
  foreign key (question) references question(questionid),
  foreign key (createdby) references registered_user(userid)
);
