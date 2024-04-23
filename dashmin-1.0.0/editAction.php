<?php

    include 'config.php';
    $uploadedPaths = array();
if(isset($_POST["updateHotel"])){
    $id = $_POST['id'];
    $hotelName = $_POST['hotelName'];
    $city = $_POST['city'];
    $price = $_POST['price'];
  
    
    $description = $_POST['desc'];
    $imagesFile = $_FILES['images']['name'];
    $imagesTmpName = $_FILES['images']['tmp_name'];
    for ($i = 0; $i < count($imagesFile); $i++) {
        $fileName = $imagesFile[$i];
        $tmpName = $imagesTmpName[$i];
        $folder = "img/userImages/" . $fileName;
        move_uploaded_file($tmpName, $folder);
        $uploadedPaths[] = $fileName;
    }
    $uploadedPaths = implode(",",$uploadedPaths);
    $sql = "UPDATE `hotel` SET `hotelName` = '$hotelName', `city` = '$city',  `images` = '$uploadedPaths', `price` = '$price', `description` = '$description' WHERE `hotel`.`id` = '$id'";

    if(isset($_FILES['featureImg']) && $_FILES['featureImg']['error'] === UPLOAD_ERR_OK) {
        // If the 'featureImg' file is uploaded, process it as before
        $featureImgFile = $_FILES['featureImg']['name'];
        $featureImgTmpName = $_FILES['featureImg']['tmp_name'];
        $folder = "img/userImages/" . $featureImgFile;
        move_uploaded_file($featureImgTmpName, $folder);
    
        // Add the 'featureImg' field to the SQL query
        $sql = "UPDATE `hotel` SET `hotelName` = '$hotelName', `city` = '$city', `featureImg` = '$featureImgFile', `images` = '$uploadedPaths', `price` = '$price', `description` = '$description' WHERE `hotel`.`id` = '$id'";
    } else {
        // If no 'featureImg' file is uploaded, exclude 'featureImg' from the SQL query
        $sql = "UPDATE `hotel` SET `hotelName` = '$hotelName', `city` = '$city', `images` = '$uploadedPaths', `price` = '$price', `description` = '$description' WHERE `hotel`.`id` = '$id'";
    }
    
    mysqli_query($conn, $sql);
    header("location: addHotel.php");

}
if(isset($_POST["updateRoom"])){
    $id = $_POST['id'];
    $type = $_POST['type'];
    $services = $_POST['services'];
    $price = $_POST['price'];
    

    if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // If the 'featureImg' file is uploaded, process it as before
        $FileName = $_FILES['image']['name'];
    $Tmp_Name = $_FILES['image']['tmp_name'];
    $folder = "img/userImages/" . $FileName;
        move_uploaded_file($Tmp_Name, $folder);
        // Add the 'featureImg' field to the SQL query
        $sql = "UPDATE `room` SET `type` = '$type', `services` = '$services', `image` = '$FileName', `price` = '$price' WHERE `room`.`id` = '$id'";
    } else {
        // If no 'featureImg' file is uploaded, exclude 'featureImg' from the SQL query
        $sql = "UPDATE `room` SET `type` = '$type', `services` = '$services', `price` = '$price' WHERE `room`.`id` = '$id'";
    }
    mysqli_query($conn, $sql);
    header("location: addRoom.php");

}

if(isset($_POST["Updatetour"])){
    $id = $_POST['id'];
    $tourname = $_POST['tourname'];
    $city = $_POST['city'];
    $price = $_POST['price'];
    $map = $_POST['map'];
    $services = $_POST['services'];
    $description = $_POST['desc'];
    $days = $_POST['days'];
    $person = $_POST['person'];
    $departureDate = $_POST['departureDate'];
    $arrivalDate = $_POST['arrivalDate'];
    $age = $_POST['age'];
    $pickupPoint = $_POST['pickupPoint'];
    $language = $_POST['language'];
    $departureLocation = $_POST['departureLocation'];
    $room = $_POST['room'];
    $departureTime = $_POST['departureTime'];
    $arrivalTime = $_POST['arrivalTime'];
    $featureImgFile = $_FILES['featureImg']['name'];
    $featureImgTmpName = $_FILES['featureImg']['tmp_name'];
    $imagesFile = $_FILES['images']['name'];
    $imagesTmpName = $_FILES['images']['tmp_name'];
    $folder = "img/userImages/" . $featureImgFile;
    move_uploaded_file($featureImgTmpName, $folder);
    for ($i = 0; $i < count($imagesFile); $i++) {
        $fileName = $imagesFile[$i];
        $tmpName = $imagesTmpName[$i];
        $folder = "img/userImages/" . $fileName;
        // Move the uploaded file to the desired folder
        move_uploaded_file($tmpName, $folder);
        // Add the uploaded image path to the array
        $uploadedPaths[] = $fileName;
        }
        $uploadedPaths = implode(",",$uploadedPaths);



       $sql = "UPDATE `tour` SET `tourname` = '$tourname', `city` = '$city', `price` = '$price', `featureImg` = '$featureImgFile', `images` = '$uploadedPaths', `description` = '$description', `days` = '$days', `departureTime` = '$departureTime', `arrivalTime` = '$arrivalTime', `person` = '$days', `departureDate` = '$departureDate', `arrivalDate` = '$arrivalDate', `age` = '$age', `pickupPoint` = '$pickupPoint', `language` = '$language', `departureLocation` = '$departureLocation', `room` = '$room' WHERE `tour`.`id` = $id";
       $result= mysqli_query($conn, $sql);
       header("location: addTour.php");

   
}
?>

