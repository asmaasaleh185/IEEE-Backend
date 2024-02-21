
/*
    Enter your query here and follow these instructions:
    1. Please append a semicolon ";" at the end of the query and enter your query in a single line to avoid error.
    2. The AS keyword causes errors, so follow this convention: "Select t.Field From table1 t" instead of "select t.Field From table1 AS t"
    3. Type your code immediately after comment. Don't leave any blank line.
*/
Select f.x, f.y 
from Functions as f 
join functions as s on f.y = s.x and f.x = s.y
group by f.x, f.y
having count(f.x) > 1 or f.x < f.y 
order by f.x;