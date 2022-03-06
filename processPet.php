<?php

if(isset($_POST['submit'])){

  $name         = $_POST['name'];
  $gender       = $_POST['gender'];
  $age          = $_POST['age'];
  $color        = $_POST['color'];
  $type         = $_POST['type'];
  $breed        = $_POST['breed'];
  $description  = $_POST['description'];
  $filePath     = $_FILES['image']['tmp_name'];
  $fileName     = $_FILES['image']['name'];
  $fileError    = $_FILES["image"]["error"];

  $saveDir = "pet_images/";
  $picture = "";

  if($_FILES['image']['error'] == UPLOAD_ERR_OK){

    if(is_uploaded_file($_FILES['image']['tmp_name'])){
      $file = basename($_FILES['image']['name']);

      $picture = $saveDir . strip_tags($file);

      move_uploaded_file($_FILES['image']['tmp_name'], $picture);
      $pet->insertPet($name, $gender, $age, $color, $type, $breed, $description, $picture);
}
}
}

 ?>
