<?php

    include 'config.php';

    
?>


<?php


            include 'sidebar.php';
            include 'navbar.php';

            $id  = $_GET['id'];
        ?>


    <!-- form -->
    <div class="container-fluid pt-4 px-4">
<div class="row">
    <div class="col-12 col-md-12">
    <form action="editAction.php" method="post" enctype="multipart/form-data">
    <?php 
                        $sql = "select * from `tour` where `id` = $id";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                      ?>

    <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <input type="text" name="id" value="<?php echo $id; ?>" style="display:none;">
      <label class="form-label" for="form6Example1">Tour Name</label>
        <input type="text" name="tourname" value="<?php echo $row['tourname']; ?>" id="form6Example1" class="form-control" required />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2"  >City</label >
        <select name="city"  class="form-select">
        
          
          <option value="<?php echo $row['city']; ?>" ><?php echo $row['city']; ?>
        </option>
        </select>
      </div>
    </div>
  </div>
  <div class="row mb-4">
  <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">map</label>
        <input type="text" name="map" value="<?php echo $row['map']; ?>" multiple id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
    <div class="form-outline">
      <label class="form-label" for="form6Example1">Price </label>
        <input type="number" name="price" value="<?php echo $row['price']; ?>" id="form6Example1" class="form-control" required />
        
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Feature Image</label>
        <input type="file" name="featureImg" value="<?php echo $row['featureImg']; ?>" multiple id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Images</label>
        <input type="file"  name="images[]" value="<?php echo $row['images']; ?>" id="form6Example2" class="form-control" Multiple required/>
        
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Duration days</label>
        <input type="text" name="days" value="<?php echo $row['days']; ?>" multiple id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">persons</label>
        <input type="text"  name="person" value="<?php echo $row['person']; ?>" id="form6Example2" class="form-control"  required/>
        
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Min Age</label>
        <input type="text" name="age" value="<?php echo $row['age']; ?>" multiple id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">PickUp Point</label>
        <input type="text"  name="pickupPoint" value="<?php echo $row['pickupPoint']; ?>" id="form6Example2" class="form-control"  required/>
        
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Departure location</label>
        <input type="text" name="departureLocation" value="<?php echo $row['departureLocation']; ?>" multiple id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">sharing room </label>
        <input type="text"  name="room" value="<?php echo $row['room']; ?>" id="form6Example2" class="form-control"  required/>
        
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Departure Time</label>
        <input type="time" name="departureTime" value="<?php echo $row['departureTime']; ?>" multiple id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Arrival Time</label>
        <input type="time"  name="arrivalTime" value="<?php echo $row['arrivalTime']; ?>" id="form6Example2" class="form-control"  required/>
        
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Languages</label>
        <input type="text" name="language" value="<?php echo $row['language']; ?>" multiple id="form6Example1" class="form-control" />
        
      </div>
    </div>
  </div>


  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">From </label>
        <input type="date" name="departureDate" value="<?php echo $row['departureDate']; ?>"  id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">To</label>
        <input type="date"  name="arrivalDate" value="<?php echo $row['arrivalDate']; ?>" id="form6Example2" class="form-control"  required/>
        
      </div>
    </div>
  </div>
  
  
  <div class="form-outline">
      <label class="form-label" for="wordTextarea">Description</label>
        <textarea id="textarea" value="<?php echo $row['description']; ?>" name="desc" class="form-control"></textarea>
      
        
      </div>
      <button type="submit" name="Updatetour" class="btn btn-primary my-2">Update Tour</button>
</form>
<?php }  ?>

</div>
</div>
</div>



<script>
  function addTaskField() {
    let list = document.getElementById("todo-list");
    let li = document.createElement('li');
    li.style.display ="inline-block";
     li.innerHTML = 
     `
     <input type="text" class="form-control" value="<?php echo $row['services']; ?>"  name="services[]" placeholder="Add new task..." style="width: 50%;  display:inline-block;"/>
          <button type="button" class="btn btn-danger" onclick="removeTaskField(this)">-</button>
     `;
     list.appendChild(li);
  
  }


  
</script>

<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>

<?php include 'footer.php'; ?>