<?php
/**
 * Created by PhpStorm.
 * User: Rajarao.Vankayala
 * Date: 4/13/2018
 * Time: 11:03 AM
 */

class products_category extends CI_Controller
{
    public function get_product_sub_category()
    {
       // $sub_category=$this->input->post("Men_category");
        //echo $sub_category;
        $category=$this->input->get('category');
        $sub_category= $this->input->get('sub_category');
        echo $category;
        $this->load->model('crud_operations');
        $result_sub_category_products["get_sub_category_products"]=$this->crud_operations->get_category_wise_products($category,$sub_category);
        $this->load->view('header',$category);

    }
}