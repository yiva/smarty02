<?php
session_start();
	require_once 'smarty_config.php';
	date_default_timezone_set('PRC'); //设置中国时区
	
	
	$smarty->assign("member", $_SESSION["member"]);
	
	
	$smarty->assign("position", "位置：单位管理/添加");
	$smarty->assign("action", "UnitController.php?flag=add");
	$smarty->assign("button", "添加");
	$smarty->assign("flag", "add");
	$smarty->assign("cz", "添加");
	//$smarty->assign("time", date("Y-m-d H:i:s"));

	$smarty->display("UnitEdit.tpl");