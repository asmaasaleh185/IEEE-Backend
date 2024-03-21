<!-- assignment 1 -->
<?php
echo mt_rand(11, 19);
echo '<hr>';
// Example
// 13
// 14
// 19
// 12
?>

<!-- ============================================================================ -->
<!-- assignment 2 -->
<?php
$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];
echo $friends[mt_rand(0,count($friends) - 1)];
echo '<hr>';
// Example
// Ibrahim
// Ahmed
?>

<!-- ============================================================================ -->
<!-- assignment 3 -->
<?php
$num1 = 11.5; // 11

echo round($num1, 0, PHP_ROUND_HALF_DOWN);
echo '<br>';

$num2 = 9.4898; // 9.5

echo round($num2, 1);
echo '<br>';

$num3 = -7.5; // -7

echo round($num3, 0, PHP_ROUND_HALF_DOWN);
echo '<hr>';
?>

<!-- ============================================================================ -->
<!-- assignment 4 -->
<?php
$filters = filter_list();
$filterIds = [];

foreach ($filters as $filter) {
    $filterIds[filter_id($filter)] = $filter;
}
echo '<pre>';
print_r($filterIds);
echo '</pre>';
echo '<hr>';
/*
Array
    (
    [257] => int
    [258] => boolean
    [259] => float
    [272] => validate_regexp
    [277] => validate_domain
    [273] => validate_url
    [274] => validate_email
    [275] => validate_ip
    [276] => validate_mac
    [513] => stripped
    [514] => encoded
    [515] => special_chars
    [522] => full_special_chars
    [516] => unsafe_raw
    [517] => email
    [518] => url
    [519] => number_int
    [520] => number_float
    [523] => add_slashes
    [1024] => callback
    )
*/
?>

<!-- ============================================================================ -->
<!-- assignment 5 -->
<?php
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo filter_var($url1, FILTER_VALIDATE_URL)? "A Valid URL" : "Not A Valid URL";
echo '<br>';
echo filter_var($url2, FILTER_VALIDATE_URL)? "A Valid URL" : "Not A Valid URL";
echo '<br>';
echo filter_var($url3, FILTER_VALIDATE_URL)? "A Valid URL" : "Not A Valid URL";
echo '<br>';
echo filter_var($url4, FILTER_VALIDATE_URL)? "A Valid URL" : "Not A Valid URL";
echo '<hr>';
// Output
// "Not A Valid URL"
// "Not A Valid URL"
// "A Valid URL"
// "Not A Valid URL"
?>

<!-- ============================================================================ -->
<!-- assignment 6 -->
<?php
$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo filter_var($url1, FILTER_SANITIZE_URL, FILTER_VALIDATE_URL)? filter_var($url1, FILTER_SANITIZE_URL) : "Not A Valid URL";
echo '<br>';
echo filter_var($url2, FILTER_SANITIZE_URL, FILTER_VALIDATE_URL)? filter_var($url2, FILTER_SANITIZE_URL) : "Not A Valid URL";
echo '<br>';
echo filter_var($url3, FILTER_SANITIZE_URL, FILTER_VALIDATE_URL)? filter_var($url3, FILTER_SANITIZE_URL) : "Not A Valid URL";
echo '<br>';
echo filter_var($url4, FILTER_SANITIZE_URL, FILTER_VALIDATE_URL)? filter_var($url4, FILTER_SANITIZE_URL) : "Not A Valid URL";
echo '<hr>';
// Output
// http://www.elzero.org
// http://elzero.org
// https://elzero.org
// https://elzero.org
?>