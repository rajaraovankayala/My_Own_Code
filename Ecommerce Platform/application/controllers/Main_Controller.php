<?php
/**
 * Created by PhpStorm.
 * User: Rajarao.Vankayala
 * Date: 3/26/2018
 * Time: 4:32 PM
 */

class Main_Controller extends CI_Controller
{
    var $category=array();
    var $data=array();
    public function __construct()
    {
        parent::__construct();
        $this->load->model("crud_operations");
        $this->data["fetch_data"]=$this->crud_operations->fetch_data();
        $this->category["men"]=$this->crud_operations->fetch_data_men();
        $this->category["Womens"]=$this->crud_operations->fetch_data_women();
        $this->category["kids"]=$this->crud_operations->fetch_data_kid();
        $this->category["home"]=$this->crud_operations->fetch_data_home();

    }

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
            <?php
            $category=$this->category;
            $data=$this->data;
            $this->load->view('header',$category);
            $this->load->view("products_info",$data);
            $this->load->view('footer');
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
        $category=$this->category;
        $this->load->view('header',$category);
        $result_sub_category_products["get_sub_category_products"]=$this->crud_operations->get_category_wise_products($category_name,$sub_category);
        $this->load->view('category_wise_produts_display',$result_sub_category_products);
        $this->load->view('footer');
        //echo $this->input->get('product_id');
    }
}