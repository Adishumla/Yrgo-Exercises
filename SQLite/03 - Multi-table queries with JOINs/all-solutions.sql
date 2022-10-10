1. SELECT id AS Trams FROM trams WHERE color LIKE 'blue'
2. SELECT trams.id, stations."name" FROM trams INNER JOIN stations on stations.id = trams.station_id
3. SELECT stations."name", count(trams.station_id) FROM trams INNER JOIN stations ON stations.id = trams.station_id GROUP BY "name"
4. SELECT stop_tram.tram_id as id, trams.color, stops."name" from stop_tram 
INNER JOIN trams on stop_tram.tram_id = trams.id
INNER JOIN stops on stops.id = stop_tram.stop_id WHERE stop_tram.tram_id LIKE 11

5.SELECT trams.id FROM trams
INNER JOIN stop_tram ON stop_tram.tram_id = trams.id
INNER JOIN stops ON stops.id = stop_tram.stop_id
WHERE stops.id LIKE 5

6. INSERT INTO trams
VALUES (14, "purple", 1)

7. All solutions to sqlbolt in introduction to sql 17.sql