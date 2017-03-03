<?php
	session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/unitManager.class.php';
	require_once 'include/common/Tools.class.php';
	header("Content-type: text/html; charset=utf-8");
	
	date_default_timezone_set('PRC'); //设置中国时区
	$smarty->assign("member", $_SESSION["member"]);

	$flag = $_REQUEST["flag"];

	$unitManager = new unitManager();
	
	if($flag == "getAllList"){ //得到列表
		//echo $flag;
		// 调用列表方法
		$resList = $unitManager->getAllUnit();
		$smarty->assign("resList", $resList);
		$smarty->assign("cz", "列表");
		$smarty->display("UnitList.tpl");
		
	}else if($flag == "add"){
		
		$tyl1 = $_POST['tyl1'];
		
		$unitAdd = new unitManager();
		
		if($tyl1 == 1){  // 团
			$tuan = $_POST['tuan'];
			$res = $unitManager->addUnit($tuan, 0, 0);
			
			
		}elseif ($tyl1 == 2){ // 营
			$tuan = $_POST['tuan'];
			$ying = $_POST['ying'];
			$res = $unitManager->addUnit($tuan, $ying ,0);
			
		}elseif ($tyl1 == 3){ // 连
			$tuan = $_POST['tuan'];
			$ying = $_POST['ying'];
			$lian = $_POST['lian'];
			
			$res = $unitManager->addUnit($tuan, $ying, $lian);
		}
		
		if ($res == 1){
			Tools::alert("添加成功!!");
			Tools::jump("UnitController.php?flag=getAllList");
		}else{
			Tools::alert("添加失败!!请重新操作...");
			Tools::jump("UnitController.php?flag=getAllList");
		}
		
	}else if($flag == "update"){
		$id = $_REQUEST["id"];
		
		$unit_t = $_POST["unit_t"];
		$unit_y = $_POST["unit_y"];
		$unit_l = $_POST["unit_l"];
		
	    $unit = new unitManager();
	    $unit->unit_t = $unit_t;
	    $unit->unit_y = $unit_y;
	    $unit->unit_l = $unit_l;
	    
		$res = $unit->updateUnitById($id);
		if ($res == 1){
			Tools::alert("修改成功!!");
			Tools::jump("UnitController.php?flag=getAllList");
		}else{
			Tools::alert("添加失败!!请重新操作...");
			Tools::jump("UnitController.php?flag=getAllList");
		}
		
	}
	
?>