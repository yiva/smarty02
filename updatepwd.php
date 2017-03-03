<?php
	session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/member.class.php';
	//$loginID = $_SESSION['member']['id'];
	
	$smarty->assign("member", $_SESSION["member"]);
	$smarty->assign("head", "修改密码");
	$smarty->assign("action", "updatePwdController.php");
	$smarty->assign("button", "提交");
	$smarty->assign("flag", "修改密码");
//	var_dump($_SESSION["member"]);
//	$smarty->assign("id", $_SESSION['member']['id']);
	
	$smarty->display("updatepwd.tpl");	
