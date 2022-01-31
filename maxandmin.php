<html>
<body>
<h2>PHP SCRIPT TO FIND MINIMUM AND MAXIMUM</h2>
<form action = " "method="post">
<input type="text" name="numbers"/><br>
<input type="submit"/><br>
</form>
<?php
if($_POST)
{
	$input = $_POST['numbers'];
	$inputarray= explode(',',$input);
	echo("The Minimum Number is:".min($inputarray))."<br>";
	echo("The Maximum Number is:".max($inputarray))."<br>";
}
?>
</body>
</html>

	