<?php
try{
$mng = new
mongodb\Driver\manager("mongodb://localhost:27017");
$query = new mongodb\Driver\Query([]);
$rows = $mng -> executeQuery("TestDB.studentDetails",$query);
foreach ($rows as $row) {
echo "$row->First_Name:$row->Last_Name:$row->score
<br>";
}
}
catch(mongodb\Driver\exception\Exception $e)
{
$filename = basename(_FILE);
echo " The filename script has experienced an error:\n";
echo " it failed with the following exception:\n";
echo "exception :".$e->getMessage()."\n";
echo "exception :".$e->getFile()."\n";
echo "exception :".$e->getLine()."\n";
}
?>