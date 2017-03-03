<?php
	session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/work.class.php';
	require_once 'include/model/huizong.class.php';
	require_once 'include/model/t_huizong_worktab.class.php';
	require_once 'include/model/t_huizong_model.class.php';
	require_once 'include/common/Tools.class.php';
	require_once 'include/common/config.php';
	$smarty->assign("member", $_SESSION["member"]);
	
	$flag = $_REQUEST["flag"];

	$workManager = new work();
	
	if($flag == "todaydata"){ //得到当天列表
		$userId = $_SESSION['member']['id'];
		$resList = $workManager->getTodayWorkDataBySid($userId, date("Y-m-d H:i:s"));
		if(empty($resList)){
			// 为空
			$smarty->assign("flag","l_nodata");
			$smarty->assign("path2","行政汇报信息");
		}else{
			// 不为空
			// 判断角色  营级需要在后面添加  “营部”
			if($_SESSION["member"]['role'] == 5){  // 营级
				$smarty->assign("unit",$_SESSION["member"]["s_name"]."营部");
			}else{
				$smarty->assign("unit",$_SESSION["member"]["s_name"]);
			}
			
			
			$smarty->assign("date",Tools::getDatetimeToDate($resList[0]['inputtime']));
			
			$smarty->assign("flag","l_havedata");
			$smarty->assign("unitNum",$_SESSION["member"]['role']);
			$smarty->assign("path2","行政汇报信息");
			$smarty->assign("workTemp", $resList[0]);
			$smarty->assign("button", "修改");
			$smarty->assign("cz", "列表");
		}
		$smarty->display("WorkDay.tpl");
		
	}elseif($flag == "getLianAll"){
		$userid = $_SESSION['member']['id'];
		$s_id = $_SESSION['member']['unit_id'];
		// 判断是否显示汇总按钮  start
		$huizongManager = new huizong();
		$res5 = $huizongManager->getTodayHuiZongByUserid($userid, date("Y-m-d H:i:s"));
		// 判断是否显示汇总按钮  end
		if(empty($res5)){
			$smarty->assign("huizongBtn","0");
		}else{
			$smarty->assign("huizongBtn","1");
		}
		$res3 = $workManager->getWorkByShangjiId($userid, $s_id,  date("Y-m-d H:i:s"));
		if(empty($res3)){
			// 为空
			$smarty->assign("flag","y_nodata");
			$smarty->assign("path2","行政汇报信息");
		}else{
			// 不为空
			$smarty->assign("unit",$_SESSION["member"]["s_name"]);
			$smarty->assign("flag","y_havedata");
			$smarty->assign("path2","行政汇报信息");
			$smarty->assign("workTemp", $res3);
			$smarty->assign("button", "修改");
			$smarty->assign("cz", "列表");
			
		}
		$smarty->display("WorkDay.tpl");
	
	}elseif($flag == "y_search"){	// 营搜索
		
		$datetime = $_POST['datetime'];
		if($datetime == ""){
			$datetime = date("Y-m-d");
		}
		
		$userid = $_SESSION['member']['id'];
		$s_id = $_SESSION['member']['unit_id'];
		// 判断是否显示汇总按钮  start
		if($datetime == date("Y-m-d")){
			$huizongManager = new huizong();
			$res5 = $huizongManager->getTodayHuiZongByUserid($userid, $datetime);
			// 判断是否显示汇总按钮  end
			if(empty($res5)){
				$smarty->assign("huizongBtn","0");
			}else{
				$smarty->assign("huizongBtn","1");
			}
		}else{
			$smarty->assign("huizongBtn","2");
		}
		
		$res3 = $workManager->getWorkByShangjiId($userid, $s_id,  $datetime);
		if(empty($res3)){
			// 为空
			$smarty->assign("flag","y_nodata");
			$smarty->assign("path2","行政汇报信息");
		}else{
			// 不为空
			$smarty->assign("unit",$_SESSION["member"]["s_name"]);
			$smarty->assign("flag","y_havedata");
			$smarty->assign("path2","行政汇报信息");
			$smarty->assign("workTemp", $res3);
			$smarty->assign("button", "修改");
			$smarty->assign("cz", "列表");
			
		}
		$smarty->display("WorkDay.tpl");
		
		
	}elseif($flag == "add"){	// 添加
		
		$dutyhead = $_POST['dutyhead']; 	//值班首长
		$dutyer = $_POST['dutyer']; 	//值班员
		$gbfactnum = $_POST['gbfactnum']; 	//干部应到人数
		$gbshouldnum = $_POST['gbshouldnum']; //干部应到人数
		$gbholiday = $_POST['gbholiday']; //干部休假
		$gbout = $_POST['gbout'];   // 干部外出
		$sgfactnum = $_POST['sgfactnum']; //士官实在人数
		$sgshouldnum = $_POST['sgshouldnum']; //士官应该人数
		$sgholiday = $_POST['sgholiday']; //士官休假
		$sgout = $_POST['sgout']; //士官外出
		$ywbfactnum = $_POST['ywbfactnum']; //义务兵实在人数
		$ywbshouldnum = $_POST['ywbshouldnum']; //义务兵应在人数
		$ywbholiday = $_POST['ywbholiday']; //义务兵休假
		$ywbout = $_POST['ywbout']; //义务兵外出
		$remark = $_POST['remark']; //备注
		$onedaywork = $_POST['onedaywork']; 
		$headdownlian = $_POST['headdownlian']; 
		if($_SESSION["member"]['role'] == 9){
			$weather = $_POST['weather'];	// 天气
			$Healthprevention = $_POST['Healthprevention'];  // 卫生防疫
		}else{
			$weather = "";	// 天气
			$Healthprevention = "";  // 卫生防疫
		}
		
		
		$factnum = $gbfactnum + $sgfactnum + $ywbfactnum; // 总数实到人数
		$shouldnum = $gbshouldnum +$sgshouldnum +$ywbshouldnum; //总数应到人数
		
		$workAdd = new work();
		$workAdd->factnum = $factnum;
		$workAdd->shouldnum = $shouldnum;
		$workAdd->dutyhead = $dutyhead;
		$workAdd->dutyer = $dutyer;
		$workAdd->gbfactnum = $gbfactnum;
		$workAdd->gbshouldnum = $gbshouldnum;
		$workAdd->gbholiday = $gbholiday;
		$workAdd->gbout = $gbout;
		$workAdd->sgfactnum  = $sgfactnum;
		$workAdd->sgshouldnum = $sgshouldnum;
		$workAdd->sgholiday = $sgholiday;
		$workAdd->sgout = $sgout;
		$workAdd->ywbfactnum = $ywbfactnum;
		$workAdd->ywbshouldnum = $ywbshouldnum;
		$workAdd->ywbholiday = $ywbholiday;
		$workAdd->ywbout = $ywbout;
		$workAdd->remark = $remark;
		$workAdd->onedaywork = $onedaywork;
		$workAdd->headdownlian = $headdownlian;
		$workAdd->weather = $weather;
		$workAdd->Healthprevention = $Healthprevention;
		
		$workAdd->yflag = 0;
		$workAdd->tflag = 0;
		$workAdd->submitflag = 1;
		$workAdd->userid = $_SESSION["member"]["id"];
		$workAdd->inputtime = date("Y-m-d H:i:s");
		// 查一下当前时候已经添加  start
		$resCheck = $workAdd->checkReadyAdd($_SESSION["member"]["id"]);
		// 查一下当前时候已经添加  end
		if(empty($resCheck)){
			$res = $workAdd->addWork();
			if ($res == 1){
				Tools::alert("添加成功!!");
				Tools::jump("WorkController.php?flag=todaydata");
			}else{
				Tools::alert("添加失败!!请重新操作...");
				Tools::jump("WorkController.php?flag=todaydata");
			}
		}else{
			Tools::alert("今天数据已添加!!");
			Tools::jump("WorkController.php?flag=todaydata");
		}
		
		
	}elseif($flag == "t_add"){	// 团添加
		
		$dutyhead = $_POST['dutyhead']; 	//值班首长
		$dutyer = $_POST['dutyer']; 	//值班员
		$gbfactnum = $_POST['gbfactnum']; 	//干部应到人数
		$gbshouldnum = $_POST['gbshouldnum']; //干部应到人数
		$gbholiday = $_POST['gbholiday']; //干部休假
		$gbout = $_POST['gbout'];   // 干部外出
		$sgfactnum = $_POST['sgfactnum']; //士官实在人数
		$sgshouldnum = $_POST['sgshouldnum']; //士官应该人数
		$sgholiday = $_POST['sgholiday']; //士官休假
		$sgout = $_POST['sgout']; //士官外出
		$ywbfactnum = $_POST['ywbfactnum']; //义务兵实在人数
		$ywbshouldnum = $_POST['ywbshouldnum']; //义务兵应在人数
		$ywbholiday = $_POST['ywbholiday']; //义务兵休假
		$ywbout = $_POST['ywbout']; //义务兵外出
		$remark = $_POST['remark']; //备注
//		$onedaywork = $_POST['onedaywork']; 
//		$headdownlian = $_POST['headdownlian']; 
//		$weather = $_POST['weather'];	// 天气
//		$Healthprevention = $_POST['Healthprevention'];  // 卫生防疫
		
		$factnum = $gbfactnum + $sgfactnum + $ywbfactnum; // 总数实到人数
		$shouldnum = $gbshouldnum +$sgshouldnum +$ywbshouldnum; //总数应到人数
		
		$huizongAdd = new huizong();
		$huizongAdd->factnum = $factnum;
		$huizongAdd->shouldnum = $shouldnum;
		$huizongAdd->dutyhead = $dutyhead;
		$huizongAdd->dutyer = $dutyer;
		$huizongAdd->gbfactnum = $gbfactnum;
		$huizongAdd->gbshouldnum = $gbshouldnum;
		$huizongAdd->gbholiday = $gbholiday;
		$huizongAdd->gbout = $gbout;
		$huizongAdd->sgfactnum  = $sgfactnum;
		$huizongAdd->sgshouldnum = $sgshouldnum;
		$huizongAdd->sgholiday = $sgholiday;
		$huizongAdd->sgout = $sgout;
		$huizongAdd->ywbfactnum = $ywbfactnum;
		$huizongAdd->ywbshouldnum = $ywbshouldnum;
		$huizongAdd->ywbholiday = $ywbholiday;
		$huizongAdd->ywbout = $ywbout;
		$huizongAdd->remark = $remark;
//		$huizongAdd->onedaywork = $onedaywork;
//		$huizongAdd->headdownlian = $headdownlian;
//		$huizongAdd->weather = $weather;
//		$huizongAdd->Healthprevention = $Healthprevention;
		
		$huizongAdd->yflag = 0;
		$huizongAdd->tflag = 0;
		$huizongAdd->submitflag = 1;
		$huizongAdd->userid = $_SESSION["member"]["id"];
		$huizongAdd->inputtime = date("Y-m-d H:i:s");
		
		$checkRes = $huizongAdd->getTodayHuiZongByUserid($_SESSION["member"]["id"], date("Y-m-d H:i:s"));
		
		if(empty($checkRes)){
			$res = $huizongAdd->addHuizong();
			if ($res == 1){
				Tools::alert("添加成功!!");
				Tools::jump("WorkController.php?flag=t_todaydata");
			}else{
				Tools::alert("添加失败!!请重新操作...");
				Tools::jump("WorkController.php?flag=t_todaydata");
			}
		}else{
			Tools::alert("今天数据已添加!!");
			Tools::jump("WorkController.php?flag=t_todaydata");
		}
		
	}elseif($flag == "t_update"){	// 团update
		
		$id = $_POST['id'];
		$dutyhead = $_POST['dutyhead']; 	//值班首长
		$dutyer = $_POST['dutyer']; 	//值班员
		$gbfactnum = $_POST['gbfactnum']; 	//干部应到人数
		$gbshouldnum = $_POST['gbshouldnum']; //干部应到人数
		$gbholiday = $_POST['gbholiday']; //干部休假
		$gbout = $_POST['gbout'];   // 干部外出
		$sgfactnum = $_POST['sgfactnum']; //士官实在人数
		$sgshouldnum = $_POST['sgshouldnum']; //士官应该人数
		$sgholiday = $_POST['sgholiday']; //士官休假
		$sgout = $_POST['sgout']; //士官外出
		$ywbfactnum = $_POST['ywbfactnum']; //义务兵实在人数
		$ywbshouldnum = $_POST['ywbshouldnum']; //义务兵应在人数
		$ywbholiday = $_POST['ywbholiday']; //义务兵休假
		$ywbout = $_POST['ywbout']; //义务兵外出
		$remark = $_POST['remark']; //备注
//		$onedaywork = $_POST['onedaywork']; 
//		$headdownlian = $_POST['headdownlian']; 
//		$weather = $_POST['weather'];	// 天气
//		$Healthprevention = $_POST['Healthprevention'];  // 卫生防疫
		
		$factnum = $gbfactnum + $sgfactnum + $ywbfactnum; // 总数实到人数
		$shouldnum = $gbshouldnum +$sgshouldnum +$ywbshouldnum; //总数应到人数
		
		$huizongUpdate = new huizong();
		$huizongUpdate->factnum = $factnum;
		$huizongUpdate->shouldnum = $shouldnum;
		$huizongUpdate->dutyhead = $dutyhead;
		$huizongUpdate->dutyer = $dutyer;
		$huizongUpdate->gbfactnum = $gbfactnum;
		$huizongUpdate->gbshouldnum = $gbshouldnum;
		$huizongUpdate->gbholiday = $gbholiday;
		$huizongUpdate->gbout = $gbout;
		$huizongUpdate->sgfactnum  = $sgfactnum;
		$huizongUpdate->sgshouldnum = $sgshouldnum;
		$huizongUpdate->sgholiday = $sgholiday;
		$huizongUpdate->sgout = $sgout;
		$huizongUpdate->ywbfactnum = $ywbfactnum;
		$huizongUpdate->ywbshouldnum = $ywbshouldnum;
		$huizongUpdate->ywbholiday = $ywbholiday;
		$huizongUpdate->ywbout = $ywbout;
		$huizongUpdate->remark = $remark;
//		$workUpdate->onedaywork = $onedaywork;
//		$workUpdate->headdownlian = $headdownlian;
//		$workUpdate->weather = $weather;
//		$workUpdate->Healthprevention = $Healthprevention;
		
		$huizongUpdate->yflag = 0;
		$huizongUpdate->tflag = 0;
		$huizongUpdate->submitflag = 1;
		$huizongUpdate->userid = $_SESSION["member"]["id"];
		$huizongUpdate->inputtime = date("Y-m-d H:i:s");
		
		
		$res = $huizongUpdate->getHuizongById($id);
		
		if($res[0].yflag == 0 && $res[0].tflag == 0){
			$res2 = $huizongUpdate->updateHuiZong($id);
			if($res2 == 1){
				Tools::alert("修改成功!!");
			}else{
				Tools::alert("修改失败!!请重新操作...");
			}
			Tools::jump("WorkController.php?flag=t_todaydata");
			
		}else{
			// 通过审核  不能修改
			Tools::alert("该信息已通过上级审核 !!不能修改!!");
			Tools::jump("workController.php?flag=t_todaydata");
		}
		
		
	}elseif($flag == "update"){
		$id = $_POST['id'];
		$dutyhead = $_POST['dutyhead']; 	//值班首长
		$dutyer = $_POST['dutyer']; 	//值班员
		$gbfactnum = $_POST['gbfactnum']; 	//干部应到人数
		$gbshouldnum = $_POST['gbshouldnum']; //干部应到人数
		$gbholiday = $_POST['gbholiday']; //干部休假
		$gbout = $_POST['gbout'];   // 干部外出
		$sgfactnum = $_POST['sgfactnum']; //士官实在人数
		$sgshouldnum = $_POST['sgshouldnum']; //士官应该人数
		$sgholiday = $_POST['sgholiday']; //士官休假
		$sgout = $_POST['sgout']; //士官外出
		$ywbfactnum = $_POST['ywbfactnum']; //义务兵实在人数
		$ywbshouldnum = $_POST['ywbshouldnum']; //义务兵应在人数
		$ywbholiday = $_POST['ywbholiday']; //义务兵休假
		$ywbout = $_POST['ywbout']; //义务兵外出
		$remark = $_POST['remark']; //备注
		$onedaywork = $_POST['onedaywork']; 
		$headdownlian = $_POST['headdownlian']; 
//		$weather = $_POST['weather'];	// 天气
//		$Healthprevention = $_POST['Healthprevention'];  // 卫生防疫
		
		if($_SESSION["member"]['role'] == 9){
			$weather = $_POST['weather'];	// 天气
			$Healthprevention = $_POST['Healthprevention'];  // 卫生防疫
		}else{
			$weather = "";	// 天气
			$Healthprevention = "";  // 卫生防疫
		}
		
		$factnum = $gbfactnum + $sgfactnum + $ywbfactnum; // 总数实到人数
		$shouldnum = $gbshouldnum +$sgshouldnum +$ywbshouldnum; //总数应到人数
		
		$workUpdate = new work();
		$workUpdate->factnum = $factnum;
		$workUpdate->shouldnum = $shouldnum;
		$workUpdate->dutyhead = $dutyhead;
		$workUpdate->dutyer = $dutyer;
		$workUpdate->gbfactnum = $gbfactnum;
		$workUpdate->gbshouldnum = $gbshouldnum;
		$workUpdate->gbholiday = $gbholiday;
		$workUpdate->gbout = $gbout;
		$workUpdate->sgfactnum  = $sgfactnum;
		$workUpdate->sgshouldnum = $sgshouldnum;
		$workUpdate->sgholiday = $sgholiday;
		$workUpdate->sgout = $sgout;
		$workUpdate->ywbfactnum = $ywbfactnum;
		$workUpdate->ywbshouldnum = $ywbshouldnum;
		$workUpdate->ywbholiday = $ywbholiday;
		$workUpdate->ywbout = $ywbout;
		$workUpdate->remark = $remark;
		$workUpdate->onedaywork = $onedaywork;
		$workUpdate->headdownlian = $headdownlian;
		$workUpdate->weather = $weather;
		$workUpdate->Healthprevention = $Healthprevention;
		
		$workUpdate->yflag = 0;
		$workUpdate->tflag = 0;
		$workUpdate->submitflag = 1;
		$workUpdate->userid = $_SESSION["member"]["id"];
		$workUpdate->inputtime = date("Y-m-d H:i:s");
		// 判断是否被审核
		$res = $workUpdate->isshenhe($_SESSION["member"]["id"]);
		if($res == 1){ // 执行修改操作
			$res2 = $workUpdate->updateWork($id);
			if($res2 == 1){
				Tools::alert("修改成功!!");
			}else{
				Tools::alert("修改失败!!请重新操作...");
			}
			Tools::jump("WorkController.php?flag=todaydata&userId=".$_SESSION["member"]["id"]);
		}else{	// 已经被审核
			Tools::alert("添加失败!!该信息已被审核！请核实...");
			Tools::jump("WorkController.php?flag=todaydata&userId=".$_SESSION["member"]["id"]);
		}
	}elseif($flag == "aw"){
		echo $_SESSION["member"]["id"];
		$workUpdate = new work();
		$res = $workUpdate->isshenhe($_SESSION["member"]["id"]);
		echo $res;
	
	}elseif ($flag == "y_huizong"){

		$dutyhead = $_POST['dutyhead']; 	//值班首长
		$dutyer = $_POST['dutyer']; 	//值班员
		$gbfactnum = $_POST['gbfactnum']; 	//干部应到人数
		$gbshouldnum = $_POST['gbshouldnum']; //干部应到人数
		$gbholiday = $_POST['gbholiday']; //干部休假
		$gbout = $_POST['gbout'];   // 干部外出
		$sgfactnum = $_POST['sgfactnum']; //士官实在人数
		$sgshouldnum = $_POST['sgshouldnum']; //士官应该人数
		$sgholiday = $_POST['sgholiday']; //士官休假
		$sgout = $_POST['sgout']; //士官外出
		$ywbfactnum = $_POST['ywbfactnum']; //义务兵实在人数
		$ywbshouldnum = $_POST['ywbshouldnum']; //义务兵应在人数
		$ywbholiday = $_POST['ywbholiday']; //义务兵休假
		$ywbout = $_POST['ywbout']; //义务兵外出
		$remark = $_POST['remark']; //备注
		$onedaywork = $_POST['onedaywork']; 
		$headdownlian = $_POST['headdownlian']; 
//		$weather = $_POST['weather'];	// 天气
//		$Healthprevention = $_POST['Healthprevention'];  // 卫生防疫
		
		$factnum = $gbfactnum + $sgfactnum + $ywbfactnum; // 总数实到人数
		$shouldnum = $gbshouldnum +$sgshouldnum +$ywbshouldnum; //总数应到人数
		
		$huizongAdd = new huizong();
		$huizongAdd->factnum = $factnum;
		$huizongAdd->shouldnum = $shouldnum;
		$huizongAdd->dutyhead = $dutyhead;
		$huizongAdd->dutyer = $dutyer;
		$huizongAdd->gbfactnum = $gbfactnum;
		$huizongAdd->gbshouldnum = $gbshouldnum;
		$huizongAdd->gbholiday = $gbholiday;
		$huizongAdd->gbout = $gbout;
		$huizongAdd->sgfactnum  = $sgfactnum;
		$huizongAdd->sgshouldnum = $sgshouldnum;
		$huizongAdd->sgholiday = $sgholiday;
		$huizongAdd->sgout = $sgout;
		$huizongAdd->ywbfactnum = $ywbfactnum;
		$huizongAdd->ywbshouldnum = $ywbshouldnum;
		$huizongAdd->ywbholiday = $ywbholiday;
		$huizongAdd->ywbout = $ywbout;
		$huizongAdd->remark = $remark;
		$huizongAdd->weather = $weather;
		$huizongAdd->Healthprevention = $Healthprevention;
		$huizongAdd->onedaywork = $onedaywork;
		$huizongAdd->headdownlian = $headdownlian;
		
		$huizongAdd->yflag = 0;
		$huizongAdd->tflag = 0;
		$huizongAdd->submitflag = 1;
		$huizongAdd->userid = $_SESSION["member"]["id"];
		$huizongAdd->inputtime = date("Y-m-d H:i:s");
		
		$checkRes = $huizongAdd->getTodayHuiZongByUserid($_SESSION["member"]["id"], date("Y-m-d H:i:s"));
		
		if(empty($checkRes)){
			$res = $huizongAdd->addHuizong();
			
			$userid = $_SESSION['member']['id'];
			$s_id = $_SESSION['member']['unit_id'];
			if ($res == 1){
				// 改变所有的yflag的值   start
				$res4 = $workManager->getWorkByShangjiId($userid,$s_id, date("Y-m-d H:i:s"));
				for ($i=0; $i<count($res4); $i++){
					$id = $res4[$i]['id'];
					$workManager->updateYflagById($id, 1);
				}
				// 改变所有的yflag的值   end
				Tools::alert("添加成功!!");
				Tools::jump("WorkController.php?flag=y_getHuizong");
			}else{
				Tools::alert("添加失败!!请重新操作...");
				Tools::jump("WorkController.php?flag=todaydata&userId=".$_SESSION["member"]["id"]);
			}
		}else{
			Tools::alert("今天数据已汇总!!");
			Tools::jump("WorkController.php?flag=t_todaydata");
		}
		
		
	}elseif ($flag == "y_getHuizong"){
		$userid = $_SESSION['member']['id'];
		$huizongManager = new huizong();
		$res5 = $huizongManager->getTodayHuiZongByUserid($userid, date("Y-m-d H:i:s"));
//		var_dump($res5);
		if(empty($res5)){ // 为空
			$smarty->assign("flag","y_nohuizong");
			$smarty->assign("path2","行政汇报表汇总");
		}else{
			// 不为空
			$smarty->assign("unit",$_SESSION["member"]["s_name"]);
			$smarty->assign("flag","y_huizong");
			$smarty->assign("date",date("Y-m-d"));
			$smarty->assign("path2","行政汇报表汇总");
			$smarty->assign("workTemp", $res5[0]);
			$smarty->assign("button", "修改");
			$smarty->assign("cz", "列表");
		}
		$smarty->display("WorkDay.tpl");
	
	}elseif ($flag == "y_updatehuizong"){

		$id = $_POST['id'];
		$dutyhead = $_POST['dutyhead']; 	//值班首长
		$dutyer = $_POST['dutyer']; 	//值班员
		$gbfactnum = $_POST['gbfactnum']; 	//干部应到人数
		$gbshouldnum = $_POST['gbshouldnum']; //干部应到人数
		$gbholiday = $_POST['gbholiday']; //干部休假
		$gbout = $_POST['gbout'];   // 干部外出
		$sgfactnum = $_POST['sgfactnum']; //士官实在人数
		$sgshouldnum = $_POST['sgshouldnum']; //士官应该人数
		$sgholiday = $_POST['sgholiday']; //士官休假
		$sgout = $_POST['sgout']; //士官外出
		$ywbfactnum = $_POST['ywbfactnum']; //义务兵实在人数
		$ywbshouldnum = $_POST['ywbshouldnum']; //义务兵应在人数
		$ywbholiday = $_POST['ywbholiday']; //义务兵休假
		$ywbout = $_POST['ywbout']; //义务兵外出
		$remark = $_POST['remark']; //备注
		$onedaywork = $_POST['onedaywork']; 
		$headdownlian = $_POST['headdownlian'];
		
		$factnum = $gbfactnum + $sgfactnum + $ywbfactnum; // 总数实到人数
		$shouldnum = $gbshouldnum +$sgshouldnum +$ywbshouldnum; //总数应到人数
		
		$huizongUpdate = new huizong();
		$huizongUpdate->factnum = $factnum;
		$huizongUpdate->shouldnum = $shouldnum;
		$huizongUpdate->dutyhead = $dutyhead;
		$huizongUpdate->dutyer = $dutyer;
		$huizongUpdate->gbfactnum = $gbfactnum;
		$huizongUpdate->gbshouldnum = $gbshouldnum;
		$huizongUpdate->gbholiday = $gbholiday;
		$huizongUpdate->gbout = $gbout;
		$huizongUpdate->sgfactnum  = $sgfactnum;
		$huizongUpdate->sgshouldnum = $sgshouldnum;
		$huizongUpdate->sgholiday = $sgholiday;
		$huizongUpdate->sgout = $sgout;
		$huizongUpdate->ywbfactnum = $ywbfactnum;
		$huizongUpdate->ywbshouldnum = $ywbshouldnum;
		$huizongUpdate->ywbholiday = $ywbholiday;
		$huizongUpdate->ywbout = $ywbout;
		$huizongUpdate->remark = $remark;
		$huizongUpdate->onedaywork = $onedaywork;
		$huizongUpdate->headdownlian = $headdownlian;
		
		$huizongUpdate->yflag = 0;
		$huizongUpdate->tflag = 0;
		$huizongUpdate->submitflag = 1;
		$huizongUpdate->userid = $_SESSION["member"]["id"];
		$huizongUpdate->inputtime = date("Y-m-d H:i:s");
		// 判断是否被审核
		$res = $huizongUpdate->isshenhe($_SESSION["member"]["id"]);
		if($res == 1){ // 执行修改操作
			$res2 = $huizongUpdate->updateHuiZong($id);
			if($res2 == 1){
				Tools::alert("修改成功!!");
			}else{
				Tools::alert("修改失败!!请重新操作...");
			}
			Tools::jump("WorkController.php?flag=y_getHuizong");
		}else{	// 已经被审核
			Tools::alert("添加失败!!该信息已被审核！请核实...");
			Tools::jump("WorkController.php?flag=y_getHuizong");
		}
	
	}elseif ($flag == "l_search"){
		$datetime = $_POST['datetime'];
		if($datetime == ""){
			$datetime = date("Y-m-d H:i:s");
		}
		$userId = $_SESSION['member']['id'];
		$resList = $workManager->getTodayWorkDataBySid($userId, $datetime);
		if(empty($resList)){
			// 为空
			$smarty->assign("search","search");
			$smarty->assign("flag","l_nodata");
			$smarty->assign("path2","行政汇报信息");
		}else{
			// 不为空
			$smarty->assign("unit",$_SESSION["member"]["s_name"]);
			$smarty->assign("flag","l_havedata");
			$smarty->assign("date",Tools::getDatetimeToDate($resList[0]['inputtime']));
			$smarty->assign("path2","行政汇报信息");
			$smarty->assign("workTemp", $resList[0]);
			$smarty->assign("button", "修改");
			$smarty->assign("cz", "列表");
		}
		$smarty->display("WorkDay.tpl");
	
	}elseif ($flag == "y_search_huizong"){
		$datetime = $_POST['datetime'];
		if($datetime == ""){
			$datetime = date("Y-m-d");
		}
		$userid = $_SESSION['member']['id'];
		$huizongManager = new huizong();
		$res5 = $huizongManager->getTodayHuiZongByUserid($userid, $datetime);
//		var_dump($res5);
		if(empty($res5)){ // 为空
			$smarty->assign("flag","y_nohuizong");
			$smarty->assign("path2","行政汇报表汇总");
		}else{
			// 不为空
			$smarty->assign("unit",$_SESSION["member"]["s_name"]);
			$smarty->assign("flag","y_huizong");
			$smarty->assign("date",$datetime);
			$smarty->assign("path2","行政汇报表汇总");
			$smarty->assign("workTemp", $res5[0]);
			$smarty->assign("button", "修改");
			$smarty->assign("cz", "列表");
		}
		$smarty->display("WorkDay.tpl");
	
	}elseif ($flag == "t_search"){ // 团汇总前搜索
		$datetime = $_POST['datetime'];
//		echo $datetime;
		if($datetime == ""){
			$datetime = date("Y-m-d H:i:s");
		}
		$huizongManager = new huizong();
		$tid = $_SESSION['member']['id'];
		$res = $huizongManager->getAllYingByTid($tid, $datetime);
		$t_huizong_worktabManager = new t_huizong_worktab();
		$res5 = $t_huizong_worktabManager->getTodayHuizongData($datetime);
		// 判断是否显示汇总按钮  end
		if(empty($res5)){
			if(count($res) < 8){
				$smarty->assign("huizongBtn","2");  // 未汇总   个数不够
			}else{
				$smarty->assign("huizongBtn","0");  // 未汇总
			}
		}else{
			$smarty->assign("huizongBtn","1");  // 已汇总
		}
		
		if(empty($res)){
			// 为空
			$smarty->assign("flag","t_nodata");
			$smarty->assign("path2","行政汇报信息");
		}else{
			// 不为空
			$smarty->assign("unit",$_SESSION["member"]["s_name"]);
			$smarty->assign("flag","t_havedata");
			$smarty->assign("path2","行政汇报信息");
			$smarty->assign("workTemp", $res);
			$smarty->assign("button", "修改");
			$smarty->assign("cz", "列表");
			
		}
		$smarty->display("WorkDay.tpl");
	}elseif ($flag == "getAllTuan"){
		$huizongManager = new huizong();
		$tid = $_SESSION['member']['id'];
		$res = $huizongManager->getAllYingByTid($tid, date("Y-m-d H:i:s"));
		$t_huizong_worktabManager = new t_huizong_worktab();
		$res5 = $t_huizong_worktabManager->getTodayHuizongData(date("Y-m-d H:i:s"));
		// 判断是否显示汇总按钮  end
		if(empty($res5)){
			if(count($res) < 8){
				$smarty->assign("huizongBtn","2");  // 未汇总   个数不够
			}else{
				$smarty->assign("huizongBtn","0");  // 未汇总
			}
		}else{
			$smarty->assign("huizongBtn","1");  // 已汇总
		}
		
		if(empty($res)){
			// 为空
			$smarty->assign("flag","t_nodata");
			$smarty->assign("path2","行政汇报信息");
		}else{
			// 不为空
			$smarty->assign("unit",$_SESSION["member"]["s_name"]);
			$smarty->assign("flag","t_havedata");
			$smarty->assign("path2","行政汇报信息");
			$smarty->assign("workTemp", $res);
			$smarty->assign("button", "修改");
			$smarty->assign("cz", "列表");
			
		}
		$smarty->display("WorkDay.tpl");
		
	}elseif ($flag == "t_todaydata"){ //  团行政汇总表单
		$tid = $_SESSION['member']['id'];
		$huizongManager = new huizong();
		
		$resList = $huizongManager->getTodayDataByTid($tid, date("Y-m-d H:i:s"));
		
		if(empty($resList)){
			// 为空
			$smarty->assign("flag","t_nodata_self");
			$smarty->assign("path2","行政汇报信息");
		}else{
			// 不为空
			$strDate = $resList[0]['inputtime'];
			$dateArray = explode(' ', $strDate);
			$smarty->assign("date",$dateArray[0]);
			
			$smarty->assign("unit",$_SESSION["member"]["s_name"]."团部");
			$smarty->assign("flag","t_havedata_self");
			$smarty->assign("path2","行政汇报信息");
			$smarty->assign("workTemp", $resList[0]);
			$smarty->assign("button", "修改");
			$smarty->assign("cz", "列表");
		}
		$smarty->display("WorkDay.tpl");
	
	}elseif ($flag == "t_search_self"){
		
		$datetime = $_POST['datetime'];
		if($datetime == ""){
			$datetime = date("Y-m-d H:i:s");
		}
		
		$tid = $_SESSION['member']['id'];
		$huizongManager = new huizong();
		
		$resList = $huizongManager->getTodayDataByTid($tid, $datetime);
		if(empty($resList)){
			// 为空
			$smarty->assign("search","search");
			$smarty->assign("flag","t_nodata_self");
			$smarty->assign("path2","行政汇报信息");
		}else{
			// 不为空
			$smarty->assign("unit",$_SESSION["member"]["s_name"]);
			$smarty->assign("flag","t_havedata_self");
			$smarty->assign("path2","行政汇报信息");
			$smarty->assign("workTemp", $resList[0]);
			$smarty->assign("button", "修改");
			$smarty->assign("cz", "列表");
		}
		$smarty->display("WorkDay.tpl");
		
	}elseif ($flag == "t_huizong"){  // 团汇总
		
		$dutyhead_th = $_POST['dutyhead_th'];
		$dutyer_th = $_POST['dutyer_th'];
		
		$onedaywork1 = $_POST['onedaywork1'];
		$onedaywork2 = $_POST['onedaywork2'];
		$onedaywork3 = $_POST['onedaywork3'];
		$onedaywork4 = $_POST['onedaywork4'];
		$onedaywork5 = $_POST['onedaywork5'];
		$onedayworkjql = $_POST['onedayworkjql'];
		$onedayworkjdd = $_POST['onedayworkjdd'];
		
		$controlwarning = $_POST['controlwarning'];
		$shangjiinforealize = $_POST['shangjiinforealize'];
		$headdownlian = $_POST['headdownlian'];
		$persontestcheck = $_POST['persontestcheck'];
		
		/******* 团  start*******/
		$dutyhead_t = $_POST['dutyhead_t'];
		$dutyer_t = $_POST['dutyer_t'];
		$shouldnum_t = $_POST['shouldnum_t'];
		$factnum_t = $_POST['factnum_t'];
		
		$gbshouldnum_t = $_POST['gbshouldnum_t'];
		$gbfactnum_t = $_POST['gbfactnum_t'];
		$gbholiday_t = $_POST['gbholiday_t'];
		$gbout_t = $_POST['gbout_t'];
		
		$sgshouldnum_t = $_POST['sgshouldnum_t'];
		$sgfactnum_t = $_POST['sgfactnum_t'];
		$sgholiday_t = $_POST['sgholiday_t'];
		$sgout_t = $_POST['sgout_t'];
		
		$ywbshouldnum_t = $_POST['ywbshouldnum_t'];
		$ywbfactnum_t = $_POST['ywbfactnum_t'];
		$ywbholiday_t = $_POST['ywbholiday_t'];
		$ywbout_t = $_POST['ywbout_t'];

		$remark_t = $_POST['remark_t'];
		
		$content_t =",". $dutyhead_t.",".$dutyer_t.",".$shouldnum_t.",".$factnum_t.",".
					$gbshouldnum_t.",".$gbfactnum_t.",".$gbholiday_t.",".$gbout_t.",".
					$sgshouldnum_t.",".$sgfactnum_t.",".$sgholiday_t.",".$sgout_t.",".
					$ywbshouldnum_t.",".$ywbfactnum_t.",".$ywbholiday_t.",".$ywbout_t.",".$remark_t;
		/******* 团  end*******/
		
		/******* 1营  start*******/
		$dutyhead_1 = $_POST['dutyhead_1'];
		$dutyer_1 = $_POST['dutyer_1'];
		$shouldnum_1 = $_POST['shouldnum_1'];
		$factnum_1 = $_POST['factnum_1'];
		
		$gbshouldnum_1 = $_POST['gbshouldnum_1'];
		$gbfactnum_1 = $_POST['gbfactnum_1'];
		$gbholiday_1 = $_POST['gbholiday_1'];
		$gbout_1 = $_POST['gbout_1'];
		
		$sgshouldnum_1 = $_POST['sgshouldnum_1'];
		$sgfactnum_1 = $_POST['sgfactnum_1'];
		$sgholiday_1 = $_POST['sgholiday_1'];
		$sgout_1 = $_POST['sgout_1'];
		
		$ywbshouldnum_1 = $_POST['ywbshouldnum_1'];
		$ywbfactnum_1 = $_POST['ywbfactnum_1'];
		$ywbholiday_1 = $_POST['ywbholiday_1'];
		$ywbout_1 = $_POST['ywbout_1'];

		$remark_1 = $_POST['remark_1'];
		
		$content_1 = $onedaywork1.",".$dutyhead_1.",".$dutyer_1.",".$shouldnum_1.",".$factnum_1.",".
		$gbshouldnum_1.",".$gbfactnum_1.",".$gbholiday_1.",".$gbout_1.",".
		$sgshouldnum_1.",".$sgfactnum_1.",".$sgholiday_1.",".$sgout_1.",".
		$ywbshouldnum_1.",".$ywbfactnum_1.",".$ywbholiday_1.",".$ywbout_1.",".$remark_1;
		/******* 1营  end*******/
		
		/******* 2营  start*******/
		$dutyhead_2 = $_POST['dutyhead_2'];
		$dutyer_2 = $_POST['dutyer_2'];
		$shouldnum_2 = $_POST['shouldnum_2'];
		$factnum_2 = $_POST['factnum_2'];
		
		$gbshouldnum_2 = $_POST['gbshouldnum_2'];
		$gbfactnum_2 = $_POST['gbfactnum_2'];
		$gbholiday_2 = $_POST['gbholiday_2'];
		$gbout_2 = $_POST['gbout_2'];
		
		$sgshouldnum_2 = $_POST['sgshouldnum_2'];
		$sgfactnum_2 = $_POST['sgfactnum_2'];
		$sgholiday_2 = $_POST['sgholiday_2'];
		$sgout_2 = $_POST['sgout_2'];
		
		$ywbshouldnum_2 = $_POST['ywbshouldnum_2'];
		$ywbfactnum_2 = $_POST['ywbfactnum_2'];
		$ywbholiday_2 = $_POST['ywbholiday_2'];
		$ywbout_2 = $_POST['ywbout_2'];

		$remark_2 = $_POST['remark_2'];
		
		$content_2 = $onedaywork2.",".$dutyhead_2.",".$dutyer_2.",".$shouldnum_2.",".$factnum_2.",".
		$gbshouldnum_2.",".$gbfactnum_2.",".$gbholiday_2.",".$gbout_2.",".
		$sgshouldnum_2.",".$sgfactnum_2.",".$sgholiday_2.",".$sgout_2.",".
		$ywbshouldnum_2.",".$ywbfactnum_2.",".$ywbholiday_2.",".$ywbout_2.",".$remark_2;
		/******* 2营  end*******/
		
		/******* 3营  start*******/
		$dutyhead_3 = $_POST['dutyhead_3'];
		$dutyer_3 = $_POST['dutyer_3'];
		$shouldnum_3 = $_POST['shouldnum_3'];
		$factnum_3 = $_POST['factnum_3'];
		
		$gbshouldnum_3 = $_POST['gbshouldnum_3'];
		$gbfactnum_3 = $_POST['gbfactnum_3'];
		$gbholiday_3 = $_POST['gbholiday_3'];
		$gbout_3 = $_POST['gbout_3'];
		
		$sgshouldnum_3 = $_POST['sgshouldnum_3'];
		$sgfactnum_3 = $_POST['sgfactnum_3'];
		$sgholiday_3 = $_POST['sgholiday_3'];
		$sgout_3 = $_POST['sgout_3'];
		
		$ywbshouldnum_3 = $_POST['ywbshouldnum_3'];
		$ywbfactnum_3 = $_POST['ywbfactnum_3'];
		$ywbholiday_3 = $_POST['ywbholiday_3'];
		$ywbout_3 = $_POST['ywbout_3'];

		$remark_3 = $_POST['remark_3'];
		
		$content_3 = $onedaywork3.",".$dutyhead_3.",".$dutyer_3.",".$shouldnum_3.",".$factnum_3.",".
		$gbshouldnum_3.",".$gbfactnum_3.",".$gbholiday_3.",".$gbout_3.",".
		$sgshouldnum_3.",".$sgfactnum_3.",".$sgholiday_3.",".$sgout_3.",".
		$ywbshouldnum_3.",".$ywbfactnum_3.",".$ywbholiday_3.",".$ywbout_3.",".$remark_3;
		/******* 3营  end*******/
		
		/******* 4营  start*******/
		$dutyhead_4 = $_POST['dutyhead_4'];
		$dutyer_4 = $_POST['dutyer_4'];
		$shouldnum_4 = $_POST['shouldnum_4'];
		$factnum_4 = $_POST['factnum_4'];
		
		$gbshouldnum_4 = $_POST['gbshouldnum_4'];
		$gbfactnum_4 = $_POST['gbfactnum_4'];
		$gbholiday_4 = $_POST['gbholiday_4'];
		$gbout_4 = $_POST['gbout_4'];
		
		$sgshouldnum_4 = $_POST['sgshouldnum_4'];
		$sgfactnum_4 = $_POST['sgfactnum_4'];
		$sgholiday_4 = $_POST['sgholiday_4'];
		$sgout_4 = $_POST['sgout_4'];
		
		$ywbshouldnum_4 = $_POST['ywbshouldnum_4'];
		$ywbfactnum_4 = $_POST['ywbfactnum_4'];
		$ywbholiday_4 = $_POST['ywbholiday_4'];
		$ywbout_4 = $_POST['ywbout_4'];

		$remark_4 = $_POST['remark_4'];
		
		$content_4 = $onedaywork4.",".$dutyhead_4.",".$dutyer_4.",".$shouldnum_4.",".$factnum_4.",".
		$gbshouldnum_4.",".$gbfactnum_4.",".$gbholiday_4.",".$gbout_4.",".
		$sgshouldnum_4.",".$sgfactnum_4.",".$sgholiday_4.",".$sgout_4.",".
		$ywbshouldnum_4.",".$ywbfactnum_4.",".$ywbholiday_4.",".$ywbout_4.",".$remark_4;
		/******* 4营  end*******/
		
		/******* 5营  start*******/
		$dutyhead_5 = $_POST['dutyhead_5'];
		$dutyer_5 = $_POST['dutyer_5'];
		$shouldnum_5 = $_POST['shouldnum_5'];
		$factnum_5 = $_POST['factnum_5'];
		
		$gbshouldnum_5 = $_POST['gbshouldnum_5'];
		$gbfactnum_5 = $_POST['gbfactnum_5'];
		$gbholiday_5 = $_POST['gbholiday_5'];
		$gbout_5 = $_POST['gbout_5'];
		
		$sgshouldnum_5 = $_POST['sgshouldnum_5'];
		$sgfactnum_5 = $_POST['sgfactnum_5'];
		$sgholiday_5 = $_POST['sgholiday_5'];
		$sgout_5 = $_POST['sgout_5'];
		
		$ywbshouldnum_5 = $_POST['ywbshouldnum_5'];
		$ywbfactnum_5 = $_POST['ywbfactnum_5'];
		$ywbholiday_5 = $_POST['ywbholiday_5'];
		$ywbout_5 = $_POST['ywbout_5'];

		$remark_5 = $_POST['remark_5'];
		
		$content_5 = $onedaywork5.",".$dutyhead_5.",".$dutyer_5.",".$shouldnum_5.",".$factnum_5.",".
		$gbshouldnum_5.",".$gbfactnum_5.",".$gbholiday_5.",".$gbout_5.",".
		$sgshouldnum_5.",".$sgfactnum_5.",".$sgholiday_5.",".$sgout_5.",".
		$ywbshouldnum_5.",".$ywbfactnum_5.",".$ywbholiday_5.",".$ywbout_5.",".$remark_5;
		/******* 5营  end*******/
		
		/******* 警勤连  start*******/
		$dutyhead_jql = $_POST['dutyhead_jql'];
		$dutyer_jql = $_POST['dutyer_jql'];
		$shouldnum_jql = $_POST['shouldnum_jql'];
		$factnum_jql = $_POST['factnum_jql'];
		
		$gbshouldnum_jql = $_POST['gbshouldnum_jql'];
		$gbfactnum_jql = $_POST['gbfactnum_jql'];
		$gbholiday_jql = $_POST['gbholiday_jql'];
		$gbout_jql = $_POST['gbout_jql'];
		
		$sgshouldnum_jql = $_POST['sgshouldnum_jql'];
		$sgfactnum_jql = $_POST['sgfactnum_jql'];
		$sgholiday_jql = $_POST['sgholiday_jql'];
		$sgout_jql = $_POST['sgout_jql'];
		
		$ywbshouldnum_jql = $_POST['ywbshouldnum_jql'];
		$ywbfactnum_jql = $_POST['ywbfactnum_jql'];
		$ywbholiday_jql = $_POST['ywbholiday_jql'];
		$ywbout_jql = $_POST['ywbout_jql'];

		$remark_jql = $_POST['remark_jql'];
		
		$content_jql = $onedayworkjql.",".$dutyhead_jql.",".$dutyer_jql.",".$shouldnum_jql.",".$factnum_jql.",".
		$gbshouldnum_jql.",".$gbfactnum_jql.",".$gbholiday_jql.",".$gbout_jql.",".
		$sgshouldnum_jql.",".$sgfactnum_jql.",".$sgholiday_jql.",".$sgout_jql.",".
		$ywbshouldnum_jql.",".$ywbfactnum_jql.",".$ywbholiday_jql.",".$ywbout_jql.",".$remark_jql;
		/******* 警勤连 end*******/
		
		/******* 教导队  start*******/
		$dutyhead_jdd = $_POST['dutyhead_jdd'];
		$dutyer_jdd = $_POST['dutyer_jdd'];
		$shouldnum_jdd = $_POST['shouldnum_jdd'];
		$factnum_jdd = $_POST['factnum_jdd'];
		
		$gbshouldnum_jdd = $_POST['gbshouldnum_jdd'];
		$gbfactnum_jdd = $_POST['gbfactnum_jdd'];
		$gbholiday_jdd = $_POST['gbholiday_jdd'];
		$gbout_jdd = $_POST['gbout_jdd'];
		
		$sgshouldnum_jdd = $_POST['sgshouldnum_jdd'];
		$sgfactnum_jdd = $_POST['sgfactnum_jdd'];
		$sgholiday_jdd = $_POST['sgholiday_jdd'];
		$sgout_jdd = $_POST['sgout_jdd'];
		
		$ywbshouldnum_jdd = $_POST['ywbshouldnum_jdd'];
		$ywbfactnum_jdd = $_POST['ywbfactnum_jdd'];
		$ywbholiday_jdd = $_POST['ywbholiday_jdd'];
		$ywbout_jdd = $_POST['ywbout_jdd'];

		$remark_jdd = $_POST['remark_jdd'];
		
		$content_jdd = $onedayworkjdd.",".$dutyhead_jdd.",".$dutyer_jdd.",".$shouldnum_jdd.",".$factnum_jdd.",".
		$gbshouldnum_jdd.",".$gbfactnum_jdd.",".$gbholiday_jdd.",".$gbout_jdd.",".
		$sgshouldnum_jdd.",".$sgfactnum_jdd.",".$sgholiday_jdd.",".$sgout_jdd.",".
		$ywbshouldnum_jdd.",".$ywbfactnum_jdd.",".$ywbholiday_jdd.",".$ywbout_jdd.",".$remark_jdd;
		/******* 教导队  end*******/
		
		$vehiclepleasenum = $_POST['vehiclepleasenum'];
		$vehicleusednum = $_POST['vehicleusednum'];
		$safesituation = $_POST['safesituation'];
		
		
		$tHuizongWorktab = new t_huizong_worktab();
		$tHuizongWorktab->dutyhead = $dutyhead_th;
		$tHuizongWorktab->dutyer = $dutyer_th;
		$tHuizongWorktab->controlwarning = $controlwarning;
		$tHuizongWorktab->shangjiinforealize = $shangjiinforealize;
		$tHuizongWorktab->headdownlian = $headdownlian;
		$tHuizongWorktab->persontestcheck = $persontestcheck;
//		$tHuizongWorktab->onedaywork = $onedaywork1."@".$onedaywork2."@".$onedaywork3."@".$onedaywork4."@".$onedaywork5."@".$onedayworkjql."@".$onedayworkjdd;
		$tHuizongWorktab->contentmain = $content_t."@".$content_1."@".$content_2."@".$content_3."@".$content_4."@".$content_5."@".$content_jql."@".$content_jdd;
		$tHuizongWorktab->unit_id = $_SESSION['member']['unit_id'];  // 单位id
		$tHuizongWorktab->dept = "行政值班室";
		$tHuizongWorktab->inputtime = date("Y-m-d H:i:s");
		
		$tHuizongWorktab->vehiclepleasenum = $vehiclepleasenum;
		$tHuizongWorktab->vehicleusednum = $vehicleusednum;
		$tHuizongWorktab->safesituation = $safesituation;
		
		
		$checkRes = $tHuizongWorktab->getTodayHuizongData(date("Y-m-d H:i:s"));
		
		if(empty($checkRes)){
			$res = $tHuizongWorktab->addT_huizong();
			
			if ($res == 1){
				// 修改标志位
				$huizongManager = new huizong();
				$tid = $_SESSION['member']['id'];
				$res6 = $huizongManager->getAllYingByTid($tid, date("Y-m-d H:i:s"));
				for ($i=0; $i<count($res6); $i++){
					$huizongManager->updateTflagById($res6[$i]['id'], 1);
				}
				
				Tools::alert("添加成功!!");
				Tools::jump("WorkController.php?flag=t_getHuizong");
			}else{
				Tools::alert("添加失败!!请重新操作...");
				Tools::jump("WorkController.php?flag=t_getHuizong");
			}
		}else{
			Tools::alert("今天数据已汇总!!");
			Tools::jump("WorkController.php?flag=t_getHuizong");
		}
		
	
	}elseif ($flag == "t_search_huizong"){  // 团汇总搜索
		$datetime = $_POST['datetime'];
//		echo $datetime;
		if($datetime == ""){
			$datetime = date("Y-m-d H:i:s");
		}
		
		$t_huizong_worktabManager = new t_huizong_worktab();
		$res5 = $t_huizong_worktabManager->getTodayHuizongData($datetime);
//		var_dump($res5);
		if(empty($res5)){ // 为空
			$smarty->assign("flag","t_nohuizong");
			$smarty->assign("path2","行政汇报表汇总");
		}else{
			// 不为空
			$smarty->assign("unit",$_SESSION["member"]["s_name"]);
			$smarty->assign("flag","t_huizong");
			// 得到显示时间
			$smarty->assign("date", Tools::getDatetimeToDate($res5[0]['inputtime']));
			$smarty->assign("path2","行政汇报表汇总");
			$smarty->assign("button", "修改");
			$smarty->assign("cz", "列表");
			$smarty->assign("showupdatedelete", "0");
			$smarty->assign("unit", $config["unitTmp"]);
			
			// 拆数据  start
			$contentmain = $res5[0]['contentmain'];
			$contentmainArray = explode('@', $contentmain);
			
			
			for($i=0; $i<count($contentmainArray); $i++){
				$tHuizongModelManager = new t_huizong_model();
				$contentArray = explode(',',$contentmainArray[$i]);
				
				$tHuizongModelManager->onedaywork1 = $contentArray[0];
				$tHuizongModelManager->dutyhead_t = $contentArray[1];
				$tHuizongModelManager->dutyer_t = $contentArray[2];
				$tHuizongModelManager->shouldnum_t = $contentArray[3];
				$tHuizongModelManager->factnum_t = $contentArray[4];
				
				$tHuizongModelManager->gbshouldnum_t = $contentArray[5];
				$tHuizongModelManager->gbfactnum_t = $contentArray[6];
				$tHuizongModelManager->gbholiday_t = $contentArray[7];
				$tHuizongModelManager->gbout_t = $contentArray[8];
				
				$tHuizongModelManager->sgshouldnum_t = $contentArray[9];
				$tHuizongModelManager->sgfactnum_t = $contentArray[10];
				$tHuizongModelManager->sgholiday_t = $contentArray[11];
				$tHuizongModelManager->sgout_t = $contentArray[12];
				
				$tHuizongModelManager->ywbshouldnum_t = $contentArray[13];
				$tHuizongModelManager->ywbfactnum_t = $contentArray[14];
				$tHuizongModelManager->ywbholiday_t = $contentArray[15];
				$tHuizongModelManager->ywbout_t = $contentArray[16];
				$tHuizongModelManager->remark_t = $contentArray[17];
				
				$smarty->assign("workTemp".$i, Tools::objarray_to_array($tHuizongModelManager));
			}
			
			// 拆数据  end
			$smarty->assign("workTemp", $res5[0]);
		}
		$smarty->display("WorkDay.tpl");
	
	}elseif ($flag == "t_getHuizong"){
		
		$t_huizong_worktabManager = new t_huizong_worktab();
//		$res5 = $t_huizong_worktabManager->getTodayHuizongData(date("Y-m-d H:i:s"));
		$res5 = $t_huizong_worktabManager->getNewHuizongData();
//		var_dump($res5);
		if(empty($res5)){ // 为空
			$smarty->assign("flag","t_nohuizong");
			$smarty->assign("path2","行政汇报表汇总");
		}else{
			// 不为空
			
			$smarty->assign("flag","t_huizong");
			$smarty->assign("path2","行政汇报表汇总");
			$smarty->assign("button", "修改");
			$smarty->assign("cz", "列表");
			$smarty->assign("showupdatedelete", "1");
			$smarty->assign("unit", $config["unitTmp"]);
			// 得到显示时间
			$smarty->assign("date", Tools::getDatetimeToDate($res5[0]['inputtime']));
			// 拆数据  start
			
			$tmp_inputtime = $res5[0]['tmp_inputtime'];

			if($tmp_inputtime == 0){  // 不是当天添加的信息
				// 判断是不是前一天的
				$date2 = Tools::getDatetimeToDate($res5[0]['inputtime']);
				$qiantiandate = strtotime(date("Y-m-d",strtotime("-1 day"))); // 前天时间
				if($qiantiandate == strtotime($date2)){  // 是昨天
					// 判断是否过8点
					if(date("H") >= 8){ // 过8点不可修改
						$smarty->assign("updateflag", "0");
					}else{ // 没过8点可修改
						$smarty->assign("updateflag", "1");
					}
				}else{  // 不是昨天
					$smarty->assign("updateflag", "0");
				}
				
			}else{	 // 是当天添加的信息
				// 可以修改
				$smarty->assign("updateflag", "1");
			}
			
			$contentmain = $res5[0]['contentmain'];
			$contentmainArray = explode('@', $contentmain);
			
			
			for($i=0; $i<count($contentmainArray); $i++){
				$tHuizongModelManager = new t_huizong_model();
				$contentArray = explode(',',$contentmainArray[$i]);
				
				$tHuizongModelManager->onedaywork1 = $contentArray[0];
				$tHuizongModelManager->dutyhead_t = $contentArray[1];
				$tHuizongModelManager->dutyer_t = $contentArray[2];
				$tHuizongModelManager->shouldnum_t = $contentArray[3];
				$tHuizongModelManager->factnum_t = $contentArray[4];
				
				$tHuizongModelManager->gbshouldnum_t = $contentArray[5];
				$tHuizongModelManager->gbfactnum_t = $contentArray[6];
				$tHuizongModelManager->gbholiday_t = $contentArray[7];
				$tHuizongModelManager->gbout_t = $contentArray[8];
				
				$tHuizongModelManager->sgshouldnum_t = $contentArray[9];
				$tHuizongModelManager->sgfactnum_t = $contentArray[10];
				$tHuizongModelManager->sgholiday_t = $contentArray[11];
				$tHuizongModelManager->sgout_t = $contentArray[12];
				
				$tHuizongModelManager->ywbshouldnum_t = $contentArray[13];
				$tHuizongModelManager->ywbfactnum_t = $contentArray[14];
				$tHuizongModelManager->ywbholiday_t = $contentArray[15];
				$tHuizongModelManager->ywbout_t = $contentArray[16];
				$tHuizongModelManager->remark_t = $contentArray[17];
				
				$smarty->assign("workTemp".$i, Tools::objarray_to_array($tHuizongModelManager));
			}
			
			// 拆数据  end
			$smarty->assign("workTemp", $res5[0]);
		}
		$smarty->display("WorkDay.tpl");
	
	}elseif ($flag == "t_updatehuizong"){
		$id = $_POST['id'];
		
		$dutyhead_th = $_POST['dutyhead_th'];
		$dutyer_th = $_POST['dutyer_th'];
		$inputtimeTemp = $_POST['inputtime'];
		
		$onedaywork1 = $_POST['onedaywork1'];
		$onedaywork2 = $_POST['onedaywork2'];
		$onedaywork3 = $_POST['onedaywork3'];
		$onedaywork4 = $_POST['onedaywork4'];
		$onedaywork5 = $_POST['onedaywork5'];
		$onedayworkjql = $_POST['onedayworkjql'];
		$onedayworkjdd = $_POST['onedayworkjdd'];
		
		$controlwarning = $_POST['controlwarning'];
		$shangjiinforealize = $_POST['shangjiinforealize'];
		$headdownlian = $_POST['headdownlian'];
		$persontestcheck = $_POST['persontestcheck'];
		
		/******* 团  start*******/
		$dutyhead_t = $_POST['dutyhead_t'];
		$dutyer_t = $_POST['dutyer_t'];
		$shouldnum_t = $_POST['shouldnum_t'];
		$factnum_t = $_POST['factnum_t'];
		
		$gbshouldnum_t = $_POST['gbshouldnum_t'];
		$gbfactnum_t = $_POST['gbfactnum_t'];
		$gbholiday_t = $_POST['gbholiday_t'];
		$gbout_t = $_POST['gbout_t'];
		
		$sgshouldnum_t = $_POST['sgshouldnum_t'];
		$sgfactnum_t = $_POST['sgfactnum_t'];
		$sgholiday_t = $_POST['sgholiday_t'];
		$sgout_t = $_POST['sgout_t'];
		
		$ywbshouldnum_t = $_POST['ywbshouldnum_t'];
		$ywbfactnum_t = $_POST['ywbfactnum_t'];
		$ywbholiday_t = $_POST['ywbholiday_t'];
		$ywbout_t = $_POST['ywbout_t'];

		$remark_t = $_POST['remark_t'];
		
		$content_t =",". $dutyhead_t.",".$dutyer_t.",".$shouldnum_t.",".$factnum_t.",".
					$gbshouldnum_t.",".$gbfactnum_t.",".$gbholiday_t.",".$gbout_t.",".
					$sgshouldnum_t.",".$sgfactnum_t.",".$sgholiday_t.",".$sgout_t.",".
					$ywbshouldnum_t.",".$ywbfactnum_t.",".$ywbholiday_t.",".$ywbout_t.",".$remark_t;
		/******* 团  end*******/
		
		/******* 1营  start*******/
		$dutyhead_1 = $_POST['dutyhead_1'];
		$dutyer_1 = $_POST['dutyer_1'];
		$shouldnum_1 = $_POST['shouldnum_1'];
		$factnum_1 = $_POST['factnum_1'];
		
		$gbshouldnum_1 = $_POST['gbshouldnum_1'];
		$gbfactnum_1 = $_POST['gbfactnum_1'];
		$gbholiday_1 = $_POST['gbholiday_1'];
		$gbout_1 = $_POST['gbout_1'];
		
		$sgshouldnum_1 = $_POST['sgshouldnum_1'];
		$sgfactnum_1 = $_POST['sgfactnum_1'];
		$sgholiday_1 = $_POST['sgholiday_1'];
		$sgout_1 = $_POST['sgout_1'];
		
		$ywbshouldnum_1 = $_POST['ywbshouldnum_1'];
		$ywbfactnum_1 = $_POST['ywbfactnum_1'];
		$ywbholiday_1 = $_POST['ywbholiday_1'];
		$ywbout_1 = $_POST['ywbout_1'];

		$remark_1 = $_POST['remark_1'];
		
		$content_1 = $onedaywork1.",".$dutyhead_1.",".$dutyer_1.",".$shouldnum_1.",".$factnum_1.",".
		$gbshouldnum_1.",".$gbfactnum_1.",".$gbholiday_1.",".$gbout_1.",".
		$sgshouldnum_1.",".$sgfactnum_1.",".$sgholiday_1.",".$sgout_1.",".
		$ywbshouldnum_1.",".$ywbfactnum_1.",".$ywbholiday_1.",".$ywbout_1.",".$remark_1;
		/******* 1营  end*******/
		
		/******* 2营  start*******/
		$dutyhead_2 = $_POST['dutyhead_2'];
		$dutyer_2 = $_POST['dutyer_2'];
		$shouldnum_2 = $_POST['shouldnum_2'];
		$factnum_2 = $_POST['factnum_2'];
		
		$gbshouldnum_2 = $_POST['gbshouldnum_2'];
		$gbfactnum_2 = $_POST['gbfactnum_2'];
		$gbholiday_2 = $_POST['gbholiday_2'];
		$gbout_2 = $_POST['gbout_2'];
		
		$sgshouldnum_2 = $_POST['sgshouldnum_2'];
		$sgfactnum_2 = $_POST['sgfactnum_2'];
		$sgholiday_2 = $_POST['sgholiday_2'];
		$sgout_2 = $_POST['sgout_2'];
		
		$ywbshouldnum_2 = $_POST['ywbshouldnum_2'];
		$ywbfactnum_2 = $_POST['ywbfactnum_2'];
		$ywbholiday_2 = $_POST['ywbholiday_2'];
		$ywbout_2 = $_POST['ywbout_2'];

		$remark_2 = $_POST['remark_2'];
		
		$content_2 = $onedaywork2.",".$dutyhead_2.",".$dutyer_2.",".$shouldnum_2.",".$factnum_2.",".
		$gbshouldnum_2.",".$gbfactnum_2.",".$gbholiday_2.",".$gbout_2.",".
		$sgshouldnum_2.",".$sgfactnum_2.",".$sgholiday_2.",".$sgout_2.",".
		$ywbshouldnum_2.",".$ywbfactnum_2.",".$ywbholiday_2.",".$ywbout_2.",".$remark_2;
		/******* 2营  end*******/
		
		/******* 3营  start*******/
		$dutyhead_3 = $_POST['dutyhead_3'];
		$dutyer_3 = $_POST['dutyer_3'];
		$shouldnum_3 = $_POST['shouldnum_3'];
		$factnum_3 = $_POST['factnum_3'];
		
		$gbshouldnum_3 = $_POST['gbshouldnum_3'];
		$gbfactnum_3 = $_POST['gbfactnum_3'];
		$gbholiday_3 = $_POST['gbholiday_3'];
		$gbout_3 = $_POST['gbout_3'];
		
		$sgshouldnum_3 = $_POST['sgshouldnum_3'];
		$sgfactnum_3 = $_POST['sgfactnum_3'];
		$sgholiday_3 = $_POST['sgholiday_3'];
		$sgout_3 = $_POST['sgout_3'];
		
		$ywbshouldnum_3 = $_POST['ywbshouldnum_3'];
		$ywbfactnum_3 = $_POST['ywbfactnum_3'];
		$ywbholiday_3 = $_POST['ywbholiday_3'];
		$ywbout_3 = $_POST['ywbout_3'];

		$remark_3 = $_POST['remark_3'];
		
		$content_3 = $onedaywork3.",".$dutyhead_3.",".$dutyer_3.",".$shouldnum_3.",".$factnum_3.",".
		$gbshouldnum_3.",".$gbfactnum_3.",".$gbholiday_3.",".$gbout_3.",".
		$sgshouldnum_3.",".$sgfactnum_3.",".$sgholiday_3.",".$sgout_3.",".
		$ywbshouldnum_3.",".$ywbfactnum_3.",".$ywbholiday_3.",".$ywbout_3.",".$remark_3;
		/******* 3营  end*******/
		
		/******* 4营  start*******/
		$dutyhead_4 = $_POST['dutyhead_4'];
		$dutyer_4 = $_POST['dutyer_4'];
		$shouldnum_4 = $_POST['shouldnum_4'];
		$factnum_4 = $_POST['factnum_4'];
		
		$gbshouldnum_4 = $_POST['gbshouldnum_4'];
		$gbfactnum_4 = $_POST['gbfactnum_4'];
		$gbholiday_4 = $_POST['gbholiday_4'];
		$gbout_4 = $_POST['gbout_4'];
		
		$sgshouldnum_4 = $_POST['sgshouldnum_4'];
		$sgfactnum_4 = $_POST['sgfactnum_4'];
		$sgholiday_4 = $_POST['sgholiday_4'];
		$sgout_4 = $_POST['sgout_4'];
		
		$ywbshouldnum_4 = $_POST['ywbshouldnum_4'];
		$ywbfactnum_4 = $_POST['ywbfactnum_4'];
		$ywbholiday_4 = $_POST['ywbholiday_4'];
		$ywbout_4 = $_POST['ywbout_4'];

		$remark_4 = $_POST['remark_4'];
		
		$content_4 = $onedaywork4.",".$dutyhead_4.",".$dutyer_4.",".$shouldnum_4.",".$factnum_4.",".
		$gbshouldnum_4.",".$gbfactnum_4.",".$gbholiday_4.",".$gbout_4.",".
		$sgshouldnum_4.",".$sgfactnum_4.",".$sgholiday_4.",".$sgout_4.",".
		$ywbshouldnum_4.",".$ywbfactnum_4.",".$ywbholiday_4.",".$ywbout_4.",".$remark_4;
		/******* 4营  end*******/
		
		/******* 5营  start*******/
		$dutyhead_5 = $_POST['dutyhead_5'];
		$dutyer_5 = $_POST['dutyer_5'];
		$shouldnum_5 = $_POST['shouldnum_5'];
		$factnum_5 = $_POST['factnum_5'];
		
		$gbshouldnum_5 = $_POST['gbshouldnum_5'];
		$gbfactnum_5 = $_POST['gbfactnum_5'];
		$gbholiday_5 = $_POST['gbholiday_5'];
		$gbout_5 = $_POST['gbout_5'];
		
		$sgshouldnum_5 = $_POST['sgshouldnum_5'];
		$sgfactnum_5 = $_POST['sgfactnum_5'];
		$sgholiday_5 = $_POST['sgholiday_5'];
		$sgout_5 = $_POST['sgout_5'];
		
		$ywbshouldnum_5 = $_POST['ywbshouldnum_5'];
		$ywbfactnum_5 = $_POST['ywbfactnum_5'];
		$ywbholiday_5 = $_POST['ywbholiday_5'];
		$ywbout_5 = $_POST['ywbout_5'];

		$remark_5 = $_POST['remark_5'];
		
		$content_5 = $onedaywork5.",".$dutyhead_5.",".$dutyer_5.",".$shouldnum_5.",".$factnum_5.",".
		$gbshouldnum_5.",".$gbfactnum_5.",".$gbholiday_5.",".$gbout_5.",".
		$sgshouldnum_5.",".$sgfactnum_5.",".$sgholiday_5.",".$sgout_5.",".
		$ywbshouldnum_5.",".$ywbfactnum_5.",".$ywbholiday_5.",".$ywbout_5.",".$remark_5;
		/******* 5营  end*******/
		
		/******* 警勤连  start*******/
		$dutyhead_jql = $_POST['dutyhead_jql'];
		$dutyer_jql = $_POST['dutyer_jql'];
		$shouldnum_jql = $_POST['shouldnum_jql'];
		$factnum_jql = $_POST['factnum_jql'];
		
		$gbshouldnum_jql = $_POST['gbshouldnum_jql'];
		$gbfactnum_jql = $_POST['gbfactnum_jql'];
		$gbholiday_jql = $_POST['gbholiday_jql'];
		$gbout_jql = $_POST['gbout_jql'];
		
		$sgshouldnum_jql = $_POST['sgshouldnum_jql'];
		$sgfactnum_jql = $_POST['sgfactnum_jql'];
		$sgholiday_jql = $_POST['sgholiday_jql'];
		$sgout_jql = $_POST['sgout_jql'];
		
		$ywbshouldnum_jql = $_POST['ywbshouldnum_jql'];
		$ywbfactnum_jql = $_POST['ywbfactnum_jql'];
		$ywbholiday_jql = $_POST['ywbholiday_jql'];
		$ywbout_jql = $_POST['ywbout_jql'];

		$remark_jql = $_POST['remark_jql'];
		
		$content_jql = $onedayworkjql.",".$dutyhead_jql.",".$dutyer_jql.",".$shouldnum_jql.",".$factnum_jql.",".
		$gbshouldnum_jql.",".$gbfactnum_jql.",".$gbholiday_jql.",".$gbout_jql.",".
		$sgshouldnum_jql.",".$sgfactnum_jql.",".$sgholiday_jql.",".$sgout_jql.",".
		$ywbshouldnum_jql.",".$ywbfactnum_jql.",".$ywbholiday_jql.",".$ywbout_jql.",".$remark_jql;
		/******* 警勤连 end*******/
		
		/******* 教导队  start*******/
		$dutyhead_jdd = $_POST['dutyhead_jdd'];
		$dutyer_jdd = $_POST['dutyer_jdd'];
		$shouldnum_jdd = $_POST['shouldnum_jdd'];
		$factnum_jdd = $_POST['factnum_jdd'];
		
		$gbshouldnum_jdd = $_POST['gbshouldnum_jdd'];
		$gbfactnum_jdd = $_POST['gbfactnum_jdd'];
		$gbholiday_jdd = $_POST['gbholiday_jdd'];
		$gbout_jdd = $_POST['gbout_jdd'];
		
		$sgshouldnum_jdd = $_POST['sgshouldnum_jdd'];
		$sgfactnum_jdd = $_POST['sgfactnum_jdd'];
		$sgholiday_jdd = $_POST['sgholiday_jdd'];
		$sgout_jdd = $_POST['sgout_jdd'];
		
		$ywbshouldnum_jdd = $_POST['ywbshouldnum_jdd'];
		$ywbfactnum_jdd = $_POST['ywbfactnum_jdd'];
		$ywbholiday_jdd = $_POST['ywbholiday_jdd'];
		$ywbout_jdd = $_POST['ywbout_jdd'];

		$remark_jdd = $_POST['remark_jdd'];
		
		$content_jdd = $onedayworkjdd.",".$dutyhead_jdd.",".$dutyer_jdd.",".$shouldnum_jdd.",".$factnum_jdd.",".
		$gbshouldnum_jdd.",".$gbfactnum_jdd.",".$gbholiday_jdd.",".$gbout_jdd.",".
		$sgshouldnum_jdd.",".$sgfactnum_jdd.",".$sgholiday_jdd.",".$sgout_jdd.",".
		$ywbshouldnum_jdd.",".$ywbfactnum_jdd.",".$ywbholiday_jdd.",".$ywbout_jdd.",".$remark_jdd;
		/******* 教导队  end*******/
		
		$vehiclepleasenum = $_POST['vehiclepleasenum'];
		$vehicleusednum = $_POST['vehicleusednum'];
		$safesituation = $_POST['safesituation'];
		
		$tHuizongWorktab = new t_huizong_worktab();
		$tHuizongWorktab->dutyhead = $dutyhead_th;
		$tHuizongWorktab->dutyer = $dutyer_th;
		$tHuizongWorktab->controlwarning = $controlwarning;
		$tHuizongWorktab->shangjiinforealize = $shangjiinforealize;
		$tHuizongWorktab->headdownlian = $headdownlian;
		$tHuizongWorktab->persontestcheck = $persontestcheck;
//		$tHuizongWorktab->onedaywork = $onedaywork1."@".$onedaywork2."@".$onedaywork3."@".$onedaywork4."@".$onedaywork5."@".$onedayworkjql."@".$onedayworkjdd;
		$tHuizongWorktab->contentmain = $content_t."@".$content_1."@".$content_2."@".$content_3."@".$content_4."@".$content_5."@".$content_jql."@".$content_jdd;
		$tHuizongWorktab->unit_id = $_SESSION['member']['unit_id'];  // 单位id
		$tHuizongWorktab->dept = "行政值班室";
		$tHuizongWorktab->inputtime = $inputtimeTemp;
		
		$tHuizongWorktab->vehiclepleasenum = $vehiclepleasenum;
		$tHuizongWorktab->vehicleusednum = $vehicleusednum;
		$tHuizongWorktab->safesituation = $safesituation;
		
		$res = $tHuizongWorktab->updateT_huizongById($id);
		
		if ($res == 1){
			Tools::alert("修改成功!!");
			Tools::jump("WorkController.php?flag=t_getHuizong");
		}else{
			Tools::alert("修改失败!!请重新操作...");
			Tools::jump("WorkController.php?flag=t_getHuizong");
		}
		
	}elseif ($flag == "WeatherShow"){
//		echo "WeatherShow";
		$date = $_REQUEST['date'];
//		echo $date;
		$res = $workManager->getLianWeatherByUnitId($_SESSION['member']['unit_id'], $date);
		$smarty->assign("unit",$_SESSION["member"]["s_name"]);
		$smarty->assign("path2","天气汇总记录列表");
		$smarty->assign("weatherData", $res);
		$smarty->assign("date", $date);
		$smarty->display("WeatherListShow.tpl");
	}
	
	
?>