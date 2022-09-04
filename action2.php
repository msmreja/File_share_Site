<?php
include("connection.php");

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$uname=$_POST['username'];
$password=$_POST['pass'];

$check = mysqli_query($conn, "SELECT * FROM mreja WHERE email='$email'");
$result= mysqli_num_rows($check);

if($result>0)
{
	echo "Email alredy exist";
	
}
else
	{
	   $query = "INSERT INTO mreja VALUES ('$name','$uname','$email','$mobile','$password')";
       $data = mysqli_query($conn, $query);
	   echo "<script>
	   alert('Registration Sucessfully, Please Login');
	   window.location.href='login.php';
	   </script>";
	   
	}

?>