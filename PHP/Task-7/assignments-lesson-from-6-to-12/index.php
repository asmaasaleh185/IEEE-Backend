<!-- assignment 1 -->
<?php
    echo (int) (15.2 +  14.7 + (10.5 + 10.5)); // 50
    echo '<br>';
    echo gettype((int) (15.2 +  14.7 + (10.5 + 10.5))); // Integer
    echo '<br>';
?>

<!-- ============================================================================ -->
<!-- assignment 2 -->
<?php
    $number = 100;

    // Method One
    /*
    echo gettype(100);
    echo '<br>';
    */
    echo gettype($number);
    echo '<br>';
    // Method Two
    var_dump($number);
    echo '<br>';
    // Method Three => Optional
    /*
    if (is_int($number)) {
        echo "int";
    } else {
        echo "Not an int";
    }
    echo '<br>';
    */
    echo is_int($number) ? "int" : "Not an int";
    echo '<br>';
?>

<!-- ============================================================================ -->
<!-- assignment 3 -->
<?php
echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";
echo '<br>';

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"
?>

<!-- ============================================================================ -->
<!-- assignment 4 -->
<?php
    echo nl2br("We \n Love \n Elzero \n Web \n School");
    echo '<br>';
    // Needed Output
    // We
    // Love
    // Elzero
    // Web
    // School
?>

<!-- ============================================================================ -->
<!-- assignment 5 -->
<?php
    echo nl2br(<<< 'output'
        Hello "'Elzero'"
        We Love $Programming$
        Languages Specially "PHP"
    output);
    echo '<br>';
    // Needed Output
    /*
        Hello "'Elzero'"
        We Love $Programming$
        Languages Specially "PHP"
    */
?>

<!-- ============================================================================ -->
<!-- assignment 6 -->
<?php
$something = "Programming";

echo <<<code
Hello \PHP\
We Love $something
code;
echo '<br>';
// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
// Hello \PHP\ We Love Programming
?>

<!-- ============================================================================ -->
<!-- assignment 7 -->
<?php
    echo  1 + (int) "Hello PHP";
    echo '<br>';
    echo gettype(1 + (int) "Hello PHP");
    echo '<br>';
    // echo  ("Hello PHP") ? 1 : 0;
    // echo '<br>';
    // echo ("Hello PHP") ? "integer" : "not an integer";
    // echo '<br>';

    // Needed Output
    // 1
    // integer
?>


<!-- ============================================================================ -->
<!-- assignment 8 -->
<?php
    echo '<pre>';
    print_r([
        "FrontEnd" => [
            0 => "HTML",
            1 => "CSS",
            "JS" => [
                "Vuejs" => [
                    2 => "v2",
                    3 => "v3"
                ],
                0 => "Reactjs",
                1 => "Svelte"
            ]
            ],
            "BackEnd" => [
                0 => "PHP",
                1 => "MySQL",
                2 => "Security",
            ],
            0 => "Git",
            1 => "Github",
            "Testing" => [
                    0 => "Unit Testing",
                    1 => "End To End",
                    2 => "Integration"
            ]
    ]);
    echo '</pre>';
    echo '<br>';
?>