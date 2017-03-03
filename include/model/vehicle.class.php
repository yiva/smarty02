<?php
require_once 'include/common/SqlHelper.class.php';

	class vehicle{
		
		public $id;
		public $person_no;
		public $plasetime;
		public $task;
		public $unit;
		public $vehiclemo;
		public $start;
		public $stop;
		public $distance;
		public $runtime;
		public $driver;
		public $supercarg;
		public $ratifier;
		public $ratifier_id;
		public $remark;
		public $inputtime; 
		public $yflag; 
		public $tflag; 
		public $submitflag;
		
		/**
		 * 添加信息
		 * Enter description here ...
		 */
		public function addVehicle(){
			$sqlHelper = new SqlHelper();
			$sql = "insert into vehicle (person_no, plasetime,task,unit,vehiclemo,start,stop,distance,".
			"runtime,driver,supercarg,ratifier,ratifier_id,remark,inputtime,yflag,tflag,submitflag) ".
			"value ('$this->person_no','$this->plasetime','$this->task','$this->unit','$this->vehiclemo',".
			"'$this->start','$this->stop','$this->distance','$this->runtime','$this->driver','$this->supercarg','$this->ratifier',".
			"'$this->ratifier_id','$this->remark','$this->inputtime','$this->yflag','$this->tflag','$this->submitflag')";
//			echo $sql;
//			exit();
			$res = $sqlHelper->execute_dml($sql);
			
			return $res;
		} 
		
		/**
		 * 删除 
		 * 通过ID号删除
		 * Enter description here ...
		 */
		public function delVehicle($id){
			$sql = "delete from vehicle where id = ".$id;
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
		}
		
		/**
		 * 修改
		 * 通过id号
		 * Enter description here ...
		 */
		public function updateVehicle($id){
			$sql = "UPDATE vehicle SET person_no = '$this->person_no',plasetime = '$this->plasetime',".
			"task = '$this->task',unit = '$this->unit',vehiclemo = '$this->vehiclemo',start = '$this->start',".
			" stop = '$this->stop', distance = '$this->distance',".
			"runtime = '$this->runtime',driver = '$this->driver',supercarg = '$this->supercarg',ratifier = '$this->ratifier',".
			"ratifier_id = '$this->ratifier_id',remark = '$this->remark', inputtime = '$this->inputtime', yflag = '$this->yflag', ".
			"tflag = '$this->tflag', submitflag = '$this->submitflag' where id = '$id'";
//echo $sql;
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
		}
		
		/**
		 * 通过id得到实体类
		 * Enter description here ...
		 * @param unknown_type $id
		 */
		public function getVehicleById($id){
			$sql = "select * from vehicle where id = '$id'";
			//echo $sql."/////";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		/**
		 * 分页
		 * Enter description here ...
		 * @param unknown_type $fenyePage
		 */
		public function getFenyePage($fenyePage, $userid){
				
			// 创建一个SqlHelper对象实例
			$sqlHelper = new SqlHelper();
			
			$sql1 = "select * from vehicle WHERE person_no = '$userid' ORDER BY plasetime DESC limit ".
			($fenyePage->pageNow-1)*$fenyePage->pageSize.
			",".$fenyePage->pageSize;
			
			$sql2 = "select COUNT(*) from vehicle WHERE person_no = '$userid' ";
			
			$sqlHelper->execute_dql_fenye($sql1, $sql2, $fenyePage);
			
			$sqlHelper->my_close();
		}
		
		/**
		 * d得到全体列表
		 * Enter description here ...
		 */
		public function getAllVehicle(){
			$sql = "select * from vehicle";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
			//echo $res;
		}
		
		/**
		 * 通过userid得到列表
		 * Enter description here ...
		 */
		public function getAllVehicleByUserid($userid, $datetime){
			$sql = "select * from vehicle where DATE_FORMAT(inputtime,'%Y-%m-%d') = DATE_FORMAT('$datetime','%Y-%m-%d') AND person_no = '$userid' ORDER BY inputtime DESC";
//			echo $sql;
//			exit();
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		/**
		 * 通过userid得到列表
		 * Enter description here ...
		 */
		public function getAllVehicleByUserid2($unit_id, $datetime){
			$sql = "SELECT v.* FROM vehicle v LEFT JOIN member m ON v.person_no = m.id LEFT JOIN unit_manager u ON m.unit_id = u.id ".
					"WHERE (m.s_id = '$unit_id' OR m.unit_id = '$unit_id') AND DATE_FORMAT(inputtime,'%Y-%m-%d') = DATE_FORMAT('$datetime','%Y-%m-%d') ".
					"ORDER BY u.unit_l ASC,u.unit_y ASC, u.unit_t ASC";
//			echo $sql;
//			exit();
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		public function myToString(){
			$str = '$plasetime = '.$this->plasetime;
			//$str = "$plasetime = ".$this->plasetime.";$task=".$this->task.";$unit=".$this->unit.";$vehiclemo=".$this->vehiclemo.";$startstopdistance=".$this->startstopdistance;
			return $str;
		}
		
		
	/**
		 * 判断是否被审核
		 */
		public function isshenhe($id){
			$sql = "SELECT yflag, tflag FROM vehicle WHERE id = '$id'";
			//echo $sql;
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			if($res[0]['yflag'] == 0 && $res[0]['tflag'] == 0){
				return 1;
			}else{
				return 0;
			}
		}
		
		/**
		 * 通过营id得到所属连的用车情况
		 */
		public function getLianAllByYid($yid){
			$sql="SELECT v.* FROM member m INNER JOIN vehicle v ON m.id = v.person_no ".
			"INNER JOIN unit_manager u ON m.unit_id = u.id WHERE m.s_id = '$yid' ".
			"ORDER BY v.plasetime DESC";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		/**
		 * 通过营id得到所属连的用车情况
		 */
		public function getLianAllByYidToDatetime($unit_id, $datetime){
			$sql="SELECT *,CASE  WHEN m.role = '5' THEN CONCAT(m.s_name,'营部') ELSE m.s_name  END AS tmp_name FROM vehicle v ".
				"LEFT JOIN member m ON v.person_no = m.id ".
				"LEFT JOIN unit_manager u ON u.id = m.unit_id ".
				"WHERE DATE_FORMAT(v.inputtime, '%Y-%m-%d') = DATE_FORMAT( '$datetime','%Y-%m-%d') ".
				"AND (m.s_id = '$unit_id' OR m.unit_id = '$unit_id') ".
				"ORDER BY u.unit_t ASC,u.unit_y ASC, u.unit_l ASC";
//			echo $sql;
//			exit();
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		/**
		 * 通过营id得到所属连的用车情况
		 */
		public function getLianAllByYidFenye($fenyePage, $yid){
			$sql1="SELECT v.* FROM member m INNER JOIN vehicle v ON m.id = v.person_no ".
			"INNER JOIN unit_manager u ON m.unit_id = u.id WHERE m.s_id = '$yid' ".
			"ORDER BY v.plasetime DESC limit ".
			($fenyePage->pageNow-1)*$fenyePage->pageSize.
			",".$fenyePage->pageSize;
			
			// 创建一个SqlHelper对象实例
			$sqlHelper = new SqlHelper();
			
			$sql2="SELECT count(*) FROM member m INNER JOIN vehicle v ON m.id = v.person_no ".
			"INNER JOIN unit_manager u ON m.unit_id = u.id WHERE m.s_id = '$yid' ".
			"ORDER BY v.plasetime DESC";
			
			$sqlHelper->execute_dql_fenye($sql1, $sql2, $fenyePage);
			
			$sqlHelper->my_close();
		}
		
		/**
		 * 通过团id得到所属连的用车情况
		 */
		public function getLianAllByTid($tid, $datetime){
//			$sql="SELECT v.* FROM vehicle v LEFT JOIN member m ON v.person_no = m.id LEFT JOIN member yy ON m.s_id = yy.unit_id INNER JOIN unit_manager u ON u.id = m.unit_id".
//			" WHERE yy.s_id = (SELECT unit_id FROM member WHERE id = '$tid') OR yy.id = '$tid'".
//			" ORDER BY u.unit_t ASC,u.unit_y ASC, u.unit_l ASC";
			$sql="SELECT v.* FROM vehicle v LEFT JOIN member m ON v.person_no = m.id LEFT JOIN member yy ON m.s_id = yy.unit_id INNER JOIN unit_manager u ON u.id = m.unit_id".
				" WHERE (yy.s_id = (SELECT unit_id FROM member WHERE id = '$tid') OR yy.id = '$tid')". 
				"AND DATE_FORMAT(v.plasetime,'%Y-%m-%d') = DATE_FORMAT('$datetime','%Y-%m-%d')".
			    "ORDER BY u.unit_t ASC,u.unit_y ASC, u.unit_l ASC";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		/**
		 * 操作审核
		 * Enter description here ...
		 * @param unknown_type $ratifier   审核人姓名
		 * @param unknown_type $ratifier_id   审核人id
		 * @param unknown_type $tflagValue    团审核标志位
		 * @param unknown_type $id			信息id
		 */
		public function shenheVehicle($ratifier,$ratifier_id, $tflagValue, $id){
			$sql = "update vehicle set ratifier = '$ratifier',ratifier_id = '$ratifier_id', tflag = '$tflagValue' where id = '$id' ";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
		}
		
		/**
		 * 通过unitid  得到营级下属的单位名称
		 * Enter description here ...
		 * @param $unit_id
		 */
		public function getXiaShuByY_unit_id($unit_id){
			$sql = "SELECT  m.*,CASE  WHEN m.role = '5' THEN CONCAT(m.s_name,'营部') ELSE m.s_name  END AS tmp_name".
					" FROM member m LEFT JOIN unit_manager u ON m.unit_id = u.id ".
					"WHERE m.s_id = '$unit_id' OR m.unit_id = '$unit_id'".
					"ORDER BY u.unit_l ASC,u.unit_y ASC, u.unit_t ASC";
			
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		
		/**
		 * 通过member id  得到单位的名称
		 */
		public function getUnitNameById($id){
			$sql = "SELECT  m.*,CASE  WHEN m.role = '5' THEN CONCAT(m.s_name,'营部') ELSE m.s_name END AS tmp_name FROM member m WHERE m.id = '$id'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		
	}
	

?>