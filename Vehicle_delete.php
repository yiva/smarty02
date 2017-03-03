<?php
	session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/vehicle.class.php';
	require_once 'include/common/Tools.class.php';
	date_default_timezone_set('PRC'); //设置中国时区
	
	$smarty->assign("member", $_SESSION["member"]);	
	$flag = $_REQUEST['flag'];
	$id = $_REQUEST["id"];
	if ($flag == "t_delete"){
		
		$vehic = new vehicle();
		$res = $vehic->delVehicle($id);
		if($res == 1){
			Tools::alert("删除成功!!");
		}else{
			Tools::alert("删除失败!!请重新操作...");
		}
		Tools::jump("VehicleController.php?flag=getAllTuan");
	}else{  // 连
		$vehic = new vehicle();
		$res = $vehic->delVehicle($id);
		if($res == 1){
			Tools::alert("删除成功!!");
		}else{
			Tools::alert("删除失败!!请重新操作...");
		}
//		Tools::jump("VehicleController.php?flag=fenye");
		Tools::jump("VehicleController.php?flag=getAllListByYing");
	}
	
	
	