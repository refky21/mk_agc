<?php
// API YT = AIzaSyCZeyepaUrGejdBzhAfr23NCQtgLkuhTFo

// URL
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index($pencarian)
	{
        $replace = str_replace('-',' ', $pencarian);
        
        $url = "https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=20&order=relevance&type=video&q=".urlencode($replace)."&key=AIzaSyCZeyepaUrGejdBzhAfr23NCQtgLkuhTFo";
        
        $json =  file_get_contents($url);
        $data = json_decode($json,true);
        $i = 0 ;
        if(isset($data['items'])){
            foreach ($data['items'] as $item) {
                $results[$i] = [
                    'id' => $item['id']['videoId'],
                    'judul' => $item['snippet']['title'],
                    'description' => $item['snippet']['description'],
                    'thumbnails' => $item['snippet']['thumbnails']['high']['url'],
                    'uploader' => $item['snippet']['channelTitle'],
                ];
                $i++;
            }
        }
        
        $datas['music'] = $results;
        $datas['title_parameter'] = ucwords($replace);
        $data['title'] = 'Pencarian MP3 | '.ucwords($replace);

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
