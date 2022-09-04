<html>
<head>
<meta charset="utf-8">
<title> PUBG Fight Club </title>
<meta name="viweport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
<style type="text/css">

   
   .avatar{
       width: 100px;
       height: 100px;
       border-radius: 50%;
       position:center;
       top: 0%;
       left: calc(50% - 50px);
	}

   body{
    margin: 0;
    padding: 0;
    background: url(img/pubg.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
	}
	
	

	
	.reg-box{
	 width: 50%;
     height: 75%;
     background: rgba(0, 0, 0, 0.5);
     color: #fff;
     top: 30%;
     left: 50%;
     position: absolute;
     transform: translate(-50%,-50%);
     box-sizing: border-box;
     padding: 70px 30px;
	}
	#reg-bt{
		width:200px;
		font-size:28px;
		height:40px;
		text-align:center;
		font-family:sans-serif;
		box-sizing: border-box;
		border-radius:30px;

	
	}
.log-bt{
		position:absolute;
		top:120%;
		left:50%;
		transform: translate(-50%,-50%);
		width:200px;
		height:60px;
		font-size:24px;
		text-align:center;
		line-height: 60px;
		font-family:sans-serif;
		box-sizing: border-box;
		background-size:400%;
		border-radius:60px;
		background:linear-gradient(90deg, #03a9f4, #f661e9, #ffeb3b, #03a9f4);
}
form {
	   width: 100px;
       height: 100px;
}
</style>
</head>
<?php
include("connection.php");
error_reporting(0);
?>

<body>
<div >

<form action="action2.php" align="center" id="reg-box" class="reg-box" Color="blue" method="POST">
<img src="img/avatar.png" class="avatar"><br>
Full Name <br><input type="text" name="name" required><br><br>
Email Address<br><input type="email" name="email" required><br><br>
Mobile No.<br><input type="text" name="mobile" required ><br><br>
Chose Username<br><input type="text" name="username" required ><br><br>
Create Password<br><input type="Password" name="pass" required ><br><br>
<button name="submit" id="reg-bt" type="submit" class="common_btn"> Sing Up</button>
<h3>Click login if alredy have an account</h3>
<div class="log-bt">
<a href="login.php">Login</a>
</div>
</form>
</body>
</html>