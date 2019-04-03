<?php
$user_id=$this->session->userdata('user_id');

if(!$user_id){

  redirect('user/login_view');
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Profile Dashboard-CodeIgniter Login Registration</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  </head><!-- 
  <body> -->

<div class="container">
  <div class="row">
    <div class="col-md-4">

      <table class="table table-bordered table-striped">


        <tr>
          <th colspan="2"><h4 class="text-center">User Info</h3></th>

        </tr>
          <tr>
            <td>UserName</td>
            <td><?php echo $this->session->userdata('user_username'); ?></td>
          </tr>
          <tr>
            <td>Department Name</td>
            <td><?php echo $this->session->userdata('user_department_name');  ?></td>
          </tr>
          <tr>
            <td>Type</td>
            <td><?php echo $this->session->userdata('user_type');  ?></td>
          </tr>
      </table>


    </div>
  </div>
<a href="<?php echo base_url('main/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
<a href="<?php echo base_url('main/user_register_view');?>" >  <button type="button" class="btn-primary">Register</button></a>
</div>
  </body>
</html>
