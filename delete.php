<?php
include("security.php");
$conn = mysqli_connect("localhost","root","","add");

$id=$_GET['id'];
$sql= "DELETE FROM register WHERE id=$id";
$reg = mysqli_query($conn,$sql);
       if($reg)   {
        header("location:register.php" );
        //echo "NO error";
     }
     else
     {
      header("location:register.php" );
      echo "error is detected";
    }
    
?>
