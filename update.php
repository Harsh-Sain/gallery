<?php
include('connect.php');
// $id = $_GET['id'];
 //echo $id;
 if(isset($_POST['updatebtn']))
{
   $id=$_POST['edit_id'];
   $username =$_POST['edit_username'];
   $email=$_POST['edit_email'];
   $password=$_POST['edit_password'];

   $query = "UPDATE register SET username ='$username',email ='$email',password = '$password' WHERE id='$id'";
   $query_run = mysqli_query($con,$query);
   if($query_run)
   {
      $_SESSION['success']="your data is updated";
      header("location:register.php" );
   }
   else
   {
      $_SESSION['status']="your data is not updated";
    header("location:register.php" );
    echo "error is detected";
  }
   }

?>