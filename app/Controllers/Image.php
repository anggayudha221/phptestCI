<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Image extends CI_Controller {
	

	public function index()
	{	$this->load->view('image');
		if($this->input->post('uploadImage'))
		{
			$image = time().'-'.$_FILES["image"]['name'];

			$config = array(
			'upload_path' => "./uploads/",
			'allowed_types' => "gif|jpg|png|jpeg|JPEG|JPG|PNG|GIF",
			'overwrite' => TRUE,
			'max_size' => "99999999999",
			'max_height' => "800",
			'max_width' => "1500",
			'file_name' => $image
			);

			$this->load->library('upload', $config); 
			
			if($this->upload->do_upload('image'))
			{
				$res['msg']="Image has been uploaded!";
				$this->load->view('image', $res);
			}
			else
			{
				
			}
		}
	}
}