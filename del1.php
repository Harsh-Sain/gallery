<?php
include('security.php');
$conn = mysqli_connect("localhost","root","","add");

$id=$_GET['id'];
$sql= "DELETE FROM about WHERE id=$id";
$red = mysqli_query($conn,$sql);
       if($red)   {
        header("location:about.php" );
        //echo "NO error";
     }
     else
     {
      header("location:about.php" );
      echo "error is detected";
    }
?>