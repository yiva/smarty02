<?php
session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/txzq.class.php';
	require_once 'include/model/txzqhuizong.class.php';
	require_once 'include/common/Tools.class.php';
	
	$smarty->assign("member", $_SESSION["member"]);
	$unitName = Tools::UnitAllName($_SESSION['member']['role'], $_SESSION['member']['s_name']);
	$smarty->assign("unit", $unitName);
	
	$smarty->assign("button", "修改");
	$smarty->assign("cz", "修改");
	
	//$smarty->assign("time", date("Y-m-d H:i:s"));
	
	$flag = $_REQUEST["flag"];
	$id = $_REQUEST["id"];
	
	if($flag == "y_huizong"){  // 修改汇总表单
		$smarty->assign("action", "txzqController.php?flag=updatehuizong");
		$txzqhuizongManager = new txzqhuizong();
		$res = $txzqhuizongManager->getTxzqhuizongById($id);
//		var_dump($res);
//		exit();
		// 判断是否通过上级审核
		if($res[0].yflag == 0 && $res[0].tflag == 0){
			$smarty->assign("txzqTemp", $res[0]);
			$smarty->assign("path2", "通信值勤汇报表汇总");
			$smarty->assign("flag", "updatehuizong");
			$smarty->display("txzqEdit.tpl");
		}else{
			// 通过审核  不能修改
			Tools::alert("该信息已通过上级审核 !!不能修改!!");
			Tools::jump("txzqController.php?flag=getHuizong");
		}
	
	
	}elseif($flag == "t_huizong"){ // 团
	
		$smarty->assign("action", "txzqController.php?flag=update_t_huizong");
		$txzqhuizongManager = new txzqhuizong();
		$res = $txzqhuizongManager->getTxzqhuizongById($id);
//		var_dump($res);
//		exit();
		// 判断是否通过上级审核
		$smarty->assign("txzqTemp", $res[0]);
		$smarty->assign("path2", "通信值勤汇报表汇总");
		$smarty->assign("flag", "update_t_huizong");
		$smarty->display("txzqEdit.tpl");

	}else{ // 连
		
		$smarty->assign("action", "txzqController.php?flag=update");
		$smarty->assign("flag", "update");
		$smarty->assign("path2", "通信值勤汇报");
		$txzqManager = new txzq();
		$txzq = $txzqManager->getTxzqById($id);
		
		// 判断是否通过上级审核
		if($txzq[0].yflag == 0 && $txzq[0].tflag == 0){
			$smarty->assign("txzqTemp", $txzq[0]);
			$smarty->display("txzqEdit.tpl");
		}else{
			// 通过审核  不能修改
			Tools::alert("该信息已通过上级审核 !!不能修改!!");
			Tools::jump("txzqController.php?flag=getAllList");
		}
	
	}
	
	
	
	
	