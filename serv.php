<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>M_Reja</title>
  <link rel="stylesheet" href="stylee.css">
  
 <style> 
 
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
</head>


<body>
<h1 align="center">Our Services...</h1>
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
      <li><a href="serv.php">Services</a></li>
      <li><a href="cot.php">Contact</a></li>
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
  
  
    
    
  
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <h4 align="center" style="color:red">
           <?php
                echo " ".$result['name'];
             ?>
    </h4>    
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="serv.php">dow</a>
    <a href="cot.php">Contact</a>
  </div>
  
 
 <div>

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