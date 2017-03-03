<?php
date_default_timezone_set('PRC'); //设置中国时区
header("Content-type: text/html; charset=utf-8");

$startdate=strtotime("10:30");   
$enddate=strtotime("12:00");
echo strtotime("2014-9-11 10:30")."<br/>";

echo $startdate ."----------".$enddate;
echo "<br/>".($enddate-$startdate);
echo "<br/>".(($enddate-$startdate)/3600);
$days=round(($enddate-$startdate)/3600, 2);   
echo "<br/>".$days;     //days为得到的天数;   


echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";

echo date("Y-m-d",strtotime("-1 day")).' 08:00:00'; 
echo "<br/>";
echo strtotime(date("Y-m-d",strtotime("-1 day")).' 08:00:00');
echo "<br/>".date("Y-m-d",strtotime("-1 day"));
echo "<br/>".strtotime(date("Y-m-d",strtotime("-1 day")));
echo "<br/>今天时间：".strtotime(date("Y-m-d"));
echo "<br/>指定时间的前一天：".strtotime("2014-9-17");
echo "<br/>";
echo date("Y-m-d").' 08:00:00'; 
echo "<br/>";
echo strtotime(date("Y-m-d").' 08:00:00');
echo "<br/>";echo "<br/>";

echo date('H');
echo "<br/>";echo "<br/>";


$zhiwu=array("1连连长","1连指导员","2连连长","2连指导员","3连连长","3连指导员","4连连长","4连指导员","5连连长","5连指导员","6连连长","6连指导员",
"7连连长","7连指导员","8连连长","8连指导员","9连连长","9连指导员","10连连长","10连指导员","11连连长","11连指导员","12连连长","12连指导员",
"13连连长","13连指导员","14连连长","14连指导员","15连连长","15连指导员","16连连长","16连指导员");

echo $zhiwu[31]."--".$zhiwu[32];
echo "<br/>";echo "<br/>";

$datetimeStart = date('2014-9-5',(time()-((date('w')==0?7:date('w'))-1)*86400)); //w为星期几的数字形式,这里0为周日 
echo $datetimeStart;
$datetimeEnd = date('Y-m-d',(time()+(7-(date('w')==0?7:date('w')))*86400)); //同样使用w,以现在与周日相关天数算
echo "<br/>";
echo $datetimeEnd;echo "<br/>";
echo date('w',strtotime('2014-9-21'));

echo '周一：'.(strtotime("2014-9-24")-(date('w',strtotime('2014-9-24'))-1)*86400);
echo "<br/>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;";
echo date('Y-m-d',strtotime("2014-9-21")-(date('w',strtotime('2014-9-24'))-1)*86400);

echo "&nbsp;&nbsp;&nbsp;&nbsp;";
echo date('Y-m-d',strtotime("2014-9-21")+(7-date('w',strtotime('2014-9-24')))*86400);
echo "<br/>";echo "<br/>";

$day = '2014-09-30';

$monday = "";
$weekday = "";
$a = date('w',strtotime($day));
	
if( $a == 0){  // 输入的日期是周日
	$weekday = $day;
	$monday = date('Y-m-d',strtotime($day) - 6*86400);
	echo $monday;echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $weekday;
}elseif ($a == 1){  // 输入的日期是周一
	$monday = $day;
	$weekday = date('Y-m-d',strtotime($day) + 6*86400);
	echo $monday;echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $weekday;
}else{
	$monday = date('Y-m-d',strtotime($day)-(date('w',strtotime($day))-1)*86400);
	$weekday = date('Y-m-d',strtotime($day)+(7-date('w',strtotime($day)))*86400);
	echo $monday;echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $weekday;
}


