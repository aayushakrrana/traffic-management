<?php

$status = filter_input(INPUT_POST, 'status')
if(!empty($status))
{
	$host="localhost";
	$dbusername = "rooot"
	$dppassword= "";
	$dbname= "traffic"
	
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error())
{
	die('Connecfion Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
	$sql = "INSERT INTO account (status)
	values ('$status')";
	if($conn->query($sql)){
		echo "New record is inserted";
	}
	else{
		echo "Error: ".$sql ."<br>".$conn->error;
		
	}
	$conn->close();
}
}
else
{
	echo("Traffic status should not be empty");
	die();
}
?>