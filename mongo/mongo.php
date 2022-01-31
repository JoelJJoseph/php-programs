<?php
$m=new mongoDB\Driver\manager("mongodb://localhost:27017");
echo"connection to database was successfull";
$db=$m->exampledb;
echo"database example db selected";
?>