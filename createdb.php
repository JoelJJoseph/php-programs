<html>
<body>
	<form action =" " method="POST">
	<h3>id</h3><input type="text" name="id">
	<h3>username</h3><input type="text" name="uname">
	<h3>email</h3><input type="text" name="email">
	<h3>password</h3><input type="password" name="password">
	<h3>active</h3><input type="text" name="Active">
	<input type="submit" name="submit">
	</form>
</body>
</html>
<?php
	$connection=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($connection,'email');
	if(isset($_POST['submit']))
	{
		$id=$_POST['id'];
		$uname=$_POST['uname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$act=$_POST['Active'];
		$query=mysqli_query($connection,"insert into registered values('$id','$uname','$email','$password','$act')");
		if ($query)
		{
			echo "user created successfully";
		}
		else
		{
			echo "user registeration failed";
		}
	}
?>
		