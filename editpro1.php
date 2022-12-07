<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Edit product</h6>
</div>
<?php
 $id = $_GET['id'];
 //echo $id;
 $servername="localhost";
 $username="root";
 $password="";
 $database="add";

 $conn = mysqli_connect($servername,$username,$password,$database);

 $sql = "SELECT * FROM `man` WHERE id='$id'";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($result);
?>
<div class="card-body">
<form action="test1.php" method="POST" enctype="multipart/form-data">

<div class="modal-body">
<input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
          
    <div class="form-group">
        <label> Title </label>
        <input type="text" name="edit_title"  value="<?php echo $row['tittle']?>"class="form-control" placeholder="Enter the Title">
    </div>
    <div class="form-group">
        <label>Sub Title</label>
        <input type="text" name="edit_subtitle"  value="<?php echo $row['subtitle']?>"class="form-control" placeholder="Enter Subtitle">
    </div>
    <div class="form-group">
    <div class="form-group">
                <label>Price</label>
                <input type="text" name="edit_price"  value="<?php echo $row['price']?>" class="form-control" placeholder="Enter price">
            </div>

            <div class="form-group">
                <label>Link</label>
                <input type="link" name="edit_link"   value="<?php echo $row['link']?>" class="form-control" placeholder="Enter Link">
            </div>
            <div class="form-group">
        <label>Photo</label>
        <div class="form-group">
       <input type="file"  accept="image/*" name="file" id="file" value="<?php echo $row['image']?>" onchange="loadFile(event)" style="display: none;">
      <label for="file" style="cursor: pointer;">Upload Image</label>
     <img id="output" width="200" />
     <script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
       </div>
    </div>
    <input type="hidden" name="del_image" value="<?php echo $row['image']?>">
   
<div class="modal-footer">
        <a href="fertilizer.php" class="btn btn-danger">Cancel</a>
        <button type="submit" name="edit" class="btn btn-primary">Save</button>
</div>
</div>
</form>





<?php
include('includes/scripts.php');
include('includes/footer.php');
?>