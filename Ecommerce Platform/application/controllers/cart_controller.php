<?php
/**
 * Created by PhpStorm.
 * User: Dinesh.Grandhi
 * Date: 4/13/2018
 * Time: 11:20 AM
 */
class Cart_controller extends CI_Controller
{
    var $category=array();

    public function __construct()
    {

        parent::__construct();
        $this->load->library('cart');
        $this->load->helper('url');
        $this->load->model('crud_operations');
        $this->category["men"]=$this->crud_operations->fetch_data_men();
        $this->category["Womens"]=$this->crud_operations->fetch_data_women();
        $this->category["kids"]=$this->crud_operations->fetch_data_kid();
        $this->category["home"]=$this->crud_operations->fetch_data_home();

    }

    public function add()
    {
        if($this->input->post('submit')=='Add to Cart')
        {
            $insert_data=array('id'=>$this->input->post('product_id'),'name'=>$this->input->post('name'),'price'=>$this->input->post('price'),'qty'=>1);
            $this->cart->insert($insert_data);

            redirect('Main_controller');
        }
        else
        {
            $id=$this->input->post('product_id');
            $data['items']=$this->crud_operations->get_product($id);
			$category=$this->category;
			$this->load->view('header',$category);
            $this->load->view('product_details',$data);
            $this->load->view('footer1');
        }
    }
    public function show_cart()
    {
        $category=$this->category;
		$this->load->view('header',$category);
        $this->load->view('cart_view');
        echo "<br/>";
        $this->load->view('footer1');
       
    }
    public function remove($rowid)
    {
        if($rowid=="all")
        {
            $_SESSION['totalitems']=0;
            $this->cart->destroy();
        }
        else
        {
            $_SESSION['totalitems']--;
            $data=array('rowid'=>$rowid,'qty'=>0);
            $this->cart->update($data);
        }
        redirect('cart_controller/show_cart');
    }

    public function update_cart()
    {
        $cart_info = $_POST['cart'] ;
        foreach( $cart_info as $id => $cart)
        {
            $rowid = $cart['rowid'];
            $price = $cart['price'];
            $amount = $price * $cart['qty'];
            $qty = $cart['qty'];

            $data = array(
                'rowid' => $rowid,
                'price' => $price,
                'amount' => $amount,
                'qty' => $qty );
            $this->cart->update($data);
        }
        redirect('home');
    }
    public function show_billing()
    {
        $category=$this->category;
		$this->load->view('header',$category);
        $this->load->view('billing_view');
        echo "<br/>";
        $this->load->view('footer');
    }
    public function save_order()
    {	$category=$this->category;
		$this->load->view('header',$category);
        redirect('payment_process/payment_methods');
        echo "<br/>";
        $this->load->view('footer');
    }


}

?>