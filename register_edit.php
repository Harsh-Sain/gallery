<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit Admin Profile</h6>
</div>
<?php
 $id = $_GET['id'];
 //echo $id;
 $servername="localhost";
 $username="root";
 $password="";
 $database="add";

 $conn = mysqli_connect($servername,$username,$password,$database);

 $sql = "SELECT * FROM `register` WHERE id=$id";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($result);

?>
<div class="card-body">
      
  <form action="code.php" method="POST">
           <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
           <div class="form-group">
           <label> Username </label>
           <input type="text" name="edit_username"  value="<?php echo $row['username']?>" class="form-control" placeholder="Enter Username">
           </div>
           <div class="form-group">
           <label>Email</label>
           <input type="email" name="edit_email" value="<?php echo $row['email']?>" class="form-control" placeholder="Enter Email">
           </div>
           <div>
            <label>USERTYPE</label>
           <select name="update_usertype">
           <option value="admin">admin</option>
           <option value="user">user</option>
           </select>
           <div>
           <a href="register.php" class="btn btn-danger">Cancel</a>
           <button  name="updatebtn" type="submit"class=" btn btn-primary">Update</button>
           </div>
           </div>
     </form>
          

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>