<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index($pencarian)
	{
        $replace = str_replace('-',' ', $pencarian);

        $putfile = autoSearchSitemap(strtolower($replace));
       
        
        $youtubepencarian = getYoutubeSearch($replace);
        
        $datas['music'] = $youtubepencarian;
        $datas['title_parameter'] = ucwords($replace);
        $data['title'] = 'Pencarian MP3 | '.ucwords($replace);
        $data['keywords'] = $replace;

		$this->output->cache(5);
        $this->load->view('themes/v1/base/header',$data);
        $this->load->view('themes/v1/search', $datas);
        $this->load->view('themes/v1/base/footer',$data);
    }
    

    public function cari()
    {
        $param = $this->input->get('q');
        $replace = str_replace(' ','-', $param);
        $direct = 'music/'.$replace;
        if(isset($param)){
            
            redirect(base_url($direct));
            
        }
    }
}
