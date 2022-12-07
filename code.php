<?php
session_start();
// $conn= mysqli_connect("localhost","root","","add");

//     if(isset($_POST['login_btn']))
//     {
        
//     if(empty($_POST['email']) || empty($_POST['password']) )
//     {          
//       $_SESSION['status']="All fields are required!";
//       header('location:login.php');
//     }
//     else
//     {
//       if(strlen($_POST['password']) < 4 )
//       {
//         $_SESSION['status']="Password Length too short";
//         header('location:login.php');
//       }
//       else{
//         $email=$_POST['email'];
//         $password=$_POST['password'];
//         $conn=mysqli_connect("localhost","root","","add");
//         $query=mysqli_query($conn,"select ID from register where  email='$email' && pass='$password' ");
//         $ret=mysqli_fetch_array($query);
//         if($ret>0)
//         {
//                   $_SESSION['status'] = true;
//               header('location:index.php');
//         }
//         else
//         {
//           $_SESSION['status']="Invalid Email or Password";
//           header("location: login.php");   
//         }
//       }
//     }
//   }
// else
// {
//     $_SESSION['status']="Access Denied";
//     header("location: login.php");
// }

if(isset($_POST['registerbtn']))
{
        $username = $_POST['username']; 
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['confirmpassword'];
        $usertype=$_POST['usertype'];

        if($password === $cpassword)
        {
            
                $query = "INSERT INTO `register`(`id`, `username`, `email`, `pass`, `usertype`)values('$username','$email','$password','$usertype')";
                $query_run = mysqli_query($conn,$query);

                if($query_run)
                {
                    //echo"working";
                    $_SESSION['sucesss']="Admin Profile Added";
                    header("Location: register.php");
                }else
                    {
                       // echo"notworking";
                        $_SESSION['status']="admin profile is not added";
                        header("Location: register.php");
                    }
        }
        else{
            $_SESSION['status']="Pasword is not match";
            header("Location: register.php");
            }
     }
     
     if(isset($_POST['updatebtn']))
     {
        $id=$_POST['edit_id'];
        $username =$_POST['edit_username'];
        $email=$_POST['edit_email'];
        $password=$_POST['edit_password'];
        $usertypeupdate=$_POST['update_usertype'];
     
        $query = "UPDATE register SET username ='$username',email ='$email',password = '$password',usertype='$usertypeupdate' WHERE id='$id'";
        $query_run = mysqli_query($conn,$query);
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
      
    if(isset($_POST['aboutsave']))
    {
        $title = $_POST['title']; 
        $subtitle = $_POST['subtitle'];
        $description = $_POST['description'];
        $link = $_POST['link'];

                $query = "INSERT INTO `about`( `tittle`, `subtitle`, `description`, `link`) VALUES ('$title','$subtitle','$description','$link')";
                $query_run = mysqli_query($conn,$query);

                if($query_run)
                {
                    //echo"working";
                    $_SESSION['sucesss']="About Profile Added";
                    header("Location: about.php");
                }
                else{
                       // echo"notworking";
                        $_SESSION['status']="about is not added";
                        header("Location: about.php");
                    }
    }
    $conn= mysqli_connect("localhost","root","","add");
    if(isset($_POST['editbtn']))
        {   
            $id=$_POST['edit_id'];
            $title = $_POST['edit_title']; 
            $subtitle = $_POST['edit_subtitle'];
            $description = $_POST['edit_description'];
            $link = $_POST['edit_link'];
    
                    $query =  "UPDATE about SET tittle ='$title',subtittle ='$subtitle',description = '$description',link='$link' WHERE id='$id'";
                    $query_run = mysqli_query($conn,$query);
    
                    if($query_run)
                    {
                        //echo"working";
                        $_SESSION['sucesss']="About Profile Added";
                        header("Location: contact.php");
                    }
                    else{
                           // echo"notworking";
                            $_SESSION['status']="about is not added";
                            header("Location: contact.php");
                        }
        }
         
$conn= mysqli_connect("localhost","root","","add");
if(isset($_POST['updateprofilebtn']))
     {
        $id=$_POST['edit_id'];
        $username =$_POST['edit_username'];
        $email=$_POST['edit_email'];
        $password=$_POST['edit_password'];
        $phone=$_POST['phone'];
        $filename = $_FILES["images"]["name"];
        $tempname = $_FILES["images"]["tmp_name"];
        $folder = "upload/".$filename;

        $sql = "UPDATE `register` SET `username`='$username',`email`='$email',`password`='$password',`phone`='$phone',`images`='$filename' WHERE `id`='$id'";
        $insertData = mysqli_query($conn,$sql);

        if (move_uploaded_file($tempname, $folder))  {
          $_SESSION['status'] = "profile add";
          $_SESSION['status_code'] = "success";
          // echo "location.href='categary.php'";
        header("location: profile1.php");
      }else{
        $_SESSION['status'] = "Something wrong!";
        $_SESSION['status_code'] = "error";
        header("location: profile1.php");
    }
}

if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email']; 
    $password_login = $_POST['password']; 

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($conn, $query);
    $usertype=mysqli_fetch_array($query_run);

   if($usertype['usertype']=="admin" )
   {
        $_SESSION['username'] = $email_login;
        header('Location:index.php');
   } 
   elseif($usertype['usertype']=="user")
   {
     $_SESSION['username'] = $email_login;
     header('Location:../view/index.php');

   }
   else{
    $_SESSION['status'] = "Email / Password is Invalid";
    header('Location: login.php');
}
   

    
}

// $conn= mysqli_connect("localhost","root","","adminpanel");
// if(isset($_POST['updateprofilebtn']))
//      {
//         $id=$_POST['edit_id'];
//         $username =$_POST['edit_username'];
//         $email=$_POST['edit_email'];
//         $password=$_POST['edit_password'];
//         $phone=$_POST['phone'];
//         $filename = $_FILES["images"]["name"];
//         $tempname = $_FILES["images"]["tmp_name"];
//         $folder = "upload/".$filename;

//         $sql = "UPDATE `register` SET `username`='$username',`email`='$email',`password`='$password',`phone`='$phone',`images`='$filename' WHERE `id`='$id'";
//         $insertData = mysqli_query($conn,$sql);

//         if (move_uploaded_file($tempname, $folder))  {
//           $_SESSION['status'] = "profile add";
//           $_SESSION['status_code'] = "success";
//           // echo "location.href='categary.php'";
//         header("location: profile1.php");
//       }else{
//         $_SESSION['status'] = "Something wrong!";
//         $_SESSION['status_code'] = "error";
//         header("location: profile1.php");
//     }
// }


?>