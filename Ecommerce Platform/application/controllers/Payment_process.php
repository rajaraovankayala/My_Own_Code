<?php
/**
 * Created by PhpStorm.
 * User: Rajarao.Vankayala
 * Date: 3/30/2018
 * Time: 11:47 AM
 */

class Payment_process extends CI_Controller
{
    public function payment_methods()
    {
        $this->load->view('display_payment_methods');
    }
    public function cards()
    {
        $this->load->view('display_payment_methods');
        $this->load->view('payment_card');

    }
    public function net_banking()
    {
        $this->load->view('display_payment_methods');
        $this->load->view('payment_netbanking');
    }
    public function wallets()
    {
        $this->load->view('display_payment_methods');
        $this->load->view('payment_wallets');
    }
    public function cash_on_delivery()
    {
        $this->load->view('display_payment_methods');
        echo "<h3>cash on delivery</h3>";?>

         <?=anchor('Payment_process/invoice', 'Generate Invoice');?>
    <?php
    }
    public function validate_card()
    {
        $this->form_validation->set_rules('card_number','Card Number','required');
        $this->form_validation->set_rules('cvv','CVV','required');
        $this->form_validation->set_rules('card_holder_name','Card holder name','required');
        $this->form_validation->set_rules('valid','Valid','required');
        if($this->form_validation->run())
        {
            $this->load->view('payment_gateway_page');
        }
        else
        {
            $this->cards();
        }
    }
}