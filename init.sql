DROP TABLE IF EXISTS registered_user;

CREATE TABLE registered_user(
  userId SERIAL PRIMARY KEY NOT NULL,
  name VARCHAR(255) NOT NULL,
  surname VARCHAR(255) NOT NULL,
  email VARCHAR(100) NOT NULL,
  username VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  bibliography VARCHAR(1024),
  avatar VARCHAR(255),
  company VARCHAR(100),
  lastActivity VARCHAR(1024),
  banned BOOLEAN,
  admin BOOLEAN
);
