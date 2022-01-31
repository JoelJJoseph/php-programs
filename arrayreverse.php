<html>
<body>
<?php
	$colors=array("red","green","white");
	$count=sizeOf($colors);
	echo "count of the given array is : " .$count. "<br>";
	echo "before reverse operation </br>";
	for($i=0; $i<$count;$i++)
	{
		echo  "$colors[$i] <br>";
	}
	echo "<br> after reverse operation </br>";
	for($i=$count-1;$i>=0;$i--)
	{
		echo "$colors[$i]  </br>";	
	}
?>
</body>
</html>