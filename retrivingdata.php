<html>
<head>
<title>Retrieving data from database </title>
</head>
<h3>Write a PHP program to display customer information in table format </h3>
<body>
<table border ="2" bordercolor="blue"bgcolor="#DFF">
<tr>
<th>custno</th>
<th>cust_name</th>
<th>items_purchased</th>
<th>phone</th>
</tr>
<tr>
<?php
	$connection=mysqli_connect("localhost","root","");
	$ab=mysqli_select_db($connection,'bca');
	$query=mysqli_query($connection,"select * from customer");
	if(mysqli_num_rows($query)==0)
	{
		echo "<tr> <td colspan='4'> no rows returned </td></tr>";
	}
	else
	{
		while($row=mysqli_fetch_row($query))
		{
			echo "<tr><td>{$row[0]}</td>
			<td>{$row[1]}</td>
			<td>{$row[2]}</td>
			<td>{$row[3]}</td></tr>";
		}
	}
?>
</tr>
</body>
</html>