<?php
/**
 * Created by PhpStorm.
 * User: Rajarao.Vankayala
 * Date: 3/26/2018
 * Time: 11:12 AM
 */?>
<?php echo form_open('Login_controller/validate_login');?>
<?php echo validation_errors();?>
    <label>Username</label>
<?php echo form_input(array('name'=>'username'));?><br/>
    <label>Password</label>
<?php echo form_password(array('name'=>'password'));?><br/>
<?php echo form_submit(array('name'=>'submit'),'Login');?>
<?php echo $this->session->flashdata("error");?>

<?php echo form_close();?>