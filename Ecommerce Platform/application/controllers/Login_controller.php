<?php
/**
 * Created by PhpStorm.
 * User: Rajarao.Vankayala
 * Date: 3/26/2018
 * Time: 11:09 AM
 */

class Login_controller extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');?>
        
        <?php
    }
    public function validate_login()
    {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run())
        {
            $this->load->model("main_model");
           $username = $this->input->post("username");
           $password =$this->input->post("password");

           if( $this->main_model->validate_credentials($username,$password))
           {
               $session_data=array(
                   "username" =>$username
               );
               $this->session->set_userdata($session_data);
               redirect('Main_controller');
			   		   
           }
           else
           {
               $this->session->set_flashdata('error','Invalid Username or password');
               redirect('Login_Controller');
           }
        }
        else
        {
            $this->index();

        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();
        $this->index();
    }
}