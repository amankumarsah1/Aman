<?php
	$server="localhost";
	$username="root";
	$password="";
	$dbname="bakery";
	$conn=new mysqli('localhost','root','','bakery');
	if($conn->connect_error)
	{
		die("Connection error");
	}
	else
	{
		//echo '<b>Connection done</b>';
		
	}
?>