<?php
session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/gbgb.class.php';
	date_default_timezone_set('PRC'); //设置中国时区
	
	
	$smarty->assign("member", $_SESSION["member"]);
	$smarty->assign("unit", $_SESSION['member']['s_name']);
	$smarty->assign("path2", "一周跟班统计");
	$smarty->assign("action", "GbgbController.php?flag=oneweek_add");
	$smarty->assign("button", "添加");
	$smarty->assign("cz", "添加");
//	$smarty->assign("time", date("Y-m-d H:i:s"));
	$smarty->assign("time", date("Y-m-d"));

	//本周一
	$datetimeStart = date('Y-m-d',(time()-((date('w')==0?7:date('w'))-1)*86400)); //w为星期几的数字形式,这里0为周日 
	//本周日
	$datetimeEnd = date('Y-m-d',(time()+(7-(date('w')==0?7:date('w')))*86400)); //同样使用w,以现在与周日相关天数算
	$gbgbManager = new gbgb();
	$resWeek = $gbgbManager->getOneWeekTimeAndOrderAlltime($datetimeStart, $datetimeEnd);
		
	for ($i=0; $i<count($resWeek); $i++){
		array_push($resWeek[$i], $i+1);
	}
	$resNO = $gbgbManager->getNoZhiban($resWeek);
//	var_dump($resNO);
//	echo "<br />";
	for ($j=0; $j<count($resNO); $j++){
		array_push($resNO[$j], $j+1);
	}
//	var_dump($resNO);
	$smarty->assign("datetimeStart", $datetimeStart);
	$smarty->assign("datetimeEnd", $datetimeEnd);
	$smarty->assign("flag", "oneWeektime");
	$smarty->assign("resWeek", $resWeek);
	$smarty->assign("resNO", $resNO);
	$smarty->display("oneweekEdit.tpl");
	
	
	
