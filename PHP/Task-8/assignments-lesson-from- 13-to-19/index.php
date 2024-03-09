<!-- assignment 1 -->
<?php $coursename = "Elzero Courses"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">
    <title>Welcome To <?php echo $coursename; ?></title>
  </head>
  <body>
    <h1><?php echo $coursename; ?></h1>
    <p>Here In <?php echo $coursename; ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $coursename; ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $coursename; ?></footer>
  </body>
</html>

<!-- ============================================================================ -->
<!-- assignment 2 -->
<?php
    $name = "elzero";
    $$name = "Web";
    $referencedname = &${$name};
    echo $$name;
    echo '<br>';
    
    echo ${$name};
    echo '<br>';
    
    echo $elzero;
    echo '<br>';
    
    echo "${$name}";
    echo '<br>';
    
    echo "${"elzero"}";
    echo '<br>';
    
    echo $referencedname;
    echo '<br>';
?>

<!-- ============================================================================ -->
<!-- assignment 3 -->
<?php
    $a = 200;
    $b = &$a;
    $a = 100;

    echo $b; // 100
    echo '<br>';
?>

<!-- ============================================================================ -->
<!-- assignment 4 -->
<?php
    $systemRoot = "C:\\WINDOWS";
    $openSSLConfig = "C:/xampp/apache/bin/openssl.cnf";
    echo  "\"". $_SERVER['DOCUMENT_ROOT'] . "\"";
    echo '<br>';
    echo "\"". $_SERVER['SERVER_NAME'] . "\"";
    echo '<br>';
    echo "\"$systemRoot\"";
    echo '<br>';
    echo "\"$openSSLConfig\"";
    echo '<br>';
    // "C:/xampp/htdocs"
    // "localhost"
    // "C:\WINDOWS"
    // "C:/xampp/apache/bin/openssl.cnf"
?>

<!-- ============================================================================ -->
<!-- assignment 5 -->
<?php
    /*
        if
        else
        while
        for
        switch
        case
        default
        break
        int
        return
    */
?>

<!-- ============================================================================ -->
<!-- assignment 6 -->
<?php
    echo __LINE__;
    echo '<br>';
    echo __FILE__;
    echo '<br>';
    echo __DIR__;
    echo '<br>';
?>