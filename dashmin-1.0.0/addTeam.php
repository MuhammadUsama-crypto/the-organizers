<?php

    include 'config.php';

    
?>


<?php
    include 'sidebar.php';
    include 'navbar.php';
    ?>


    <!-- form -->
    <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-12 col-md-12">
                    <form action="insertAction.php" method="post" enctype="multipart/form-data">
                   
   
<div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Team member Name</label>
        <input type="text" name="tname" multiple id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Position</label>
        <input type="text"  name="position" id="form6Example2" class="form-control"  required/>
        
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Feature Image</label>
        <input type="file" name="image" multiple id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      
    </div>
  </div>
      <button type="submit" name="enterTeam" class="btn btn-primary my-2">Add Team Member</button>
</form>

</div>
</div>
</div>
    <!-- form end -->

    <!-- datatable -->

    <div class="container-fluid pt-4 px-4 dataTable">
                <div class="row">
                    <div class="col-12 col-md-12">
                    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Team member name</th>
                <th>Position</th>
                <th>image</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
        <?php
    // Display the images from the database in the sequence of their IDs
    $sql = "SELECT * FROM `team`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      
        
    
?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['tname']; ?></td>
                <td><?php echo $row['position']; ?></td>
                <td>
                  <img src="img/userImages/<?php echo $row['image']; ?>" class="img-fluid" alt="" height="100px" width="100px">
                </td>
                <td>
               
                <a href="Action.php?team_id=<?php echo $row['id']?>" type="button" class="btn btn-danger">Delete</a>  
              </td>
                
                
              
            </tr>
           <?php } ?>
            </tbody>
                    </table>
                    </div>
                </div>
            </div>
            

    <!-- datatable end -->



<?php 
    include 'footer.php';
?>
