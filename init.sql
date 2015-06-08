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

drop table if exists question_rating cascade;

create table question_rating(
  question integer not null,
  createdby integer not null, 
  rating rating not null,
  foreign key (question) references question(questionid),
  foreign key (createdby) references registered_user(userid)
);

drop table if exists answer cascade;

create table answer(
  answerid serial primary key not null,
  question integer not null,
  createdby integer not null,
  content text not null,
  foreign key (question) references question(questionid),
  foreign key (createdby) references registered_user(userid)
);

drop table if exists answer_rating cascade;

create table answer_rating(
  answer integer not null,
  createdby integer not null, 
  rating rating not null,
  foreign key (answer) references answer(answerid),
  foreign key (createdby) references registered_user(userid)
);


create or replace function trigger_questionUpvote() returns trigger AS $trg$
  begin
    insert into question_rating(question, createdBy, rating) values (NEW.questionid, NEW.createdby, 1);
      return new;
  end
$trg$ language plpgsql;

drop trigger trigger_questionUpvote on question cascade;

create trigger trigger_questionUpvote
  after insert on question for each row
  execute procedure trigger_questionUpvote();

create or replace function trigger_answerUpvote() returns trigger AS $trg$
  begin
    insert into answer_rating(answer, createdBy, rating) values (NEW.answerid, NEW.createdby, 1);
      return new;
  end
$trg$ language plpgsql;

create trigger trigger_answerUpvote
  after insert on answer for each row
  execute procedure trigger_answerUpvote();
