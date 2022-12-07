<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit Contact US</h6>
</div>
<?php
 $id = $_GET['id'];
 //echo $id;
 $servername="localhost";
 $username="root";
 $password="";
 $database="add";

 $conn = mysqli_connect($servername,$username,$password,$database);

 $sql = "SELECT * FROM `contact` WHERE id='$id'";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($result);
?>
<div class="card-body">
<form action="code.php" method="POST">

<div class="modal-body">
<input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
          
    <div class="form-group">
        <label> Name </label>
        <input type="text" name="name"  value="<?php echo $row['name']?>"class="form-control" >
    </div>
    <div class="form-group">
        <label>email</label>
        <input type="text" name="email"  value="<?php echo $row['email']?>"class="form-control">
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="text" name="Phone"  value="<?php echo $row['phone']?>"class="form-control">
    </div>
    <div class="form-group">
        <label>message</label>
        <input type="text" name="message"  value="<?php echo $row['message']?>" class="form-control" >
    </div>

<div class="modal-footer">
        <a href="contact.php" class="btn btn-primary">Save</a>
</div>
</div>
</form>





<?php
include('includes/scripts.php');
include('includes/footer.php');
?>