<?php
/**
 * Created by PhpStorm.
 * User: Rajarao.Vankayala
 * Date: 3/28/2018
 * Time: 4:03 PM
 */

class Newuser_controller extends CI_Controller
{
    public function newuser()
    {
        $this->load->view('newuser');

    }
    public function validate_user_credentials()
    {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('phone','Phone Number','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('house_no','House_no','required');
        $this->form_validation->set_rules('city','City','required');
        $this->form_validation->set_rules('country','Country','required');
        $this->form_validation->set_rules('pincode','Pincode','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run())
        {
            $this->load->model("crud_operations");
            //$personal_id=MD5($this->)
           $data=array(
               'username' => $this->input->post("username"),
               'phone' => $this->input->post("phone"),
               'email' => $this->input->post("email"),
               'password' => $this->input->post("password"),
               'house_no' => $this->input->post("house_no"),
               'city' => $this->input->post("city"),
            'country' => $this->input->post("country"),
            'postal_code' => $this->input->post("pincode")
                          );
            if($this->crud_operations->getuserdetails($data))
            {
                echo "successfully registered<br/>";
                ?>
                <?=anchor('Login_controller', 'Login');?><br/>
            <?php
            }
        }
        else
        {
            $this->newuser();
        }
    }
}