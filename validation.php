<?php
	session_start();
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"chittepu");
	$user=$_POST['userid'];
	$pass=$_POST['password'];
	$res=mysqli_query($con,"SELECT * FROM signup WHERE email='$user'");
	$rows=mysqli_num_rows($res);
	if($rows==1)
	{
		$data=mysqli_fetch_assoc($res);
		$password=$data['password'];
		if($pass==$password)
		{
			echo "you are logged in!";
			$_SESSION['usename']=$user;
			$_SESSION['password']=$pass;
			echo "<a href=logout.php>logout</a>";
		}
		else
		{
			echo "incorrect password!";
		}
	}
	else
	{
		echo "incorrect email!";
	}
?>
