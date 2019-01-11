
<?php 
include 'server.php';

?>



<!DOCTYPE html>



<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
 
    <meta charset="utf-8" />
    <!--<link rel="shortcut icon" href="images\\logo.png" type="image/png"> -->
    
    <title>
        Website

    </title>
    <link rel="stylesheet" type="text/css" href="css\\bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">



    <style type="text/css">
      

    </style>
    
</head>
<body>
	

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Website Name</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog.php">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Join Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="register.php">Register</a>
          <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="admin.php">Admin</a>
          <div class="logs" style="margin-left: 10px;">
  <?php  if (isset($_SESSION['username'])) : ?>
      <form method="post" action="index.php">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="logout">logout</button>
    <?php endif ?>
</form>

  </div>
          </div>
      </li>
      
      <!--<li class="nav-item">
        
        

      </li>-->

     
    </ul>
     <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
      </div></nav>
    




<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 90%; margin-left: 5%; margin-top: 20px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" style="">
      <img src="zuck.jpg" class="d-block w-100"  alt="...">
    </div>
    <div class="carousel-item" style="">
      <img src="zuck.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" style="">
      <img src="zuck.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!--Service section -->

<div class="services" id="service" style="margin-top: 20px; ">
  
<div class="container">
  <h2>Services</h2>
  <p>Hi this some dummy text of this website ui project</p>
<div class="row">
  

<div class="col-lg-3">
  <i class="fa fa-desktop"></i>
  <h4>Web Design</h4>
  <p>Hi this some dummy text of this website ui project</p>


</div>




<div class="col-lg-3">
  <i class="fa fa-database"></i>
  <h4>Web Design</h4>
  <p>Hi this some dummy text of this website ui project</p>


</div>




<div class="col-lg-3">
  <i class="fa fa-mobile"></i>
  <h4>Web Design</h4>
  <p>Hi this some dummy text of this website ui project</p>


</div>



<div class="col-lg-3">
<i class="fa fa-university"></i>
  <h4>Web Design</h4>
  <p>Hi this some dummy text of this website ui project</p>


  
</div>
</div>
</div>
</div>




 <!-- OUR TEAM -->
<div class="Team" id="team" style="margin-top: 0px; width: 100%;">
  
<div class="container">
  <h2>OUR TEAM</h2>
  <p>Hi this some dummy text of this website ui project</p>
<div class="row2">
  

<div class="col-lg-6">
 <div class="card" style="">
  <img src="zuck.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5>CEO AND CO FOUNDER</h5>
    <p>Zuck is the most promisng dhdsia dkas dkjs dajsd kjas djasd kajsd jsa dj asdasj dha sd aj djsjaj ssa a</p>
    <div class="follow">
      <i class="fa fa-facebook"></i>
      <i class="fa fa-twitter"></i>
      <i class="fa fa-instagram"></i>
      


    </div>
  </div>
</div>


</div>




<div class="col-lg-6">
  
  <div class="card" style="">
  <img src="zuck.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5>CEO AND CO FOUNDER</h5>

    <p>Zuck is the most promisng dhdsia dkas dkjs dajsd kjas djasd kajsd jsa dj asdasj dha sd aj djsjaj ssa a</p>
    <div class="follow">
      <i class="fa fa-facebook"></i>
      <i class="fa fa-twitter"></i>
      <i class="fa fa-instagram"></i>
      </div>

  </div>

</div>

</div>



<div class="col-lg-6">
  <div class="card" style="">
  <img src="zuck.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5>CEO AND CO FOUNDER</h5>
    <p>Zuck is the most promisng dhdsia dkas dkjs dajsd kjas djasd kajsd jsa dj asdasj dha sd aj djsjaj ssa a</p>
    <div class="follow">
      <i class="fa fa-facebook"></i>
      <i class="fa fa-twitter"></i>
      <i class="fa fa-instagram"></i>
      </div>

  </div>
</div>


</div>



<div class="col-lg-6">
  <div class="card" style="">
  <img src="zuck.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5>CEO AND CO FOUNDER</h5>

    <p>Zuck is the most promisng dhdsia dkas dkjs dajsd kjas djasd kajsd jsa dj asdasj dha sd aj djsjaj ssa a</p>
    <div class="follow">
      <i class="fa fa-facebook"></i>
      <i class="fa fa-twitter"></i>
      <i class="fa fa-instagram"></i>
      </div>

  </div>
</div>


</div>



</div>
</div>
</div>


<footer>
  
<div class="d1">
  <h3>NEWSLETTER</h3>
  <p style="color: #DCDCDC; padding: 3px; font-size: 12px;"> sah djha kasj dkjah sjdh ksjahd js djkhs akhd askh dka dkjh asjhf kjas kjsah jdkh akjdh jkas hdjahsh kdhh sah d</p>
  <form class="form-inline my-2 my-lg-0" style="text-align: center;">
    <input class="form-control mr-sm-2" type="email" name="newsletter" placeholder="email" style="width: 70%; margin-left: 5%;">
 <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-left: 5%;"><i class="fa fa-envelope"></i></button>
  </form>


</div>
<div class="d2">
  <h3>FOLLOW US</h3>
  <p style="color: #DCDCDC; padding: 3px; font-size: 12px;"> sah djha kasj dkjah sjdh ksjahd js djkhs akhd askh dka dkjh asjhf kjas kjsah jdkh akjdh jkas hdjahsh kdhh sah d</p>

  <i class="fa fa-facebook"></i>
  <i class="fa fa-twitter"></i>
  <i class="fa fa-instagram"></i>
  
</div>
<div class="d3">
  <h3>CONTACT</h3>
  <p style="color: #DCDCDC; padding: 3px; font-size: 12px;"> sah djha kasj dkjah sjdh ksjahd js djkhs akhd askh dka dkjh asjhf kjas kjsah jdkh akjdh jkas hdjahsh kdhh sah d</p>
  <div>
  <i class="fa fa-mobile"></i><p style="margin-left: -10px;">+91-7715089526</p></div>
  <div>
  <i class="fa fa-envelope"></i><p>surveaniket461@gmail.com</p>
  </div>
</div>


</footer>





</body>



    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="js\\bootstrap.js"></script>


</html>