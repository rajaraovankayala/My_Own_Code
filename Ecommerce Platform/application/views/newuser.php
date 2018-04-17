<?php
/**
 * Created by PhpStorm.
 * User: Rajarao.Vankayala
 * Date: 3/28/2018
 * Time: 4:04 PM
 */
?>
<?php echo form_open('Newuser_controller/validate_user_credentials');?>
<?php echo validation_errors();?>
    <label>Username</label>
<?php echo form_input(array('name'=>'username'));?><br/>
    <label>Phone</label>
<?php echo form_input(array('name'=>'phone'));?><br/>
    <label>Email</label>
<?php echo form_input(array('name'=>'email'));?><br/>
    <label>House No</label>
<?php echo form_input(array('name'=>'house_no'));?><br/>
    <label>City</label>
<?php echo form_input(array('name'=>'city'));?><br/>
    <label>Country</label>
<?php echo form_input(array('name'=>'country'));?><br/>
    <label>Pincode</label>
<?php echo form_input(array('name'=>'pincode'));?><br/>
    <label>Password</label>
<?php echo form_password(array('name'=>'password'));?><br/>
<?php echo form_submit(array('name'=>'submit'),'Register');?>
<?php echo form_close();?>