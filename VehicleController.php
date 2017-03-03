<?php
session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/vehicle.class.php';
	require_once 'include/model/reviewerManager.class.php';
	require_once 'include/common/Tools.class.php';
	require_once 'include/common/fenyePage.class.php';
	
	$smarty->assign("member", $_SESSION["member"]);	
	

	$flag = $_REQUEST["flag"];

	$vehic = new vehicle();
	
	if($flag == "getAllList"){ //得到列表
		
		$userid = $_SESSION['member']['id'];
		// 调用列表方法
		$resList = $vehic->getAllVehicleByUserid($userid, date("Y-m-d H:i:s"));
		//echo $res[1]['id'];
		//var_dump($res) ;
//		echo $resList;
//		exit();
		$smarty->assign("cz", "列表");
		$smarty->assign("flag", "normal");
		$smarty->assign("date", date("Y-m-d"));
		$smarty->assign("path2", "车辆动用情况");
		$smarty->assign("resList", $resList);
		$smarty->display("VehicleList.tpl");
	
	}else if($flag == "getAllListByYing"){
		
		$unit_id = $_SESSION['member']['unit_id'];
		// 调用列表方法
		$resList = $vehic->getAllVehicleByUserid2($unit_id, date("Y-m-d H:i:s"));
		//echo $res[1]['id'];
		//var_dump($res) ;
//		echo $resList;
//		exit();
		$smarty->assign("cz", "列表");
		$smarty->assign("flag", "normal");
		$smarty->assign("date", date("Y-m-d"));
		$smarty->assign("path2", "车辆动用情况");
		$smarty->assign("resList", $resList);
		$smarty->display("VehicleList.tpl");
		
	}else if($flag == "l_search"){
		$datetime = $_POST['datetime'];
		if($datetime == ""){
			$datetime = date("Y-m-d");
		}
		
		$unit_id = $_SESSION['member']['unit_id'];
		// 调用列表方法
		$resList = $vehic->getAllVehicleByUserid2($unit_id, $datetime);
		//echo $res[1]['id'];
		//var_dump($res) ;
		$smarty->assign("cz", "列表");
		$smarty->assign("flag", "normal");
		$smarty->assign("date", $datetime);
		$smarty->assign("path2", "车辆动用情况");
		$smarty->assign("resList", $resList);
		$smarty->display("VehicleList.tpl");
		
		
	}else if($flag == "fenye"){
		$userId = $_SESSION['member']['id'];
		// 创建一个分页对象
		$fenye = new fenyePage();
		// 给分页Page指定必须的数据
		$fenye->pageNow = 1;
		$fenye->pageSize = 6;
		if (!empty($_GET['pageNow'])){
			$fenye->pageNow = $_GET['pageNow'];
		}
		
		$vehic->getFenyePage($fenye, $userId);
		
		// 首页
		$shouye1 = "VehicleController.php?flag=fenye&pageNow=1";
		// 显示上一页  下一页
		if ($fenye->pageNow > 1){
			$prePage = $fenye->pageNow-1;
			$sahngyiye1 = "VehicleController.php?flag=fenye&pageNow=$prePage";
		}else{
			$sahngyiye1 =  "0";
		}
		if ($fenye->pageNow < $fenye->pageCount){
			$nextPage = $fenye->pageNow+1;
			$xiayiye1 = "VehicleController.php?flag=fenye&pageNow=$nextPage";
		}else{
			$xiayiye1 =  "0";
		}
		// 尾页
		$weiye1 = "VehicleController.php?flag=fenye&pageNow=$fenye->pageCount";
		
		
		$smarty->assign("shouye1",$shouye1);
		$smarty->assign("sahngyiye1",$sahngyiye1);
		$smarty->assign("xiayiye1",$xiayiye1);
		$smarty->assign("weiye1",$weiye1);
		
		$smarty->assign("flag", "fenye");
		$smarty->assign("resList", $fenye->res_array);
		$smarty->assign("cz", "列表");
		$smarty->assign("path2", "车辆动用情况");
		$smarty->assign("pageNow",$fenye->pageNow);
		$smarty->assign("pageCount",$fenye->pageCount);
		$smarty->display("VehicleList.tpl");
		
		
	}else if($flag == "add"){
		$plasetime = $_POST["time1"];
	    $task = $_POST["task"];
	    $unitId = $_POST["unit"];
	    $vehiclemo = $_POST["vehiclemo"];
//	    $startstopdistance = $_POST["startstopdistance"];
	    $start = $_POST["start"];
	    $stop = $_POST["stop"];
	    $distance = $_POST["distance"];
	    
//	    $runtime = $_POST["runtime"];
	    $start_n_timepicker = $_POST["start_n_timepicker"];
	    $end_n_timepicker = $_POST["end_n_timepicker"];
	    $driver = $_POST["driver"];
	    $supercarg = $_POST["supercarg"];
//	    $ratifier = $_POST["ratifier"];
//	    $remark = $_POST["remark"];
	    
	    $vehicAdd = new vehicle();
		$vehicAdd->plasetime = $plasetime;
		$vehicAdd->person_no = $unitId;
		$vehicAdd->task = $task;
		// 通过unitId得到单位名称
		$unitNameRes = $vehic->getUnitNameById($unitId);
		$vehicAdd->unit = $unitNameRes[0]['tmp_name'];
		$vehicAdd->vehiclemo = $vehiclemo;
		$vehicAdd->start = $start;
		$vehicAdd->stop = $stop;
		$vehicAdd->distance = $distance;
		$vehicAdd->runtime = $start_n_timepicker."-".$end_n_timepicker;
		$vehicAdd->driver = $driver;
		$vehicAdd->supercarg = $supercarg;
		$vehicAdd->ratifier = "";
		$vehicAdd->ratifier_id = "";
		$vehicAdd->remark = "";
		$vehicAdd->inputtime = date("Y-m-d H:i:s");
		$vehicAdd->tflag = 0;
		$vehicAdd->yflag = 0;
		$vehicAdd->submitflag = 1;


		$res = $vehicAdd->addVehicle();
		if ($res == 1){
			Tools::alert("添加成功!!");
		}else{
			Tools::alert("添加失败!!请重新操作...");
		}
//		Tools::jump("VehicleController.php?flag=fenye");
		Tools::jump("VehicleController.php?flag=getAllListByYing");
		
	}else if($flag == "update"){
		$id = $_REQUEST["id"];
		$person_id = $_REQUEST["person_id"];
		$plasetime = $_POST["time1"];
	    $task = $_POST["task"];
	    $unit = $_POST["unit"];
	    $vehiclemo = $_POST["vehiclemo"];
//	    $startstopdistance = $_POST["startstopdistance"];
		$start = $_POST["start"];
	    $stop = $_POST["stop"];
	    $distance = $_POST["distance"];
//	    $runtime = $_POST["runtime"];
		$start_n_timepicker = $_POST["start_n_timepicker"];
	    $end_n_timepicker = $_POST["end_n_timepicker"];
	    $driver = $_POST["driver"];
	    $supercarg = $_POST["supercarg"];
//	    $remark = $_POST["remark"];
	    
	    $vehic = new vehicle();
		$vehic->plasetime = $plasetime;
		$vehic->person_no = $person_id;
		$vehic->task = $task;
		$vehic->unit = $unit;
		$vehic->vehiclemo = $vehiclemo;
//		$vehic->startstopdistance = $startstopdistance;
		$vehic->start = $start;
		$vehic->stop = $stop;
		$vehic->distance = $distance;
		$vehic->runtime = $start_n_timepicker."-".$end_n_timepicker;
		$vehic->driver = $driver;
		$vehic->supercarg = $supercarg;
		$vehic->ratifier = "";
		$vehic->ratifier_id = "";
		$vehic->remark = "";
		$vehic->inputtime = date("Y-m-d H:i:s");
		$vehic->tflag = 0;
		$vehic->yflag = 0;
		$vehic->submitflag = 1;

		// 判断是否被审核
		$res = $vehic->isshenhe($id);
		if($res == 1){ // 未审核
			$res2 = $vehic->updateVehicle($id);
			if ($res2 == 1){
				Tools::alert("修改成功!!");
			}else{
				Tools::alert("修改失败!!请重新操作...");
			}
		}else{	// 已审核
			Tools::alert("添加失败!!该信息已被审核！请核实...");
		}
		Tools::jump("VehicleController.php?flag=getAllListByYing");
	
	}elseif ($flag == "t_update"){ // 团修改
		$id = $_REQUEST["id"];
		$person_id = $_REQUEST["person_id"];
		$plasetime = $_POST["time1"];
	    $task = $_POST["task"];
	    $unit = $_POST["unit"];
	    $vehiclemo = $_POST["vehiclemo"];
//	    $startstopdistance = $_POST["startstopdistance"];
		$start = $_POST["start"];
	    $stop = $_POST["stop"];
	    $distance = $_POST["distance"];
//	    $runtime = $_POST["runtime"];
		$start_n_timepicker = $_POST["start_n_timepicker"];
	    $end_n_timepicker = $_POST["end_n_timepicker"];
	    $driver = $_POST["driver"];
	    $supercarg = $_POST["supercarg"];
//	    $remark = $_POST["remark"];
	    
	    $vehic = new vehicle();
		$vehic->plasetime = $plasetime;
		$vehic->person_no = $person_id;
		$vehic->task = $task;
		$vehic->unit = $unit;
		$vehic->vehiclemo = $vehiclemo;
//		$vehic->startstopdistance = $startstopdistance;
		$vehic->start = $start;
		$vehic->stop = $stop;
		$vehic->distance = $distance;
		$vehic->runtime = $start_n_timepicker."-".$end_n_timepicker;
		$vehic->driver = $driver;
		$vehic->supercarg = $supercarg;
		$vehic->ratifier = "";
		$vehic->ratifier_id = "";
		$vehic->remark = "";
		$vehic->inputtime = date("Y-m-d H:i:s");
		$vehic->tflag = 0;
		$vehic->yflag = 0;
		$vehic->submitflag = 1;

		// 得到之前的数据
		$resVehic = $vehic->getVehicleById($id);
		$vehic->person_no = $resVehic[0]['person_no'];
		// 判断是否被审核
		$res = $vehic->isshenhe($id);
		if($res == 1){ // 未审核
			$res2 = $vehic->updateVehicle($id);
			if ($res2 == 1){
				Tools::alert("修改成功!!");
			}else{
				Tools::alert("修改失败!!请重新操作...");
			}
		}else{	// 已审核
			Tools::alert("添加失败!!该信息已被审核！请核实...");
		}
		Tools::jump("VehicleController.php?flag=getAllTuan");
		
	}elseif ($flag == "getLianAll"){
		$yid = $_SESSION['member']['unit_id'];
		$res3 = $vehic->getLianAllByYidToDatetime($yid, date("Y-m-d H:i:s"));
		$smarty->assign("cz", "列表");
		$smarty->assign("flag", "y_list");
		$smarty->assign("date", date("Y-m-d"));
		$smarty->assign("path2", "车辆动用情况");
		$smarty->assign("resList", $res3);
		$smarty->display("VehicleList.tpl");
		
	}elseif ($flag == "y_search"){
		$datetime = $_POST['datetime'];
		if($datetime == ""){
			$datetime = date("Y-m-d");
		}
		$yid = $_SESSION['member']['unit_id'];
		$res3 = $vehic->getLianAllByYidToDatetime($yid, $datetime);
		$smarty->assign("cz", "列表");
		$smarty->assign("flag", "y_list");
		$smarty->assign("date", $datetime);
		$smarty->assign("path2", "车辆动用情况");
		$smarty->assign("resList", $res3);
		$smarty->display("VehicleList.tpl");
		
	}elseif ($flag == "getLianAllFenye"){
		$yid = $_SESSION['member']['unit_id'];
		
		$userId = $_SESSION['member']['id'];
		// 创建一个分页对象
		$fenye = new fenyePage();
		// 给分页Page指定必须的数据
		$fenye->pageNow = 1;
		$fenye->pageSize = 6;
		if (!empty($_GET['pageNow'])){
			$fenye->pageNow = $_GET['pageNow'];
		}
		
		$vehic->getLianAllByYidFenye($fenye, $yid);
		
		// 首页
		$shouye1 = "VehicleController.php?flag=getLianAllFenye&pageNow=1";
		// 显示上一页  下一页
		if ($fenye->pageNow > 1){
			$prePage = $fenye->pageNow-1;
			$sahngyiye1 = "VehicleController.php?flag=getLianAllFenye&pageNow=$prePage";
		}else{
			$sahngyiye1 =  "0";
		}
		if ($fenye->pageNow < $fenye->pageCount){
			$nextPage = $fenye->pageNow+1;
			$xiayiye1 = "VehicleController.php?flag=getLianAllFenye&pageNow=$nextPage";
		}else{
			$xiayiye1 =  "0";
		}
		// 尾页
		$weiye1 = "VehicleController.php?flag=getLianAllFenye&pageNow=$fenye->pageCount";
		
		
		$smarty->assign("shouye1",$shouye1);
		$smarty->assign("sahngyiye1",$sahngyiye1);
		$smarty->assign("xiayiye1",$xiayiye1);
		$smarty->assign("weiye1",$weiye1);
		
		$smarty->assign("flag", "y_fenye");
		$smarty->assign("resList", $fenye->res_array);
		$smarty->assign("cz", "列表");
		$smarty->assign("path2", "车辆动用情况");
		$smarty->assign("pageNow",$fenye->pageNow);
		$smarty->assign("pageCount",$fenye->pageCount);
		$smarty->display("VehicleList.tpl");
	
	}elseif ($flag == "getAllTuan"){
		
		$tid = $_SESSION['member']['id'];
		$res3 = $vehic->getLianAllByTid($tid, date("Y-m-d H:i:s"));
		$smarty->assign("cz", "列表");
		$smarty->assign("flag", "tuan");
		$smarty->assign("action", "VehicleController.php?flag=piliangshenhe");
		
		// 添加序号  start
		for ($i=0; $i<count($res3); $i++){
			array_push($res3[$i], $i+1);
		} 
		// 添加序号  end
		//  得到审核人
		$reviewer = new reviewerManager();
		$reviewers = $reviewer->getAllReviewer();
		$smarty->assign("reviewer",$reviewers);
		$smarty->assign("path2", "车辆动用情况");
		$smarty->assign("resList", $res3);
		$smarty->display("VehicleList.tpl");
	
	}elseif ($flag == "getAllTuan_show"){
		$date = $_REQUEST['date'];
		$tid = $_SESSION['member']['id'];
		$res3 = $vehic->getLianAllByTid($tid, $date);
		$smarty->assign("cz", "列表");
		$smarty->assign("date", $date);
//		$smarty->assign("flag", "tuan_show");
		
		// 添加序号  start
		for ($i=0; $i<count($res3); $i++){
			array_push($res3[$i], $i+1);
		} 
		// 添加序号  end
		
		$smarty->assign("path2", "车辆动用情况");
		$smarty->assign("resList", $res3);
		$smarty->display("VehicleListShow.tpl");
		
		
	}elseif ($flag == "t_search"){
		$datetime = $_POST['datetime'];
		if($datetime == ""){
			$datetime = date("Y-m-d");
		}
		
		$tid = $_SESSION['member']['id'];
		$res3 = $vehic->getLianAllByTid($tid, $datetime);
		
		$smarty->assign("cz", "列表");
		$smarty->assign("flag", "tuan_search");
		$smarty->assign("path2", "车辆动用情况");
		$smarty->assign("resList", $res3);
		$smarty->display("VehicleList.tpl");
		
	}elseif ($flag == "shenheUpdate"){
	    $id = $_POST['id'];
		$ratifier = $_POST["ratifier"];
//		$ratifier_id = $_POST["ratifier_id"];
//	    echo $id."---".$ratifier."---".$ratifier_id;
//	    exit();
	    $vehicShenhe = new vehicle();
	    $res4 = $vehicShenhe->shenheVehicle($ratifier, 0, 1, $id);
	    
		if ($res4 == 1){
			Tools::alert("修改成功!!");
		}else{
			Tools::alert("修改失败!!请重新操作...");
		}
		Tools::jump("VehicleController.php?flag=getAllTuan");
	
	}elseif ($flag == "delshenhe"){ // 取消审核
		$id = $_REQUEST['id'];
		$vehicShenhe = new vehicle();
	    $res4 = $vehicShenhe->shenheVehicle("", 0, 0, $id);
	    
		if ($res4 == 1){
			Tools::alert("取消成功!!");
		}else{
			Tools::alert("取消失败!!请重新操作...");
		}
		Tools::jump("VehicleController.php?flag=getAllTuan");
		
	}elseif ($flag == "piliangshenhe"){  // 批量审核
		$ratifier = $_POST["ratifier"];
		$tid = $_SESSION['member']['id'];
//		echo $ratifier;
		$res3 = $vehic->getLianAllByTid($tid, date("Y-m-d H:i:s"));
		$vehicShenhe = new vehicle();
		// 批量审核
		for ($i=0; $i<count($res3); $i++){
//			echo $res3[$i]['id']."---";
			 $res4 = $vehicShenhe->shenheVehicle($ratifier, 0, 1, $res3[$i]['id']);
		}
		Tools::alert("修改成功!!");
		Tools::jump("VehicleController.php?flag=getAllTuan");
	}
	
	
?>