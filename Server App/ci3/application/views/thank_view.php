<div id="content">
<div class="signup_wrap">
<div class="signin_form">
<center>
<div style="margin-top:90px">
            <p class="one">Sign In</font></p>
	<?php echo form_open("user/login"); ?>
	    <input type="text" id="email" name="email"  placeholder="Email"  required /></br>
    	<input type="password" id="pass" name="pass" placeholder="Password"  required /></br>
    	</br>
    	<input name="login" type="submit" value=" Login "></p>
        
    <?php echo form_close(); ?>
    </center>
 
</div><!--<div class="signin_form">-->
</div><!--<div class="signup_wrap">-->
</div><!--<div id="content">-->