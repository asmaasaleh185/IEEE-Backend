<!-- assignment 1 -->
<?php
echo round(disk_total_space("C:") / 1024 / 1024 / 1024 / 1024, 2) . " Terabyte";
echo '<br>';
echo round(disk_total_space("D:") / 1024 / 1024 / 1024 / 1024, 2) . " Terabyte";
echo '<hr>';
// Output Examples
// "1.37 Terabyte"
// "0.46 Terabyte"
?>

<!-- ============================================================================ -->
<!-- assignment 2 -->
<?php
echo "Size In Megabyte Is " . round(filesize("C:\Users\lenovo\Desktop\Video.mp4") / 1024 / 1024, 0);
echo '<br>';
echo "Size In Kilobyte Is " . round(filesize("C:\Users\lenovo\Desktop\Video.mp4") / 1024, 0);
echo '<hr>';
// Output
// "Size In Megabyte Is 32"
// "Size In Kilobyte Is 33261"
?>

<!-- ============================================================================ -->
<!-- assignment 3 -->
<?php
mkdir("Programming", 0701);
mkdir("Programming\PHP", 0701);

if (file_exists("Programming\PHP")) {
    rmdir("Programming\PHP");
    echo "Directory Programming/PHP Removed" . '<br>';
}
if (file_exists("Programming")) {
    rmdir("Programming");
    echo "Directory Programming Removed" . '<br>';
}
echo '<hr>';
// Output
// "Directory Programming/PHP Removed"
// "Directory Programming Removed"
?>

<!-- ============================================================================ -->
<!-- assignment 4 -->
<?php
function change_permissions($fileName) {
    if (pathinfo($fileName, PATHINFO_EXTENSION) == "") {
        return "This Is Directory And Only Files Allowed" . '<br>';
    }

    if (pathinfo($fileName, PATHINFO_EXTENSION) != "txt") {
        return "File Extension Is Not Txt" . '<br>';
    }

    if (chmod($fileName, 0700)) {
        return "Permissions Changed" . '<br>';
    } else {
        return "Failed to change permissions" . '<br>';
    }
}

echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed
echo '<hr>';
?>

<!-- ============================================================================ -->
<!-- assignment 5 -->
<?php
echo basename(__FILE__) . '<br>';
echo pathinfo(__FILE__, PATHINFO_FILENAME) . "." . pathinfo(__FILE__, PATHINFO_EXTENSION) . '<br>';
echo pathinfo(__FILE__, PATHINFO_BASENAME) . '<br>';
echo basename($_SERVER['SCRIPT_NAME']);
echo '<hr>';
// Output
// "index.php"
// "index.php"
// "index.php"
// "index.php"
?>

<!-- ============================================================================ -->
<!-- assignment 6 -->
<?php
$handle = fopen("elzero.txt", "r");
echo fgets($handle) . fgets($handle) . '<br>';

rewind($handle);
echo fread($handle, 24) . '<br>';

$lines = explode("\n", file_get_contents("elzero.txt"));
echo $lines[0] . $lines[1] . '<br>';

$lines = file("elzero.txt");
echo implode("", array_slice($lines, 0, 2)) . '<br>';

fclose($handle);
// echo mb_strlen("Hello Elzero Web\r\nSchool");
echo '<hr>';
// Needed Output
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"
// "Hello Elzero Web School"
?>

<!-- ============================================================================ -->
<!-- assignment 7 -->
<?php

// elzero.txt Content
// Hello Osamaa Web
// School
$handle = file_get_contents("elzeroo.txt");
$replace = str_replace("Osamaa", "Elzero", $handle);
file_put_contents("elzeroo.txt", $replace);
echo file_get_contents("elzeroo.txt");
// elzero.txt New Content
// Hello Elzero Web
// School
?>