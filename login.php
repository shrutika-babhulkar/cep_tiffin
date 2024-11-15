<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="style1.css">

    
</head>

<body>
    <!-- <form action="index.php" method="post"> -->
    <div class="login-clean">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class=""></i></div>
            <div class="form-group"><input type="username" class="form-control" type="email" name="username" placeholder="Email"></div>
            <div class="form-group"><input type="password" class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a href="#" class="forgot">Forgot your email or password?</a></form>
    </div>
    <!-- </form> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


    <?php

    
$login=0;
$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'connect.php';  
  $username=$_POST['username'];
  $password=$_POST['password'];


$sql="select * from `student` where  username='$username'  and password='$password'";
$conn=mysqli_connect("localhost","root","","tiffin");

$result=mysqli_query($conn,$sql);
if($result){
  $num=mysqli_num_rows($result);
  if($num>0){
   // $user=1;    present data
   // echo"User already exists!!";
  // echo"Login Successfully.";
  $login=1;
  session_start();
  $_SESSION['username']=$username;
  header('location:index.php');
  }
  else{
    //echo"Invalid data!";
    $invalid=1;
    
  }
  }
  }
    ?>

</body>

</html>