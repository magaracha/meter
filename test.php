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
    $TimeOut = $_POST['TimeOut'];
   

SELECT 
    username,
    surname,
FROM
    register
WHERE
    username = 'username' AND 
     surname= ' surname';

    $sql ="INSERT INTO register (TimeOut)VALUES('$TimeOut',)";

if(!mysqli_query($con,$sql))
{
	echo 'Not Signed in';
	echo 'check your details';
}
else
{
	echo 'Successfilly signed in';
}
header("refresh:2; url=logout.php");


?>

