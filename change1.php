<?php
include('security.php');

$conn= mysqli_connect("localhost","root","","add");
if(isset($_POST['updatebtn']))
     {
        $id=$_POST['edit_id'];
        $email=$_POST['edit_email'];
        $password = $_POST['pass'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmpassword'];
        

        $query= mysqli_query($conn,"SELECT email,pass FROM register where email ='$email' AND pass='$password' ");
        $num= mysqli_fetch_array($query);
        if($num>0){
          $con = mysqli_query($conn,"UPDATE register set pass='$newpassword' where email = '$email'");
          $_SESSION['msg1'] = "password change sucessfully";
          header("location:change.php");
        }
        else{
          $_SESSION['msg2'] = "password change sucessfully";
          header("location:change.php");

        }
      }
      ?>