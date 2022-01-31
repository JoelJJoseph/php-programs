<?php
/*The simplexml_load_file()function converts an XML document to an object.*/
$xml=simplexml_load_file("program17.xml") or die ("error:cannot create object");
foreach($xml->children() as $b)
{
	foreach($b->children() as $x)
{
	echo $x."<br>";
}
}
?>