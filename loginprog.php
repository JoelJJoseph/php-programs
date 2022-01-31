<html>
<body>
<h3>Write a PHP program to give authentication for registered users with database connectivity</h3>
<form action=" "method="POST">
<h3>username</h3><input type="text" name="username">
<h3>password</h3><input type="password" name="password">
<input type="submit" name ="submit">
</form>
</body>
</html>
<?php
	$connection=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($connection,"authentication");
	if(isset($_POST['submit']))
	{
		$u=$_POST['username'];
		$p=$_POST['password'];
		$query=mysqli_query($connection,"select  username,password from authen_prog where username ='$u' and password='$p' ");
		if($query)
		{
			if(mysqli_num_rows($query)>0)
			echo "login successfully";
		else
			echo "login failed";
		}
	}
?>