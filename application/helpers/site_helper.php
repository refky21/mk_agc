<?php
function getConfig(){
	$config = json_decode(file_get_contents(FCPATH.'config/site.json'));

	return $config;
}


function siteBase($key){
	
	$json = getConfig();
	// Cek Permintaan Parameter
	
	if($key == 'siteName'){
		return $json->siteName;
	}elseif($key == 'siteDesc'){
		return $json->siteDesc;
	}elseif($key == 'siteAuthor'){
		return $json->siteAuthor;
	}elseif($key == 'siteKeywords'){
		return $json->siteKeywords;
	}elseif($key == 'siteLogo'){
		return $json->siteLogo;
	}elseif($key == 'Ads1'){
		return $json->Ads1;
	}elseif($key == 'Ads2'){
		return $json->Ads2;
	}elseif($key == 'Ads3'){
		return $json->Ads3;
	}elseif($key == 'AdsPopup'){
		return $json->AdsPopup;
	}elseif($key == 'textDesc'){
		$query = $json->textDesc;
		$text = str_replace( '%site_name%',$json->siteName,  $query );
		return $text;
	}
	
	return $json;
}

function search_permalink($str){
    return base_url('music/'.url_title($str));
}

function single_permalink($id,$judul){
    return base_url('detail/'.url_title($id).'-'.url_title($judul));
}

function get_title($str){
    return  str_replace('-',' ', $str);
}


function get_kw()
	{
		$kw1 = file(FCPATH.'keywoard/kw1.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		// $kw2 = file(FCPATH.'keywoard/kw2.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		shuffle($kw1);

		$kw1 = array_slice($kw1,0,20);
		return $kw1;
	}
	
function spin($string){
	$spintax = new Spintax();
	return $spintax->process($string);
}

function get_apikey_youtube(){
	$api_keys = getConfig()->ApiYoutube;

	if ( $api_keys ) {
		$exp_api_keys = explode( ',', $api_keys );
		shuffle( $exp_api_keys );
		return $exp_api_keys[0];
	  }
}