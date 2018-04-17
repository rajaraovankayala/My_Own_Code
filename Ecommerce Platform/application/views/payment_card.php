<?php
/**
 * Created by PhpStorm.
 * User: Rajarao.Vankayala
 * Date: 4/5/2018
 * Time: 2:34 PM
 */
?>

<h2>Credit card/Debit card</h2>
<input type='button'  value='Card details'/>
    <?php echo form_open('Payment_process/validate_card');?>

<table border="1">
    <tr>
        <td>
            <label>Card Number:</label>
             <?php echo form_input(array('name'=>'card_number'));
            ?>
        </td>
        <td>
            <label>CVV</label>
           <?php echo form_input(array('name'=>'cvv'));?>
        </td>
    </tr>
    <tr>
        <td>
            <center><label>Card holder Name</label>
                <?php echo form_input(array('name'=>'card_holder_name'));?></center>
        </td>
        <td>
               <center><label>Valid</label>
                   <?php echo form_input(array('name'=>'valid'));?></center>
        </td>
    </tr>
</table><br/>
<?php echo form_submit(array('name'=>'proceed_payment'),'Proceed payment');
    echo validation_errors();?>
    <?php echo form_close();
echo $this->benchmark->elapsed_time()."<br/>";
echo $this->benchmark->memory_usage()."<br/>";
echo $this->input->ip_address();
echo $this->input->user_agent();
?>