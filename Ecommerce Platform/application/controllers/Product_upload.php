<?php
/**
 * Created by PhpStorm.
 * User: Rajarao.Vankayala
 * Date: 4/9/2018
 * Time: 4:06 PM
 */

class product_upload extends CI_Controller
{
    public function index()
    {
        //$msg="Please add the Picture";
        $this->load->view('img_upload');

    }
    public function do_upload()
    {
        $config['upload_path']='./images/products/';
        $config['allowed_types']='jpg|jpeg|png';
        $config['max_size']=100;
        $config['max_width']=1024;
        $config['max_height']=768;
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('filename'))
        {
            $error=array('error'=> $this->upload->display_errors());
            $this->load->view('img_upload',$error);
        }
        else
        {
            //inserting image to the images/products folder.
            $upload_data = $this->upload->data();
            $fileext=$upload_data['file_ext'];
            $filename=$upload_data['file_name'];
            $getcategory=$this->input->post('category-type');
            $get_sub_category=$this->input->post('sub_category');
            echo $getcategory;
            echo $get_sub_category;
            $filename_without_extension=basename($filename,$fileext);
            $newpath=time().''.$fileext;
            $config['image_library']='gd2';
            $config['source_image']='./images/products/'.$filename;
            $config['new_image']='./images/products/'.$newpath;
            $config['create_thumb']=TRUE;
            $config['maintain_ratio']=FALSE;
            $config['width']=300;
            $config['height']=200;
            $this->load->library('image_lib',$config);
            $this->image_lib->resize();
            if ( ! $this->image_lib->resize())
            {
                echo $this->image_lib->display_errors();
            }
            $thumbimage=basename($newpath,$fileext);
            $thumbimage;
            $imagepath=$thumbimage."_thumb".$fileext;
            $data=array(
                'picture' => $imagepath,
                'product_id' =>$thumbimage,
                'product_name' =>$filename_without_extension,
                'category' =>$getcategory,
                'sub_category' =>$get_sub_category
            );
            //inserting image into database
            $this->load->model('crud_operations');
            $result=$this->crud_operations->product_upload($data);
            if($result)
            {
                echo "inserted";
            }
            else
            {
                echo "not inserted";
            }
            echo anchor('Product_upload\index','Add another product');
        }
    }
}