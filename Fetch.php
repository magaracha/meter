<?php
//error_reporting(0);
require 'config.php';
$sql = "SELECT * register";
$results = $db -> query($sql);

if(results->  num_rows) 
{
	while($row = $results ->fetch_object())
}
		echo "{$row -> surname} <br>";
} else{
	echo 'No Results Found';
}








?>