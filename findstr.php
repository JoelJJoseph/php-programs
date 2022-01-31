//program to find the character in a string

<html>
<body>
<form action=" "  method="POST">
<input type="text" name="str" placeholder="enter the string here"/></br>
<input type=" text"  name="chr"  placeholder="enter the char here"/></br>
<input type="submit"/></br>
</form>
<?php
	if($_POST)
	{
		$str=$_POST['str'];
		$chr=$_POST['chr'];
		if(strpos($str,$chr)===false)
		{
		  echo "char not found!!";
		}
		else 
		{
		   echo  "string position= ".(strpos($str,$chr)+1);
		}
	}
?>
</body>
</html>