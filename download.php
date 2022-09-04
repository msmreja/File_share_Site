<html>
<body>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>M_Reja</title>
  <link rel="stylesheet" href="stylee.css">
  
 <style> 
  .avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: 0px;
    left: calc(50% - 50px);
 .match_a{
	width: 100px;
    height: 250px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 300px;
    left: 380px;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 
	}
	.login-box input[type="text"], input[type="password"]
 .match_a{
    
	border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    color: black;
    font-size: 16px
	}
 
 </style>
 <script data-ad-client="ca-pub-4143451680669259" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 </head>

  <?php
   include("connection.php");
   session_start();
   $userprofile= $_SESSION['email'];
   $query = "SELECT * FROM mreja WHERE email='$userprofile'";
   $data = mysqli_query($conn, $query);
   $result = mysqli_fetch_assoc($data);

   ?>

  <nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
      </a>
    </span>

    <ul class="navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="files.php">Files</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="cot.php">Contact</a></li>
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>   
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <?php    
      $result= $_SESSION['email'];
      ?>
  <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
  <img src="img/avatar.png" class="avatar"><br><br>
  <h4 align="center" style="color:red">
           <?php
                echo " ".$result;
            ?>
  </h4>  
    <a href="index.php">Home</a>
    <a href="files.php">Files</a>
    <a href="about.php">About</a>
    <a href="cot.php">Contact</a>
    <br>
    <button onclick="document.location='logout.php'">Logout</button>
  </div>  
  <br>
  <br>
  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
  </script>
</div> 

<?php

$conn= mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
     echo "";	
}
else
{
	die("Connetion faild becuse".mysqli_connect_error());
	
}
?>
  <div align="center">
  <?php
   $sql = 'SELECT sl, path FROM down';
   mysqli_select_db($conn,'test');
   $retval = mysqli_query( $conn,$sql) or trigger_error(mysqli_error($conn));
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
      echo 
         "{$row['path']} <br> ".
         "<a href='{$row['sl']}' download> Download  </a> <br> ".
         
         "<br>";
   }
   mysqli_close($conn);
?>

</body>
</html>