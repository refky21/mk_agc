<?php
// API YT = AIzaSyCZeyepaUrGejdBzhAfr23NCQtgLkuhTFo

// URL
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function index($id_video = '')
	{

        $id = substr($id_video,0,11);
        $title_id = substr($id_video, 12);

        $title = get_title($title_id);

        if(empty($id_video)){
            show_404();
        }
       
        $data['id_video'] = $id;
        $data['title_meta'] = $title;

        $data['title'] = 'Detail MP3 | '.$title;

        $this->load->view('themes/v1/base/header',$data);
        $this->load->view('themes/v1/detail', $data);
        $this->load->view('themes/v1/base/footer',$data);
	}
}