<?php
session_start();
	//接收表单信息，实现分类的插入 
	require_once 'include/model/work.class.php';
	require_once 'include/model/huizong.class.php';
	require_once 'include/common/Tools.class.php';
	require_once 'include/model/t_huizong_worktab.class.php';
	header("Content-type: text/html; charset=utf-8");
	date_default_timezone_set('PRC'); //设置中国时区
	//$smarty->assign("member", $_SESSION["member"]);
	
	$flag = $_REQUEST['flag'];
	$id = $_REQUEST["id"];
	
	if($flag == "y_huizong"){ // 营汇总
		$huizongManager = new huizong();
		$res = $huizongManager->delHuizongById($id);
		
		$userid = $_SESSION['member']['id'];
		$s_id = $_SESSION['member']['unit_id'];
		
		if($res == 1){
			// 改变所有的yflag的值   start
			$workManager = new work();
			$res4 = $workManager->getWorkByShangjiId($userid,$s_id, date("Y-m-d H:i:s"));
			for ($i=0; $i<count($res4); $i++){
				$id = $res4[$i]['id'];
				$workManager->updateYflagById($id, 0);
			}
			// 改变所有的yflag的值   end
			Tools::alert("删除成功!!");
			Tools::jump("WorkController.php?flag=y_getHuizong");
		}else{
			Tools::alert("删除失败!!请重新操作...");
			Tools::jump("WorkController.php?flag=y_getHuizong");
		}
	}elseif ($flag == "t_huizong"){ // 团汇总
		
		$tHuizongWorktabManager = new t_huizong_worktab();
		$res = $tHuizongWorktabManager->deleteT_huizongById($id);
		if($res == 1){
			// 修改标志位
			$huizongManager = new huizong();
			$tid = $_SESSION['member']['id'];
			$res6 = $huizongManager->getAllYingByTid($tid, date("Y-m-d H:i:s"));
			for ($i=0; $i<count($res6); $i++){
				$huizongManager->updateTflagById($res6[$i]['id'], 0);
			}
			Tools::alert("删除成功!!");
		}else{
			Tools::alert("删除失败!!请重新操作...");
		}
		Tools::jump("WorkController.php?flag=t_getHuizong");
		
	}elseif ($flag == "t_delete"){ // 团
		$huizongManager = new huizong();
		$res = $huizongManager->delHuizongById($id);
		if($res == 1){
			Tools::alert("删除成功!!");
		}else{
			Tools::alert("删除失败!!请重新操作...");
		}
		Tools::jump("WorkController.php?flag=t_todaydata");
		
	}else{	
		$workManager = new work();
		$res = $workManager->delWorkById($id);
		if($res == 1){
			Tools::alert("删除成功!!");
			Tools::jump("WorkController.php?flag=todaydata");
		}else{
			Tools::alert("删除失败!!请重新操作...");
			Tools::jump("WorkController.php?flag=todaydata");
		}
	}
	
	
	
	
	