
<?php
//网站配置文件，集中存储网站的各种配置信息 
$config["webname"] = "";
$config["unitTmp"] = "团机关";

 
//验证码配置
$config["verify_width"] = 80;				//验证码图片宽度
$config["verify_height"] = 23;				//验证码图片高度
$config["verify_num_line"] = 20;			//验证码干扰线数量
$config["verify_num_point"] = 20;		//验证码扰点线数量
$config["verify_length"] = 4;				//验证码字符长度
$config["verify_session_name"] = "verify";	//验证码session名称

//用户头像配置
$config["head_width"] = 30;
$config["head_height"] = 30;
$config["head_path"] = "uploads/head_images/";
$config["head_size"] = 1024*100;
$config["head_types"] = array("jpg","png", "gif");

//上传商品图片配置