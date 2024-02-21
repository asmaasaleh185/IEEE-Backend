
/*
    Enter your query here and follow these instructions:
    1. Please append a semicolon ";" at the end of the query and enter your query in a single line to avoid error.
    2. The AS keyword causes errors, so follow this convention: "Select t.Field From table1 t" instead of "select t.Field From table1 AS t"
    3. Type your code immediately after comment. Don't leave any blank line.
*/
Select s.name
from students as s
join friends as f on s.id = f.id
join packages as p1 on s.id = p1.id
join packages as p2 on f.friend_id = p2.id
where p1.salary < p2.salary
order by p2.salary;