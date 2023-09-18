<?php $this->load->view('includes/header'); ?>
<div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">List</h5>
<table class="table table-light">
    
    <tbody>
        <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Details</th>
        </tr>
    </tbody>
<?php $i=1; foreach($item as $row) { ?>
  
        <tr>
          <td> <?= $i++?></td>
          <td> <?= $row['ItemName']?></td>
          <td> <?= $row['ItemDetails']?></td>
          <td>
            <a href="<?=base_url()?>user/edit/<?=$row['id']?>" class="btn btn-primary">Edit</a>
            <a href="<?=base_url()?>user/delete/<?=$row['id']?>" class="btn btn-danger" onclick=" return confirm('Are you sure want to delete this user?')">Delete</a>
          </td>
        </tr>
    <?php } ?>
</table>




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