<html>
<head>
<title>Application</title>
<style>
	#textbox1,#textbox2{
		outline:none;
		padding:9px 5px;
		border:1.5px solid green;
		text-align:center;
		margin:0px 0px 20px 300px;
		font-size:18px;
	}
	h1{
		margin:120px 375px 30px 370px;
		color:orange;
		text-shadow:1px 1px;
		text-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
		box-shadow:0px 8px 16px 0px rgba(0,0,0,0.1);
	}
	#login{
		margin:0px 0px 0px 420px;
		border:1.5px solid blue;
		background-color:blue;
		color:white;
		font-size:18px;
		padding:8px 14px;
	}
	#signin{
		border:1.5px solid red;
		background-color:red;
		color:white;
		font-size:18px;
		padding:8px 14px;
	}
	#signin:hover{
		box-shadow:0px 8px 16px 0px rgba(0,0,0,0.5);
	}
	#login:hover{
		box-shadow:0px 8px 16px 0px rgba(0,0,0,0.5);
	}
</style>
<script>
	function Login(){
		var a=document.getElementById("textbox1").value;
		var b=document.getElementById("textbox2").value;
		if(a=="" || b=="")
		{
			document.getElementById("abc").innerHTML="*Please fill out the above fields";
		}
	}
	function Signup(){
		window.location="signup.php";
	}
</script>
</head>
<body>
	<h1>Application Login!</h1>
<form action="validation.php" method="POST">
<input type="email" id="textbox1" name="userid" size="40" placeholder="Enter Email" autofocus required></br>
<input type="password" id="textbox2" name="password" size="40" placeholder="Enter Password" required></br>
<input type="submit" name="btnl" id="login" onclick="Login()" value="Login" >
<input type="button" name="btns" id="signin" onclick="Signup()" value="Signup" >
</form>
<p id="abc" style="color:red" align="center"></p>
</body>
</html>
