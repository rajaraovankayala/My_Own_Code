<?php
/**
 * Created by PhpStorm.
 * User: Rajarao.Vankayala
 * Date: 3/26/2018
 * Time: 4:32 PM
 */

class Main_Controller extends CI_Controller
{

    public function index()
    {
        $user=$this->session->userdata('username');
        if(!isset($user))
        {
            $this->load->view('login');
        }
        if ($this->session->userdata('username') != '')
        {
                       ?>
            <?=anchor('Login_controller/logout', 'Logout');?><br/><br/>
            <?=anchor('Payment_process/payment_methods', 'Payment process');?>
            <?php
            $this->load->model("crud_operations");
            $data["fetch_data"]=$this->crud_operations->fetch_data();
            $category["men"]=$this->crud_operations->fetch_data_men();
            $category["Womens"]=$this->crud_operations->fetch_data_women();
            $category["kids"]=$this->crud_operations->fetch_data_kid();
            $category["home"]=$this->crud_operations->fetch_data_home();
            $this->load->view('header',$category);
           $this->load->view("products_info",$data);
        }
        else
        {
            $this->index();
        }
    }
    public function get_product_details()
    {
        $category_name=$this->input->get('category');
        $sub_category= $this->input->get('sub_category');
        $this->load->model('crud_operations');
        $category["men"]=$this->crud_operations->fetch_data_men();
        $category["Womens"]=$this->crud_operations->fetch_data_women();
        $category["kids"]=$this->crud_operations->fetch_data_kid();
        $category["home"]=$this->crud_operations->fetch_data_home();
        $this->load->view('header',$category);
        $result_sub_category_products["get_sub_category_products"]=$this->crud_operations->get_category_wise_products($category_name,$sub_category);
        $this->load->view('category_wise_produts_display',$result_sub_category_products);
    }
}