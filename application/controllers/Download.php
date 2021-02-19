<?php
// API YT = AIzaSyCZeyepaUrGejdBzhAfr23NCQtgLkuhTFo

// URL
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

	public function index($pencarian)
	{
       


		$this->load->view('themes/v1/download');
	}
}
