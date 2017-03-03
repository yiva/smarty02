<?php
	session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/vehicle.class.php';
	
	$smarty->assign("member", $_SESSION["member"]);	
	
	$smarty->assign("position", "位置：车辆动用情况/修改登记");
	
	$smarty->assign("button", "修改");
	$smarty->assign("flag", "update");
	$smarty->assign("path2", "车辆动用情况");
	$smarty->assign("cz", "修改");
	
	$flag = $_REQUEST['flag'];
	$id = $_REQUEST["id"];
	
	if($flag == "t_update"){ // 团修改
		$smarty->assign("action", "VehicleController.php?flag=t_update");
	}else{
		$smarty->assign("action", "VehicleController.php?flag=update");
	}
	
	//  得到指定实体类
	$vehicleClass = new vehicle();
	$vehicle = $vehicleClass->getVehicleById($id);
	$dateArray = explode("-", $vehicle[0]['runtime']);
	$smarty->assign("vehicle",$vehicle[0]);
	$smarty->assign("starttime",$dateArray[0]);
	$smarty->assign("stoptime",$dateArray[1]);
	
	$smarty->display("VehicleEdit.tpl");