<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit About US</h6>
</div>
<?php
 $id = $_GET['id'];
 //echo $id;
 $servername="localhost";
 $username="root";
 $password="";
 $database="add";

 $conn = mysqli_connect($servername,$username,$password,$database);

 $sql = "SELECT * FROM `about` WHERE id='$id'";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($result);
?>
<div class="card-body">
<form action="code.php" method="POST">

<div class="modal-body">
<input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
          
    <div class="form-group">
        <label> Title </label>
        <input type="text" name="edit_title"  value="<?php echo $row['tittle']?>"class="form-control" placeholder="Enter the Title">
    </div>
    <div class="form-group">
        <label>Sub Title</label>
        <input type="text" name="edit_subtitle"  value="<?php echo $row['subtittle']?>"class="form-control" placeholder="Enter Subtitle">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea type="text" name="edit_description"  value="<?php echo $row['description']?>"class="form-control" placeholder="Enter Description"></textarea>
    </div>
    <div class="form-group">
        <label>Link</label>
        <input type="link" name="edit_link"  value="<?php echo $row['link']?>" class="form-control" placeholder="Enter Link">
    </div>
<div class="modal-footer">
        <a href="about.php" class="btn btn-danger">Cancel</a>
        <button type="submit" name="editbtn" class="btn btn-primary">Save</button>
</div>
</div>
</form>





<?php
include('includes/scripts.php');
include('includes/footer.php');
?>