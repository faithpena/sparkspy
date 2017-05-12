CREATE DATABASE smartbuilding;

\c smartbuilding

CREATE TABLE Users(
	id serial PRIMARY KEY,
  first_name VARCHAR(128) NOT NULL,
  last_name VARCHAR(128) NOT NULL,
  email VARCHAR(128) UNIQUE NOT NULL,
  password VARCHAR(128) NOT NULL
);

CREATE TABLE Buildings(
  id serial PRIMARY KEY,
  name VARCHAR(128) NOT NULL,
  address VARCHAR(256) NOT NULL,
  admin_user_id INT NOT NULL
);

CREATE TABLE Rooms(
  id serial PRIMARY KEY,
  number INT NOT NULL,
  building_id INT NOT NULL
);

CREATE TABLE Sensors(
  id serial PRIMARY KEY,
  productcode VARCHAR(64) NOT NULL,
  room_id INT NOT NULL
);

CREATE TABLE User_Room(
  id serial PRIMARY KEY,
  user_id INT NOT NULL,
  room_id INT NOT NULL
);

CREATE TABLE Logs(
  id serial PRIMARY KEY,
  updatedon TIMESTAMP NOT NULL,
  status BOOL NOT NULL
);
