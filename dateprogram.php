<?php
echo"<br>"."TODAY IS ".date("y/m/d")."<br>";
echo"today is ".date("y:m:d")."<br>";
echo"today is ".date("y-m-d")."<br>";
echo"today is ".date("I")."<br>";
echo"today is ".date("D")."<br>";
echo"today is ".date("N")."<br>";
echo"today is ".date("Y")."<br>";
$date=date_create("2019-7-25");
date_sub($date,date_interval_create_from_date_string("10 days"));
echo"the calculated date is".date_format($date,"y-m-d");

?>
