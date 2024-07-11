<?php
$script=$_SERVER['SCRIPT_NAME'];
$page=basename($_SERVER['PHP_SELF']);
echo"page name is $page and scriptname $script";
echo"<br>";
$time=microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
echo $time;
?>