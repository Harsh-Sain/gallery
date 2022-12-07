<?php
include("connect.php")
if(isset($_POST['editbtn']))
    {   
        //$id=$_POST['id'];
        $title = $_POST['title']; 
        $subtitle = $_POST['subtitle'];
        $description = $_POST['description'];
        $link = $_POST['link'];

                $query = "UPDATE INTO `about`( `title`, `subtitle`, `description`, `link`) VALUES ('$title','$subtitle','$description','$link')";
                $query_run = mysqli_query($con,$query);

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
    ?>