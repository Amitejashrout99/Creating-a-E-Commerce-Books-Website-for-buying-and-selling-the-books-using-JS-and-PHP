<?php
	$uname = $_POST['user'];
	$psrd = $_POST['pass'];

	$uname = stripcslashes($uname);
	$psrd = stripcslashes($psrd);
	
	$link = mysqli_connect("localhost","root","","fiction");
    if(mysqli_connect_error()){
    	die ("ERROR");
    }

    $res = "select * from login where username = '".$uname."' and password = '".$psrd."' ";

	$result = mysqli_query($link, $res) 
		or die("Failed to query database ".mysqli_error());

	$row = mysqli_fetch_array($result);
	if ($row['username'] == $uname && $row['password'] == $psrd)
	{
		echo "login is successfull";
	}
	else{
		echo "Failed to login";

	}
?>
<html>
	<head>
		<title> Administrator View </title>
	<head>
	<style>
		body{
			background-image: url("photo(10).jpg");
		}
	</style>
</html>