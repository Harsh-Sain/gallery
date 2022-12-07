<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code1.php" method="POST" enctype="multipart/form-data">


        <div class="modal-body">
        <input type="hidden" name="id" value="">
            <div class="form-group">
                <label> Title </label>
                <input type="text" name="title" class="form-control" placeholder="Enter the Title">
            </div>
            <div class="form-group">
                <label>Sub Title</label>
                <input type="text" name="subtitle" class="form-control" placeholder="Enter Subtitle">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" name="price" class="form-control" placeholder="Enter price">
            </div>

            <div class="form-group">
                <label>Link</label>
                <input type="link" name="link" class="form-control" placeholder="Enter Link">
            </div>
            <div class="form-group">
                <label>image</label>
                <input type="file" name="uploadfile"  id="uploadfile"  class="form-control" >
            </div>
   
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="tosave" class="btn btn-primary">Save</button>
        </div>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Manure 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add 
            </button>
    </h6>
  </div>

  <div class="card-body">

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
<div class="table-responsive">
  <?php
  $connection = mysqli_connect("localhost","root","","add");

  $query= "SELECT * from man ";
  $query_run = mysqli_query($connection,$query);
  ?>

  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>id</th>
        <th> Title </th>
        <th>Sub Title </th>
        <th> price </th>
        <th>Link</th>
        <th>Image</th>
        <th>EDIT </th>
        <th>DELETE </th>
        
      </tr>
    </thead>
    <tbody>
      <?php
      if(mysqli_num_rows($query_run)>0)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {    
         ?>
      <tr>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['tittle'];?></td>
      <td><?php echo $row['subtitle'];?></td>
      <td><?php echo $row['price'];?></td>
      <td><?php echo $row['link'];?></td>
      <td><?php echo '<img src="upload/'.$row['image'].'" width="100px" height="100px" alter="image">'?></td>
      <td>
      <a href="editpro1.php?id=<?php echo $row['id']?>"><button  type="button" class="btn btn-success">EDIT</button></a>
      </td>
      <td>
      <a href="delpro1.php?id=<?php echo $row['id']?>"><button  type="button" class="btn btn-danger">Delete</button></a>
      </td>
      </tr>
      <?php
        }
      }
        else
        {
        echo"record not found";
        }
      ?>
    
    </tbody>
  </table>

</div>
</div>
</div>

</div>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
