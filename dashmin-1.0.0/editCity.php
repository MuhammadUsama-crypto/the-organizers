<?php
 include 'config.php';
 
$id = $_GET['id'];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $city = $_POST['city'];
    $id = $_POST['id'];
    $sql="UPDATE `city` SET `city` = '$city' WHERE `city`.`id` = '$id'";
    mysqli_query($conn, $sql);
    header("location: addCity.php");
}

?>



<?php
            include 'sidebar.php';
            include 'navbar.php';
        ?>


    <!-- form -->
    <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-12 col-md-12">


        <?php 
            $sql = "select * from `city`  where `id` = $id";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
        ?>
          
         
                    

                    <form action="editCity.php" method="post">
  <div class="mb-3">
    <input type="text" name="id" value="<?php echo $id; ?>" class="id_input" style="">
    <label class="form-label" for="form6Example1">City Name</label>
        <input type="text" name="city" value="<?php echo $row['city']; ?>" id="form6Example1" class="form-control" />
        
</select>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php }?>
</div>
</div>
</div>
    <!-- form end -->


  



<?php 
    include 'footer.php';
?>
