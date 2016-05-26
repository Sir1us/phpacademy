<?php include 'header.php' ?>


<div class="row">
    <div class="col-sm-offset-1">
      <form class="form-inline" method="POST">
  <div class="form-group">
    <label for="exampleInputName2">Name</label>
    <input type="text" class="form-control" id="exampleInputName2" name="name" placeholder="Jon Snow" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Country</label>
    <input type="text" class="form-control" id="exampleInputEmail2" name="country" placeholder="Ukraine" required>
  </div>
  <button type="submit" class="btn btn-default">Send invitation</button>
</form>
    </div>
</div>


<?php if (isset($_POST['name']) && isset($_POST['country'])) : ?>

    <?php echo 'You name is ' . htmlspecialchars($_POST['name']); ?>

    <?php echo 'You live in ' . htmlspecialchars($_POST['country']); ?>



  <?php endif; ?>


<?php include 'footer.php' ?>



