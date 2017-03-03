<?php
require_once 'include/common/SqlHelper.class.php';
	class txzq{
		
		public $id;   //主键
		public $lowercase;  //每周二汇报各营线路巡检率低于95%的说明情况
		public $inforealize;  //上级指示通知落实情况
		public $repairlink;  //连队整修巡线情况
		public $gbgbinfo;  // 首长机关下连情况
		public $traininfo;  //  训练情况
		public $dutycheck; //  台站值班抽查情况
		public $userid;  //  用户id
		public $yflag;   //  营级审核标志位  0：未审核， 1：审核
		public $tflag;   //  团级审核标志位  0：未审核， 1：审核
		public $submitflag;  // 提交标志位  0：未， 1：已
		public $inputtime;   //  插入时间
		public $remark;   //  备注
		public $machinelinework;   //  机线电工作情况
		public $lanrun;   //  局域网运行情况
		
		
		/**
		 * add
		 */
		public function addTxzq(){
			
			$sql = "insert into txzq (lowercase,inforealize,repairlink,gbgbinfo,traininfo,dutycheck,userid,yflag,tflag,submitflag,inputtime,remark,machinelinework,lanrun) values (".
			"'$this->lowercase','$this->inforealize','$this->repairlink','$this->gbgbinfo','$this->traininfo','$this->dutycheck',".
			"'$this->userid','$this->yflag','$this->tflag','$this->submitflag','$this->inputtime','$this->remark','$this->machinelinework','$this->lanrun')";
			
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
			
		}
		
		/**
		 * delete
		 */
		public function delTxzq($id){
			$sql = "delete from txzq where id = '$id'";
			
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
		}
		
		/**
		 * update
		 */
		public function updateTxzq($id){
			$sql = "update txzq set lowercase='$this->lowercase',inforealize='$this->inforealize',repairlink='$this->repairlink',gbgbinfo='$this->gbgbinfo',".
			"traininfo='$this->traininfo',dutycheck='$this->dutycheck',userid='$this->userid',yflag='$this->yflag',tflag='$this->tflag',submitflag='$this->submitflag',".
			"inputtime='$this->inputtime',remark='$this->remark',machinelinework='$this->machinelinework',lanrun='$this->lanrun' where id='$id'";
//			echo $sql;
//			exit();
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
		}
		
		/**
		 * select all 
		 */
		public function getAllTxzq(){
			$sql = "select * from txzq";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		/**
		 * get class by id
		 */
		public function getTxzqById($id){
			$sql = "select * from txzq where id = '$id'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		/**
		 * 得到指定用户的全部登记信息
		 * get all gbgb by userid
		 */
		public function getAllTxzqBySid($userId){
			$sql = "select * from txzq where userid = '$userId' ORDER BY mdate DESC";
			//echo $sql;
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		/**
		 * get txzq work data
		 */
		public function getTodayTxzqDataBySid($userid, $datetime){
			$sql = "SELECT * FROM txzq WHERE DATE_FORMAT(inputtime,'%Y-%m-%d') = DATE_FORMAT('$datetime','%Y-%m-%d') AND userid = '$userid'";
//			echo $sql;
//			exit();
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			//var_dump($res);
			return $res;
		}
		
		/**
		 * 营级得到多条连级的数据
		 */
		public function getTxzqByShangjiId($userid, $s_id, $dateTime){
//			$sql = "SELECT * FROM member m LEFT JOIN txzq t ON m.id = t.userid INNER JOIN unit_manager u ON m.unit_id = u.id WHERE m.s_id = '$userid' ORDER BY u.unit_l ASC,u.unit_y ASC, u.unit_t ASC";
//			$sql = "SELECT t.*,s_name FROM member m INNER JOIN txzq t ON m.id = t.userid INNER JOIN unit_manager u ON m.unit_id = u.id WHERE m.s_id = '$userid' ORDER BY u.unit_l ASC,u.unit_y ASC, u.unit_t ASC";
			$sql = "SELECT t.*,s_name,  CASE  WHEN role = '5' THEN CONCAT(s_name,'营部') ELSE s_name  END AS tmp_name".
			" FROM member m INNER JOIN txzq t ON m.id = t.userid INNER JOIN unit_manager u ON m.unit_id = u.id ".
			"WHERE (m.s_id = '$s_id' or m.id = '$userid' ) AND DATE_FORMAT(t.inputtime,'%Y-%m-%d') = DATE_FORMAT('$dateTime','%Y-%m-%d') ORDER BY u.unit_l ASC,u.unit_y ASC, u.unit_t ASC";
//			echo $sql;
//			exit();
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			//var_dump($res);
			return $res;
		}
		
		
		/**
		 * 通过团id得到下级所有的数据
		 */
		public function getYingAllByTid($tid, $dateTime){
			$sql = "SELECT t.*, m.s_name FROM txzq t LEFT JOIN member m ON t.userid = m.id LEFT JOIN member yy ON m.s_id = yy.unit_id INNER JOIN unit_manager u ON u.id = m.unit_id	".		 
					"WHERE (yy.s_id = (SELECT unit_id FROM member WHERE id = '$tid') OR yy.id = '$tid')".
					" AND DATE_FORMAT(t.inputtime,'%Y-%m-%d') = DATE_FORMAT('$dateTime','%Y-%m-%d') ".
			 		"ORDER BY u.unit_t ASC,u.unit_y ASC, u.unit_l ASC";
//			echo $sql;
//			exit();
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		
		
		/**
		 * 操作审核
		 * Enter description here ...
		 * @param unknown_type $inforealize   审核人填写的东西
		 * @param unknown_type $tflagValue    团审核标志位
		 * @param unknown_type $id			信息id
		 */
		public function shenheTxzq($inforealize, $tflagValue, $id){
			$sql = "update txzq set inforealize = '$inforealize', tflag = '$tflagValue' where id = '$id' ";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
		}

		/**
		 * update yflag = 1  by id
		 */
		public function updateYflagById($id, $value){
			$sql = "update txzq set yflag = '$value' where id = '$id'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
		}	
			
	}

?>