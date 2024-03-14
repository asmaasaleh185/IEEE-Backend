<!-- assignment 1 -->
<?php
    $a = 100;
    $b = 200;
    $c = 100;
    if($b > $a){
        if($a == $c){
            if (($a + $c) == $b){
                echo 'Yes';
                echo '<br>';
            }
        }
    }
    echo '<hr>';
    /*
        Check That:
        Variable "b" Larger Than Variable "a"
        Variable "a" Identical To Variable "c"
        Variable "a" Plus Variable "c" Identical To Variable "b"
    */
    // "Yes"
?>

<!-- ============================================================================ -->
<!-- assignment 2 -->
<?php
    $a = 200;
    $b = 200;
    $c = 100;

    if ($a > $b){
        echo "A Is Larger Than B";
        echo '<br>';
    }
    elseif ($a > $c){
        echo "A Is Larger Than C";
        echo '<br>';
    }
    else{
        echo "A Is Not Larger Than B Or C";
        echo '<br>';
    }
    echo '<hr>';

?>


<!-- ============================================================================ -->
<!-- assignment 3 -->
<?php
    $admins = ["Osama", "Ahmed", "Sayed"];
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        echo "The Request Method Is Post And Username Is " . $_POST["user"];
        echo '<br>';
        if ($_POST["user"] == $admins[0] || $_POST["user"] == $admins[1] || $_POST["user"] == $admins[2])
        echo "This Username " . $_POST["user"] . " Is Admin";
        echo '<br>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="user">
        <input type="submit" value="Send">
    </form>
    <hr>
</body>
</html>


<!-- ============================================================================ -->
<!-- assignment 4 -->
<?php
    $a = 30;
    $b = 20;
    $c = 10;
/*
    if ($a + $b === $c) {

        echo "A + B = C";

    } elseif ($a + $c === $b) {

        echo "A + C = B";

    } elseif ($b + $c === $a) {

        echo "B + C = A";

    } else {

        echo "The End";

    }
*/
echo (($a + $b === $c) ? "A + B = C" 
        : (($a + $c === $b) 
        ? "A + C = B" 
        : (($b + $c === $a) 
        ? "B + C = A" 
        : "The End")));
echo '<br>';
echo '<hr>';
    // Output
// "B + C = A"
?>

<!-- ============================================================================ -->
<!-- assignment 5 -->
<?php
$name = "Osama";
$age = 40;
$country = "Egypt";

if (($age > 18) and (gettype($name) === "string") and ($country === "Egypt")) {
    echo "The Age Is Good To Go<br>";
    echo "The Name Is Good To Go<br>";
    echo "The Country Is Good To Go<br>";
}
echo '<hr>';
// Needed Output
/*
"The Age Is Good To Go"
"The Name Is Good To Go"
"The Country Is Good To Go"
*/
?>

<!-- ============================================================================ -->
<!-- assignment 6 -->
<?php
$genre = "Hack And Slash";

/*
if ($genre === "RPG") {

  echo "I Recommend Ys Games";

} elseif ($genre === "Hack And Slash") {

  echo "I Recommend Castlevania Games";

} elseif ($genre === "FPS") {

  echo "I Recommend Uncharted Games";

} elseif ($genre === "Platform") {

  echo "I Recommend Megaman Games";

} elseif ($genre === "Puzzle") {

  echo "I Recommend Megaman Games";

} else {

  echo "I Recommend Shadow Of Mordor And Shadow Of War";

}
*/
switch ($genre){
    case "RPG":
    {
        echo "I Recommend Ys Games";
        break;
    }
    case "Hack And Slash":
    {
        echo "I Recommend Castlevania Games";
        break;
    }
    case "FPS":
    {
        echo "I Recommend Uncharted Games";
        break;
    }
    case "Platform":
    {
        echo "I Recommend Megaman Games";
        break;
    }
    case "Puzzle":
    {
        echo "I Recommend Megaman Games";
        break;
    }
    default:
        echo "I Recommend Shadow Of Mordor And Shadow Of War";
}
echo '<br>';
echo '<hr>';
// Needed Output
// "I Recommend Castlevania Games"
?>
<!-- ============================================================================ -->
<!-- assignment 7 -->
<?php
    $num_one = 23;
    $num_two = 5;
    $op = "/";
    switch ($op){
        case "+":
        {
            echo $num_one + $num_two;
            break;
        }
        case "-":
        {
            echo $num_one - $num_two;
            break;
        }
        case "*":
        {
            echo $num_one * $num_two;
            break;
        }
        case "/":
        {
            echo (int) ($num_one / $num_two);
            echo '<br>';
            echo $num_one % $num_two;
            break;
        }
        default:
            echo "Unknown Operation";
    }
    echo '<br>';
    echo '<hr>';
?>

<!-- ============================================================================ -->
<!-- assignment 8 -->
<?php
    $day = "Sat";
/*
    switch($day) {
        case "Sat":
        case "Sun":
        case "Mon":
            echo "We Are Open All The Day";
            break;
        case "Tue":
        case "Wed":
            echo "We Are Open From 08:12";
            break;
        case "Thu":
        case "Fri":
            echo "We Are Closed";
            break;
        default:
            echo "Unknown Day";
    }
*/
    if ($day === "Sat" || $day === "Sun" || $day === "Mon")
        echo "We Are Open All The Day";
    elseif ($day === "Tue" || $day === "Wed")
        echo "We Are Open From 08:12";
    elseif ($day === "Thu" || $day === "Fri")
        echo "We Are Closed";
    else
        echo "Unknown Day";
    echo '<br>';
    echo '<hr>';
?>