<?php
// API YT = AIzaSyCZeyepaUrGejdBzhAfr23NCQtgLkuhTFo

// URL
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {

	public function index()
	{
		$this->output->set_content_type('text/xml');
		
		$data['keywoard'] = get_kw();
         $this->load->view('themes/v1/sitemap',$data);
    }
    

}
