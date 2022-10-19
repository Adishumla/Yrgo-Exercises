1.
 CREATE TABLE movie (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    year INTEGER NOT NULL,
    director TEXT NOT NULL,
    rating INTEGER NOT NULL,
    lenght INTEGER NOT NULL,
    award_id INTEGER NOT NULL,
    actor_id INTEGER NOT NULL,
    character_id INTEGER NOT NULL
);
create table actor (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    movie_id INTEGER NOT NULL,
    character_id INTEGER NOT NULL
);
create table character (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    movie_id INTEGER NOT NULL,
    actor_id INTEGER NOT NULL
);
create table award (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    movie_id INTEGER NOT NULL
);

2.
insert into movie (title, year, director, rating, lenght, award_id, actor_id, character_id)
values ('The Godfather', 1972, 'Francis Ford Coppola', 9.2, 175, 1, 1, 1);
insert into movie (title, year, director, rating, lenght, award_id, actor_id, character_id)
values ('The Godfather: Part II', 1974, 'Francis Ford Coppola', 9.0, 202, 1, 1, 1);
insert into actor (name, movie_id, character_id)
values ('Marlon Brando', 1, 1);
insert into character (name, actor_id, movie_id)
values ('Don Vito Corleone', 1, 1);
insert into award (name, movie_id)
values ('Best Picture', 1);
insert into award (name, movie_id)
values ('Best Movie', 1);
insert into award (name, movie_id)
values ('Best Director', 2);


Which actor played the role of "Fredo" in the movie the godfather II?:
select character.name, actor.name from character join actor on character.actor_id = actor.id

avrage rating of all movies from 1972:
SELECT AVG(rating) FROM movie WHERE year = 1972;

Longest movie:
select lenght, title from movie where lenght = (select max(lenght) from movie);

Movies where Marlon Brando was in:
select movie.title, actor.name from movie, actor where movie.id = actor.movie_id and actor.name = 'Marlon Brando';

The god father awards:
select movie.title, award.name as awared from movie join award on movie.id = award.movie_id where movie.title = 'The Godfather';

1,1,1
2,1,2
3,2,2
2,2,4
2,3,2
3,4,3

SELECT movie.title, actor.name from actor
join cast on actor.id = cast.actor_id
join movie on cast.movie_id = movie.id
WHERE movie.title = 'The Godfather'