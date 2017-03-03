<?php
session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/work.class.php';
	require_once 'include/model/huizong.class.php';
	require_once 'include/model/t_huizong_model.class.php';
	require_once 'include/common/Tools.class.php';
	require_once 'include/common/config.php';
	
	
	$smarty->assign("member", $_SESSION["member"]);
	
	$smarty->assign("path2", "行政汇报表");
	
	$smarty->assign("button", "汇总");
	$smarty->assign("cz", "汇总");

	$flag = $_REQUEST['flag'];
	
	if($flag == "y_huizong"){  // 营汇总
		$smarty->assign("action", "WorkController.php?flag=y_huizong");
		$userid = $_SESSION['member']['id'];
		$s_id = $_SESSION['member']['unit_id'];
		$workManager = new work();
		$work = $workManager->getTotalData($userid, $s_id);
		$work2 = $workManager->getTodayDataByUserid($userid);
		$res3 = $workManager->getWorkByShangjiId($userid,$s_id, date("Y-m-d H:i:s"));
//		var_dump($res3);
		$smarty->assign("flag", "y_huizong");
		$smarty->assign("workTemp", $work[0]);
		$smarty->assign("workhead", $work2[0]);
		$smarty->assign("unit", Tools::UnitAllName($_SESSION['member']['role'], $_SESSION['member']['s_name']));
		
		// 循环拼写备注  一日工作等信息
		$remarkHuizong = "";
		$onedayworkHuizong = "";
		$headdownlianHuizong = "";
		
		for ($i=0; $i<count($res3); $i++){
			$remarkHuizong .= $res3[$i]['tmp_name'].":".$res3[$i]['remark']."\n";
			$onedayworkHuizong .= $res3[$i]['tmp_name'].":".$res3[$i]['onedaywork']."\n";
			$headdownlianHuizong .= $res3[$i]['tmp_name'].":".$res3[$i]['headdownlian']."\n";
		}
//		echo $remarkHuizong ."--".$onedayworkHuizong."---".$headdownlianHuizong;
		$smarty->assign("remarkHuizong", $remarkHuizong);
		$smarty->assign("onedayworkHuizong", $onedayworkHuizong);
		$smarty->assign("headdownlianHuizong", $headdownlianHuizong);
	
	}elseif ($flag == "t_huizong"){  // 团
		
		$smarty->assign("action", "WorkController.php?flag=t_huizong");
		$smarty->assign("flag", "t_huizong");
		$smarty->assign("datetime", date("Y-m-d"));
		$huizongManager = new huizong();
		$tid = $_SESSION['member']['id'];
		$res = $huizongManager->getAllYingByTid($tid, date("Y-m-d H:i:s"));
		
		$workTempHuizong = $huizongManager->getAllYingByTidHuizongData($tid, date("Y-m-d H:i:s"));
		
//		echo count($res);

		if (count($res) == 8){
			for ($i=0; $i<count($res); $i++){
				$tHuizongMode_t = new t_huizong_model();
				$tHuizongMode_t->factnum_t = $res[$i]['factnum'];
				$tHuizongMode_t->shouldnum_t = $res[$i]['shouldnum'];
				$tHuizongMode_t->dutyhead_t = $res[$i]['dutyhead'];
				$tHuizongMode_t->dutyer_t = $res[$i]['dutyer'];
				$tHuizongMode_t->gbfactnum_t = $res[$i]['gbfactnum'];
				$tHuizongMode_t->gbshouldnum_t = $res[$i]['gbshouldnum'];
				$tHuizongMode_t->gbholiday_t = $res[$i]['gbholiday'];
				$tHuizongMode_t->gbout_t = $res[$i]['gbout'];
				$tHuizongMode_t->sgfactnum_t = $res[$i]['sgfactnum'];
				$tHuizongMode_t->sgshouldnum_t = $res[$i]['sgshouldnum'];
				$tHuizongMode_t->sgholiday_t = $res[$i]['sgholiday'];
				$tHuizongMode_t->sgout_t = $res[$i]['sgout'];
				$tHuizongMode_t->ywbfactnum_t = $res[$i]['ywbfactnum'];
				$tHuizongMode_t->ywbshouldnum_t = $res[$i]['ywbshouldnum'];
				$tHuizongMode_t->ywbholiday_t = $res[$i]['ywbholiday'];
				$tHuizongMode_t->ywbout_t = $res[$i]['ywbout'];
				$tHuizongMode_t->remark_t = $res[$i]['remark'];
				
				$tHuizongMode_t->onedaywork1 = $res[$i]['onedaywork'];
				$tHuizongMode_t->headdownlian = $res[$i]['headdownlian'];
				$tHuizongMode_t->s_name = $res[$i]['s_name'];
				
				$smarty->assign("workTemp".$i, Tools::objarray_to_array($tHuizongMode_t));
			}
		}else{
			Tools::alert("读取数据信息不全，请核实...");
			Tools::jump("WorkController.php?flag=getAllTuan");
			exit();
		}
		

		$smarty->assign("workTempHuizong", $workTempHuizong[0]);
		$smarty->assign("unit", $config["unitTmp"]);
	}
	
	
	
	
	$smarty->display("workEdit.tpl");
	
	