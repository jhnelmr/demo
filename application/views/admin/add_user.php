<?php $this->load->view('includes/header'); ?>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Add User</h5>
                    <form method="POST" action="<?=base_url('admin/add') ?>">
                        <div class="form-group">
                            <label for="UserEmail">Email address</label>
                            <input type="email" name="UserEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
        <?php 
if ($this->session->flashdata('success')) { // Note the corrected method name flashdata()
?>
           <div class="alert alert-success">
            Added!
           </div>
           
          <?php
}
?>
            
          
                </div>
            </div>
        </div>
    </div>



<?php $this->load->view('includes/footer'); ?>
