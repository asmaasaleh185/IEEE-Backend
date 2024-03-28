<!-- assignment 1 -->
<?php
date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get() . '<br>';
echo date("D, j M y - H:i:s A") . '<br>';
echo date("l, j F Y - H:i:s A") . '<br>';
echo '<hr>';
// Output Needed
// "Asia/Riyadh"
// "Wed, 09 Nov 22 - 07:11:22 PM"
// "Wednesday, 09 November 2022 - 07:11:22 PM"
?>

<!-- ============================================================================ -->
<!-- assignment 2 -->
<?php
$date = "2005-10-02";
$date = date_create($date);
date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get() . '<br>';
$date = date_modify($date, "+15 hours +15 minutes +15 seconds");
echo date_format($date, "Y, F, l, 'dS' H:i:s") . '<hr>';
// Output Needed
// "Africa/Cairo"
// "2005, October, Sunday '02nd' 15:15:15"
?>

<!-- ============================================================================ -->
<!-- assignment 3 -->
<?php
$date = "1990-10-01";
$d = strtotime($date);
$epochTimestamp = strtotime('1970-01-01');

date_default_timezone_set("Africa/Cairo");
echo "From Epoch Time Till " . $date . " Is Approximately " . round(($d - $epochTimestamp) / (60 * 60 * 24), 2) . " Days" . '<br>';
echo "From Epoch Time Till " . $date . " Is Approximately " . round(($d - $epochTimestamp) / (60 * 60 * 24) / 365.25, 2) . " Years";
echo '<hr>';
// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"
?>

<!-- ============================================================================ -->
<!-- assignment 4 -->
<?php
$date = "1990-10-01";
$givenDate = new DateTime($date);
$epochTime = new DateTime('@0'); 
$diff = date_diff($epochTime, $givenDate);
$diffInDays = $diff->days;
$diffInYears = $diff->y;
date_default_timezone_set("Africa/Cairo");
echo "From Epoch Time Till " . $date . " Is Approximately " . round($diffInDays, 2) . " Days" . '<br>';
echo "From Epoch Time Till " . $date . " Is Approximately " . round($diffInYears, 2) . " Years";
echo '<hr>';
// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"
?>


<!-- ============================================================================ -->
<!-- assignment 5 -->
<?php
// With time() Function
echo time() . "<br>";
echo strtotime("now") . "<br>";
$now = new DateTime();
echo $now->getTimestamp() . "<br>";
?>