<?php
/**
 * Created by PhpStorm.
 * User: Rajarao.Vankayala
 * Date: 3/26/2018
 * Time: 3:04 PM
 */

class main_model extends CI_Model
{
    public function validate_credentials($username,$password)
    {
        $this->db->where('phone',$username);
        $this->db->where('password',$password);
        $executequery=$this->db->get("personal_info");
        if($executequery->num_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }

    }
}