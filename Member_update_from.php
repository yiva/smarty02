<?php
session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/member.class.php';
	$smarty->assign("member", $_SESSION["member"]);
	$smarty->assign("position", "位置：用户管理/修改");
	$smarty->assign("action", "MemberController.php?flag=update");
	$smarty->assign("button", "修改");
	$smarty->assign("flag", "update");

	$smarty->assign("path2", "用户管理");
	$smarty->assign("cz", "修改");
	
	$id = $_REQUEST["id"];
	$memberManager = new member();
	$memberTemp = $memberManager->getMemberById($id);
	
	$smarty->assign("memberTemp", $memberTemp[0]);
	$smarty->display("MemberEdit.tpl");