<?php include('server.php');

if ($_SESSION['username'] !== 'AdminUSer') {
    //array_push($errors, "You are already logged in, Please logout if you want to register another account");
    header('location: print.php');
  }

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

<script type="text/javascript" src="ckeditor\\ckeditor.js"></script>

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
    


<div style="width:80%; margin-left: 10%;margin-top: 50px; ">

<button type="button" class="btn btn-primary btn-lg btn-block">ADD NEW BLOG</button>


<form action="newblog.php" method="post" enctype="multipart/form-data">

  <?php include('errors.php'); ?>
  <div class="form-group" style="margin-top: 40px;">
    <label for="exampleFormControlInput1">TITLE</label>
    <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="title">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">DESCRIPTION</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="10"></textarea>
    <script type="text/javascript">
        CKEDITOR.replace( 'exampleFormControlTextarea1' );
      </script>

  </div>
  
<div class="form-group" style="margin-top: 10px;">

  
    
<label for="exampleFormControlTextarea1">UPLOAD IMAGE</label>
<input type="file" class="form-control" name="image"/>
 </div>
  
<div style="text-align: center;">
<button type="submit" class="btn btn-primary mb-2" name="sub_blog" style="">SUBMIT BLOG</button>
</div>


</form>


</div>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="js\\bootstrap.js"></script>


</body>
</html>