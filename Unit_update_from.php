<?php
session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/unitManager.class.php';
	date_default_timezone_set('PRC'); //设置中国时区
	
	
	$smarty->assign("member", $_SESSION["member"]);
	
	$smarty->assign("position", "位置：单位管理/修改");
	$smarty->assign("action", "UnitController.php?flag=update");
	$smarty->assign("button", "修改");
	$smarty->assign("flag", "update");
	$smarty->assign("cz", "修改");

	$id = $_REQUEST["id"];
	$unitManager = new unitManager();
	$unit = $unitManager->getUnitById($id);
	
	$smarty->assign("unit", $unit[0]);
	$smarty->display("UnitEdit.tpl");