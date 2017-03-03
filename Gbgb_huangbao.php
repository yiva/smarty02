<?php
session_start();
	//接收表单信息，实现分类的插入 
	require_once 'include/model/gbgb.class.php';
	require_once 'include/common/Tools.class.php';
	header("Content-type: text/html; charset=utf-8");
	date_default_timezone_set('PRC'); //设置中国时区
	//$smarty->assign("member", $_SESSION["member"]);
	
	
	$flag = $_REQUEST["flag"];
	$id = $_REQUEST["id"];
	
	$gbgbManager = new gbgb();
	if($flag == hb){
		$res = $gbgbManager->huangbaoControl("h", $id);
	}else{
		$res = $gbgbManager->huangbaoControl("", $id);
	}
	
	if($res == 1){
		Tools::alert("处理成功!!");
		
	}else{
		Tools::alert("处理失败!!请重新操作...");
	}
	
	// 判断身份来进行跳转到那个页面
		$role = $_SESSION['member']['role'];
		if ($role == 9){ // 连
			Tools::jump("GbgbController.php?flag=getAllList");
		}elseif ($role == 1 || $role == 2){
			Tools::jump("GbgbController.php?flag=getAllTuan");
		}
	
	