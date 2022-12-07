<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
</div>
<div class="card-body">
      
  <form action="change1.php" method="POST">
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
                <label>Enter your existing Password</label>
                <input type="password" name="pass" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Enter your new Password</label>
                <input type="password" name="newpassword" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Re-Enter your Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>
        
           <a href="register.php" class="btn btn-danger">Cancel</a>
           <button  name="updatebtn" type="submit"class=" btn btn-primary">Update</button>
           </div>
           </div>
     </form>
          

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
