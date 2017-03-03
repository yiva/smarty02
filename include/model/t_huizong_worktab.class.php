<?php
require_once 'include/common/SqlHelper.class.php';

class t_huizong_worktab{
	
	public $id;   // 主键
	public $dutyhead;  // 值班首长
	public $dutyer;    // 值班员
	public $controlwarning;  // 营院监控及重要目标报警情况
	public $shangjiinforealize;  // 上级指示通知落实情况 
	public $onedaywork;   // 一日工作开展情况
	public $headdownlian;  //首长机关下连情况
	public $persontestcheck;  //人员抽查情况
	public $contentmain;    // 内容
	public $unit_id; 		// 单位id
	public $dept; 			// 部门
	public $inputtime; 		//  插入时间
	public $vehiclepleasenum; // 请示台次
	public $vehicleusednum; 	// 动用台次
	public $safesituation;		// 部队安全情况
	
	
	
	/***
	 * add
	 */
	public function addT_huizong(){
		$sql = "INSERT INTO t_huizong_worktab (dutyhead, dutyer,controlwarning, shangjiinforealize, onedaywork, headdownlian,".
		" persontestcheck, contentmain, unit_id, dept, inputtime, vehiclepleasenum, vehicleusednum, safesituation)".
		" values ('$this->dutyhead','$this->dutyer','$this->controlwarning','$this->shangjiinforealize','$this->onedaywork',".
		"'$this->headdownlian','$this->persontestcheck','$this->contentmain','$this->unit_id','$this->dept',".
		"'$this->inputtime','$this->vehiclepleasenum','$this->vehicleusednum','$this->safesituation')";
		
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dml($sql);
		return $res;
		
	}
	
	/**
	 * update by id
	 */
	public function updateT_huizongById($id){
		$sql = "update t_huizong_worktab set ".
				" dutyhead = '$this->dutyhead' , ".
				" dutyer = '$this->dutyer' , ".
				" controlwarning = '$this->controlwarning' , ".
				" shangjiinforealize = '$this->shangjiinforealize' , ".
				" onedaywork = '$this->onedaywork' , ".
				" headdownlian = '$this->headdownlian' , ".
				" persontestcheck = '$this->persontestcheck' , ".
				" contentmain = '$this->contentmain' , ".
				" unit_id = '$this->unit_id' , ".
				" dept = '$this->dept' , ".
				" inputtime = '$this->inputtime' , ".
				" vehiclepleasenum = '$this->vehiclepleasenum' , ".
				" vehicleusednum = '$this->vehicleusednum' , ".
				" safesituation = '$this->safesituation' ".
				" where id = '$id'";
//		echo $sql;
//		exit();
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dml($sql);
		return $res;
	}
	
	
	
	/**
	 * 得到当天是否有汇总信息
	 */
	public function getTodayHuizongData($datetime){
		$sql = "select * from t_huizong_worktab where DATE_FORMAT(inputtime,'%Y-%m-%d') = DATE_FORMAT('$datetime','%Y-%m-%d')";
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dql2($sql);
		return $res;
	}
	
	/**
	 * 得到最新的汇总数据
	 */
	public function getNewHuizongData(){
		//$sql = "SELECT * FROM t_huizong_worktab h ORDER BY h.inputtime DESC LIMIT 0,1";
		$sql = "SELECT *,CASE  WHEN DATE_FORMAT(inputtime,'%Y-%m-%d') = DATE_FORMAT(NOW(),'%Y-%m-%d') THEN inputtime ELSE '0' END AS tmp_inputtime FROM t_huizong_worktab h ORDER BY h.inputtime DESC LIMIT 0,1";
//		echo $sql;
//		exit();
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dql2($sql);
		return $res;
	}
	
	/**
	 * delete by id
	 */
	public function deleteT_huizongById($id){
		$sql = "delete from t_huizong_worktab where id = '$id'";
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dml($sql);
		return $res;
	}
	
	/**
	 * 通过id得到数据
	 */
	public function getT_huizongById($id){
		$sql = "select * from t_huizong_worktab where id = '$id'";
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dql2($sql);
		return $res;
	}
	
}

?>