<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='tiffin';
$conn=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if(!$conn){
   die(mysqli_error($conn));
}
else{
   //echo "Connection Successful";
}


?>