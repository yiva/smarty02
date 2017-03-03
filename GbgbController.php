<?php
	session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/gbgb.class.php';
	require_once 'include/model/oneweek.class.php';
	require_once 'include/common/Tools.class.php';
	require_once 'include/common/fenyePage.class.php';
	
	$smarty->assign("member", $_SESSION["member"]);
	
	$flag = $_REQUEST["flag"];
	$role = $_SESSION['member']['role'];
//	echo $role;

	$gbgbManager = new gbgb();
	$OneweekManager = new oneweek();
	
	if($flag == "getAllList"){ //得到列表
		$userId = $_SESSION['member']['id'];
		$resList = $gbgbManager->getAllGbgbBySid($userId, date("Y-m-d H:i:s"));
		$smarty->assign("date", date("Y-m-d"));
		
		$smarty->assign("flag", "normal");
		$smarty->assign("path2", "干部跟班记录");
		$smarty->assign("resList", $resList);
		$smarty->assign("cz", "列表");
		$smarty->display("GbgbList.tpl");
		
	}else if($flag == "l_search"){
		
		$datetime = $_POST['datetime'];
		if($datetime == ""){
			$datetime = date("Y-m-d");
		}
		$userId = $_SESSION['member']['id'];
		$resList = $gbgbManager->getAllGbgbBySid($userId, $datetime);
		
		$smarty->assign("date", $datetime);
		
		$smarty->assign("flag", "normal");
		$smarty->assign("path2", "干部跟班记录");
		$smarty->assign("resList", $resList);
		$smarty->assign("cz", "列表");
		$smarty->display("GbgbList.tpl");
		
		
	}else if($flag == "fenye"){
		$userId = $_SESSION['member']['id'];
		// 创建一个分页对象
		$fenye = new fenyePage();
		// 给分页Page指定必须的数据
		$fenye->pageNow = 1;
		$fenye->pageSize = 6;
		if (!empty($_GET['pageNow'])){
			$fenye->pageNow = $_GET['pageNow'];
		}
		// 创建empService对象实例
		$gbgbManager->getFenyePage($fenye, $userId);
		
		// 首页
		$shouye1 = "GbgbController.php?flag=fenye&pageNow=1";
		// 显示上一页  下一页
		if ($fenye->pageNow > 1){
			$prePage = $fenye->pageNow-1;
			$sahngyiye1 = "GbgbController.php?flag=fenye&pageNow=$prePage";
		}else{
			$sahngyiye1 =  "0";
		}
		if ($fenye->pageNow < $fenye->pageCount){
			$nextPage = $fenye->pageNow+1;
			$xiayiye1 = "GbgbController.php?flag=fenye&pageNow=$nextPage";
		}else{
			$xiayiye1 =  "0";
		}
		// 尾页
		$weiye1 = "GbgbController.php?flag=fenye&pageNow=$fenye->pageCount";
		
		
		$smarty->assign("shouye1",$shouye1);
		$smarty->assign("sahngyiye1",$sahngyiye1);
		$smarty->assign("xiayiye1",$xiayiye1);
		$smarty->assign("weiye1",$weiye1);
		
		$smarty->assign("flag", "fenye");
		$smarty->assign("resList", $fenye->res_array);
		$smarty->assign("cz", "列表");
		
		$smarty->assign("pageNow",$fenye->pageNow);
		$smarty->assign("pageCount",$fenye->pageCount);
		$smarty->display("GbgbList.tpl");
		
	}else if($flag == "add"){
		$mdate = $_POST["mdate"];
		$dept = $_POST["dept"];
		$gbzw = $_POST["gbzw"];
		$nx = $_POST["nx"];
		$wx = $_POST["wx"];
		$nx_start = "";
		$nx_end = "";
		$yx_start = "";
		$yx_end = "";
		if($nx == "on"){
			$nx_start = $_POST["nx_start"];
			$nx_end = $_POST["nx_end"];
		}
		if($yx == "on"){
			$yx_start = $_POST["yx_start"];
			$yx_end = $_POST["yx_end"];
		}
		
		$fxwt = $_POST["fxwt"];
//		$remark = $_POST["remark"];
		
		// 校验当天是否有重复数据添加  （规定一天一种分身只能添加一次）
		$resData = $gbgbManager->chongfuData($gbzw, $_SESSION['member']['id']);
		
		if( empty($resData)){  // 没有数据  可以添加
			$gbgbAdd = new gbgb();
			$gbgbAdd->mdate = $mdate;
			$gbgbAdd->dept = $dept;
			$gbgbAdd->gbzw = $gbzw;
			$gbgbAdd->nx = $nx_start."-".$nx_end;
			$gbgbAdd->wx = $yx_start."-".$yx_end;
			$gbgbAdd->nxtimelong = Tools::calTime($nx_start, $nx_end);
			$gbgbAdd->wxtimelong = Tools::calTime($yx_start, $yx_end);
			
			$gbgbAdd->fxwt = $fxwt;
//			$gbgbAdd->remark = $remark;
			$gbgbAdd->yflag = 0;
			$gbgbAdd->tflag = 0;
			$gbgbAdd->submitflag = 1;
			$gbgbAdd->userid = $_SESSION["member"]['id'];  // 该值在session中取得
			$gbgbAdd->inputtime = date("Y-m-d H:i:s");
		    
		    
		    $res = $gbgbAdd->addGbgb();
			if ($res == 1){
				Tools::alert("添加成功!!");
	//			Tools::jump("GbgbController.php?flag=fenye");
				
			}else{
				Tools::alert("添加失败!!请重新操作...");
			}
		
		}else{  // 有以添加的数据  进行提示
			Tools::alert("该职务人员已进行添加,不能重复添加！");
		}
	    Tools::jump("GbgbController.php?flag=getAllList");
		
	}else if($flag == "update"){
		$id = $_REQUEST["id"];
		
		$mdate = $_POST["mdate"];
		$dept = $_POST["dept"];
		$gbzw = $_POST["gbzw"];
		
		$nx = $_POST["nx"];
		$wx = $_POST["wx"];
		$nx_start = "";
		$nx_end = "";
		$yx_start = "";
		$yx_end = "";
		if($nx == "on"){
			$nx_start = $_POST["nx_start"];
			$nx_end = $_POST["nx_end"];
		}
		if($yx == "on"){
			$yx_start = $_POST["yx_start"];
			$yx_end = $_POST["yx_end"];
		}
		$fxwt = $_POST["fxwt"];
//		$remark = $_POST["remark"];
		
	    $gbgbManager = new gbgb();
		$gbgbManager->mdate = $mdate;
		$gbgbManager->dept = $dept;
		$gbgbManager->gbzw = $gbzw;
		$gbgbManager->nx = $nx_start."-".$nx_end;
		$gbgbManager->wx = $yx_start."-".$yx_end;
		$gbgbManager->nxtimelong = Tools::calTime($nx_start, $nx_end);
		$gbgbManager->wxtimelong = Tools::calTime($yx_start, $yx_end);
		$gbgbManager->fxwt = $fxwt;
//		$gbgbManager->remark = $remark;
		$gbgbManager->yflag = 0;
		$gbgbManager->tflag = 0;
		$gbgbManager->submitflag = 1;
		$gbgbManager->userid =  $_SESSION['member']['id'];  // 该值在session中取得
		$gbgbManager->inputtime = date("Y-m-d H:i:s");
		
		$res = $gbgbManager->updateGbgbById($id);
		if ($res == 1){
			Tools::alert("修改成功!!");
		}else{
			Tools::alert("添加失败!!请重新操作...");
		}
		Tools::jump("GbgbController.php?flag=fenye");
		
		
	}elseif ($flag == "getLianAll"){
		$yid = $_SESSION['member']['unit_id'];
		$resList2 = $gbgbManager->getLianAllByYid($yid);
		$smarty->assign("resList", $resList2);
		$smarty->assign("cz", "列表");
		$smarty->display("GbgbList.tpl");
	
	}elseif ($flag == "getAllTuan"){
		$tid = $_SESSION['member']['id'];
		$resList2 = $gbgbManager->getYingAllByTid($tid, date("Y-m-d H:i:s"));
//		echo count($resList2);
//		exit();
		// 添加序号  start
		for ($i=0; $i<count($resList2); $i++){
			array_push($resList2[$i], $i+1);
		}
		// 添加序号  end
		$smarty->assign("resList", $resList2);
		$smarty->assign("cz", "列表");
		$smarty->assign("aaa", "1");
		$smarty->assign("date", date("Y-m-d"));
		$smarty->assign("flag", "t_normal");
		$smarty->display("GbgbList.tpl");
	
	}elseif ($flag == "t_search"){
		$datetime = $_POST['datetime'];
		if($datetime == ""){
			$datetime = date("Y-m-d");
		}
		$tid = $_SESSION['member']['id'];
		$resList2 = $gbgbManager->getYingAllByTid($tid, $datetime);
		
		// 添加序号  start
		for ($i=0; $i<count($resList2); $i++){
			array_push($resList2[$i], $i+1);
		}
		// 添加序号  end
		$smarty->assign("resList", $resList2);
		$smarty->assign("date", $datetime);
		$smarty->assign("cz", "列表");
		$smarty->assign("flag", "t_normal");
		$smarty->display("GbgbList.tpl");
		
	}elseif ($flag == "getAllTuanfenye"){
		
		$tid = $_SESSION['member']['id'];
		// 创建一个分页对象
		$fenye = new fenyePage();
		// 给分页Page指定必须的数据
		$fenye->pageNow = 1;
		$fenye->pageSize = 6;
		if (!empty($_GET['pageNow'])){
			$fenye->pageNow = $_GET['pageNow'];
		}
		// 创建empService对象实例
		$gbgbManager->getYingAllByTidFenyePage($fenye, $tid);
		
		// 首页
		$shouye1 = "GbgbController.php?flag=getAllTuanfenye&pageNow=1";
		// 显示上一页  下一页
		if ($fenye->pageNow > 1){
			$prePage = $fenye->pageNow-1;
			$sahngyiye1 = "GbgbController.php?flag=getAllTuanfenye&pageNow=$prePage";
		}else{
			$sahngyiye1 =  "0";
		}
		if ($fenye->pageNow < $fenye->pageCount){
			$nextPage = $fenye->pageNow+1;
			$xiayiye1 = "GbgbController.php?flag=getAllTuanfenye&pageNow=$nextPage";
		}else{
			$xiayiye1 =  "0";
		}
		// 尾页
		$weiye1 = "GbgbController.php?flag=getAllTuanfenye&pageNow=$fenye->pageCount";
		
		
		$smarty->assign("shouye1",$shouye1);
		$smarty->assign("sahngyiye1",$sahngyiye1);
		$smarty->assign("xiayiye1",$xiayiye1);
		$smarty->assign("weiye1",$weiye1);
		
		$smarty->assign("flag", "t_normal_fenye");
		$smarty->assign("resList", $fenye->res_array);
		$smarty->assign("cz", "列表");
		
		$smarty->assign("pageNow",$fenye->pageNow);
		$smarty->assign("pageCount",$fenye->pageCount);
		$smarty->display("GbgbList.tpl");
	
	}elseif ($flag == "t_update"){
		
		$id = $_REQUEST["id"];
		$userid = $_REQUEST["userid"];
		
		$mdate = $_POST["mdate"];
		$dept = $_POST["dept"];
		$gbzw = $_POST["gbzw"];
		
		$nx = $_POST["nx"];
		$wx = $_POST["wx"];
		$nx_start = "";
		$nx_end = "";
		$yx_start = "";
		$yx_end = "";
		if($nx == "on"){
			$nx_start = $_POST["nx_start"];
			$nx_end = $_POST["nx_end"];
		}
		if($yx == "on"){
			$yx_start = $_POST["yx_start"];
			$yx_end = $_POST["yx_end"];
		}
		$fxwt = $_POST["fxwt"];
//		$remark = $_POST["remark"];
		
	    $gbgbManager = new gbgb();
		$gbgbManager->mdate = $mdate;
		$gbgbManager->dept = $dept;
		$gbgbManager->gbzw = $gbzw;
		$gbgbManager->nx = $nx_start."-".$nx_end;
		$gbgbManager->wx = $yx_start."-".$yx_end;
		$gbgbManager->nxtimelong = Tools::calTime($nx_start, $nx_end);
		$gbgbManager->wxtimelong = Tools::calTime($yx_start, $yx_end);
		$gbgbManager->fxwt = $fxwt;
//		$gbgbManager->remark = $remark;
		$gbgbManager->yflag = 0;
		$gbgbManager->tflag = 0;
		$gbgbManager->submitflag = 1;
		$gbgbManager->userid =  $userid;   
		$gbgbManager->inputtime = date("Y-m-d H:i:s");
		
		$res = $gbgbManager->updateGbgbById($id);
		if ($res == 1){
			Tools::alert("修改成功!!");
		}else{
			Tools::alert("添加失败!!请重新操作...");
		}
		Tools::jump("GbgbController.php?flag=getAllTuan");
	
	}else if($flag == "gbgb_Show"){
		$date = $_REQUEST['date'];
		$res = $gbgbManager->getGbgbByUnitId($_SESSION['member']['unit_id'], $date);
		
		// 添加序号  start
		for ($i=0; $i<count($res); $i++){
			array_push($res[$i], $i+1);
		}
		// 添加序号  end
		$smarty->assign("gbgbShow", $res);
		$smarty->assign("date", $date);
		
		$smarty->display("GbgbList_Show.tpl");

	}else if($flag == "onedaytime"){
		//本周一
		$datetimeStart = date('Y-m-d',(time()-((date('w')==0?7:date('w'))-1)*86400)); //w为星期几的数字形式,这里0为周日 
		//本周日
		$datetimeEnd = date('Y-m-d',(time()+(7-(date('w')==0?7:date('w')))*86400)); //同样使用w,以现在与周日相关天数算
		
		$res = $gbgbManager->getOneWeekByUserId($_SESSION['member']['id'], $datetimeStart, $datetimeEnd);
		$smarty->assign("flag", "onedaytime");
		$smarty->assign("datetimeStart", $datetimeStart);
		$smarty->assign("datetimeEnd", $datetimeEnd);
		$smarty->assign("path2", "每周值班时间汇总");
		$smarty->assign("gbgbAllTime", $res);
		$smarty->assign("date", date("Y-m-d"));
		
		$smarty->display("GbgbList.tpl");

	}else if($flag == "onedaytime_search"){
		$datetime = $_POST['datetime'];
		if($datetime == ""){
			$datetime = date("Y-m-d");
		}
		
		$day = $datetime;
	
		$monday = "";
		$weekday = "";
		$a = date('w',strtotime($day));
			
		if( $a == 0){  // 输入的日期是周日
			$weekday = $day;
			$monday = date('Y-m-d',strtotime($day) - 6*86400);
		}elseif ($a == 1){  // 输入的日期是周一
			$monday = $day;
			$weekday = date('Y-m-d',strtotime($day) + 6*86400);
		}else{
			$monday = date('Y-m-d',strtotime($day)-(date('w',strtotime($day))-1)*86400);
			$weekday = date('Y-m-d',strtotime($day)+(7-date('w',strtotime($day)))*86400);
		}
		
		$res = $gbgbManager->getOneWeekByUserId($_SESSION['member']['id'], $monday, $weekday);
		
		$smarty->assign("datetimeStart", $monday);
		$smarty->assign("datetimeEnd", $weekday);
		$smarty->assign("flag", "onedaytime");
		$smarty->assign("path2", "每日值班时间汇总");
		$smarty->assign("gbgbAllTime", $res);
		$smarty->assign("date", $datetime);
		
		$smarty->display("GbgbList.tpl");
	
	}else if($flag == "oneweek"){
		//本周一
		$datetimeStart = date('Y-m-d',(time()-((date('w')==0?7:date('w'))-1)*86400)); //w为星期几的数字形式,这里0为周日 
		//本周日
		$datetimeEnd = date('Y-m-d',(time()+(7-(date('w')==0?7:date('w')))*86400)); //同样使用w,以现在与周日相关天数算
		// 判断是不是本周日
		if($datetimeEnd == date('Y-m-d')){ // 是本周日
			if(date('H') >= 16 && date('H')<24 ){
				// 可以添加
//				ECHO "zai 16  zhi 24 zhijian";
				// 判断本周是否进行信息统计
				$resoneweekData = $OneweekManager->getNowOneweek($datetimeEnd);

				if(!empty($resoneweekData)){
					// 显示数据
//					$smarty->assign("ShowMessage", "1"); 
					$contentTemp = $resoneweekData[0]['content'];
					$remarkTemp = $resoneweekData[0]['remarks'];
					
					$contentArrayAll = array();
					
					// 解析 $contentTemp
					$contentArray = explode("@", $contentTemp);
					$remarkArray = explode("@", $remarkTemp);
		
					$huizongRemarks = $remarkArray[count($remarkArray)-1];
					
					for($j=0; $j<count($contentArray)-1; $j++){
						$arrayTemp = explode(",", $contentArray[$j]);
						
						
						for($i=0; $i<count($remarkArray)-1; $i++){
							$remarkArrayTemp = explode(",", $remarkArray[$i]);
							if($remarkArrayTemp[0] == $arrayTemp[0]){
								array_push($arrayTemp, $remarkArrayTemp[1]);
								break;
							}
						}
						
						array_push($contentArrayAll, $arrayTemp);
					}
					
		//			var_dump($contentArrayAll);
		
					$smarty->assign("id", $resoneweekData[0]['id']);
					$smarty->assign("datetimeStart", $datetimeStart);
					$smarty->assign("datetimeEnd", $datetimeEnd);
					$smarty->assign("path2", "一周跟班统计");
					$smarty->assign("content", $contentArrayAll);
					$smarty->assign("cz", "列表");
					$smarty->assign("button", "修改");
					$smarty->assign("huizongRemarks", $huizongRemarks);
					$smarty->assign("flag", "oneWeekupdate");
					$smarty->display("oneweekDay.tpl");
				}else{
					$smarty->assign("ShowMessage", "2"); // 没有添加数据
					$smarty->assign("path2", "一周跟班统计");
					$smarty->assign("flag", "oneWeektime_show_no");
					$smarty->display("GbgbDay.tpl");
				}
			}else{
//				ECHO "在其他时间段不可进行提示不可汇总";
				$smarty->assign("ShowMessage", "3"); // 没有添加数据
				$smarty->assign("path2", "一周跟班统计");
				$smarty->assign("flag", "oneWeektime_show_no");
				$smarty->display("GbgbDay.tpl");
			}
		}else{
			// 不是本周日
//			ECHO "进行提示不可汇总";
			$smarty->assign("ShowMessage", "3"); // 没有添加数据
			$smarty->assign("path2", "一周跟班统计");
			$smarty->assign("flag", "oneWeektime_show_no");
			$smarty->display("GbgbDay.tpl");
		}
		
		
	}elseif ($flag == "oneweek_add"){
		
		$remark1 = $_POST['remark1'];
		$remark2 = $_POST['remark2'];
		$remark3 = $_POST['remark3'];
		$remark4 = $_POST['remark4'];
		$remark5 = $_POST['remark5'];
		$remark6 = $_POST['remark6'];
		$remark7 = $_POST['remark7'];
		$remark8 = $_POST['remark8'];
		$remark9 = $_POST['remark9'];
		$remark10 = $_POST['remark10'];
		$remark11 = $_POST['remark11'];
		$remark12 = $_POST['remark12'];
		$remark13 = $_POST['remark13'];
		$remark14 = $_POST['remark14'];
		$remark15 = $_POST['remark15'];
		$remark16 = $_POST['remark16'];
		$remark17 = $_POST['remark17'];
		$remark18 = $_POST['remark18'];
		$remark19 = $_POST['remark19'];
		$remark20 = $_POST['remark20'];
		$remark21 = $_POST['remark21'];
		$remark22 = $_POST['remark22'];
		$remark23 = $_POST['remark23'];
		$remark24 = $_POST['remark24'];
		$remark25 = $_POST['remark25'];
		$remark26 = $_POST['remark26'];
		$remark27 = $_POST['remark27'];
		$remark28 = $_POST['remark28'];
		$remark29 = $_POST['remark29'];
		$remark30 = $_POST['remark30'];
		$remark31 = $_POST['remark31'];
		$remark32 = $_POST['remark32'];
		
		$remark_hz = $_POST['remark_hz'];
		
		//本周一
		$datetimeStart = date('Y-m-d',(time()-((date('w')==0?7:date('w'))-1)*86400)); //w为星期几的数字形式,这里0为周日 
		//本周日
		$datetimeEnd = date('Y-m-d',(time()+(7-(date('w')==0?7:date('w')))*86400)); //同样使用w,以现在与周日相关天数算
		
		$resWeek = $gbgbManager->getOneWeekTimeAndOrderAlltime($datetimeStart, $datetimeEnd);
		
		for ($i=0; $i<count($resWeek); $i++){
			array_push($resWeek[$i], $i+1);
		}
		
		$resNO = $gbgbManager->getNoZhiban($resWeek);
		
		for ($j=0; $j<count($resNO); $j++){
			array_push($resNO[$j], $j+1);
		}
		$content = "";
		for ($i=0; $i<count($resWeek); $i++){
			$content = $content.$resWeek[$i][0].','.$resWeek[$i]['dept2'].','.$resWeek[$i]['alltime'].','.$resWeek[$i]['timeLv'].'@';
		}
		
		for ($j=0; $j<count($resNO); $j++){
			$content = $content.($resNO[$j][1]+count($resWeek)).','.$resNO[$j][0].',0,'.'0'.'@';
		}
		
		$remarks = '1,'.$remark1.'@'.'2,'.$remark2.'@'.'3,'.$remark3.'@'.'4,'.$remark4.'@'.'5,'.$remark5.'@'.'6,'.$remark6.'@'.
					'7,'.$remark7.'@'.'8,'.$remark8.'@'.'9,'.$remark9.'@'.'10,'.$remark10.'@'.'11,'.$remark11.'@'.'12,'.$remark12.'@'.
					'13,'.$remark13.'@'.'14,'.$remark14.'@'.'15,'.$remark15.'@'.'16,'.$remark16.'@'.'17,'.$remark17.'@'.'18,'.$remark18.'@'.
					'19,'.$remark19.'@'.'20,'.$remark20.'@'.'21,'.$remark21.'@'.'22,'.$remark22.'@'.'23,'.$remark23.'@'.'24,'.$remark24.'@'.
					'25,'.$remark25.'@'.'26,'.$remark26.'@'.'27,'.$remark27.'@'.'28,'.$remark28.'@'.'29,'.$remark29.'@'.'30,'.$remark30.'@'.
					'31,'.$remark31.'@'.'32,'.$remark32.'@'.$remark_hz;
//		echo $content."<br />".$remarks;

		$OneweekAdd = new oneweek();
		$OneweekAdd->content = $content;
		$OneweekAdd->remarks = $remarks;
		$OneweekAdd->userid = $_SESSION['member']['id'];
		
		$OneweekAdd->inputtime = date("Y-m-d H:i:s");
		$OneweekAdd->dept = "通信值班员";
		
		$resR = $OneweekAdd->addOneweek();
		
		if ($resR == 1){
			Tools::alert("添加成功!!");
		}else{
			Tools::alert("添加失败!!请重新操作...");
		}
		Tools::jump("GbgbController.php?flag=oneweek");
	
	}else if($flag == "oneweek_get"){

		$huizongRemarks = "";
		
//		//本周一
//		$datetimeStart = date('Y-m-d',(time()-((date('w')==0?7:date('w'))-1)*86400)); //w为星期几的数字形式,这里0为周日 
//		//本周日
//		$datetimeEnd = date('Y-m-d',(time()+(7-(date('w')==0?7:date('w')))*86400)); //同样使用w,以现在与周日相关天数算
		
		
		$smarty->assign("path2", "一周跟班统计查询");
		
		$resOneweekTemp = $OneweekManager->getOneweekJinqi();
		if(!empty($resOneweekTemp)){
			$contentTemp = $resOneweekTemp[0]['content'];
			$remarkTemp = $resOneweekTemp[0]['remarks'];
			
			$contentArrayAll = array();
			
			// 解析 $contentTemp
			
			$contentArray = explode("@", $contentTemp);
			$remarkArray = explode("@", $remarkTemp);

			$huizongRemarks = $remarkArray[count($remarkArray)-1];
			
			for($j=0; $j<count($contentArray)-1; $j++){
				$arrayTemp = explode(",", $contentArray[$j]);
				
				
				for($i=0; $i<count($remarkArray)-1; $i++){
					$remarkArrayTemp = explode(",", $remarkArray[$i]);
					if($remarkArrayTemp[0] == $arrayTemp[0]){
						array_push($arrayTemp, $remarkArrayTemp[1]);
						break;
					}
				}
				
				array_push($contentArrayAll, $arrayTemp);
			}
			
//			var_dump($contentArrayAll);
			$datetimeEnd = Tools::getDatetimeToDate($resOneweekTemp[0]['inputtime']);
			$datetimeStart = date('Y-m-d',strtotime($datetimeEnd) - 6*86400);
			$smarty->assign("datetimeStart", $datetimeStart);
			$smarty->assign("datetimeEnd", $datetimeEnd);
			$smarty->assign("content", $contentArrayAll);
			$smarty->assign("cz", "列表");
			$smarty->assign("huizongRemarks", $huizongRemarks);
			$smarty->assign("flag", "oneWeek");
			
		}else{
			// 为空
			$smarty->assign("flag", "oneWeeknodata");
			
		}
		$smarty->display("oneweekDay.tpl");
		
	}elseif ($flag == "oneWeektime_search"){
		$datetime = $_POST['datetime'];
		if($datetime == ""){
			$datetime = date("Y-m-d");
		}
		
		$day = $datetime;
	
		$monday = "";
		$weekday = "";
		$a = date('w',strtotime($day));
			
		if( $a == 0){  // 输入的日期是周日
			$weekday = $day;
			$monday = date('Y-m-d',strtotime($day) - 6*86400);
		}elseif ($a == 1){  // 输入的日期是周一
			$monday = $day;
			$weekday = date('Y-m-d',strtotime($day) + 6*86400);
		}else{
			$monday = date('Y-m-d',strtotime($day)-(date('w',strtotime($day))-1)*86400);
			$weekday = date('Y-m-d',strtotime($day)+(7-date('w',strtotime($day)))*86400);
		}
		
		$huizongRemarks = "";
		
		$smarty->assign("datetimeStart", $monday);
		$smarty->assign("datetimeEnd", $weekday);
		
		$smarty->assign("path2", "一周跟班统计查询");
		
		$resOneweekTemp = $OneweekManager->getNowOneweek($weekday);
		if(!empty($resOneweekTemp)){
			$contentTemp = $resOneweekTemp[0]['content'];
			$remarkTemp = $resOneweekTemp[0]['remarks'];
			
			$contentArrayAll = array();
			
			// 解析 $contentTemp
			
			$contentArray = explode("@", $contentTemp);
			$remarkArray = explode("@", $remarkTemp);

			$huizongRemarks = $remarkArray[count($remarkArray)-1];
			
			for($j=0; $j<count($contentArray)-1; $j++){
				$arrayTemp = explode(",", $contentArray[$j]);
				
				
				for($i=0; $i<count($remarkArray)-1; $i++){
					$remarkArrayTemp = explode(",", $remarkArray[$i]);
					if($remarkArrayTemp[0] == $arrayTemp[0]){
						array_push($arrayTemp, $remarkArrayTemp[1]);
						break;
					}
				}
				
				array_push($contentArrayAll, $arrayTemp);
			}
			
//			var_dump($contentArrayAll);
			$smarty->assign("content", $contentArrayAll);
			$smarty->assign("cz", "列表");
			$smarty->assign("huizongRemarks", $huizongRemarks);
			$smarty->assign("flag", "oneWeek");
			
		}else{
			// 为空
			$smarty->assign("flag", "oneWeeknodata");
			
		}
		$smarty->display("oneweekDay.tpl");
		
	}elseif ($flag == "oneweekupdate"){
		
		$id = $_POST['id'];
		$remark1 = $_POST['remark1'];
		$remark2 = $_POST['remark2'];
		$remark3 = $_POST['remark3'];
		$remark4 = $_POST['remark4'];
		$remark5 = $_POST['remark5'];
		$remark6 = $_POST['remark6'];
		$remark7 = $_POST['remark7'];
		$remark8 = $_POST['remark8'];
		$remark9 = $_POST['remark9'];
		$remark10 = $_POST['remark10'];
		$remark11 = $_POST['remark11'];
		$remark12 = $_POST['remark12'];
		$remark13 = $_POST['remark13'];
		$remark14 = $_POST['remark14'];
		$remark15 = $_POST['remark15'];
		$remark16 = $_POST['remark16'];
		$remark17 = $_POST['remark17'];
		$remark18 = $_POST['remark18'];
		$remark19 = $_POST['remark19'];
		$remark20 = $_POST['remark20'];
		$remark21 = $_POST['remark21'];
		$remark22 = $_POST['remark22'];
		$remark23 = $_POST['remark23'];
		$remark24 = $_POST['remark24'];
		$remark25 = $_POST['remark25'];
		$remark26 = $_POST['remark26'];
		$remark27 = $_POST['remark27'];
		$remark28 = $_POST['remark28'];
		$remark29 = $_POST['remark29'];
		$remark30 = $_POST['remark30'];
		$remark31 = $_POST['remark31'];
		$remark32 = $_POST['remark32'];
		
		$remark_hz = $_POST['remark_hz'];
		
		$remarks = '1,'.$remark1.'@'.'2,'.$remark2.'@'.'3,'.$remark3.'@'.'4,'.$remark4.'@'.'5,'.$remark5.'@'.'6,'.$remark6.'@'.
					'7,'.$remark7.'@'.'8,'.$remark8.'@'.'9,'.$remark9.'@'.'10,'.$remark10.'@'.'11,'.$remark11.'@'.'12,'.$remark12.'@'.
					'13,'.$remark13.'@'.'14,'.$remark14.'@'.'15,'.$remark15.'@'.'16,'.$remark16.'@'.'17,'.$remark17.'@'.'18,'.$remark18.'@'.
					'19,'.$remark19.'@'.'20,'.$remark20.'@'.'21,'.$remark21.'@'.'22,'.$remark22.'@'.'23,'.$remark23.'@'.'24,'.$remark24.'@'.
					'25,'.$remark25.'@'.'26,'.$remark26.'@'.'27,'.$remark27.'@'.'28,'.$remark28.'@'.'29,'.$remark29.'@'.'30,'.$remark30.'@'.
					'31,'.$remark31.'@'.'32,'.$remark32.'@'.$remark_hz;
		
		$OneweekUpdate = new oneweek();
		$res = $OneweekUpdate->updateRemarkById($id, $remarks);
		
		if ($res == 1){
			Tools::alert("添加成功!!");
		}else{
			Tools::alert("添加失败!!请重新操作...");
		}
		Tools::jump("GbgbController.php?flag=oneweek");
	}
	
	
?>