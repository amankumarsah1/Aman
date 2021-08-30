<?php
	$server="localhost";
	$username="root";
	$password="";
	$dbname="bakery";
	$con=new mysqli('localhost','root','','bakery');
	if($con->connect_error)
	{
		die("Connection error");
	}
	else
	{
		//echo '<b>Connection done</b>';
		
	}
?>