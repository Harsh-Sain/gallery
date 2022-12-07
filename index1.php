<?php
include('security.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<link rel="stylesheet" type="text/css" href="index.css"> 
</head>
<body>
  <div class="banner">
        <div class="navbar">
            <div class="logo">
                <img src="logo.png" alt="">
            </div>
            <nav>
                <ul>
                    <li><a href="demo.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    
                </ul>
                
            </nav>
        </div>
        <?php
  if(isset($_SESSION['sucesss']) && $_SESSION['sucesss']!='')
    {
    echo '<h2>'.$_SESSION['sucesss'].'</h2>';
    unset($_SESSION['sucesss']);
    }

  
  if(isset($_SESSION['status']) && $_SESSION['status']!='')
    {
    echo '<h2 class="bg-info>'.$_SESSION['status'].'<h2>';
    unset($_SESSION['status']);
    }
  ?>

  <div class="container">
    <div class="heading">
      <h3>Photo <span>Gallery</span></h3>
    </div>
    <div class="box">
    <?php
  $connection = mysqli_connect("localhost","root","","add");

  $query= "SELECT * from gallery ";
  $query_run = mysqli_query($connection,$query);
  ?>
 <?php
      if(mysqli_num_rows($query_run)>0)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {    
         ?>
     
     
      <div class="dream">
        <?php echo '<img src="upload/'.$row['image'].'" width="500px" height="300px" alter="image">'?>

      </div>

      
      <?php
        }
      }
        else
        {
        echo"record not found";
        }
      ?>
    


    </div>
   





  </div>

</body>
</html>