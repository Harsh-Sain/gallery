<?php
include('security.php');
$conn= mysqli_connect("localhost","root","","add");
if(isset($_POST['edit']))
    {   
        $id=$_POST['edit_id'];
        $title = $_POST['edit_title']; 
        $subtitle = $_POST['edit_subtitle'];
        $price = $_POST['edit_price'];
        $link = $_POST['edit_link'];
        $editfilename = $_FILES["file"]["name"];
        $tempname = $_FILES["file"]["tmp_name"];
        $folder = "upload/".$editfilename;
        $del=$_POST['del_image'];
                    $sql = "UPDATE man SET tittle ='$title',subtitle ='$subtitle', price= '$price',link='$link',image='$editfilename' WHERE id='$id'";
                    $insertData = mysqli_query($conn,$sql);
            
                    if(move_uploaded_file($tempname ,$folder)) {

                        header("location: manure.php");
                    $_SESSION['status'] = "profile add";
                    $_SESSION['status_code'] = "success";
                   
                  }else{
                     $_SESSION['status'] = "Something wrong!";
                     $_SESSION['status_code'] = "error";
                    header("location:manure.php");
                }

                if( $insertData )
                unlink("upload/".$del);
                header("location:manure.php" );
                 //echo "NO error";
                 }
                else
                {
              header("location:manure.php" );
              echo "error is detected";
              }   
        ?>