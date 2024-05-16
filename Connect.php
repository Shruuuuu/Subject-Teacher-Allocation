<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "subject";

$con = mysqli_connect($servername,$username,$password,$database_name);
if(!$con)
{
	die("Connection Failed:".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
	$fname = $_POST['fname'];
	$input = $_POST['input'];
	$output = $_POST['output'];
	$exp = $_POST['exp'];

	$sql_query = "INSERT INTO staff_details (Full Name, Primary Subject, Secondary Subject, Experience) VALUES('$fname', '$input', '$output', '$exp')";

	if(mysql_query($con, $sql_query))
	{
		echo "Your Data is Inserted Successfully";
	}
	else
	{
		echo "Error:".$sql."".mysql_query($con);
	}
	mysql_query($con);
}
?>