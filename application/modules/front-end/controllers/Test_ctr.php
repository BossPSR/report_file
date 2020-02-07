<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_ctr extends CI_Controller {

	public function __construct()
    {
		parent::__construct();

    }

	public function index()
	{
        $notes = $this->input->post('file_name');
        
		$config                   = array();
        $config['allowed_types']  = 'pdf';
        $config['overwrite']      = TRUE;
        $config['remove_spaces']  = TRUE;

        $this->load->library('upload', $config);

        // Image manipulation library
        $this->load->library('image_lib');

        foreach ($notes['name'] as $key => $note) 
        {
            $_FILES['notes']['name']      = $notes['name'][$key];
            $_FILES['notes']['type']      = $notes['type'][$key];
            $_FILES['notes']['tmp_name']  = $notes['tmp_name'][$key];
            $_FILES['notes']['error']     = $notes['error'][$key];
            $_FILES['notes']['size']      = $notes['size'][$key];

            $extension                    = pathinfo($_FILES['notes']['name'], PATHINFO_EXTENSION);
            $unique_no                    = uniqid(rand(), true);
            $filename[$key]               = $unique_no.'.'.$extension; // with ex
            $filename2[$key]              = $unique_no; // without ex

            $target_path                  = "notes_files/";

            if (!is_dir($target_path))
            {
                mkdir('./'.$target_path, 0777, true);
            }

            $config['file_name']          = $filename[$key];
            $config['upload_path']        = './'.$target_path;

            $this->upload->initialize($config);

            if (! $this->upload->do_upload('notes')) 
            {
                return array('error' => $this->upload->display_errors());
            }

            // converting pdf to images with imagick
            $im             = new Imagick();
            $im->setResolution(160,220);

            $ig = 0;

            while(true)
            {
                try {
                    $im->readimage($config['upload_path'].$config['file_name']."[$ig]");
                } catch (Exception $e) {
                    $ig = -1;
                }

                if($ig === -1) break;

                $im->setImageBackgroundColor('white');
                $im->setImageAlphaChannel(imagick::ALPHACHANNEL_REMOVE);
                $im->mergeImageLayers(imagick::LAYERMETHOD_FLATTEN);
                $im->setImageFormat('jpg'); 

                $image_name     = $filename2[$key]."_$ig".'.jpg';
                $imageprops     = $im->getImageGeometry();

                $im->writeImage($config['upload_path'] .$image_name); 
                $im->clear(); 
                $im->destroy();

                // change file permission for file manipulation
                chmod($config['upload_path'].$image_name, 0777); // CHMOD file

                // add watermark to image
                $img_manip              = array();
                $img_manip              = array(
                    'image_library'     => 'gd2', 
                    'wm_type'           => 'overlay',
                    'wm_overlay_path'   => FCPATH . '/uploads/institutes/'.$institute_logo, // path to watermark image
                    'wm_x_transp'       => '10',
                    'wm_y_transp'       => '10',
                    'wm_opacity'        => '10',
                    'wm_vrt_alignment'  => 'middle',
                    'wm_hor_alignment'  => 'center',
                    'source_image'      => $config['upload_path'].$image_name
                );

                $this->image_lib->initialize($img_manip);
                $this->image_lib->watermark();

                ImageJPEG(ImageCreateFromString(file_get_contents($config['upload_path'].$image_name)), $config['upload_path'].$image_name, );

                $ig++;
            }

            // unlink the original pdf file
            chmod($config['upload_path'].$config['file_name'], 0777); // CHMOD file
            unlink($config['upload_path'].$config['file_name']);    // remove file
        }
        // echo '<p>Success</p>';exit;
        die(json_encode(array(
            'data' => 'Success',
            'status' => 'success'
        )));
		
	}

	
	
	
}