/*CREATE TABLE IF NOT EXISTS genres
(
    idGenres SERIAL UNIQUE PRIMARY KEY,
    name text NOT NULL
);

INSERT INTO genres (name) VALUES
('House'),
('Techno'),
('Rrance'),
('Garage'),
('UK Garage'),
('Dubstep'),
('Breakbeat'),
('Drum and bass'),
('Neurofunk'),
('Ambient'),
('Lo-Fi'),
('Chillout');*/

CREATE TABLE IF NOT EXISTS genres
(
    genre_id SERIAL UNIQUE PRIMARY KEY,
    name text NOT NULL
);

INSERT INTO genres (name) VALUES
('House'),
('Garage'),
('Breakbeat'),
('Ambient & Lo-Fi');

CREATE TABLE IF NOT EXISTS topics
(
    topic_id SERIAL UNIQUE PRIMARY KEY,
    name text NOT NULL,
    genre_fk INTEGER NOT NULL REFERENCES genres(genre_id) ON UPDATE CASCADE ON DELETE RESTRICT
);

INSERT INTO topics (name, genre_fk) VALUES
('I Hate House', 1),
('Garage best beer', 2),
('Who broke the beat', 3),
('How to sleep', 4);

CREATE TABLE users (
  user_id SERIAL PRIMARY KEY,
  nickname varchar(355) DEFAULT NULL,
  login varchar(100) UNIQUE DEFAULT NULL,
  email varchar(255) UNIQUE DEFAULT NULL,
  password varchar(500) DEFAULT NULL,
  avatar varchar(500) DEFAULT NULL
);

INSERT INTO users (nickname, login, email, password, avatar) VALUES
('Yujin Zushi', 'yujinzushi', 'shiganov.evgeniy@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'uploads/1670118519151.jpg');

CREATE TABLE messages (
  msg_id SERIAL PRIMARY KEY,
  msg varchar(2000) NOT NULL,
  msg_date timestamp NOT NULL,
  user_fk INTEGER NOT NULL REFERENCES users(user_id) ON UPDATE CASCADE ON DELETE RESTRICT,
  topic_fk INTEGER NOT NULL REFERENCES topics(topic_id) ON UPDATE CASCADE ON DELETE RESTRICT
);

INSERT INTO messages (msg, user_fk, topic_fk, msg_date) VALUES
('I Hate House because its boring genre of music', 1, 1, '2022-12-08 07:21:14'),
('Garage best beer Garage best beer Garage best beer', 1, 2, '2022-12-07 08:32:57'),
('Who broke the beat? I want to fix it pls help me :)', 1, 3, '2022-12-07 06:51:09'),
('How to sleep? Can test ambient music make falling sleep easier?', 1, 4, '2022-12-08 18:37:54');