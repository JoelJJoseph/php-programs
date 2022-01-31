<html>
<body>

	<h2> PHP script to compare two strings</h2>
	<form actions=" " method="post">
	<input type="text" name="string1" /> <br>
	<input type="text" name="string2" /> <br>
	<input type="submit" /><br>
  </form>

<?php
	if($_POST)
	{
		$str1=$_POST['string1' ];
		$str2=$_POST['string2' ];
		echo "first string is: $str1 <br>";
		echo "second string is: $str2 <br>";
			if($str1==$str2)
			{
				echo "Strings are Equal";
			}
			else
			{
				echo "String are not Equal";
			}
	}
?>
</body>
</html>