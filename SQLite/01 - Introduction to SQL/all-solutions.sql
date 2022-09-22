1. SELECT * FROM tracks;
2. SELECT name from tracks
3. SELECT name, artist from tracks
4. SELECT id, name from tracks where artist = 'Childish Gambino'
5. SELECT id, name from tracks where artist IN ('Childish Gambino', ' Michael Kiwanuka')
6. SELECT * FROM tracks WHERE duration > 240000;
7. SELECT * FROM tracks WHERE duration > 240000 AND artist != 'Michael Kiwanuka'
8. SELECT * from tracks WHERE duration IS NULL
9. SELECT * from tracks WHERE duration IS NOT NULL
10. SELECT * FROM tracks ORDER BY name
11. SELECT * FROM tracks ORDER BY name ASC LIMIT 1;
12. SELECT * FROM tracks ORDER BY name DESC LIMIT 1
13. SELECT artist FROM tracks GROUP BY artist;
14. SELECT COUNT(name), artist FROM tracks GROUP BY artist
15. SELECT artist, COUNT(name) as tracks_count from tracks WHERE duration IS NULL GROUP by artist
16. SELECT DISTINCT albums.name, COUNT(tracks.artist) as tracks from tracks INNER JOIN albums ON albums.artist = tracks.artist WHERE albums.artist = 'Michael Kiwanuka';