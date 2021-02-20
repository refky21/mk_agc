<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

        // Get Itunes;


        $youtubeTrend = getYoutubeTopSong(15);

		// New Indonesia
		$indonesia = getItunesPlaylist('id',5);

	
		$data['trending'] = $youtubeTrend;
		$data['indonesia'] = $indonesia;
		$data['title'] = 'Situs Download MP3 | Gratis Download MP3';
		$data['keywords'] = 'Download MP3 Gratis,download lagu gratis, download lagu terbaru, download lagu populer, download lagu dangdut, download lagu pop indonesia';
		
		$this->output->cache(5);
		$this->load->view('themes/v1/base/header',$data);
		$this->load->view('themes/v1/home',$data);
		$this->load->view('themes/v1/base/footer',$data);
	}


	
}
