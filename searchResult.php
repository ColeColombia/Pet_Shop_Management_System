<?php
require_once("header.php");

$gender = "";
$type   = "";
$breed  = "";

if(isset($_GET['gender']) && isset($_GET['gender'])){

  $gender = urlencode($_GET['gender']);
  $type   = urlencode($_GET['type']);
}

if(isset($_POST['submit'])){
  $breed = $_POST['breed'];
}

 ?>

 <div class="container-fluid py-5 my-4">
     <div class="row g-5">

       <?php
       if($gender != "" && $type !=""){
         $pet->getByGender($gender, $type);
       }

       if($breed !=""){
         $pet->findByBreed($breed);
       }

        ?>
   </div>

</body>
</html>
