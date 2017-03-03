<?php
session_start();
	require_once 'smarty_config.php';
	date_default_timezone_set('PRC'); //设置中国时区
	
	
	$smarty->assign("member", $_SESSION["member"]);
//	$smarty->assign("head", "行政汇报表");
	
	$smarty->assign("button", "添加");
	
	$smarty->assign("cz", "添加");
	$smarty->assign("path2","行政汇报信息");
	

	
	$flag = $_REQUEST["flag"];
	
	if ($flag == "t_add_self"){ //  团
		$smarty->assign("unit",$_SESSION["member"]["s_name"]."团部");
		$smarty->assign("flag", "t_add");
		$smarty->assign("action", "WorkController.php?flag=t_add");
	}else{  // 营， 连
		if($_SESSION["member"]['role'] == 5){  // 营级
			$smarty->assign("unit",$_SESSION["member"]["s_name"]."营部");
			$smarty->assign("unitNum", "5");
		}else{
			$smarty->assign("unit",$_SESSION["member"]["s_name"]);
			$smarty->assign("unitNum", "9");
		}
		$smarty->assign("flag", "add");
		$smarty->assign("action", "WorkController.php?flag=add");
	}
	
	$smarty->display("WorkEdit.tpl");