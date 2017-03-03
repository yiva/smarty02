<?php

final class Tools  {

	public static final function alert($str){
		echo "<script language='javascript'>window.alert('$str');</script>";
	}
	
	public static final function jump($url){
		echo "<script language='javascript'>window.location='$url';</script>";
	}
	
	public static final function back(){
		echo "<script language='javascript'>window.history.back();</script>";
	}
	public static final function back1(){
		echo "<script language='javascript'>window.history.back()-1;</script>";
	}
	
	public static final function fontColor($text, $color){
		echo "<font color='$color'>$text</font>";
	}
	
	public static final function printLink($hot, $url){
		echo "<a href='$url'>$hot</a>";
	}
	
	public static final  function getDate()
	{
		
		return date("Y-m-d h:i:s");
	}
	
	public static final function checkUploadFileName($filename, $type){
		
		$eName = strstr($filename, ".");
		
		for($i=0;$i<count($types);$i++){
			if(strtolower($eName) == $types[$i]){
				return true;
			}
		}
		return false;
	}
	
	public static final function UnitAllName($role, $unitName){
		if($role == 5){
			return $unitName."营部";
		}elseif ($role == 1 || $role == 2){
			return $unitName."团部";
		}else{
			return $unitName;
		}
	}
	
	/*
	 * 输入格式为 ：  2014-12-12 12:01:01
	 * 输出：2014-12-12
	 */
	public static final function getDatetimeToDate($datetime){
		$dateArray = explode(" ", $datetime);
		return $dateArray[0];
	}
	
	public static final function getRandomName(){
	
		return date("Y_m_d_h_i_s__").rand(10000, 99999);
	}
	
	public static final function getRandomString($length){
		$str = "";
		
		for($i=1;$i<=$length;$i++){
			
			$str .= rand(0, 9);
		}
		
		return $str;
		
	}

	
	/** 
	 * 对象数组转为普通数组 
	 * 
	 * AJAX提交到后台的JSON字串经decode解码后为一个对象数组， 
	 * 为此必须转为普通数组后才能进行后续处理， 
	 * 此函数支持多维数组处理。 
	 * 
	 * @param array 
	 * @return array 
	 */  
	public static final function objarray_to_array($obj) {  
	    $ret = array();  
	    foreach ($obj as $key => $value) {  
	    if (gettype($value) == "array" || gettype($value) == "object"){  
	            $ret[$key] =  objarray_to_array($value);  
	    }else{  
	        $ret[$key] = $value;  
	    }  
	    }  
	    return $ret;  
	}  
	
	/**
	 * 计算时间差
	 * 
	 * 返回值：（小时）
	 */
	public static final function calTime($starttime, $endtime){
		$startdate=strtotime($starttime);   
		$enddate=strtotime($endtime);
		$hours=round(($enddate-$startdate)/3600, 2);   
		return $hours;  
	}
	
	
}


?>