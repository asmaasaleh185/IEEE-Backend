<!-- assignment 1 -->
<?php
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

$str = str_replace("0", $let_one, $str);
$str = str_replace("%", $let_two, $str);

echo $str; // Elzero
echo '<br>';
echo '<hr>';
?>

<!-- ============================================================================ -->
<!-- assignment 2 -->
<?php
$str = "Orezle";
$str = ucfirst(strtolower(strrev($str)));

echo $str;
echo '<br>';
echo '<hr>';
// Elzero
?>

<!-- ============================================================================ -->
<!-- assignment 3 -->
<?php
$str = 'aAa';
$num = 3;
$char = "_";

$str = strtolower(str_repeat(substr_replace($str, $char, $num, 0), $num));

echo $str;
echo '<br>';
echo '<hr>';
// aaa_aaa_aaa_
?>

<!-- ============================================================================ -->
<!-- assignment 4 -->
<?php
$str = "<div><b>Elzero</b></div>";

$str = strip_tags($str, '<b>');

echo $str;
echo '<br>';
echo '<hr>';
// <b>Elzero</b>
?>

<!-- ============================================================================ -->
<!-- assignment 5 -->
<?php
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str, $e, $four);
echo '<br>';
echo substr_count($str, $e);
echo '<br>';
echo '<hr>';
// 1
// 2
?>

<!-- ============================================================================ -->
<!-- assignment 6 -->
<?php
$chars = ["E", "l", "z", "e", "r", "o"];

echo implode($chars);
echo '<br>';
echo '<hr>';
// Output
// "Elzero"
?>

<!-- ============================================================================ -->
<!-- assignment 7 -->
<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

$result = "";

foreach ($chars as $char) {
    if (!is_numeric($char)) {
        $result .= $char;
    }
}

echo ucfirst(strtolower($result));
echo '<br>';
echo '<hr>';
// Output
// "Elzero"
?>