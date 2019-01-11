
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
    

<style type="text/css">
  
  .error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}

</style>



<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js\\bootstrap.js"></script>


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
    

	<button type="button" class="btn btn-primary btn-lg btn-block" style="margin-top: 10px;">OUR BLOGS</button>



<?php 

$db = mysqli_connect('localhost', 'root', 'root', 'website');

if ($db->connect_error) {
  echo "database not connected";
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'Select * FROM blog3';


$result = mysqli_query($db,$sql);

while($row = mysqli_fetch_assoc($result)){

?>

<div clss="form-control" style="width:80%; margin-left: 10%; margin-right:10%;margin-top: 50px;  float: left;"><ul class="list-group">
  
  <li class="list-group-item" style="text-align: center; border-bottom: none;"><h2 style="text-align: justify;"><?php echo $row['title']?></h2></li>

  <li class="list-group-item" style="text-align: center; border-bottom: none;"><?php

echo '<img height="400px" width="100%" src="data:image/jpeg;base64,'.base64_encode( $row['picture'] ).'"/>';


?></li>
  <li class="list-group-item"><h6 style="float: left;margin-right: 10px; border-bottom: none;">writen by:- </h6><h6><?php echo $row['author']?></h6></li>
  </ul>
  <li class="list-group-item"><p style="text-align: justify;"><?php echo $row['description']?></p></li>
  <button style="width: 80px; height: 30px;float: left; margin: 10px; margin-left: 0px; background-color: green;">update</button><button style="width: 80px; height: 30px; margin: 10px; margin-left: 0px; background-color: red">delete</button>

</div>


<?php 
}

?>




</body></html>
