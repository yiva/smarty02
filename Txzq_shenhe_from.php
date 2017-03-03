<?php
session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/txzq.class.php';
	
	
	$smarty->assign("member", $_SESSION["member"]);
	$smarty->assign("unit", $_SESSION['member']['s_name']);
	$smarty->assign("head", "通信值勤汇报");
	$smarty->assign("action", "txzqController.php?flag=shenheupdate");
	$smarty->assign("button", "提交审核");
	$smarty->assign("cz", "审核");
	$smarty->assign("flag", "update");
	//$smarty->assign("time", date("Y-m-d H:i:s"));
	
	
	$id = $_REQUEST["id"];
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
	
	
	