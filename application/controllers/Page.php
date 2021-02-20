<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function disclaimer()
	{   
        $data['title'] = '| Page - Disclaimer';
        $data['keywords'] = 'Download MP3 Gratis,download lagu gratis, download lagu terbaru, download lagu populer, download lagu dangdut, download lagu pop indonesia';
        $this->load->view('themes/v1/base/header',$data);
        $this->load->view('themes/v1/page/disclaimer', $data);
        $this->load->view('themes/v1/base/footer',$data);
    }
    
	public function copyright()
	{   
        $data['title'] = '| Page - Copyright';
        $data['keywords'] = 'Download MP3 Gratis,download lagu gratis, download lagu terbaru, download lagu populer, download lagu dangdut, download lagu pop indonesia';
        $this->load->view('themes/v1/base/header',$data);
        $this->load->view('themes/v1/page/copyright', $data);
        $this->load->view('themes/v1/base/footer',$data);
    }
    
	public function tos()
	{   
        $data['title'] = '| Page - Term Of Services';
        $data['keywords'] = 'Download MP3 Gratis,download lagu gratis, download lagu terbaru, download lagu populer, download lagu dangdut, download lagu pop indonesia';
        $this->load->view('themes/v1/base/header',$data);
        $this->load->view('themes/v1/page/tos', $data);
        $this->load->view('themes/v1/base/footer',$data);
	}
}
