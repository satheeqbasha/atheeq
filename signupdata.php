<?php
	$con=mysqli_connect("localhost","root","");
	mysqli_query($con,"CREATE DATABASE chittepu");
	mysqli_select_db($con,"chittepu");
	$ct="CREATE TABLE signup(email VARCHAR(40) PRIMARY KEY,password VARCHAR(40))";
	mysqli_query($con,$ct);
	$name=$_POST['userid'];
	$pass1=$_POST['password1'];
	$pass2=$_POST['password2'];
	if($pass1==$pass2)
	{
		$res=mysqli_query($con,"INSERT INTO signup VALUES('$name','$pass1')");
		if($res){
			header("Location:signup.html");
		}
		else{
			echo "this email is already registered";
		}
	}
	else{
		echo "Passwords doesn't matched please try again to signup";
	}
?>
