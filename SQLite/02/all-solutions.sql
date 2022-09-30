1. SELECT name, age FROM cats

2. SELECT name, age FROM cats WHERE age > 10

3. SELECT name, age FROM cats WHERE age < 10 AND age > 5

4. SELECT name, age FROM cats WHERE owner_id IS NULL

5. SELECT COUNT(DISTINCT id) FROM owners

6. SELECT COUNT(DISTINCT id) AS owner_count FROM owners

7. SELECT DISTINCT name FROM owners

8. SELECT name FROM owners GROUP by name

9. SELECT DISTINCT name FROM cats ORDER BY name DESC

10. SELECT DISTINCT name FROM cats WHERE name LIKE 'b%'

11. SELECT name FROM owners LIMIT 2 OFFSET 2

12. SELECT DISTINCT name as royalty FROM cats WHERE age <= 2 ORDER BY name ASC LIMIT 1 OFFSET 2

13. SELECT DISTINCT owners.name, COUNT(cats.name) FROM owners INNER JOIN cats on owners.id = cats.owner_id GROUP BY owners.name

14. SELECT DISTINCT owners.name, COUNT(cats.name) FROM owners INNER JOIN cats on owners.id = cats.owner_id GROUP BY owners.name HAVING COUNT(cats.name) = 2
