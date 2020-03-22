<?php

session_start();

//initializing variables

$username = "";
$email = "";

$errors = array();

//connect to db
//1-ip address = localhost
//username = root
//password = there is no password given
//db name given = practice

$db = mysqli_connect('localhost', 'root', '', 'practice') or die("could not connect database");

//Register users
//four inputs means four variables

//connection made with the db = $db
//variable trying to access = $_POST


$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

//forms validations

if(empty($username)){array_push($errors, "Username is required");}
if(empty($email)){array_push($errors, "Email is required");}
if(empty($password_1)){array_push($errors, "Password is required");}
if(password_1 != password_2){array_push($errors, "Passwords do not match");}

//check db for existing user with same username

$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user){
    if($user{'username'} === $username){array_push($errors, "Username already exists");}
    
if($user){
    if($user{'email'} === $email)
    {array_push($errors, "This email id already has a registered username");}
}
}

//Register the user if no errors

if(count($errors) == 0 ){
    
//new value = $password
    
  $password = $md5($password_1); //this will encrypt the password
    $query = "INSERT INTO user (username, email, password) VALUES('$username','$email','$password')";
    
    //where = $db
    //what = $query
    
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    
    //once the success the login heading another page = index.php
    
    header('location: index.php');
}







?>
