<?php
$conn = mysqli_connect("localhost","root","","add");

$id=$_GET['id'];
$sql= "DELETE FROM man WHERE id=$id";
$query = mysqli_query($conn,$sql);
       if($query)   {
        header("location:manure.php" );
        //echo "NO error";
     }
     else
     {
      header("location:manure.php" );
      echo "error is detected";
    }
    ?>