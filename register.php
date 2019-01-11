<?php include('server.php');



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
    

<div style="width:80%; margin-left: 10%;margin-top: 50px;">

  <button type="button" class="btn btn-primary btn-lg btn-block" style="margin-bottom: 40px;">REGISTRATION</button>

<form method="post" action="register.php">

 <?php include('errors.php'); ?>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input type="text" class="form-control" name="fname" id="fname" placeholder="firstname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Last Name</label>
      <input type="text" class="form-control" name="lname" id="lname" placeholder="lastname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Username</label>
      <input type="text" class="form-control" name="username" id="username" placeholder="username">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
    </div>
    
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="add1" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" name="add2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control"  name="city" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState"  name ="state" class="form-control">
        <option selected>Choose...</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Goa">Goa</option>
        <option value="Karnataka">Karnataka</option>
        <option value="TamilNadu">Tamil Nadu</option>
        <option value="Gujrat">Gujrat</option>
        <option value="Punjab">Punjab</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" name="zip" id="inputZip">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Confirm Password</label>
      <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Confirm Password">
    </div>
  </div>
  <div class="form-group">
      </div>
  <div class="col-auto my-1" style="margin-left: 45%; margin-top: 30px; width: 50px;">
      <button type="submit" class="btn btn-primary" name="reg_user" data-toggle="tooltip" data-placement="top" title="submit the registration form">Submit</button>
    </div>
</form>









</body>



    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="js\\bootstrap.js"></script>


</html>