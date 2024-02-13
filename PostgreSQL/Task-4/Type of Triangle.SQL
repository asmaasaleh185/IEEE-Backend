
/*
    Enter your query here and follow these instructions:
    1. Please append a semicolon ";" at the end of the query and enter your query in a single line to avoid error.
    2. The AS keyword causes errors, so follow this convention: "Select t.Field From table1 t" instead of "select t.Field From table1 AS t"
    3. Type your code immediately after comment. Don't leave any blank line.
*/
Select CASE
    When A + B <= C OR A + C <= B OR B + C <= A Then 'Not A Triangle'
    When A = B AND B = C Then 'Equilateral'
    When A = B OR A = C OR B = C Then 'Isosceles'
    Else 'Scalene'
    End
From triangles;