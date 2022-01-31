<html>
<body>
	<h2> PHP script to find odd or even </h2>
	<form action="  "   method="POST">
	<input type="text"  name="num"/>
	<input type="submit" />
 </form>
<?php
	if($_POST)
	{
		$num=$_POST[ 'num' ];
		if(!is_numeric($num))
		{
			echo  "String not allowed.  Input type should be a number";
			return;
		}
		if($num % 2==0)
		{
			echo "$num is an even number";
		}
		else
		{
			echo "$num is  an odd number";
		}
	}
?>
</body>
</html>
