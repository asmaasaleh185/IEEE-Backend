
/*
    Enter your query here and follow these instructions:
    1. Please append a semicolon ";" at the end of the query and enter your query in a single line to avoid error.
    2. The AS keyword causes errors, so follow this convention: "Select t.Field From table1 t" instead of "select t.Field From table1 AS t"
    3. Type your code immediately after comment. Don't leave any blank line.
*/
SELECT CASE
    WHEN grade >= 8 THEN name
    ELSE 'NULL'
    end AS names,
    grade, marks
FROM   students S
    JOIN grades G
    ON S.marks BETWEEN G.min_mark AND G.max_mark
ORDER  BY grade DESC,
    names ASC,
    marks ASC;