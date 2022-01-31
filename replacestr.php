//program no 7

<html>
<body>
<form action=" " method="POST">
<input type="text" name="str" placeholder="enter the string here"/></br>
<input type="text" name="fstr"  placeholder="enter the string to be found"/></br>
<input type="text" name="rstr" placeholder="enter the string to be replaced"/></br>
<input type="submit"/> </br>
</form>
<?php
	if($_POST)
	{
		$str=$_POST['str'];
		$fstr=$_POST['fstr'];
		$rstr=$_POST['rstr'];
		
		$new_string=str_replace($fstr,$rstr,$str);
		if($new_string!=$str){
		echo "the given string is $str </br>";
		echo "the replaced string is ".$new_string;
	}else {
		echo "couldn't replace";
	}
}
?>
</body>
</html>
