<?php
session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/reviewerManager.class.php';
	
	
	$smarty->assign("member", $_SESSION["member"]);
	$smarty->assign("position", "位置：审核人员管理/修改");
	$smarty->assign("action", "ReviewerController.php?flag=update");
	$smarty->assign("button", "修改");
	$smarty->assign("flag", "update");
	$smarty->assign("cz", "修改");

	$id = $_REQUEST["id"];
	$reviewerManager = new reviewerManager();
	$reviewer = $reviewerManager->getReviewerById($id);
	
	$smarty->assign("reviewer", $reviewer[0]);
	$smarty->display("ReviewerEdit.tpl");