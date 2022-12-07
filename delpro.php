<?php
include('security.php');
$conn = mysqli_connect("localhost","root","","add");

$id=$_GET['id'];
$sql= "DELETE FROM gallery WHERE id=$id";
$result = mysqli_query($conn,$sql);
       if($result)   {
        header("location:gallery.php" );
        //echo "NO error";
     }
     else
     {
      header("location:gallery.php" );
      echo "error is detected";
    }




?>