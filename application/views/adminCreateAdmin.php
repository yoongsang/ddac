<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php include 'inc/adminheader.php'; ?>

<form action="<?php echo base_url(); ?>adminCreateAdmin/createAdmin" method="POST" class="bootstrap-frm" >
    <h1>Create Admin</h1>
  Username:<br>
  <input type="text" name="admin_username" >
  <br>
  Password:<br>
  <input type="text" name="admin_password" >
  <br>
  Name:<br>
  <input type="text" name="admin_name">
  <br>
  <br>
  <input type="submit" value="Create">
</form>





<?php include 'inc/footer.php'; ?>
