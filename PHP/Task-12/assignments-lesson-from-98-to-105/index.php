<!-- assignment 1 -->
<?php
setcookie("site[layout]", "boxed", strtotime("+2 months +5 days"), "/");
setcookie("site[font]", "Swat", strtotime("+2 months +5 days"), "/");
setcookie("site[color]", "blue", strtotime("+2 months +5 days"), "/");
?>

<!-- ============================================================================ -->
<!-- assignment 2 -->
<?php
if(isset($_COOKIE['site'])) {
    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";

    if(isset($_COOKIE['site']['color']) && isset($_COOKIE['site']['font'])) {
        echo "Your Color Is " . $_COOKIE['site']['color'] . " And Your Font Is " . $_COOKIE['site']['font'];
    }
} else {
    echo "No cookies found.";
}
?>

<!-- ============================================================================ -->
<!-- assignment 3 -->
<?php
setcookie("site[layout]", "boxed", strtotime("now"), "/");
?>

<!-- ============================================================================ -->
<!-- assignment 4 -->
<?php
setcookie("site[font]", "Swat",0 , "/");
setcookie("site[color]", "blue",0 , "/");
?>