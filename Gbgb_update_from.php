<?php
session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/gbgb.class.php';
	
	
	$smarty->assign("member", $_SESSION["member"]);
	$smarty->assign("unit", $_SESSION['member']['s_name']);
	$smarty->assign("head", "干部跟班新记录");
	
	$smarty->assign("button", "修改");
	$smarty->assign("cz", "修改");
	
	//$smarty->assign("time", date("Y-m-d H:i:s"));
	
	$flag = $_REQUEST['flag'];
	$id = $_REQUEST["id"];
	$gbgbManager = new gbgb();
	$gbgb = $gbgbManager->getGbgbById($id);
	
	if($flag == "t_update"){
		$smarty->assign("action", "GbgbController.php?flag=t_update");
		$smarty->assign("flag", "t_update");
		// 判断是否通过上级审核
		if($gbgb[0].yflag == 0 && $gbgb[0].tflag == 0){
			// 得到起止时间
			$nxArray = explode("-", $gbgb[0]['nx']);
			$wxArray = explode("-", $gbgb[0]['wx']);
			
			if($nxArray[0] == ""){
				$smarty->assign("nxSign", "0"); // 内线没有数据
			}else{
				$smarty->assign("nxSign", "1"); // 内线有数据
			}
			if($wxArray[0] == ""){
				$smarty->assign("wxSign", "0"); // 内线没有数据
			}else{
				$smarty->assign("wxSign", "1"); // 内线有数据
			}
			$smarty->assign("nxstart", $nxArray[0]);
			$smarty->assign("nxend", $nxArray[1]);
			$smarty->assign("wxstart", $wxArray[0]);
			$smarty->assign("wxend", $wxArray[1]);
			
			$smarty->assign("gbgb", $gbgb[0]);
			$smarty->display("GbgbEdit.tpl");
		}else{
			// 通过审核  不能修改
			Tools::alert("该信息已通过上级审核 !!不能修改!!");
			Tools::jump("GbgbController.php?flag=getAllTuan");
		}
		
	}else{
		$smarty->assign("action", "GbgbController.php?flag=update");
		$smarty->assign("flag", "update");
		// 判断是否通过上级审核
		if($gbgb[0].yflag == 0 && $gbgb[0].tflag == 0){
			// 得到起止时间
			$nxArray = explode("-", $gbgb[0]['nx']);
			$wxArray = explode("-", $gbgb[0]['wx']);
			
			$smarty->assign("nxstart", $nxArray[0]);
			$smarty->assign("nxend", $nxArray[1]);
			$smarty->assign("wxstart", $wxArray[0]);
			$smarty->assign("wxend", $wxArray[1]);
			$smarty->assign("gbgb", $gbgb[0]);
			$smarty->display("GbgbEdit.tpl");
		}else{
			// 通过审核  不能修改
			Tools::alert("该信息已通过上级审核 !!不能修改!!");
			Tools::jump("GbgbController.php?flag=getAllList");
		}
	}
	
	
	
	
	
	
	
	