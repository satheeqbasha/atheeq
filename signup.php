<html>
<head>
<title>Signup</title>
<style>
	#textbox1,#textbox2,#textbox3{
		outline:none;
		padding:9px 5px;
		border:1.5px solid green;
		text-align:center;
		margin:0px 0px 20px 300px;
		font-size:18px;
	}
	h1{
		margin:120px 370px 30px 360px;
		color:orange;
		text-shadow:1px 1px;
		box-shadow:0px 8px 16px 0px rgba(0,0,0,0.1);
	}
	#signup{
		border:1.5px solid orange;
		background-color:orange;
		color:white;
		font-size:18px;
		padding:8px 100px;
		margin:0px 0px 0px 370px;
	}
	#signup:hover{
		box-shadow:0px 8px 16px 0px rgba(0,0,0,0.5);
	}
	#textbox:onfocus{
		box-shadow:0px 8px 16px 0px rgba(0,0,0,0.5);
	}
</style>
<script>
	function Focus(){
		
	}
	function Signup(){
		header("Location:signupdata.php");
	}
</script>
</head>
<body>
	<h1>Application Signup!</h1>
<form method="POST" action="signupdata.php">
<input type="email" id="textbox1" onfocus="Focus()" name="userid" size="40" placeholder="Enter Email" autofocus required></br>
<input type="password" id="textbox2" onfocus="Focus()" name="password1" size="40" placeholder="Enter Password" required></br>
<input type="password" id="textbox3" onfocus="Focus()" name="password2" size="40" placeholder="Re-Enter Password" required></br>
<input type="submit" name="btns" id="signup" onclick="Signup()" value="Signup" >
</form>
</body>
<p id="abc" style="color:red" align="center"></p>
</html>
