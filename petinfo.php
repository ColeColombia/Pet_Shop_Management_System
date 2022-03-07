<?php
require_once("header.php");

$pet_id = "";

if($_GET['pet_id']){
  $pet_id = urlencode($_GET['pet_id']);
}

 ?>

 <div class="container my-5 py-5">
   <div class="container">
    <?php $admin->showPetDetails($pet_id); ?>
   </div>
 </div>

</body>
</html>
