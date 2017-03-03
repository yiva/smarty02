<?php
session_start();
	require_once 'smarty_config.php';
	require_once 'include/common/Tools.class.php';
	date_default_timezone_set('PRC'); //设置中国时区
	
	
	$smarty->assign("member", $_SESSION["member"]);
//	$smarty->assign("unit", $_SESSION['member']['s_name']);
	$smarty->assign("head", "通信值勤汇报");
	$smarty->assign("action", "txzqController.php?flag=add");
	$smarty->assign("button", "添加");
	$smarty->assign("unit", Tools::UnitAllName($_SESSION['member']['role'], $_SESSION['member']['s_name']));
	$smarty->assign("flag", "add");
	$smarty->assign("cz", "添加");
	$smarty->assign("time", date("Y-m-d H:i:s"));

	$smarty->display("txzqEdit.tpl");