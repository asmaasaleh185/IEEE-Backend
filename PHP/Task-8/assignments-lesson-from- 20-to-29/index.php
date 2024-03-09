<!-- assignment 1 -->
<?php
    // Replace ? With Arithmetic Operators
    echo 10 * 20 * 15 % 3 * 190 % 10 / 400; // 0
    echo '<br>';
?>

<!-- ============================================================================ -->
<!-- assignment 2 -->
<?php
    $a = "10";
    echo $a;
    echo '<br>';
    echo gettype((int) $a);
    echo '<br>';
    echo "${a}";
    echo '<br>';
    echo gettype(+$a);
    echo '<br>';
    echo +$a;
    echo '<br>';
    echo gettype($a + 0);
    echo '<br>';
    echo intval($a);
    echo '<br>';
    echo gettype(intval($a));
    echo '<br>';

    // Needed Ouput
    // 10
    // "integer"
    // 10
    // "integer"
    // 10
    // "integer"
    // For The People Who Love Searching
    // 10
    // "integer"
    // 10
    // "integer"
?>

<!-- ============================================================================ -->
<!-- assignment 3 -->
<?php
    $a = 10;
    $b = 20;
    echo $a <=> $b;
    echo '<br>';
    // Needed Output
    -1
?>

<!-- ============================================================================ -->
<!-- assignment 4 -->
<?php
    $a = 10;
    $b = 20;
    $c = 15;

    var_dump($a < $b); // True
    echo '<br>';
    var_dump($c > $a); // True
    echo '<br>';
    var_dump($a <= $b); // True
    echo '<br>';
    var_dump($a != $b); // True
    echo '<br>';
    var_dump($a <> $c); // True
    echo '<br>';
    var_dump($c >= $a); // True
    echo '<br>';
    var_dump(gettype($a) == gettype($b)); // True
    echo '<br>';
    var_dump(gettype($a) === gettype($b)); // True
    echo '<br>';
    var_dump(gettype((float) $a) !== gettype($b)); // True
    echo '<br>';
?>

<!-- ============================================================================ -->
<!-- assignment 5 -->
<?php
    $points = 10;

    // Write Your Code Here

    echo --$points + $points-- + $points-- - $points-- -$points; // 13
    echo '<br>';
    $points = 10;
    // Write Your Code Here

    echo --$points + $points++ - $points; // 8;
    echo '<br>';
?>

<!-- ============================================================================ -->
<!-- assignment 6 -->
<?php
    $a = "Elzero";
    $b = "Web";
    $c = "School";
    
    // Method One
    $d = "$a $b $c";
    
    // Method Two
    $d = $a . " " . $b . " " . $c;
    
    // Method Three
    $d = $a;
    $d .= " " . $b . " ";
    $d .= $c;
    
    // Method Four
    $d = sprintf("%s %s %s", $a, $b, $c);
    
    echo $d; // Elzero Web School
    echo '<br>';
?>

<!-- ============================================================================ -->
<!-- assignment 7 -->
<?php
    $a = 10;
    $b = 20;
    
    echo (($a + $b) * ($a + $b) + ($a * $a)) * $a; // 10000
    echo '<br>';
?>

<!-- ============================================================================ -->
<!-- assignment 8 -->
<?php
    // Code 1
    $a = @$b or die("Custom Error");
    echo '<br>';

    // Code 2
    $f = @file("Not_A_File") or die("Custom Error");
    echo '<br>';
    // Code 3
    (@include("Not_A_File")) or die("Custom Error");
    echo '<br>';
?>