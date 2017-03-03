<?php
session_start();
	require_once 'smarty_config.php';
	date_default_timezone_set('PRC'); //设置中国时区
	
	
	$smarty->assign("member", $_SESSION["member"]);
	$smarty->assign("unit", $_SESSION['member']['s_name']);
	$smarty->assign("path2", "干部跟班新记录");
	$smarty->assign("action", "GbgbController.php?flag=add");
	$smarty->assign("button", "添加");
	$smarty->assign("flag", "add");
	$smarty->assign("cz", "添加");
//	$smarty->assign("time", date("Y-m-d H:i:s"));
	$smarty->assign("time", date("Y-m-d"));

	$smarty->display("GbgbEdit.tpl");
//	$smarty->display("gbadd.html");