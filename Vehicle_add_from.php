<?php
	session_start();
	require_once 'include/common/Tools.class.php';
	require_once 'include/model/vehicle.class.php';
	require_once 'smarty_config.php';
	date_default_timezone_set('PRC'); //设置中国时区
	
	
	$smarty->assign("member", $_SESSION["member"]);
	
	
	$smarty->assign("position", "位置：车辆动用情况/添加登记");
	$smarty->assign("action", "VehicleController.php?flag=add");
	$smarty->assign("button", "添加");
	$smarty->assign("flag", "add");
	$smarty->assign("cz", "添加");
	$smarty->assign("path2", "车辆动用情况");
	$smarty->assign("time", date("Y-m-d"));
//	$smarty->assign("unit", $_SESSION["member"]["s_name"]);
	$smarty->assign("unit", Tools::UnitAllName($_SESSION["member"]["role"], $_SESSION["member"]["s_name"]));

	$vehicleManager = new vehicle();
	$res = $vehicleManager->getXiaShuByY_unit_id($_SESSION['member']['unit_id']);

	$smarty->assign("unitList",$res);
	$smarty->display("VehicleEdit.tpl");