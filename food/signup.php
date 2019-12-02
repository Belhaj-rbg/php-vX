<?php 
include "user.class.php";
if (isset($_POST['signup'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];  
  $cpass = $_POST['cpass'];

  if (!preg_match("/^[a-zA-Z0-9 ]+$/",$username)){
    $username_error = "Name must contain only letters, numbers ans space";
    goto MOHSSEN;
  }
  if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $email_error = "Please enter valid email";
    goto MOHSSEN;
  }
  if(strlen($pass)<6){
    $pass_error = "Password must be minimum of 6 characters";
    goto MOHSSEN;
  }
  if($pass != $cpass){
    $cpass_error = "Passwordand Confirm password does NOT much";
    goto MOHSSEN;
  }
  $User = new User;
  $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
  $User->register($username,$email,$hashed_password);
}
MOHSSEN:
include 'index.php';