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
            <div class="form-group"> Name : <input type="name" id="name" class="form-control" type="name" name="name" ></div>
            <div class="form-group"> Mobile No. :<input type="number" name="no" id="no" class="form-control"  ></div>
            <div class="form-group"> Username :<input type="name" name="email" id="email" class="form-control" placeholder="enter email" ></div>
            <div class="form-group"> Password :<input type="password" name="pass" id="pass" class="form-control"  ></div>

            <div class="form-group"><button class="btn btn-primary btn-block" name="register" id="register" type="submit">Register</button></div><a href="#" class="forgot">Forgot your email or password?</a></form>
    </div>
    <!-- </form> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

 

    <?php 

include("connect.php");
$conn=mysqli_connect("localhost","root","","tiffin");

?>
 
<?php


if(isset($_POST["register"]))
{
 $name=$_POST['name'];
 $num=$_POST['no'];
 $username=$_POST['email'];
 $pass=$_POST['pass'];
 

    // if($final!="" && $semester!="" && $subject!="" && $subode!="" && $Exam!="" && $Candidate!="" && $Internal!="" && $Expert!="" && $course!="" && $code!="" && $date!="" && $duration!="" && $LabAssi!="" && $Peon!="" && $exteral!="" && $InstCode!=""){

    
if($name!=""){
    //  $sql="INSERT into students values('$name','$num','$username','$pass')";
    $sql=" INSERT into student( `Name`, `mob_no`, `username`, `password`) VALUES ('$name','$num','$username','$pass')";
     $result=mysqli_query($conn, $sql);

     if($result)
     {
        echo"<script>alert('Record inserted successfully!!')</script>";
        ?>

     <meta http-equiv="refresh" content="0; URL=display.php" />
        
     <?php
    }
     else{
        echo "Failed";
     }
    }
}
  
 ?>


</body>

</html>