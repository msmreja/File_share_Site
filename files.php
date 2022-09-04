<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PUBG Fight Club</title>
  <link rel="stylesheet" href="stylee.css">  
 <style> 
  .avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: 0px;
    left: calc(50% - 50px);
 }
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

<body>
 <?php
 session_start();
 include("connection.php");
 error_reporting(0);
 $userprofile = $_SESSION['email'];
 if($userprofile==true)
 {
	
 }
 else
 {
	header('location:login.php');
 }

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
      <li><a href="uploadf.php">Uploader</a><li>
      <li><a href="download.php">Downloads</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="cot.php">Contact</a></li>
    </ul>
  </nav>
  <?php    
  session_start();
  $result= $_SESSION['email'];
  ?>
  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <img src="img/avatar.png" class="avatar"><br><br>
    <h4 align="center" style="color:red">
           <?php
                echo " ".$result;
             ?>
    </h4>   
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="index.php">Home</a>
    <a href="uploadf.php">Uploader</a>
    <a href="download.php">Downloads</a>
    <a href="about.php">About</a>
    <a href="cot.php">Contact</a>
    <br>
    <button onclick="document.location='logout.php'">Logout</button>
  </div>
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
<h1 align="center"> Files Management</h1>

<div align="center">
      <a href="uploadf.php">Uploader</a><br><br>
      <a href="download.php">Downloads</a>
</div>
<br/>
<br/>
<br/>
<?php
    while(($entry= readdir($contains)) ==!FALSE){
    echo $entry."<br/> <br/>";
    }
?>
</body>