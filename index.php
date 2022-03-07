<?php require_once('header.php'); ?>
<div class="container-fluid my-5 py-5 hero">
<div class="container">
  <div class="row py-5">
  <div class="col-lg-8 text-lg-end">

  </div>
  <div class="col-lg-4 my-4">
    <p class="display-4 text-lg-end text-dark mb-4 pb-2">Every dog and cat deserves a home.</p>
  </div>
  </div>
</div>
</div>
<div class="container-fluid my-4">
    <div class="row g-3">
      <?php echo $pet->getPets(); ?>
  </div>
  </body>
</html>
