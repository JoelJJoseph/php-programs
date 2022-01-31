<html>
<body>
	<h2>PHP Script to find leap year or not </h2>
	<form action=" "   method="POST">
	<input type="number"  name="year" />
	<input type="submit" />
</form>
<?php
	if($_POST)
		{
			$year=$_POST['year'];
			if(!is_numeric($year))
			{
				echo "strings not allowed.
					Input should be a number";
				return;
			}
//leap years are divisible by 400 or by 4 but not 100

if(($year % 400 ==0) || (($year % 100 !=0) && ($year % 4 ==0)))
{
 echo "$year is a leap year. ";
}
else
{
 echo "$year is not a leap year. ";
}
}
?>

</body>
</html> 