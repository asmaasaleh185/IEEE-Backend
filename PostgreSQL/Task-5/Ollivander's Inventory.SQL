
/*
    Enter your query here and follow these instructions:
    1. Please append a semicolon ";" at the end of the query and enter your query in a single line to avoid error.
    2. The AS keyword causes errors, so follow this convention: "Select t.Field From table1 t" instead of "select t.Field From table1 AS t"
    3. Type your code immediately after comment. Don't leave any blank line.
*/
Select w.id, p.age, w.coins_needed, w.power
from wands as w
join wands_Property as p
on (w.code = p.code)
where p.is_evil = 0 and w.coins_needed = (Select min(wands.coins_needed)
                        from wands
                        join wands_Property
                        on (wands.code = Wands_Property.code)
                        where wands.power = w.power and Wands_Property.age = p.age)
order by w.power desc, p.age desc;