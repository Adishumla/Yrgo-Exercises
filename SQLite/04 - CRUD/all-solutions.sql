1. insert into albums (id, name) values (1, 'Persuasion System');

2.insert into albums (id, name) values (2, 'Iteration'), (3, 'In Decay');

3. update albums SET name = 'Galactic Melt' WHERE name != ''

4. update albums set name = 'Persuasion System' where id = 1 and name = 'Iteration' where id = 2

5. delete from albums where id > 0

6. insert into albums (id, name) values (1, 'Persuasion System'), (2, 'Iteration'), (3, 'In Decay'), (4, 'Galactic Melt');

7. delete from albums where name = 'In Decay'

8. create table artists (id, name)

9. insert into artists (id, name)
values (1, 'Daft Punk'), (2, 'Com Truise');

10. create table tracks (id, name, artist_id) 

11. insert into tracks (id, name , artist_id)
values (1, 'Technologic', 1),
       (2, 'One More Time', 1),
       (3, 'Propagation', 2),
       (4, 'Brokendate', 2)

12. select distinct artists.name as artist, count(tracks.artist_id) as tracks from tracks
    inner join artists on tracks.artist_id = artists.id group by artists.id

13. All sqlbolt exercises completed in 01  