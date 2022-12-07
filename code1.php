 
   <?php
   include('security.php');
 include('connect.php');
   if(isset($_POST['ubsave']))
    {
        $name = $_POST["name"]; 
        $des = $_POST["des"];
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "upload/".$filename;
       
        $sql = "INSERT INTO `gallery`( name, description, image) VALUES ('$name','$des','$filename')";
       
       
      
        $insertData = mysqli_query($con,$sql);
        if (move_uploaded_file($tempname, $folder))  {
            header("location: gallery.php");
        $_SESSION['status'] = "profile add";
        $_SESSION['status_code'] = "success";
       
      }else{
         $_SESSION['status'] = "Something wrong!";
         $_SESSION['status_code'] = "error";
        header("location: gallery.php");
    }
}
/*$con= mysqli_connect("localhost","root","","add");
if(isset($_POST['editbtn']))
    {   
        $id=$_POST['edit_id'];
        $title = $_POST['edit_title']; 
        $subtitle = $_POST['edit_subtitle'];
        $price = $_POST['edit_price'];
        $link = $_POST['edit_link'];
        $file = $_POST['file'];
        $tempname = $_FILES['file']['tmp_name'];
        $folder = "upload/".$filename;
        $del=$_POST['del_image'];
       

                $query =  "UPDATE fer SET tittle ='$title',subtitle ='$subtitle', price= '$price',link='$link',image='$file' WHERE id='$id'";
            
                $insertData = mysqli_query($con,$query);
            
                if(move_uploaded_file($tempname ,$folder)) {

                    header("location: editpro.php");
                $_SESSION['status'] = "profile add";
                $_SESSION['status_code'] = "success";
               
              }else{
                 $_SESSION['status'] = "Something wrong!";
                 $_SESSION['status_code'] = "error";
                header("location: editpro.php");
            }

            if( $insertData )
            unlink("upload/".$del);
            header("location:editpro.php" );
             //echo "NO error";
             }
            else
            {
          header("location:editpro.php" );
          echo "error is detected";
      
    }
    */
    include('security.php');
    if(isset($_POST['tosave']))
    {
        $title = $_POST['title']; 
        $subtitle = $_POST['subtitle'];
        $price = $_POST['price'];
        $link = $_POST['link'];
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "upload/".$filename;
       
        $sql = "INSERT INTO `man`(`tittle`, `subtitle`, `price`, `link`, `image`) VALUES ('$title','$subtitle','$price','$link','$filename')";
       
       
      
        $insertData = mysqli_query($con,$sql);
        if (move_uploaded_file($tempname, $folder))  {
            header("location: manure.php");
        $_SESSION['status'] = "profile add";
        $_SESSION['status_code'] = "success";
       
      }else{
         $_SESSION['status'] = "Something wrong!";
         $_SESSION['status_code'] = "error";
        header("location: manure.php");
    }
}

?>
     
     

  