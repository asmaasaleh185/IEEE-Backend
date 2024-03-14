<!-- assignment 1 -->
<?php
// Write Function Content Here
function greeting($name, $gender = ""){
    return "Hello " . ($gender == "" ? " " : ($gender == "Male" ? "Mr " : "Miss ")) . $name . '<br>';
}
// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh
echo '<hr>';
?>

<!-- ============================================================================ -->
<!-- assignment 2 -->
<?php
// Write Function Content Here
// Method 1
// function get_arguments(...$words){
//     $all = "";
//     foreach($words as $word){
//         $all .= $word . " ";
//     }
//     return $all . '<br>';
// }

// Method 2
function get_arguments(){
    $args = func_get_args();
    $all = implode(" ", $args);
    return $all . '<br>';
}
// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP
echo '<hr>';
?>

<!-- ============================================================================ -->
<!-- assignment 3 -->
<?php
// Write Function Content Here
function sum_all(...$numbers){
    $sum = 0;
    foreach($numbers as $number){
        if($number == 5){
            continue;
        }
        elseif ($number == 10){
            $number = 20;
            $sum += $number;
        }
        else{
            $sum += $number;
        }
    }
    return $sum . '<br>';
}
// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40
echo '<hr>';
?>

<!-- ============================================================================ -->
<!-- assignment 4 -->
<?php
// Write Function Content Here
function multiply(...$numbers){
    $mul = 1;
    foreach($numbers as $number){
        if(is_numeric($number)){
            $mul *= (int) $number;
        }
        else{
            continue;
        }
    }
    return $mul . '<br>';
}
// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000
echo '<hr>';
?>

<!-- ============================================================================ -->
<!-- assignment 5 -->
<?php
function check_status($a, $b, $c) {
    $name = "";
    $age;
    $available = true;
    if (is_numeric($a)){
        $age = $a;
        if(is_bool($b)){
            $available = $b;
            $name = $c;
        }
        else{
            $available = $c;
            $name = $b;
        }
    }
    elseif (is_numeric($b)){
        $age = $b;
        if(is_bool($a)){
            $available = $a;
            $name = $c;
        }
        else{
            $available = $c;
            $name = $a;
        }
    }
    else{
        $age = $c;
        if(is_bool($b)){
            $available = $b;
            $name = $a;
        }
        else{
            $available = $a;
            $name = $b;
        }
    }
    return "Hello $name, Your Age Is $age, You Are ".($available ? "Available" : "Not Available") . " For Hire<br>";
}

  // Needed Output
  echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
echo '<hr>';
?>

<!-- ============================================================================ -->
<!-- assignment 6 -->
<?php
// Write Function Content Here
function calculate($a, $b, $op="add"){
    if($op == "add" || $op == "a"){
        return $a + $b . '<br>';
    }
    elseif ($op == "subtract" || $op == "s"){
        return $a - $b . '<br>';
    }
    elseif ($op == "multiply" || $op == "m"){
        return $a * $b . '<br>';
    }
    else{
        return "This operation is undefined<br>";
    }
}
// Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200
echo '<hr>';
?>

<!-- ============================================================================ -->
<!-- assignment 7 -->
<?php
function calc(int $num_one, int $num_two) {
    return ($num_one  + $num_two + 0.0);
}

  echo calc(20, 10) . '<br>'; // 30
  echo gettype(calc(20, 10)); // Double
echo '<hr>';
?>

<!-- ============================================================================ -->
<!-- assignment 8 -->
<?php
$message = "Hello";

// Write Your Code Here
$$message = function ($name) use($message){
    return $message . " " . $name . '<br>';
};
echo $Hello("Osama"); // Hello Osama
echo '<hr>';
?>

<!-- ============================================================================ -->
<!-- assignment 9 -->
<?php
// Write Function Content Here
// Anonymous Function
// $greet = function(){
//     return "Greetings";
// };

// Arrow Function 
$greet = fn()=>"Greetings";
// Needed Output
echo $greet("Osama"); // Greetings
echo '<hr>';
?>