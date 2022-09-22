https://sqlbolt.com/lesson/select_queries_introduction
1. SELECT title FROM movies;
2. SELECT director FROM movies; 
3. SELECT title, director FROM movies; 
4. SELECT title, year FROM movies; 
5. SELECT * FROM movies; 

https://sqlbolt.com/lesson/select_queries_with_constraints
1. SELECT id, title FROM movies WHERE id = 6;
2. SELECT title, year FROM movies WHERE year BETWEEN 2000 AND 2010;
3. SELECT title, year FROM movies WHERE year NOT BETWEEN 2000 AND 2010;
4. SELECT title, year FROM movies WHERE year <= 2003;

https://sqlbolt.com/lesson/select_queries_with_constraints_pt_2
1. SELECT title, director FROM movies WHERE title LIKE "Toy Story%";
2. SELECT title, director FROM movies WHERE director LIKE 'john lasseter'
3. SELECT title, director FROM movies WHERE director NOT LIKE 'john lasseter'
4. SELECT title, director FROM movies WHERE title LIKE 'WALL%'

https://sqlbolt.com/lesson/filtering_sorting_query_results
1. SELECT DISTINCT Director FROM movies ORDER BY director asc
2. SELECT title, year FROM movies ORDER BY year DESC LIMIT 4;
3. SELECT title FROM movies ORDER BY title ASC LIMIT 5;
4. SELECT title FROM movies ORDER BY title ASC limit 5 OFFSET 5;

https://sqlbolt.com/lesson/select_queries_review
1. SELECT country, city, population FROM north_american_cities where country LIKE 'canada'
2. SELECT city, country, latitude FROM north_american_cities where country like 'United States' order by latitude desc
3. SELECT city, longitude FROM north_american_cities WHERE longitude < -87.629798 ORDER BY longitude ASC;
4. SELECT city, population, country FROM north_american_cities where country like 'mexico' AND population > 1500800
5. SELECT city, population FROM north_american_cities WHERE country LIKE "United States" ORDER BY population DESC LIMIT 2 OFFSET 2;

https://sqlbolt.com/lesson/select_queries_with_joins
1. SELECT title, domestic_sales, international_sales FROM Boxoffice inner join movies on movies.id = boxoffice.movie_id
2. SELECT title, domestic_sales, international_sales FROM Boxoffice inner join movies on movies.id = boxoffice.movie_id where International_sales > domestic_sales
3. SELECT title FROM Boxoffice inner join movies on id = movie_id order by boxoffice.rating desc

https://sqlbolt.com/lesson/select_queries_with_outer_joins
1. SELECT DISTINCT building FROM employees;
2. SELECT distinct * FROM buildings;
3. SELECT DISTINCT building_name, role FROM buildings LEFT JOIN employees ON building_name = building;

https://sqlbolt.com/lesson/select_queries_with_nulls
1. SELECT * FROM employees where building IS NULL 
2. SELECT * FROM buildings LEFT JOIN employees on building = building_name where building IS NULL 

https://sqlbolt.com/lesson/select_queries_with_expressions
1. SELECT title, (domestic_sales + international_sales) / 1000000 AS gross_sales_millions FROM movies JOIN boxoffice ON movies.id = boxoffice.movie_id;
2. SELECT title, rating * 10 AS rating_percent FROM movies JOIN boxoffice ON movies.id = boxoffice.movie_id;
3. SELECT title, year FROM movies WHERE year % 2 = 0;

https://sqlbolt.com/lesson/select_queries_with_aggregates
1. SELECT MAX(years_employed) as Max_years_employed FROM employees;
2. SELECT role, AVG(years_employed) as Average_years_employed FROM employees GROUP BY role;
3. SELECT building, SUM(years_employed) as Total_years_employed FROM employees GROUP BY building;

https://sqlbolt.com/lesson/select_queries_with_aggregates_pt_2
1. SELECT role, COUNT(*) as Number_of_artists FROM employees WHERE role = "Artist";
2. SELECT role, COUNT(*) FROM employees GROUP BY role;
3. SELECT role, SUM(years_employed) FROM employees GROUP BY role HAVING role = "Engineer";

https://sqlbolt.com/lesson/select_queries_order_of_execution
1. SELECT director, COUNT(id) as Num_movies_directed FROM movies GROUP BY director;
2. SELECT director, SUM(domestic_sales + international_sales) as Cumulative_sales_from_all_movies FROM movies INNER JOIN boxoffice ON movies.id = boxoffice.movie_id GROUP BY director;

https://sqlbolt.com/lesson/inserting_rows
1. INSERT INTO movies VALUES (4, "Toy Story 4", "El Directore", 2015, 90);
2. INSERT INTO boxoffice VALUES (4, 8.7, 340000000, 270000000);

https://sqlbolt.com/lesson/updating_rows
1. UPDATE movies SET director = "John Lasseter" WHERE id = 2;
2. UPDATE movies SET year = 1999 WHERE id = 3;
3. UPDATE movies SET title = "Toy Story 3", director = "Lee Unkrich" WHERE id = 11;

https://sqlbolt.com/lesson/deleting_rows
1. DELETE FROM movies where year < 2005;
2. DELETE FROM movies where director = "Andrew Stanton";

https://sqlbolt.com/lesson/creating_tables
1. CREATE TABLE Database (Name TEXT, Version FLOAT, Download_count INTEGER);

https://sqlbolt.com/lesson/altering_tables
1. ALTER TABLE Movies ADD COLUMN Aspect_ratio FLOAT DEFAULT 2.39;
2. ALTER TABLE Movies ADD COLUMN Language TEXT DEFAULT "English";

https://sqlbolt.com/lesson/dropping_tables
1. DROP TABLE Movies;
2. DROP TABLE BoxOffice;






