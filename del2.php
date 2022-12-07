<?php
include('security.php');
$conn = mysqli_connect("localhost","root","","add");

$id=$_GET['id'];
$sql= "DELETE FROM contact WHERE id=$id";
$result = mysqli_query($conn,$sql);
       if($result)   {
        header("location:contact.php" );
        //echo "NO error";
     }
     else
     {
      header("location:contact.php" );
      echo "error is detected";
    }
?>