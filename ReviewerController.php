<?php
	session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/reviewerManager.class.php';
	require_once 'include/common/Tools.class.php';
	header("Content-type: text/html; charset=utf-8");
	
	date_default_timezone_set('PRC'); //设置中国时区
	
	$smarty->assign("member", $_SESSION["member"]);
	
	$flag = $_REQUEST["flag"];

	$reviewerManager = new reviewerManager();
	
	if($flag == "getAllList"){ //得到列表
		//echo $flag;
		// 调用列表方法
		$resList = $reviewerManager->getAllReviewer();
		$smarty->assign("cz", "列表");
		$smarty->assign("resList", $resList);
		$smarty->display("ReviewerList.tpl");
	}else if($flag == "add"){
		$reviewer = $_POST["reviewer"];
	    $reviewerTemp = new reviewerManager();
	    $reviewerTemp->reviewer = $reviewer;
	    $reviewerTemp->flag = 0;
		$res = $reviewerTemp->addReviewer();
		if ($res == 1){
			Tools::alert("添加成功!!");
			Tools::jump("ReviewerController.php?flag=getAllList");
		}else{
			Tools::alert("添加失败!!请重新操作...");
			Tools::jump("ReviewerController.php?flag=getAllList");
		}
		
	}else if($flag == "update"){
		$id = $_REQUEST["id"];
		$reviewer = $_POST["reviewer"];
	    $reviewerTemp = new reviewerManager();
	    $reviewerTemp->reviewer = $reviewer;
	    $reviewerTemp->flag = 0;
		$res = $reviewerTemp->updateReviewerById($id);
		if ($res == 1){
			Tools::alert("修改成功!!");
			Tools::jump("ReviewerController.php?flag=getAllList");
		}else{
			Tools::alert("添加失败!!请重新操作...");
			Tools::jump("ReviewerController.php?flag=getAllList");
		}
		
	}
	
?>