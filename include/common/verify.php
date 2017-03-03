<?php
	session_start();
	require_once 'Tools.class.php';
	require_once 'config.php';
	
	$img = imagecreate($config["verify_width"], $config["verify_height"]);
	
	$bgcolor=imagecolorallocate($img , 230 , 230 , 230);
	$fgcolor=imagecolorallocate($img , 0, 0, 0);
	
	$verify_text = Tools::getRandomString($config["verify_length"]);
	$_SESSION[$config["verify_session_name"]] = $verify_text;
	
	
	
	for($i=1;$i<=$config["verify_num_line"];$i++){
		imageline ( $img, rand(0, $config["verify_width"]), rand(0, $config["verify_height"]), rand(0, $config["verify_width"]), rand(0, $config["verify_height"]), imagecolorallocate($img , rand(0, 255),rand(0, 255), rand(0, 255)) );
		
	}
	
	imagettftext($img, 16, 0, 13, 20, $fgcolor,"ttf/TT0131M_.TTF", iconv("gbk","utf-8",$verify_text));
	//header("Content-type: image/jpeg");
	imagejpeg($img);
	
	