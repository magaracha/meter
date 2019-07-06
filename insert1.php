<?php

$con = mysqli_connect('localhost','milli','');
	if(!$con)
	{
		echo 'Not Connected To Server';
	}
	if(!mysqli_select_db($con,'user_accounts'))
	{
		Echo 'Database Not Selected';
	}
    $username = $_POST['username'];
    $surname= $_POST['surname'];

    $sql ="INSERT INTO registerb (username,surname)VALUES('$username','$surname')";

if(!mysqli_query($con,$sql))
{
	echo 'Not Signed in';
	echo 'check your details';
}
else
{
	echo 'Signed Out';
}
header("refresh:2; url=logout.php");


?>