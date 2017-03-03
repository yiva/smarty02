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
	if($_SESSION["member"]['role'] == 5){  // 营级
		$smarty->assign("unit",$_SESSION["member"]["s_name"]."营部");
	}else if($_SESSION["member"]['role'] == 1 || $_SESSION["member"]['role'] == 2){
		$smarty->assign("unit",$_SESSION["member"]["s_name"]."团部");
	}
	$smarty->assign("path2", "行政汇报表");
	
	$smarty->assign("button", "修改");
	$smarty->assign("cz", "修改");
	$smarty->assign("flag", "update");

	$flag = $_REQUEST['flag'];
	
	if($flag == "y_huizong"){  // 营修改汇总表单
		$smarty->assign("action", "WorkController.php?flag=y_updatehuizong");
		$id = $_REQUEST["id"];
		$huizongManager = new huizong();
		$res = $huizongManager->getHuizongById($id);
		// 判断是否通过上级审核
		if($res[0].yflag == 0 && $res[0].tflag == 0){
			$smarty->assign("workTemp", $res[0]);
			$smarty->assign("flag", "y_updatehuizong");
			$smarty->display("workEdit.tpl");
		}else{
			// 通过审核  不能修改
			Tools::alert("该信息已通过上级审核 !!不能修改!!");
			Tools::jump("workController.php?flag=y_getHuizong");
		}
	}elseif ($flag == "t_huizong"){  // 团修改汇总表单
		
		$smarty->assign("action", "WorkController.php?flag=t_updatehuizong");
		$id = $_REQUEST["id"];
		
		$t_huizong_worktabManager = new t_huizong_worktab();
		$res5 = $t_huizong_worktabManager->getT_huizongById($id);
		
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
			$smarty->assign("date", Tools::getDatetimeToDate($res5[0]['inputtime']));
			$smarty->assign("flag", "t_updatehuizong");
			$smarty->assign("unit", $config["unitTmp"]);
			$smarty->display("workEdit.tpl");
		
	}elseif ($flag == "t_update"){

		$smarty->assign("action", "WorkController.php?flag=t_update");
		$id = $_REQUEST["id"];
		$huizongManager = new huizong();
		$res = $huizongManager->getHuizongById($id);
		
		if($res[0].yflag == 0 && $res[0].tflag == 0){
			$smarty->assign("workTemp", $res[0]);
			$smarty->assign("flag", "t_update");
			$smarty->display("workEdit.tpl");
		}else{
			// 通过审核  不能修改
			Tools::alert("该信息已通过上级审核 !!不能修改!!");
			Tools::jump("workController.php?flag=t_todaydata");
		}
		
	}else{
		$smarty->assign("action", "WorkController.php?flag=update");
		$id = $_REQUEST["id"];
		$workManager = new work();
//		$work = $workManager->getTodayWorkDataBySid($_SESSION["member"]["id"]);
		$work = $workManager->getWorkById($id);
		
		if($_SESSION["member"]['role'] == 5){  // 营级
			$smarty->assign("unit",$_SESSION["member"]["s_name"]."营部");
			$smarty->assign("unitNum", "5");
		}else{
			$smarty->assign("unit",$_SESSION["member"]["s_name"]);
			$smarty->assign("unitNum", "9");
		}
		
		// 判断是否通过上级审核
		if($work[0].yflag == 0 && $work[0].tflag == 0){
			$smarty->assign("workTemp", $work[0]);
			$smarty->display("workEdit.tpl");
		}else{
			// 通过审核  不能修改
			Tools::alert("该信息已通过上级审核 !!不能修改!!");
			Tools::jump("workController.php?flag=todaydata");
		}
	}
	
	
	
	
	