<?php 
include 'server.php';


if($_SESSION['username'] !== 'AdminUSer'){

  header('location:print.php');
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
        <a class="nav-link" href="newblog.php">Newblog</a>
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
    


	


<?php 



$db = mysqli_connect('localhost', 'root', 'root', 'website');

if ($db->connect_error) {
  echo "database not connected";
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'Select * FROM details';

$result = mysqli_query($db,$sql);

while($row = mysqli_fetch_assoc($result)){

?>

  <div clss="form-control" style="width:32%; margin-left: 9%; margin-right:9%;margin-top: 30px;  float: left;"><ul class="list-group">
  <li class="list-group-item disabled" style="text-align: center;">USER DETAILS</li>
  <li class="list-group-item"><label style="margin-right: 10px;"><b>FirstName:-</b></label><?php  echo $row['firstname']?></li>
  <li class="list-group-item"><label style="margin-right: : 10px;"><b>LastName:-</b></label><?php echo $row['lastname']?></li>
  <li class="list-group-item"> <label style="margin-right: 10px;"><b>UserName:-</b></label><?php echo $row['username']?></li>
  <li class="list-group-item"> <label style="margin-right: 10px;"><b>Email:-</b></label><?php echo $row['email']?></li>
  <li class="list-group-item"><label style="margin-right: 10px;"><b>Address1:-</b></label><?php echo $row['address1']?></li>
  <li class="list-group-item"><label style="margin-right: 10px;"><b>Address2:-</b></label><?php echo $row['address2']?></li>
  <li class="list-group-item"><label style="margin-right: 10px;"><b>City:-</b></label><?php echo $row['city']?></li>
  <li class="list-group-item"><label style="margin-right: 10px;"><b>State:-</b></label><?php echo $row['state']?></li>
  <li class="list-group-item"><label style="margin-right: 10px;"><b>Zip:-</b></label><?php echo $row['zip']?></li>
  <li class="list-group-item"><label style="margin-right: 10px;"><b>Password:-</b></label><?php echo $row['password']?></li>
</ul></div>

<?php 
}

?>

















</body></html>
