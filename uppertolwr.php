//program to convert upper case to lower case
<html>
<body>
<form action=" " method="POST">
<input type="text" name="str" ></br>
<input type="submit"/></br>
</form>
<?php
	if($_POST)
	{
		$str=$_POST['str'];
		$len=strlen($str);
		for($i=0;$i<$len;$i++)
		{
		 if($str[$i]>='a' && $str[$i]<='z')
		{
			$upr=strtoupper($str[$i]);
			$str[$i]=$upr;
		}
		else if($str[$i]>='A' && $str[$i]<='Z')
		{
			$lwr=strtolower($str[$i]);
			$str[$i]=$lwr;
		}
	}
	echo "the converted string is  " .$str. "</br>";
	}
?>
</body>
</html>
			
