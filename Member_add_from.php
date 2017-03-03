<?php
session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/unitManager.class.php';
	require_once 'include/model/member.class.php';
	
	$smarty->assign("action", "MemberController.php?flag=add");
	$smarty->assign("button", "添加");
	$smarty->assign("flag", "add");
	$smarty->assign("member", $_SESSION["member"]);
	//$smarty->assign("time", date("Y-m-d H:i:s"));

	// 得到单位列表
	$unitManager = new unitManager();
	$unitList = $unitManager->getAllUnit();
	$smarty->assign("path2", "用户管理");
	$smarty->assign("cz", "添加");
//	var_dump($unitList);
	$smarty->assign("unitList", $unitList);
	// 得到所属上级列表
	$memberManager = new member();
//	$memberList = $memberManager->getAllMemer();
//	$smarty->assign("memberList", $memberList);
	
	$smarty->display("MemberEdit.tpl");