<html>
<body>
<font color="blue" size ="10">
<h2> displaying greetings depending upon current time zone </h2>
<?php  
	date_default_timezone_set("Asia/kolkata");
	$h=date('G');
	if($h>=5 && $h<=11)
	{
		echo "Good Morning";
	}
	else if($h>=12  &&  $h<=15)
	{
		echo  "Good Afternoon";
	}
	else 
	{
		echo "Good Evening";
	}
?>
</font>
</body>
</html>
