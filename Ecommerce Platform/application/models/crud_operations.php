<?php
/**
 * Created by PhpStorm.
 * User: Rajarao.Vankayala
 * Date: 3/28/2018
 * Time: 10:43 AM
 */

class crud_operations extends CI_Model
{
    public function fetch_data()
    {
        $resquery=$this->db->get("products");
        return $resquery;
    }
    public function fetch_category()
    {
        $this->db->select('category_name');
        $this->db->from('category_list');
        $main_category=$this->db->get();
        return $main_category;
    }
    public function fetch_data_men()
    {
        $this->db->distinct();
        $this->db->select('sub_category');
        $this->db->from('products');
        $this->db->where('category','Men');
        $Men_category=$this->db->get();
        return $Men_category;
    }
    public function fetch_data_women()
    {
        $this->db->distinct();
        $this->db->select('sub_category');
        $this->db->from('products');
        $this->db->where('category','Women');
        $women_category=$this->db->get();
        return $women_category;
    }
    public function fetch_data_kid()
    {
        $this->db->distinct();
        $this->db->select('sub_category');
        $this->db->from('products');
        $this->db->where('category','Kids');
        $kidcategory=$this->db->get();
        return $kidcategory;
    }
    public function fetch_data_home()
    {
        $this->db->distinct();
        $this->db->select('sub_category');
        $this->db->from('products');
        $this->db->where('category','Home_Living');
        $homecategory=$this->db->get();
        return $homecategory;
    }
    public function get_category_wise_products($category_name,$sub_category)
    {
        $this->db->select('picture,product_id,product_name,unit_price');
        $this->db->from('products');
        $this->db->where('category',$category_name);
        $this->db->where('sub_category',$sub_category);
        $get_sub_category_res=$this->db->get();
         return $get_sub_category_res;

    }

    public function getuserdetails($data)
    {
            $insert_query=$this->db->insert('personal_info',$data);
            return $insert_query;
    }
    public function product_upload($upload_data)
    {
        $insert_query=$this->db->insert('products',$upload_data);
        return $insert_query;
    }
    public function insert_product_to_cart($product_id)
    {
        $username=$this->session->userdata('username');
        $data=array(
                'username' => $username,
                'product_id' => $product_id
        );
        $this->db->set($data);
        $result=$this->db->insert('cart');
        return $result;
    }
    public function display_cart_products()
    {
        $username=$this->session->userdata('username');
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('cart','cart.product_id=products.product_id');
        $this->db->where('username',$username);
        $res=$this->db->get();
        return $res;
    }
    function get_product($productid)
    {
        $this->db->where('product_id',$productid);
        $query=$this->db->get('products');
        return $query->result();

    }
}