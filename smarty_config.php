<?php
	require_once 'libs/Smarty.class.php';
	header("Content-type: text/html; charset=utf-8");
	date_default_timezone_set('PRC'); //设置中国时区
	
	$smarty = new Smarty();
	
	$smarty->config_dir = "libs/Config_File.class.php";
	
	$smarty->caching = false;
	
	$smarty->template_dir = "./templates";
	
	$smarty->compile_dir = "./template_c";
	
	$smarty->cache_dir = "smarty_cache";
	
	$smarty->left_delimiter = "--{";
	
	$smarty->right_delimiter = "}--";
	
	
	
	