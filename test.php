<?php
include('security.php');
$conn= mysqli_connect("localhost","root","","add");
if(isset($_POST['edit']))
    {   
        $id=$_POST["edit_id"];
        $name = $_POST["edit_name"]; 
        $des = $_POST["edit_des"];
        $editfilename = $_FILES["file"]["name"];
        $tempname = $_FILES["file"]["tmp_name"];
        $folder = "upload/".$editfilename;
        $del=$_POST["del_image"];
                    $sql = "UPDATE `gallery` SET `name`='$name',`description`='$des',`image`='$editfilename' WHERE id='$id'";
                    $insertData = mysqli_query($conn,$sql);
            
                    if(move_uploaded_file($tempname ,$folder)) {

                        header("location: gallery.php");
                    $_SESSION['status'] = "profile add";
                    $_SESSION['status_code'] = "success";
                   
                  }else{
                     $_SESSION['status'] = "Something wrong!";
                     $_SESSION['status_code'] = "error";
                    header("location:gallery.php");
                }

                if( $insertData )
                unlink("upload/".$del);
                header("location:gallery.php" );
                 //echo "NO error";
                 }
                else
                {
              header("location:gallery.php" );
              echo "error is detected";
              }   
        ?>