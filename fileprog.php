<html>
<title> About PHP </title>
<body>
<h3> php program to write  in a file </h3>
<form action=" " method="POST">
<textarea name="text" rows="5" cols="40"></textarea>
<input type="submit" name="ok"/>
</form>
<?php
if($_POST)
{
	$txt=$_POST['text'];
	$myfile=fopen("newfile.txt","w");
	if(fwrite($myfile,$txt)===false)
	echo "error in writing !!! ";
	else
	echo "file created and updated successfully";
	fclose($myfile);
}
?>
</body>
</html>