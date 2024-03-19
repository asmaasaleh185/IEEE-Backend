<!-- assignment 1 -->
<?php
$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
];
echo'<pre>';
print_r((array_chunk(array_change_key_case($friends, CASE_LOWER), 2, true)));
echo '</pre>';
echo '<hr>';
// Output
/*
    Array
    (
        [0] => Array
        (
            [ag] => Ahmed Gamal
            [om] => Osama Mohamed
        )
        [1] => Array
        (
            [mg] => Mahmoud Gamal
            [as] => Ahmed Samy
        )
        [2] => Array
        (
            [fa] => Farid Ahmed
            [sm] => Sayed Mohamed
        )
    )
*/
?>

<!-- ============================================================================ -->
<!-- assignment 2 -->
<?php
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

echo'<pre>';
print_r(array_change_key_case(array_combine($codes, $means), CASE_LOWER));
echo '</pre>';
echo '<hr>';
// Output
/*
    Array
    (
    [h] => HTML
    [c] => CSS
    [j] => JavaScript
    )
*/
?>

<!-- ============================================================================ -->
<!-- assignment 3 -->
<?php
$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
];
$keys = array_values($friends);
$values = array_keys($friends);

echo'<pre>';
print_r(array_change_key_case(array_combine($keys, $values), CASE_LOWER));
echo '</pre>';
echo '<hr>';
  // Output
/*
    Array
    (
        [as] => Ahmed Samy
        [mg] => Mahmoud Gamal
        [om] => Osama Mohamed
        [ag] => Ahmed Gamal
    )
*/
?>

<!-- ============================================================================ -->
<!-- assignment 4 -->
<?php
$nums = [10, 20, 30];
echo array_sum($nums);
echo '<br>';
echo array_reduce($nums, function ($carry, $nums){
    return $carry + $nums;
}, 0);
echo '<hr>';
// Output
/*
60
60
*/
?>

<!-- ============================================================================ -->
<!-- assignment 5 -->
<?php
$nums = [5, 10, 20, 5, 30, 40];

echo array_reduce($nums, function ($carry, $nums){
        return $nums != 5 ? $carry + $nums : $carry;
}, 0);
echo '<hr>';
// Output
// 100
?>

<!-- ============================================================================ -->
<!-- assignment 6 -->
<?php
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

echo'<pre>';
print_r(array_pad($chars, count($chars) + count($chars), $char[$zero]));
echo '</pre>';
echo '<hr>';
// Output
/*
    Array
    (
    [0] => A
    [1] => B
    [2] => C
    [3] => D
    [4] => E
    [5] => @
    [6] => @
    [7] => @
    [8] => @
    [9] => @
    )
*/
?>

<!-- ============================================================================ -->
<!-- assignment 7 -->
<?php
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names);
next($names);

echo current($names) . "<br>"; // "Sayed"

end($names);

echo current($names) . "<br>"; // "Ali"

reset($names);

echo current($names) . "<br>"; // "Osama"

end($names);
prev($names);

echo current($names) . "<br>"; // "Mahmoud"
echo'<hr>';
?>

<!-- ============================================================================ -->
<!-- assignment 8 -->
<?php
$chars = ["A", "B", "C"];

array_push($chars, 'D');

$chars[] = 'D';

array_splice($chars, count($chars) - 1, 0, 'D');

$temp = ["D"];
$chars = array_merge($chars, $temp);

echo'<pre>';
print_r($chars);
echo '</pre>';
echo '<hr>';
// Output
/*
Array
(
  [0] => A
  [1] => B
  [2] => C
  [3] => D
)
*/
?>

<!-- ============================================================================ -->
<!-- assignment 9 -->
<?php
$nums = [1, 2, 3, 4, 5, 6];

echo'<pre>';
print_r(array_slice($nums, -5, -2));
echo '</pre>';
echo '<hr>';
// Output
/*
    Array
    (
    [0] => 2
    [1] => 3
    [2] => 4
    )
*/
?>

<!-- ============================================================================ -->
<!-- assignment 10 -->
<?php
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

array_splice($mix, count($nums), count($nums), $nums);

echo'<pre>';
print_r($mix);
echo '</pre>';
echo '<hr>';

// Output
/*
Array
    (
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
    [6] => 7
    [7] => 8
    [8] => 9
    )
*/
?>

<!-- ============================================================================ -->
<!-- assignment 11 -->
<?php
$arr = ["A", "B", "C", "D", "E"];
$count = 0;
foreach($arr as $element){
    if ($element != ""){
        $count++;
    }
}
echo $count . '<hr>';
// Output
// 5
?>

<!-- ============================================================================ -->
<!-- assignment 12 -->
<?php
$nums = [11, 2, 10, 7, 20, 50];
$sum = 0;
foreach($nums as $element){
    if ($element != ""){
        $sum += $element;
    }
}
echo $sum . '<hr>';
// Output
// 100
?>

<!-- ============================================================================ -->
<!-- assignment 13 -->
<?php
$nums = [10, 100, -20, 50, 30];
$max = 0;

foreach($nums as $element){
    if ($max < $element){
        $max = $element;
    }
}
echo $max . '<hr>';
// Output
// 100
?>

<!-- ============================================================================ -->
<!-- assignment 14 -->
<?php
$nums = [10, 100, -20, 50, 30];
$min = 0;

foreach($nums as $element){
    if ($min > $element){
        $min = $element;
    }
}
echo $min . '<hr>';
// Output
// -20
?>

<!-- ============================================================================ -->
<!-- assignment 15 -->
<?php
$chars = ["o", "r", "e", "z", "l", "E"];
$result = "";
for($i = 5; $i >= 0; $i--){
    $result .= $chars[$i];
}
echo $result . '<hr>';

// Output
// "Elzero"
?>

<!-- ============================================================================ -->
<!-- assignment 16 -->
<?php
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
function oddNumbers($value){
    return is_numeric($value) && $value % 2 != 0;
}
$oddNumbers = array_filter($mix, "oddNumbers");
sort($oddNumbers);
echo '<pre>';
print_r($oddNumbers);
echo '</pre>';
echo '<hr>';
// Output
/*
Array
    (
    [0] => 1
    [1] => 3
    [2] => 5
    [3] => 7
    )
*/
?>

<!-- ============================================================================ -->
<!-- assignment 17 -->
<?php
$nums = [1, 2, 3, 4, 5, 6];
$shuffledNums = [];

while (count($nums) > 0) {
    $randomIndex = rand(0, count($nums) - 1);
    $shuffledNums[] = $nums[$randomIndex];
    array_splice($nums, $randomIndex, 1);
}
echo '<pre>';
print_r($shuffledNums);
echo '</pre>';
echo '<hr>';
// Output
// Every Time The Array Elements Will Be Shuffled

// Example 1
/*
Array
    (
    [0] => 5
    [1] => 1
    [2] => 6
    [3] => 2
    [4] => 4
    [5] => 3
    )
*/
?>

<!-- ============================================================================ -->
<!-- assignment 18 -->
<?php
$title = "E&z\$r0 W\$b Sch00&";

$title = str_replace(["&", "\$", "0"], ["l", "e", "o"], $title, $count);
echo $title . '<br>';
echo $count;
// Output
// "Elzero Web School"
// 7
?>