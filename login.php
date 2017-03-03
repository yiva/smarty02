<?php 

	require_once 'smarty_config.php';
	
//	$smarty->assign("position", "位置：用户管理/添加");
	$smarty->assign("action", "memberController.php?flag=login");
//	$smarty->assign("button", "添加");
//	$smarty->assign("flag", "login");

	
	$smarty->display("login.tpl");
?>