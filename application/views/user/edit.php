<?php $this->load->view('includes/header'); ?>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Edit User</h5>
<form method="post" action="<?= base_url('User/edit/' . $id); ?>">


  <div class="mb-3">
    <label for="ItemName" class="form-label">Items Name</label>
    <input type="text" name="ItemName" class="form-control" id="ItemName" aria-describedby="emailHelp">
      </div>
  <div class="mb-3">
    <label for="ItemDetails" class="form-label">Description</label>
    <input type="text" name="ItemDetails" class="form-control" id="details">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php 
if ($this->session->flashdata('success')) { // Note the corrected method name flashdata()
?>
<div class="alert alert-success">
    Success!
</div>
<?php
}
?>

         <?php 
if ($this->session->flashdata('error')) { // Note the corrected method name flashdata()
?>
<div class="alert alert-warning">
    Error!
</div>
<?php
}
?>
  </div>
</div>
<?php $this->load->view('includes/footer'); ?>