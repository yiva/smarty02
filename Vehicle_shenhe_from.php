<?php
	session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/vehicle.class.php';
	require_once 'include/model/reviewerManager.class.php';
	
	$smarty->assign("member", $_SESSION["member"]);	
	
	$smarty->assign("position", "位置：车辆动用情况/审核");
	$smarty->assign("action", "VehicleController.php?flag=shenheUpdate");
	$smarty->assign("button", "审核");
	$smarty->assign("flag", "shenhe");
	$smarty->assign("path2", "车辆动用情况");
	$smarty->assign("cz", "审核");
	
	$id = $_REQUEST["id"];
	//  得到指定实体类
	$vehicleClass = new vehicle();
	$vehicle = $vehicleClass->getVehicleById($id);
	$smarty->assign("vehicle",$vehicle[0]);
	//  得到审核人
	$reviewer = new reviewerManager();
	$reviewers = $reviewer->getAllReviewer();
	$smarty->assign("reviewer",$reviewers);
	$smarty->display("VehicleEdit.tpl");