<?php
	session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/txzq.class.php';
	require_once 'include/model/txzqhuizong.class.php';
	require_once 'include/common/Tools.class.php';
	
	$smarty->assign("member", $_SESSION["member"]);
	
	$flag = $_REQUEST["flag"];
	$role = $_SESSION['member']['role'];

	$txzqManager = new txzq();
	
	if($flag == "getAllList"){ //得到列表
		
		$userId = $_SESSION['member']['id'];
		$resList = $txzqManager->getTodayTxzqDataBySid($userId, date("Y-m-d H:i:s"));
		
		if(empty($resList)){
			// 为空
			//echo "kong";
			$smarty->assign("flag","l_nodata");
			$smarty->assign("path2","通信值勤汇报");
		}else{
			// 不为空
			$strDate = $resList[0]['inputtime'];
			$dateArray = explode(" ", $strDate);
			$smarty->assign("date", $dateArray[0]);
			
			$unitName = Tools::UnitAllName($_SESSION["member"]["role"], $_SESSION["member"]["s_name"]);
			
			$smarty->assign("unit", $unitName);
			$smarty->assign("flag","l_havedata");
			$smarty->assign("path2","通信值勤汇报");
			$smarty->assign("txzqTemp", $resList[0]);
			$smarty->assign("button", "修改");
			$smarty->assign("cz", "列表");
			
		}
		$smarty->display("txzqDay.tpl");
		
	}elseif ($flag == "getLianAll"){
		$userId = $_SESSION['member']['id'];
		$s_id = $_SESSION['member']['unit_id'];
		
		$txzqhuizongManager = new txzqhuizong();
		$res5 = $txzqhuizongManager->getTodaytxzqhuizongDataBySid($userId, date("Y-m-d H:i:s"));
		
		if(empty($res5)){
			$smarty->assign("huizongBtn","0");
		}else{
			$smarty->assign("huizongBtn","1");
		}
			$resListy = $txzqManager->getTxzqByShangjiId($userId, $s_id, date("Y-m-d H:i:s"));
			
			if(empty($resListy)){
				// 为空
				$smarty->assign("flag","y_nodata");
				$smarty->assign("path2","通信值勤汇报");
			}else{
				// 不为空
				$smarty->assign("unit",$_SESSION["member"]["s_name"]);
				$smarty->assign("flag","y_havedata");
				$smarty->assign("path2","通信值勤汇报");
				$smarty->assign("txzqTemp", $resListy);
				$smarty->assign("button", "修改");
				$smarty->assign("cz", "列表");
			}
			$smarty->display("txzqDay.tpl");
			
	}else if($flag == "add"){
		
//		$lowercase = $_POST['lowercase'];
		$inforealize = $_POST['inforealize'];
		$repairlink = $_POST['repairlink'];
		$gbgbinfo = $_POST['gbgbinfo'];
		$traininfo = $_POST['traininfo'];
		$dutycheck = $_POST['dutycheck'];
//		$lanrun = $_POST['lanrun'];
		$machinelinework = $_POST['machinelinework'];
		
		
	    $txzqManager = new txzq();
//		$txzqManager->lowercase = $lowercase;
		$txzqManager->lowercase = "";
		$txzqManager->inforealize = $inforealize;
		$txzqManager->repairlink = $repairlink;
		$txzqManager->gbgbinfo = $gbgbinfo;
		$txzqManager->traininfo = $traininfo;
		$txzqManager->dutycheck = $dutycheck;
		$txzqManager->machinelinework = $machinelinework;
//		$txzqManager->lanrun = $lanrun;
		$txzqManager->lanrun = "";
		$txzqManager->userid = $_SESSION['member']['id'];
		$txzqManager->yflag = 0;
		$txzqManager->tflag = 0;
		$txzqManager->submitflag = 1;
		$txzqManager->inputtime = date("Y-m-d H:i:s");
	    
	    
	    $res = $txzqManager->addTxzq();
		if ($res == 1){
			Tools::alert("添加成功!!");
			
		}else{
			Tools::alert("添加失败!!请重新操作...");
		}
		Tools::jump("txzqController.php?flag=getAllList");
		
	}else if($flag == "update"){
		$id = $_REQUEST["id"];
		
//		$lowercase = $_POST['lowercase'];
		$inforealize = $_POST['inforealize'];
		$repairlink = $_POST['repairlink'];
		$gbgbinfo = $_POST['gbgbinfo'];
		$traininfo = $_POST['traininfo'];
		$dutycheck = $_POST['dutycheck'];
		$machinelinework = $_POST['machinelinework'];
//		$lanrun = $_POST['lanrun'];
		
	    $txzqManager = new txzq();
//		$txzqManager->lowercase = $lowercase;
		$txzqManager->lowercase = "";
		$txzqManager->inforealize = $inforealize;
		$txzqManager->repairlink = $repairlink;
		$txzqManager->gbgbinfo = $gbgbinfo;
		$txzqManager->traininfo = $traininfo;
		$txzqManager->dutycheck = $dutycheck;
		$txzqManager->machinelinework = $machinelinework;
//		$txzqManager->lanrun = $lanrun;
		$txzqManager->lanrun = "";
		$txzqManager->userid = $_SESSION['member']['id'];
		$txzqManager->yflag = 0;
		$txzqManager->tflag = 0;
		$txzqManager->submitflag = 1;
		$txzqManager->inputtime = date("Y-m-d H:i:s");
		
		$res = $txzqManager->updateTxzq($id);
		if ($res == 1){
			Tools::alert("修改成功!!");
		}else{
			Tools::alert("添加失败!!请重新操作...");
		}
		Tools::jump("txzqController.php?flag=getAllList");
	
	}elseif ($flag == "getAllTuan"){
		$txzqhuizongManager = new txzqhuizong();
		$userId = $_SESSION['member']['id'];
		$tid = $_SESSION['member']['id'];
		$res = $txzqhuizongManager->getYinghuizongAllByTid($tid, date("Y-m-d H:i:s"));
		// 判断是否有当天的汇总信息
		$res5 = $txzqhuizongManager->getTodaytxzqhuizongDataByTid($userId, date("Y-m-d H:i:s"));
//		var_dump($res);
//		exit();
		if(empty($res5)){
			$smarty->assign("huizongBtn","0");
		}else{
			$smarty->assign("huizongBtn","1");
		}
		
		$smarty->assign("flag","t_havedata");
		$smarty->assign("path2","通信值勤汇报");
		$smarty->assign("txzqTemp", $res);
		$smarty->assign("button", "修改");
		$smarty->assign("cz", "列表");
		
		$smarty->display("txzqDay.tpl");
	
	}elseif ($flag == "t_search"){ // 团 搜索
		
		$datetime = $_POST['datetime'];
		if($datetime == ""){
			$datetime = date("Y-m-d H:i:s");
		}
		
		$txzqhuizongManager = new txzqhuizong();
		$userId = $_SESSION['member']['id'];
		$tid = $_SESSION['member']['id'];
		$res = $txzqhuizongManager->getYinghuizongAllByTid($tid, $datetime);
		// 判断是否有当天的汇总信息
		$res5 = $txzqhuizongManager->getTodaytxzqhuizongDataByTid($userId, $datetime);
		if(empty($res5)){
			$smarty->assign("huizongBtn","0");
		}else{
			$smarty->assign("huizongBtn","1");
		}
		if(empty($res)){
			$smarty->assign("flag","t_nohavedata");
			$smarty->assign("path2","通信值勤汇报");
		}else{
			$smarty->assign("flag","t_havedata");
			$smarty->assign("path2","通信值勤汇报");
			$smarty->assign("txzqTemp", $res);
			$smarty->assign("button", "修改");
			$smarty->assign("cz", "列表");
		}
		
		
		$smarty->display("txzqDay.tpl");
		
		
	}elseif ($flag == "shenheupdate"){
		
		$id = $_REQUEST["id"];
		$inforealize = $_REQUEST["inforealize"];
		
		$txzqManager = new txzq();
		$res = $txzqManager->shenheTxzq($inforealize, 1, $id);
		
		if ($res == 1){
			Tools::alert("修改成功!!");
		}else{
			Tools::alert("添加失败!!请重新操作...");
		}
		Tools::jump("txzqController.php?flag=getAllTuan");
		
	}elseif ($flag == "delshenhe"){
		$id = $_REQUEST["id"];
		$txzqManager = new txzq();
		$res = $txzqManager->shenheTxzq("", 0, $id);
		
		if ($res == 1){
			Tools::alert("取消审核成功!!");
		}else{
			Tools::alert("取消审核失败!!请重新操作...");
		}
		Tools::jump("txzqController.php?flag=getAllTuan");
	
	}elseif ($flag == "l_search"){
		$datetime = $_POST['datetime'];
		if($datetime == ""){
			$datetime = date("Y-m-d H:i:s");
		}
		$userId = $_SESSION['member']['id'];
		$resList = $txzqManager->getTodayTxzqDataBySid($userId, $datetime);
		if(empty($resList)){
			// 为空
			//echo "kong";
			$smarty->assign("search","search");
			$smarty->assign("flag","l_nodata");
			$smarty->assign("path2","通信值勤汇报");
		}else{
			// 不为空
			$smarty->assign("unit",$_SESSION["member"]["s_name"]);
			$smarty->assign("flag","l_havedata");
			
			$smarty->assign("date",Tools::getDatetimeToDate($resList[0]['inputtime']));
			$smarty->assign("path2","通信值勤汇报");
			$smarty->assign("txzqTemp", $resList[0]);
			$smarty->assign("button", "修改");
			$smarty->assign("cz", "列表");
			
		}
		$smarty->display("txzqDay.tpl");
	
	}elseif ($flag == "y_huizong"){
		
		$lowercase = $_POST['lowercase'];
		$inforealize = $_POST['inforealize'];
		$repairlink = $_POST['repairlink'];
		$gbgbinfo = $_POST['gbgbinfo'];
		$traininfo = $_POST['traininfo'];
		$dutycheck = $_POST['dutycheck'];
		$lanrun = $_POST['lanrun'];
		$machinelinework = $_POST['machinelinework'];
		
		
	    $txzqhuizong = new txzqhuizong();
		$txzqhuizong->lowercase = $lowercase;
		$txzqhuizong->inforealize = $inforealize;
		$txzqhuizong->repairlink = $repairlink;
		$txzqhuizong->gbgbinfo = $gbgbinfo;
		$txzqhuizong->traininfo = $traininfo;
		$txzqhuizong->dutycheck = $dutycheck;
		$txzqhuizong->machinelinework = $machinelinework;
		$txzqhuizong->lanrun = $lanrun;
		$txzqhuizong->userid = $_SESSION['member']['id'];
		$txzqhuizong->yflag = 0;
		$txzqhuizong->tflag = 0;
		$txzqhuizong->submitflag = 1;
		$txzqhuizong->inputtime = date("Y-m-d H:i:s");
	    
	    // 添加到汇总表中
	    $res = $txzqhuizong->addtxzqhuizong();
	    // 将所汇总的数据标志位置1
	    $userid = $_SESSION['member']['id'];
		$s_id = $_SESSION['member']['unit_id'];
		$txzqManager = new txzq();
		
		
		if ($res == 1){
			// 改变所有的yflag的值   start
			$resListy = $txzqManager->getTxzqByShangjiId($userid, $s_id, date("Y-m-d H:i:s"));
//			var_dump($resListy);
//			exit();
			for ($i=0; $i<count($resListy); $i++){
				$id = $resListy[$i]['id'];
				$txzqManager->updateYflagById($id, 1);
			}
			// 改变所有的yflag的值   end
			Tools::alert("添加成功!!");
			Tools::jump("txzqController.php?flag=getHuizong");
		}else{
			Tools::alert("添加失败!!请重新操作...");
			Tools::jump("txzqController.php?flag=getLianAll");
		}
	
	}elseif ($flag == "getHuizong"){ // 营汇总
		$userid = $_SESSION['member']['id'];
		$txzqhuizongManager = new txzqhuizong();
		$res5 = $txzqhuizongManager->getTodaytxzqhuizongDataBySid($userid, date("Y-m-d H:i:s"));
//		var_dump($res5);
		if(empty($res5)){ // 为空
			$smarty->assign("flag","y_nohuizong");
			$smarty->assign("path2","通信值勤汇报表汇总");
		}else{
			// 不为空
			$smarty->assign("unit",Tools::UnitAllName($_SESSION["member"]["role"], $_SESSION["member"]["s_name"]));
			$smarty->assign("flag","y_huizong");
			$smarty->assign("date",date("Y-m-d"));
			$smarty->assign("path2","通信值勤汇报表汇总");
			$smarty->assign("txzqTemp", $res5[0]);
			$smarty->assign("button", "修改");
			$smarty->assign("cz", "列表");
		}
		$smarty->display("txzqDay.tpl");
	
	}elseif ($flag == "y_huizong_search"){ // 营汇总搜索
		$datetime = $_POST['datetime'];
		if($datetime == ""){
			$datetime = date("Y-m-d");
		}
		$userid = $_SESSION['member']['id'];
		$txzqhuizongManager = new txzqhuizong();
		$res5 = $txzqhuizongManager->getTodaytxzqhuizongDataBySid($userid, $datetime);
//		var_dump($res5);
		if(empty($res5)){ // 为空
			$smarty->assign("flag","y_nohuizong");
			$smarty->assign("path2","通信值勤汇报表汇总");
		}else{
			// 不为空
			$smarty->assign("unit",$_SESSION["member"]["s_name"]);
			$smarty->assign("flag","y_huizong");
			$smarty->assign("date",$datetime);
			$smarty->assign("path2","通信值勤汇报表汇总");
			$smarty->assign("txzqTemp", $res5[0]);
			$smarty->assign("button", "修改");
			$smarty->assign("cz", "列表");
		}
		$smarty->display("txzqDay.tpl");
		
	}elseif ($flag == "y_search"){ //营搜索
		$datetime = $_POST['datetime'];
		if($datetime == ""){
			$datetime = date("Y-m-d H:i:s");
		}
//		echo $datetime;
//		exit();
		$userId = $_SESSION['member']['id'];
		$s_id = $_SESSION['member']['unit_id'];
		
		$txzqhuizongManager = new txzqhuizong();
		$res5 = $txzqhuizongManager->getTodaytxzqhuizongDataBySid($userId, $datetime);
		
		if(empty($res5)){
			$smarty->assign("huizongBtn","0");
		}else{
			$smarty->assign("huizongBtn","1");
		}
			$resListy = $txzqManager->getTxzqByShangjiId($userId, $s_id, $datetime);
			
			if(empty($resListy)){
				// 为空
				$smarty->assign("flag","y_nodata");
				$smarty->assign("path2","通信值勤汇报");
			}else{
				// 不为空
				$smarty->assign("unit",$_SESSION["member"]["s_name"]);
				$smarty->assign("flag","y_havedata");
				$smarty->assign("path2","通信值勤汇报");
				$smarty->assign("txzqTemp", $resListy);
				$smarty->assign("button", "修改");
				$smarty->assign("cz", "列表");
			}
			$smarty->display("txzqDay.tpl");
	
	}elseif ($flag == "updatehuizong"){
		
//		$lowercase = $_POST['lowercase'];
		$inforealize = $_POST['inforealize'];
		$repairlink = $_POST['repairlink'];
		$gbgbinfo = $_POST['gbgbinfo'];
		$traininfo = $_POST['traininfo'];
		$dutycheck = $_POST['dutycheck'];
//		$lanrun = $_POST['lanrun'];
		$machinelinework = $_POST['machinelinework'];
		$id = $_POST['id'];
		
		
	    $txzqhuizong = new txzqhuizong();
//		$txzqhuizong->lowercase = $lowercase;
		$txzqhuizong->lowercase = "";
		$txzqhuizong->inforealize = $inforealize;
		$txzqhuizong->repairlink = $repairlink;
		$txzqhuizong->gbgbinfo = $gbgbinfo;
		$txzqhuizong->traininfo = $traininfo;
		$txzqhuizong->dutycheck = $dutycheck;
		$txzqhuizong->machinelinework = $machinelinework;
//		$txzqhuizong->lanrun = $lanrun;
		$txzqhuizong->lanrun = "";
		$txzqhuizong->userid = $_SESSION['member']['id'];
		$txzqhuizong->yflag = 0;
		$txzqhuizong->tflag = 0;
		$txzqhuizong->submitflag = 1;
		$txzqhuizong->inputtime = date("Y-m-d H:i:s");
	    
		$res = $txzqhuizong->getTxzqhuizongById($id);
		if($res[0].yflag == 0 && $res[0].tflag == 0){
			// 修改
			$updateRes = $txzqhuizong->updatetxzqhuizong($id);
			if ($updateRes == 1){
				Tools::alert("添加成功!!");
				Tools::jump("txzqController.php?flag=getHuizong");
			}else{
				Tools::alert("添加失败!!请重新操作...");
				Tools::jump("txzqController.php?flag=getHuizong");
			}
		}else{
			// 通过审核  不能修改
			Tools::alert("该信息已通过上级审核 !!不能修改!!");
			Tools::jump("txzqController.php?flag=getHuizong");
		}
		
		
		
	}elseif ($flag == "t_getHuizong"){
		
		$userid = $_SESSION['member']['id'];
		$txzqhuizongManager = new txzqhuizong();
//		$res5 = $txzqhuizongManager->getTodaytxzqhuizongDataByTid($userid, date("Y-m-d H:i:s"));
		$res5 = $txzqhuizongManager->getNewHuizongData();
		if(empty($res5)){ // 为空
			$smarty->assign("flag","t_nohuizong");
			$smarty->assign("path2","通信值勤汇报表汇总");
		}else{
			// 不为空
			$smarty->assign("unit","第三通信团");
			$smarty->assign("flag","t_huizong");
			$smarty->assign("date",Tools::getDatetimeToDate($res5[0]["inputtime"]));
			$smarty->assign("path2","通信值勤汇报表汇总");
			$smarty->assign("txzqTemp", $res5[0]);
			$smarty->assign("button", "修改");
			$smarty->assign("cz", "通信值班室");
		}
		$smarty->display("txzqDay.tpl");
	
	}elseif ($flag == "t_huizong_search"){
		
		$datetime = $_POST['datetime'];
		if($datetime == ""){
			$datetime = date("Y-m-d H:i:s");
		}
		$userid = $_SESSION['member']['id'];
		$txzqhuizongManager = new txzqhuizong();
		$res5 = $txzqhuizongManager->getTodaytxzqhuizongDataByTid($userid, $datetime);
		if(empty($res5)){ // 为空
			$smarty->assign("flag","t_nohuizong");
			$smarty->assign("path2","通信值勤汇报表汇总");
		}else{
			// 不为空
			$smarty->assign("unit","第三通信团");
			$smarty->assign("flag","t_huizong");
			$smarty->assign("date",Tools::getDatetimeToDate($res5[0]["inputtime"]));
			$smarty->assign("path2","通信值勤汇报表汇总");
			$smarty->assign("txzqTemp", $res5[0]);
			$smarty->assign("button", "修改");
			$smarty->assign("cz", "通信值班室");
		}
		$smarty->display("txzqDay.tpl");

	}elseif ($flag == "t_huizong"){
		
//		$lowercase = $_POST['lowercase'];
		$inforealize = $_POST['inforealize'];
		$repairlink = $_POST['repairlink'];
		$gbgbinfo = $_POST['gbgbinfo'];
		$traininfo = $_POST['traininfo'];
		$dutycheck = $_POST['dutycheck'];
//		$lanrun = $_POST['lanrun'];
		$machinelinework = $_POST['machinelinework'];
		$dutyhead = $_POST['dutyhead'];
		$dutyer = $_POST['dutyer'];
		
		
	    $txzqhuizong = new txzqhuizong();
		$txzqhuizong->lowercase = "";
		$txzqhuizong->inforealize = $inforealize;
		$txzqhuizong->repairlink = $repairlink;
		$txzqhuizong->gbgbinfo = $gbgbinfo;
		$txzqhuizong->traininfo = $traininfo;
		$txzqhuizong->dutycheck = $dutycheck;
		$txzqhuizong->machinelinework = $machinelinework;
		$txzqhuizong->lanrun = "";
		$txzqhuizong->userid = $_SESSION['member']['id'];
		$txzqhuizong->yflag = 0;
		$txzqhuizong->tflag = 2;
		$txzqhuizong->submitflag = 1;
		$txzqhuizong->inputtime = date("Y-m-d H:i:s");
		$txzqhuizong->dutyhead = $dutyhead;
		$txzqhuizong->dutyer = $dutyer;
		$txzqhuizong->dept = "通信值班室";
	    
	    // 添加到汇总表中
	    $res = $txzqhuizong->addtxzqhuizong();
	    // 将所汇总的数据标志位置1
		$tid = $_SESSION['member']['id'];
		
		$txzqhuizongManager = new txzqhuizong();
		if ($res == 1){
			// 改变所有的yflag的值   start
			$resListy = $txzqhuizongManager->getYinghuizongAllByTid($tid, date("Y-m-d H:i:s"));
			for ($i=0; $i<count($resListy); $i++){
				$id = $resListy[$i]['id'];
				$txzqhuizongManager->updateYflagById($id, 1);
			}
			// 改变所有的yflag的值   end
			Tools::alert("添加成功!!");
			Tools::jump("txzqController.php?flag=t_getHuizong");
		}else{
			Tools::alert("添加失败!!请重新操作...");
			Tools::jump("txzqController.php?flag=getLianAll");
		}
		
	}elseif ($flag == "update_t_huizong"){
		
		$id = $_POST['id'];
//		$lowercase = $_POST['lowercase'];
		$inforealize = $_POST['inforealize'];
		$repairlink = $_POST['repairlink'];
		$gbgbinfo = $_POST['gbgbinfo'];
		$traininfo = $_POST['traininfo'];
		$dutycheck = $_POST['dutycheck'];
//		$lanrun = $_POST['lanrun'];
		$machinelinework = $_POST['machinelinework'];
		$dutyhead = $_POST['dutyhead'];
		$dutyer = $_POST['dutyer'];
		
		
	    $txzqhuizong = new txzqhuizong();
		$txzqhuizong->lowercase = "";
		$txzqhuizong->inforealize = $inforealize;
		$txzqhuizong->repairlink = $repairlink;
		$txzqhuizong->gbgbinfo = $gbgbinfo;
		$txzqhuizong->traininfo = $traininfo;
		$txzqhuizong->dutycheck = $dutycheck;
		$txzqhuizong->machinelinework = $machinelinework;
		$txzqhuizong->lanrun = "";
		$txzqhuizong->userid = $_SESSION['member']['id'];
		$txzqhuizong->yflag = 0;
		$txzqhuizong->tflag = 2;
		$txzqhuizong->submitflag = 1;
		$txzqhuizong->inputtime = date("Y-m-d H:i:s");
		$txzqhuizong->dutyhead = $dutyhead;
		$txzqhuizong->dutyer = $dutyer;
		$txzqhuizong->dept = "通信值班室";
	    
	    // 添加到汇总表中
	    $res = $txzqhuizong->updatetxzqhuizong($id);
		
		if ($res == 1){
			Tools::alert("添加成功!!");
			Tools::jump("txzqController.php?flag=t_getHuizong");
		}else{
			Tools::alert("添加失败!!请重新操作...");
			Tools::jump("txzqController.php?flag=t_getHuizong");
		}
	}
	
?>