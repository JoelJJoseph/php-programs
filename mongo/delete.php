<?php
$m = new
mongodb\Driver\Manager("mongodb://localhost:27017");
echo "Connection to database is successful";
$bulk = new mongodb\Driver\Bulkwrite;
$db = $m -> TestDB;
echo " datbase TestDB Selected";
$collection = $db -> studentDetails;
echo "collection selected successfully";
$bulk -> delete(['First_Name'=>"Linta"],['multi'=>false]);
$m -> executeBulkwrite('TestDB.studentDetails',$bulk);
echo "Document deleted successfully <br>";
?> 
