
/*
    Enter your query here and follow these instructions:
    1. Please append a semicolon ";" at the end of the query and enter your query in a single line to avoid error.
    2. The AS keyword causes errors, so follow this convention: "Select t.Field From table1 t" instead of "select t.Field From table1 AS t"
    3. Type your code immediately after comment. Don't leave any blank line.
*/
Select Name || '(' || SUBSTR(Occupation,1,1) || ')'
From occupations
ORDER BY 1;
Select 'There are a total of ' || count(Occupation) || ' ' || Lower(Occupation) || 's.'
From occupations
Group By Occupation
Order By count(Occupation), occupation;