<?php
require "config.php";
if(!empty($_SESSION["id"])){
header("Location: log.php");
}
if(isset($_POST["submitbtn"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpass = $_POST["confirmpass"];
  $duplicate = mysqli_query($conn, "SELECT * FROM signdetails WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpass){
      $query = "INSERT INTO signdetails VALUES('','$username','$email','$password','$confirmpass')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('welcome!'); </script>";
    }
    else{
      echo
      "<script> alert('Password is Incorrect'); </script>";
    }
  }
}
//  require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: log.php");
}
if(isset($_POST["loginbtn"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM signdetails WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["log"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: home.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login</title>
      <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <link rel="stylesheet" href="log.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
    
<!-- header section starts  -->

<header class="header">

   <a href="log.php" class="logo"> <i class="fas fa-heartbeat"></i> TherapYOUtic </a>
   
   <nav class="navbar">
       <a href="home.php">home</a>
       <!-- <a href="#services">services</a>
       <a href="#about">about</a>
       <a href="#doctors">doctors</a>
       <a href="#appointments">appointments</a> -->
       <!-- <a href="#insights">insights</a> -->
       <a href="calendar.php">calendar</a>
       <a href="events.php">Events</a>
       <a href="Post.html">Post</a>
       <a href="log.php">login</a>  
       
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>
 </header>
 
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login Form
            </div>
            <div class="title signup">
               Signup Form
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="" class="login" method="post" autocomplete="off">
                  <div class="field">
                     <input type="text" name="username" placeholder="username" required>
                  </div>
                  <div class="field">
                     <input type="password" name="password" placeholder="password" required >
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login" name="loginbtn">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
               </form>
               <form action="log.php" class="signup" method="post" autocomplete="off">
                  <div class="field">
                     <input type="text" name="username" placeholder="Username" required>
                  </div>

                  <div class="field">
                     <input type="text" name="email" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="field">
                     <input type="password" name="confirmpass" placeholder="Confirm password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="submitbtn" value="Signup">
                  </div>
               </form>
            </div>
         </div>
      </div>

      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>

      <script>
         let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
      </script>

   </body>
</html>

