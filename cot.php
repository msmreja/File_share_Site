<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MSM_Reja</title>
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
  
  .lgout{
    bottom: 80px;
  }
  .match_a{  
	border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    color: black;
    font-size: 16px
	}
 
 </style>

</head>

<body>



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
      <li><a href="about.php">About</a></li>
      <li><a href="cot.php">Contact</a></li>
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
  
  
    
    
  
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>   
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <?php    
      session_start();
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
    <a href="about.php">About</a>
    <a href="cot.php">Contact</a>
    <br>
    <button onclick="document.location='logout.php'">Logout</button>
  </div>

  
 
 <div>
  <h1 align="center"> Created By Masum Reja  ... </h1>
 <h1 align="center"> masumreja732@gmail.com </h1>
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
</body>