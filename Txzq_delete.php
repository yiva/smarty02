<?php
session_start();
	//接收表单信息，实现分类的插入 
	require_once 'include/model/txzqhuizong.class.php';
	require_once 'include/model/txzq.class.php';
	require_once 'include/common/Tools.class.php';
	header("Content-type: text/html; charset=utf-8");
	date_default_timezone_set('PRC'); //设置中国时区
	//$smarty->assign("member", $_SESSION["member"]);
	
	$flag = $_REQUEST['flag'];
	$id = $_REQUEST["id"];
	
	if ($flag == "y_huizong"){  // 营
	
		$txzqhuizongManager = new txzqhuizong();
		$res = $txzqhuizongManager->deltxzqhuizong($id);
		if ($res == 1){
			$userid = $_SESSION['member']['id'];
			$s_id = $_SESSION['member']['unit_id'];
			$txzqManager = new txzq();
			$resListy = $txzqManager->getTxzqByShangjiId($userid, $s_id, date("Y-m-d H:i:s"));
		for ($i=0; $i<count($resListy); $i++){
				$id = $resListy[$i]['id'];
				$txzqManager->updateYflagById($id, 0);
			}
			Tools::alert("删除成功!!");
		}else{
			Tools::alert("删除失败!!请重新操作...");
		}
		Tools::jump("txzqController.php?flag=getHuizong");
	
	}elseif ($flag == "t_huizong"){  // 团
		$txzqhuizongManager = new txzqhuizong();
		$res = $txzqhuizongManager->deltxzqhuizong($id);
		if ($res == 1){
			// 改变所有的yflag的值   start
			$tid = $_SESSION['member']['id'];
			$resListy = $txzqhuizongManager->getYinghuizongAllByTid($tid, date("Y-m-d H:i:s"));
			for ($i=0; $i<count($resListy); $i++){
				$id = $resListy[$i]['id'];
				$txzqhuizongManager->updateYflagById($id, 0);
			}
			Tools::alert("删除成功!!");
		}else{
			Tools::alert("删除失败!!请重新操作...");
		}
		Tools::jump("txzqController.php?flag=getHuizong");
		
	}else {  // 连
		$txzqManager = new txzq();
		$res = $txzqManager->delTxzq($id);
		if($res == 1){
			Tools::alert("删除成功!!");
		}else{
			Tools::alert("删除失败!!请重新操作...");
		}
		Tools::jump("txzqController.php?flag=getAllList");
	}
	
	
	
	
	