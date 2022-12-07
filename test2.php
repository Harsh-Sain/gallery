<?php
include('security.php');
      $conn= mysqli_connect("localhost","root","","add");
      if(isset($_POST['updateprofilebtn']))
           {
              $id=$_POST['edit_id'];
              $username =$_POST['edit_username'];
              $email=$_POST['edit_email'];
              $phone=$_POST['phone'];
              $filename = $_FILES["images"]["name"];
              $tempname = $_FILES["images"]["tmp_name"];
              $folder = "../upload/".$filename;
      
              $sql = "UPDATE `register` SET `username`='$username',`email`='$email',`pass`='$password',`phone`='$phone',`images`='$filename' WHERE `id`=$id";
              $insertData = mysqli_query($conn,$sql);
      
              if (move_uploaded_file($tempname, $folder))  {
                 $_SESSION['status'] = "profile add";
                 $_SESSION['status_code'] = "success";
                // // echo "location.href='categary.php'";
              header("location: profile.php");
            }else{
              $_SESSION['status'] = "Something wrong!";
              $_SESSION['status_code'] = "error";
              header("location: profile.php");
          }
      }
      
        ?>
    