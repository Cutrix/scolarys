<?php if (!defined('BASEPATH')) exit('Ne pas executer depuis l\'url ');

if (!function_exists('css_url')) {
	function css_url($nom) {
		return base_url().'assets/css/'.$nom.'.css';
	}	
}

if (!function_exists('js_url')) {	
	function js_url($nom) {
		return base_url().'assets/js/'.$nom.'.js';
	}
}

if (!function_exists('img_url')) {	
	function img_url($nom) {
		return base_url().'assets/images/'.$nom;
	}
}

if (!function_exists('img')) {
	function img($nom, $alt='') {
		return '<img src="' .img_url($nom). '" alt="' .$alt.'" >';	
	}
}

if (!function_exists('current_db_time')) {
    function current_db_time() {
        return date('Y-m-d H:i:s');
    }
}