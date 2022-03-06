<?php require_once('header.php');
require_once('processPet.php');

if(isset($_GET['pet'])){
  $ped_id = urlencode($_GET['pet']);
  $admin->removePet($ped_id);
}
 ?>


<div class="container my-5 py-5">
  <div class="container">
<button type="button" class="btn add_button btn-success">Add Pet</button>
<button type="button" class="btn remove_button btn-danger">Remove Pet</button>
  </div>
  <div class="container add_layout">
    <div class="add_Pet text-center">
      <h3 class="display-4">Add Pet</h3>
    </div>
    <div class="row">
      <div class="col-lg-6">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
       id="form1" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" name="name" class="form-control" id="petName" placeholder="Pet name">
  </div>
  <div class="form-group">
    <select id="petGender" name="gender" class="form-control">
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
  <div class="form-group">
    <input type="text" name="age" class="form-control" id="petAge" placeholder="Pet age">
  </div>
  <div class="form-group">
    <input type="text" name="color" class="form-control" id="petColor" placeholder="Pet color">
  </div>
</div>
<div class="col-lg-6">
  <div class="form-group">
    <select id="petType" name="type" class="form-control">
      <option>Dog</option>
      <option>Cat</option>
    </select>
  </div>
  <div class="form-group">
    <input type="text" name="breed" class="form-control" id="petBreed" placeholder="Pet breed">
  </div>
  <div class="form-group">
    <input type="text" name="description" class="form-control" id="petDescription" placeholder="Pet description">
  </div>
  <div class="form-group">
  <div class="custom-file">
    <label for="petPic" class="custom-file-label" >Pet picture..</label>
  <input type="file" name="image" class="custom-file-input" id="petPic" required>
</div>
</div>
  <button type="submit" name="submit" class="btn add btn-success">Add Pet</button>
  </form>
</div>
</div>
  </div>
  <div class="container removePet">
      <div class="remove_Pet text-center">
        <h3 class="display-4">remove Pet</h3>
      </div>
      <?php $admin->getPets(); ?>
  </div>
</div>
<script src="assets/javascript/index.js" type="text/javascript">

</script>
  </body>
</html>
