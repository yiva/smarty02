<?php
session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/oneweek.class.php';
	require_once 'include/common/Tools.class.php';
	require_once 'include/common/config.php';
	
	$smarty->assign("member", $_SESSION["member"]);
	$smarty->assign("action", "GbgbController.php?flag=oneweekupdate");
	$id = $_REQUEST["id"];

	$oneweekManager = new oneweek();
	$resoneweekData = $oneweekManager->getOneweekById($id);
	
		// 显示数据
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
		//本周一
		$datetimeStart = date('Y-m-d',(time()-((date('w')==0?7:date('w'))-1)*86400)); //w为星期几的数字形式,这里0为周日 
		//本周日
		$datetimeEnd = date('Y-m-d',(time()+(7-(date('w')==0?7:date('w')))*86400)); //同样使用w,以现在与周日相关天数算
		
		$smarty->assign("datetimeStart", $datetimeStart);
		$smarty->assign("datetimeEnd", $datetimeEnd);
		$smarty->assign("id", $resoneweekData[0]['id']);
		$smarty->assign("datetimeStart", $datetimeStart);
		$smarty->assign("datetimeEnd", $datetimeEnd);
		$smarty->assign("path2", "一周跟班统计");
		$smarty->assign("content", $contentArrayAll);
		$smarty->assign("cz", "列表");
		$smarty->assign("button", "修改");
		$smarty->assign("huizongRemarks", $huizongRemarks);
		$smarty->assign("flag", "updateoneWeektime");
		$smarty->display("oneweekEdit.tpl");
