<div class="reg_form">
<center>
<div style="margin-top:100px">
            <p class="one">Sign Up</font></p>
	<?php echo form_open("user/registration"); ?>
			<input type="text" id="user_name" placeholder="Username" name="user_name" value="<?php echo set_value('user_name'); ?>" /></br>
            <?php echo form_error('user_name', '<div class="error">', '</div>'); ?>
			<input type="text" id="email_address" placeholder="Email" name="email_address" value="<?php echo set_value('email_address'); ?>" /></br>
            <?php echo form_error('email_address', '<div class="error">', '</div>'); ?>
			<input type="password" id="password" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>" /></br>
            <?php echo form_error('password', '<div class="error">', '</div>'); ?>
			<input type="password" id="con_password" placeholder="Re-Password" name="con_password" value="<?php echo set_value('con_password'); ?>" /></br>
            <?php echo form_error('con_password', '<div class="error">', '</div>'); ?></br>
            
			<input type="submit" value="Submit" />
   <!--?php echo validation_errors('<p class="error">'); ?-->
	<?php echo form_close(); ?>
    </br>
    <a style="margin-left:200px" href="<?php echo base_url() ?>index.php/user/user_login">Back to Login</a>
    </center>
</div><!--<div class="reg_form">-->    
</div><!--<div id="content">-->