<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit Profile</h6>
</div>
<?php
 //$id = $_GET['id'];
 $servername="localhost";
 $username="root";
 $password="";
 $database="add";

 $conn = mysqli_connect($servername,$username,$password,$database);

 $sql = "SELECT * FROM `register`";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($result);

?>
<div class="card-body">
      
  <form action="test2.php" method="POST" enctype="multipart/form-data">
           <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
           <div class="form-group">
           <label> Username </label>
           <input type="text" name="edit_username"  value="<?php echo $row['username']?>" class="form-control" placeholder="Enter Username">
           </div>
           <div class="form-group">
           <label>Email</label>
           <input type="email" name="edit_email" value="<?php echo $row['email']?>" class="form-control" placeholder="Enter Email">
           </div>
           <div class="form-group">
           <label>phone</label>
           <input type="text" name="phone"  class="form-control" placeholder="Enter phone number">
           <div>
           </div>
           <div class="form-group">
           <label>image</label>
           <input type="file" name="images" id="images"  class="form-control" >
           </div>
           <div class="form-group">
           <a href="profile1.php" class="btn btn-danger">Cancel</a>
           <button  name="updateprofilebtn" type="submit"class=" btn btn-primary">Update</button>
           </div>
           </div>
     </form>
          

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>