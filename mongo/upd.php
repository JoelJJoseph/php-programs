<?php
$m = new mongodb\Driver\Manager("mongodb://localhost:27017");
echo "Connection to database is successful";
$bulk = new mongodb\Driver\BulkWrite;
$db = $m ->TestDB;
echo " datbase student Selected <br>";
$collection = $db -> studentDetails;
echo "collection selected successfully <br>";
$bulk->update(['First_Name'=>"Jeeva"],['$set' =>['First_Name'
=> 'Jonas Khanwald']],['multi'=> false]);
$m -> executeBulkWrite('TestDB.studentDetails',$bulk);
echo "updated the document <br>";
?> 
