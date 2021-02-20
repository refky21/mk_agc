<?php
// API YT = AIzaSyCZeyepaUrGejdBzhAfr23NCQtgLkuhTFo

// URL
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

	public function index()
	{
       
	   $data['videoId'] = $this->input->get('id');
	   $data['judulVideo'] = $this->input->get('title');
	   

		$data['title'] = 'Download Lagu | '.$this->input->get('title');
		$data['keywords'] = $this->input->get('title');
		//$this->output->cache(5);
		$this->load->view('themes/v1/base/header',$data);
		$this->load->view('themes/v1/download',$data);
		$this->load->view('themes/v1/base/footer',$data);
		
	}
}
