<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="login-page">
  <div class="form">
 <form action="<?php echo base_url(); ?>adminpage/login" method="post" class="login-form">
        <h3>Administrator Login</h3>
      <input name="usernameLogin" type="text" placeholder="username" autofocus="autofocus"/>
      <input name="passwordLogin" type="password" placeholder="password"/>
      <input type="submit">
    </form>
     
  </div>
</div>

