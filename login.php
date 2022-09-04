<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
body
{
 background: url(img/pubg.jpg)
}

.reg-bt{
		position:absolute;
		top:90%;
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
		background:linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
}
reg-bt:hover {
  opacity: 0.8;
}

.common_btn{
        width:200px;
		font-size:28px;
		height:40px;
		text-align:center;
		font-family:sans-serif;
		box-sizing: border-box;
		border-radius:30px;

}	

        
	    

</style>
</head>

<body">
<?php
session_start();
include("connection.php");

?>
<div class="login-box" id="log">
<img src="img/avatar.png" class="avatar">
<form id="form" method="POST" onsubmit="" action="" autocomplete="off" align="center" > 
   Enter Your Email <br> <input id="username" name="username" placeholder="Enter your Email" type="text" required><br> 
   <span id="availability">
   password<br><input id="" name="password" placeholder="Enter your Password" type="password" required> <br>
   <br>
   <br>
   <button name="submit" id="submit" type="submit" class="common_btn"> Login</button>
   <br><br><a href="#">Forget Password</a><br><br><br>
</form>

<div color="red" >
<?php

if(isset($_POST['submit']))
{
	$user= $_POST['username'];
	$pwd= $_POST['password'];
	$query= "SELECT * FROM mreja WHERE Email='$user' && pass='$pwd'";
	$data= mysqli_query($conn,$query);
	$total = mysqli_num_rows($data);
	if($total==1)
	 $_SESSION['email']=$user;
	 header('location:index.php');	
	}
	else
	{
		echo"Login Faild";
	}
	
?>
</div>
 
<h5 color=>Or</h5>
</div>
<div class="reg-bt">
<a href="registration2.php" >Register</a>
<div>
<div class="or">
<div>

</body>
</html>