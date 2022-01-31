<html>
<body>
<h3>Fabonacci series </h3>
<?php
	$count=0;
	$f1=0;
	$f2=1;
	echo "$f1<br>";
	echo "$f2<br>";
	while($count <8)
	{
		$f3=$f1+$f2;
		echo "$f3 <br>";
		$f1=$f2;
		$f2=$f3;
		$count=$count+1;
	}
?>
</body>
</html>