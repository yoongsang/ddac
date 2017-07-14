<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="col-xs-12 col-md-12">
    <div class="col-md-12 col-xs-12">
       
        <div class="col-xs-12 col-md-12 formContainer">
             <h1>Welcome to PTMS</h1>
             <form id="form" method="post" action="<?php echo base_url(); ?>passengerpage/loginSignup">
               <div>
                   <input type="submit" name="login" class="buttonLogin button3Login" value="Login">
                   <input type="submit" name="signup" class="buttonLogin button3Login" value="Sign Up">
            </div>
            </form>
        </div>
    </div>
</div>
