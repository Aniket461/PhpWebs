<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'website');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $fname =  mysqli_real_escape_string($db, $_POST['fname']);
  $lname =  mysqli_real_escape_string($db, $_POST['lname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $add1 =  mysqli_real_escape_string($db, $_POST['add1']);
  $add2 =  mysqli_real_escape_string($db, $_POST['add2']);
  $city =  mysqli_real_escape_string($db, $_POST['city']);
  $state =  mysqli_real_escape_string($db, $_POST['state']);
  $zip =  mysqli_real_escape_string($db, $_POST['zip']);
  $password_1 = mysqli_real_escape_string($db, $_POST['pass']);
  $password_2 = mysqli_real_escape_string($db, $_POST['pass2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fname)) { array_push($errors, "FirstName is required"); }
  if (empty($lname)) { array_push($errors, "LastName is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($add1)) { array_push($errors, "Address field cannot be blank"); }
  if (empty($add2)) { array_push($errors, "Address2 field cannot be blank"); }
  if (empty($city)) { array_push($errors, "City is required"); }
  if (empty($state)) { array_push($errors, "State is required"); }
  if (empty($zip)) { array_push($errors, "Zip is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM details WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
      }
    

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
      
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO details (firstname, lastname, username, email, address1, address2, city, state, zip, password) 
  			  VALUES('$fname','$lname','$username', '$email','$add1','$add2', '$city', '$state','$zip', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now registered suceesfully";
  	header('location: index.php');
  }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM details WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location:index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}



// Admin USER
if (isset($_POST['sign_admin'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    //$password = md5($password);
    $query = "SELECT * FROM adminuser WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location:dashboard.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}



// USER LOGIN
if (isset($_POST['log_in'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM details WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location:index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}





  //images logic


//images logic ends




//blog
if (isset($_POST['sub_blog'])) {
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $description = mysqli_real_escape_string($db, $_POST['description']);

  //$image = $_FILES['image']['name'];
  //$image = addslashes(file_get_contents($image));
  


  if (empty($title)) {
    array_push($errors, "Username is required");
  }
  if (empty($description)) {
    array_push($errors, "Password is required");
  }

  if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
     {
        array_push($errors, "error in image");
     }
     else
     {
        $image = $_FILES['image']['tmp_name'];
        $image = addslashes(file_get_contents($image));
        
     }
    


  if (count($errors) == 0) {
    //$password = md5($password);
    $query = "INSERT into blog3 VALUES ('Admin', '$title', '$description', '$image') ";
    mysqli_query($db, $query);
     header('location:index.php');
  }
}


//logout

if (isset($_POST['logout'])) {

session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");

}


?>