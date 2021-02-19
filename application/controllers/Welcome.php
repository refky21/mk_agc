<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

		
		$trending = 'https://youtube.googleapis.com/youtube/v3/videos?part=snippet&part=contentDetails&chart=mostPopular&maxResults=10&videoCategoryId=10&type=video&key=AIzaSyCZeyepaUrGejdBzhAfr23NCQtgLkuhTFo';

		$json =  file_get_contents($trending);
        $arr = json_decode($json,true);
        $i = 0 ;
        if(isset($arr['items'])){
            foreach ($arr['items'] as $item) {
                $results[$i] = [
                    'id' => $item['id'],
                    'judul' => $item['snippet']['title'],
                    'description' => $item['snippet']['description'],
                    'thumbnails' => $item['snippet']['thumbnails']['high']['url'],
                    'uploader' => $item['snippet']['channelTitle'],
                ];
                $i++;
            }
		}

		// New Indonesia
		$indonesia = 'https://youtube.googleapis.com/youtube/v3/videos?part=snippet&part=contentDetails&regionCode=id&chart=mostPopular&maxResults=10&videoCategoryId=10&type=video&key=AIzaSyCZeyepaUrGejdBzhAfr23NCQtgLkuhTFo';

		$json =  file_get_contents($indonesia);
        $arr = json_decode($json,true);
        $i = 0 ;
        if(isset($arr['items'])){
            foreach ($arr['items'] as $item) {
                $indo[$i] = [
                    'id' => $item['id'],
                    'judul' => $item['snippet']['title'],
                    'description' => $item['snippet']['description'],
                    'thumbnails' => $item['snippet']['thumbnails']['high']['url'],
                    'uploader' => $item['snippet']['channelTitle'],
                ];
                $i++;
            }
		}

		$data['trending'] = $results;
		$data['indonesia'] = $indo;
		$data['title'] = 'Situs Download MP3 | Gratis Download MP3';
		
		$this->output->cache(5);
		$this->load->view('themes/v1/base/header',$data);
		$this->load->view('themes/v1/home',$data);
		$this->load->view('themes/v1/base/footer',$data);
	}


	
}
