<?php
session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/txzq.class.php';
	require_once 'include/model/txzqhuizong.class.php';
	
	
	$smarty->assign("member", $_SESSION["member"]);
	$smarty->assign("unit", $_SESSION['member']['s_name']);
	$smarty->assign("path2", "通信汇报表");
	$smarty->assign("button", "汇总");
	$smarty->assign("cz", "汇总");
		
	$flag = $_REQUEST['flag'];
	
	
	$lowercase = "";  
	$inforealize = "";  
	$repairlink = "";  
	$gbgbinfo = "";  
	$traininfo = "";  
	$dutycheck = ""; 
	$machinelinework = "";  
	$lanrun = "";
		
	if($flag == "t_huizong"){ // 团
		$smarty->assign("action", "TxzqController.php?flag=t_huizong");
		$txzqhuizongManager = new txzqhuizong();
		$userId = $_SESSION['member']['id'];
		$tid = $_SESSION['member']['id'];
		$resListy = $txzqhuizongManager->getYinghuizongAllByTid($tid, date("Y-m-d H:i:s"));
		$smarty->assign("flag", "t_huizong");
		$smarty->assign("inputtime", date("Y-m-d"));
		// 循环拼写备注  一日工作等信息
		for ($i=0; $i<count($resListy); $i++){
			$lowercase .= $resListy[$i]['lowercase']."\n";
			$inforealize .= $resListy[$i]['inforealize']."\n";
			$repairlink .= $resListy[$i]['repairlink']."\n";
			$gbgbinfo .= $resListy[$i]['gbgbinfo']."\n";
			$traininfo .= $resListy[$i]['traininfo']."\n";
			$dutycheck .= $resListy[$i]['dutycheck']."\n";
			$machinelinework .= $resListy[$i]['machinelinework']."\n";
			$lanrun .= $resListy[$i]['lanrun']."\n";
		}
		
	}else{ // 营
		$smarty->assign("action", "TxzqController.php?flag=y_huizong");
	
		$userid = $_SESSION['member']['id'];
		$s_id = $_SESSION['member']['unit_id'];
		$txzqManager = new txzq();
		$resListy = $txzqManager->getTxzqByShangjiId($userid, $s_id, date("Y-m-d H:i:s"));
		$smarty->assign("flag", "huizong");
		// 循环拼写备注  一日工作等信息
		for ($i=0; $i<count($resListy); $i++){
			$lowercase .= $resListy[$i]['tmp_name'].":".$resListy[$i]['lowercase']."\n";
			$inforealize .= $resListy[$i]['tmp_name'].":".$resListy[$i]['inforealize']."\n";
			$repairlink .= $resListy[$i]['tmp_name'].":".$resListy[$i]['repairlink']."\n";
			$gbgbinfo .= $resListy[$i]['tmp_name'].":".$resListy[$i]['gbgbinfo']."\n";
			$traininfo .= $resListy[$i]['tmp_name'].":".$resListy[$i]['traininfo']."\n";
			$dutycheck .= $resListy[$i]['tmp_name'].":".$resListy[$i]['dutycheck']."\n";
			$machinelinework .= $resListy[$i]['tmp_name'].":".$resListy[$i]['machinelinework']."\n";
			$lanrun .= $resListy[$i]['tmp_name'].":".$resListy[$i]['lanrun']."\n";
		}
	}
	
	
	$smarty->assign("lowercase", $lowercase);
	$smarty->assign("inforealize", $inforealize);
	$smarty->assign("repairlink", $repairlink);
	$smarty->assign("gbgbinfo", $gbgbinfo);
	$smarty->assign("traininfo", $traininfo);
	$smarty->assign("dutycheck", $dutycheck);
	$smarty->assign("machinelinework", $machinelinework);
	$smarty->assign("lanrun", $lanrun);
	
	
	$smarty->display("txzqEdit.tpl");
	
	