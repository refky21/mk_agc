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

function getYoutubeTopSong($limit='20')
{
		$getApiYoutube = get_apikey_youtube();

		$trending = 'https://youtube.googleapis.com/youtube/v3/videos?part=snippet&part=contentDetails&chart=mostPopular&maxResults='.$limit.'&videoCategoryId=10&type=video&key='.$getApiYoutube;

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

		return $results;
}


function getYoutubeSearch($query){
	$url = "https://youtube.googleapis.com/youtube/v3/search?part=snippet&maxResults=20&order=relevance&type=video&q=".urlencode($query)."&key=".get_apikey_youtube();
        
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

	return $results;
}

function getItunesPlaylist($country='',$limit='20')
{
	$url = "https://rss.itunes.apple.com/api/v1/".$country."/itunes-music/top-songs/all/".$limit."/explicit.json";
	$json =  file_get_contents($url);
    $arr = json_decode($json,true);
    $i = 0 ;
    if(isset($arr['feed']['results'])){
        foreach ($arr['feed']['results'] as $item) {
            $results[$i] = [
                'artistName' => $item['artistName'],
                'releaseDate' => $item['releaseDate'],
                'name' => $item['name'],
                'thumbNail' => $item['artworkUrl100'],
                'songName' =>  $item['artistName'].' - '.$item['name'],
            ];
            $i++;
        }
	}
	
	return $results;
}


function autoSearchSitemap($str){
	$search = $str;
	$maxhistory = 25;
	$lastsearchfile = FCPATH.'keywoard/sitemap.txt';
	$lastsearch = file($lastsearchfile,FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	if($search) $history[] = $search;
		if(is_array($lastsearch)) {
			$i=count($history);
			foreach($lastsearch as $k => $v) {
				if($v != $search && $i < $maxhistory) {
					$history[] = $v;
					$i++;
				}
			}
	}
	if($history) {
		file_put_contents($lastsearchfile, join("\n", $history));
	}
	return $history;
}


function get_kw()
{
	$kw1 = file(FCPATH.'keywoard/kw1.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	shuffle($kw1);
	$kw1 = array_slice($kw1,0,20);
	return $kw1;
}

function getSitemap($limit)
{
	$sitemap = file(FCPATH.'keywoard/sitemap.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	shuffle($sitemap);
	$sitemap = array_slice($sitemap,0,$limit);
	return $sitemap;
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