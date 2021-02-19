<?php
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