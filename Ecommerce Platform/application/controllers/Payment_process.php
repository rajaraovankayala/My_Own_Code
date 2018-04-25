<?php
/**
 * Created by PhpStorm.
 * User: Rajarao.Vankayala
 * Date: 3/30/2018
 * Time: 11:47 AM
 */

class Payment_process extends CI_Controller
{
    var $category=array();
    var $data=array();
    public function __construct()
    {
        parent::__construct();
        $this->load->model("crud_operations");
        $this->category["men"]=$this->crud_operations->fetch_data_men();
        $this->category["Womens"]=$this->crud_operations->fetch_data_women();
        $this->category["kids"]=$this->crud_operations->fetch_data_kid();
        $this->category["home"]=$this->crud_operations->fetch_data_home();

    }
    public function payment_methods()
    {
        $category=$this->category;
        $this->load->view('header',$category);
        $this->load->view('payment_gateway');
        $this->load->view('footer1');
    }
    public function cards()
    {
        $category=$this->category;
        $this->load->view('header',$category);
        $this->load->view('payment_gateway');
        $this->load->view('payment');
        $this->load->view('footer1');

    }
    public function net_banking()
    {
        $category=$this->category;
        $this->load->view('header',$category);
        $this->load->view('payment_gateway');
        $this->load->view('payment_netbanking');
        $this->load->view('footer1');
    }
    public function wallets()
    {
        $category=$this->category;
        $this->load->view('header',$category);
        $this->load->view('payment_gateway');
        $this->load->view('payment_wallets');
        $this->load->view('footer1');
    }
    public function cash_on_delivery()
    {
        $category=$this->category;
        $this->load->view('header',$category);
        $this->load->view('payment_gateway');
        $this->load->view('generate_invoice');
        $this->load->view('footer1');
    }
    public function validate_card()
    {
       
        $this->load->view('payment_gateway_page');
        
    }
}