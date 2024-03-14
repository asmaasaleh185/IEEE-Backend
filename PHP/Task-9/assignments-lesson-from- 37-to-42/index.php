<!-- assignment 1 -->
<?php
    $index = 10;
    for (; $index >= 1; $index--){
        echo $index;
        echo '<br>';
    }
    echo '<hr>';
    // Needed Output
    /*
        10
        9
        8
        7
        6
        5
        4
        3
        2
        1
    */
?>

<!-- ============================================================================ -->
<!-- assignment 2 -->
<?php
$index = 0;
for (; $index <= 20; $index += 2){
    if($index != 0 && $index % 2 == 0){
        echo $index;
        echo '<br>';
    }
}
echo '#############<br>';
$index = 0;
while ($index <= 20){
    if($index != 0 && $index % 2 == 0){
        echo $index;
        echo '<br>';
    }
    $index += 2;
}
echo '#############<br>';
$index = 0;
do {
    if($index != 0 && $index % 2 == 0){
        echo $index;
        echo '<br>';
    }
    $index += 2;
}while ($index <= 20);
echo '<hr>';
// Needed Output
/*
    2
    4
    6
    8
    10
    12
    14
    16
    18
    20
*/
?>

<!-- ============================================================================ -->
<!-- assignment 3 -->
<?php
$num = 2;
$i = 3;
while ($num < 520) {
    if ($num < 3){
        $num -= 1;
        echo $num . '<br>';
    }
    $num += $i;
    echo $num . '<br>';
    $i *= 2;
    if ($num == 382){
        break;
    }
}
echo '<hr>';
// Needed Output
/*
    1
    4
    10
    22
    46
    94
    190
    382
*/
?>

<!-- ============================================================================ -->
<!-- assignment 4 -->
<?php
$start = 10;
$end = 0;
$stop = 3;
for($i = $start;$i > $end; $i--){
    if($i == $start){
        echo $i . '<br>';
    }
    else{
        echo $end . $i . '<br>';
        if ($i == $stop){
            break;
        }
    }
}
echo '<hr>';
// Needed Output
/*
    10
    09
    08
    07
    06
    05
    04
    03
*/
?>
<!-- ============================================================================ -->
<!-- assignment 5 -->
<?php
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for ($i = $start; $i < count($mix); $i++){
    if($i == $start){
        continue;
    }
    if (is_numeric($mix[$i])){
        echo $mix[$i] . '<br>';
    }
}
echo '<hr>';
// Output
/*
    2
    3
    4
*/
?>

<!-- ============================================================================ -->
<!-- assignment 6 -->
<?php
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
foreach($money as $name => $value){
    echo "The Name Is " . $name . " And I Need " . $value . " Pound From Him";
    echo '<br>';
}
echo '<hr>';
// Output
/*
    "The Name Is Ahmed And I Need 100 Pound From Him"
    "The Name Is Sayed And I Need 150 Pound From Him"
    "The Name Is Osama And I Need 100 Pound From Him"
    "The Name Is Maher And I Need 250 Pound From Him"
*/
?>

<!-- ============================================================================ -->
<!-- assignment 7 -->
<?php
$mix = [1, 2, "A", "B", "C", 3, 4];
$numbers = 0;
$letters = 0;

for($i = 0; $i < count($mix); $i++){
    if(is_numeric($mix[$i])){
        echo $mix[$i] . '<br>';
        $numbers++;
    }
    else{
        $letters++;
        continue;
    }
}
echo $numbers . " Numbers Printed <br>";
echo $letters . " Letters Ignored <br>";
echo '<hr';
// Output
/*
    1
    2
    3
    4
    "4 Numbers Printed"
    "3 Letters Ignored"
*/
?>

<!-- ============================================================================ -->
<!-- assignment 8 -->
<?php
$nums = [1, 13, 12, 20, 51, 17, 30];
for($i = 0; $i < count($nums); $i++){
    if($nums[$i] % 2 == 0){
        echo $nums[$i] / 2 . '<br>';
    }
}
echo '<hr';

// Output
/*
    6
    10
    15
*/
?>

<!-- ============================================================================ -->
<!-- assignment 9 -->
<?php
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
for($i = $help_num % $help_num ; $i < count($names); $i++){
    if(in_array($names[$i], ["Sayed", "Osama"])){
        echo $names[$i] . '<br>';
    }
}
echo '<hr>';
// Output
/*
    "Sayed"
    "Osama"
*/
?>

<!-- ============================================================================ -->
<!-- assignment 10 -->
<?php
$help_num = 4;
$nums = [2, 4, 5, 6, 10];

foreach ($nums as $key => $value){
    $parallelNumber = $nums[$help_num - ($key % count($nums))];
    echo $value . ' + '.  $parallelNumber . " = ".  $value  +$parallelNumber . "<br>" ;
}
echo '<hr>';
// Output
/*
    "2 + 10 = 12"
    "4 + 6 = 10"
    "5 + 5 = 10"
    "6 + 4 = 10"
    "10 + 2 = 12"
*/
?>