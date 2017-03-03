<?php
require_once 'include/common/SqlHelper.class.php';
	class huizong{
		
		public $id;  // 主键
		public $factnum; // 总数实到人数
		public $shouldnum; //总数应到人数
		public $dutyhead; 	//值班首长
		public $dutyer; 	//值班员
		public $gbfactnum; 	//干部应到人数
		public $gbshouldnum; //干部应到人数
		public $gbholiday; //干部休假
		public $gbout;   // 干部外出
		public $sgfactnum; //士官实在人数
		public $sgshouldnum; //士官应该人数
		public $sgholiday; //士官休假
		public $sgout; //士官外出
		public $ywbfactnum; //义务兵实在人数
		public $ywbshouldnum; //义务兵应在人数
		public $ywbholiday; //义务兵休假
		public $ywbout; //义务兵外出
		public $remark; //备注
		public $yflag; //营级审核标志位  0：未审核， 1：审核
		public $tflag; //团级审核标志位  0：未审核， 1：审核
		public $submitflag; //提交标志位  0：未， 1：已
		public $userid; //用户id
		public $inputtime;	//录入时间
		public $weather;	// 天气
		public $Healthprevention;  // 卫生防疫
		public $onedaywork;  // 一日工作开展情况
		public $headdownlian;  // 首长机关下连情况
		
		/**
		 * add work
		 * Enter description here ...
		 */
		public function addHuizong(){
			$sql = "insert into huizongtab ".
			"(factnum, shouldnum, dutyhead, dutyer, ".
			"gbfactnum, gbshouldnum, gbholiday, gbout, sgfactnum, sgshouldnum, sgholiday, sgout,".
			" ywbfactnum, ywbshouldnum, ywbholiday, ywbout, remark,".
			" yflag, tflag, submitflag, userid, inputtime, weather, Healthprevention, onedaywork, headdownlian) values ".
			"('$this->factnum','$this->shouldnum','$this->dutyhead','$this->dutyer',".
			"'$this->gbfactnum','$this->gbshouldnum','$this->gbholiday','$this->gbout','$this->sgfactnum','$this->sgshouldnum','$this->sgholiday','$this->sgout',".
			"'$this->ywbfactnum','$this->ywbshouldnum','$this->ywbholiday','$this->ywbout','$this->remark',".
			"'$this->yflag','$this->tflag','$this->submitflag','$this->userid','$this->inputtime', '$this->weather', '$this->Healthprevention', ".
			"'$this->onedaywork', '$this->headdownlian')";
			//echo $sql;
			
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
			
		}
		
		/**
		 * delete by id
		 */
		public function delHuizongById($id){
			$sql ="delete from huizongtab where id = '$id'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
		}
		
		/**
		 * update
		 */
		public function updateHuiZong($id){
			
			$sql = "UPDATE huizongtab SET  ".
			"factnum = '$this->factnum' , ".
			"shouldnum = '$this->shouldnum' , ".
			"dutyhead = '$this->dutyhead' , ".
			"dutyer = '$this->dutyer' , ".
			"gbfactnum = '$this->gbfactnum' , ".
			"gbshouldnum = '$this->gbshouldnum' ,". 
			"gbholiday = '$this->gbholiday' , ".
			"gbout = '$this->gbout' , ".
			"sgfactnum = '$this->sgfactnum' , ".
			"sgshouldnum = '$this->sgshouldnum' ,". 
			"sgholiday = '$this->sgholiday' , ".
			"sgout = '$this->sgout' , ".
			"ywbfactnum = '$this->ywbfactnum' ,". 
			"ywbshouldnum = '$this->ywbshouldnum' , ".
			"ywbholiday = '$this->ywbholiday' , ".
			"ywbout = '$this->ywbout' , ".
			"remark = '$this->remark' , ".
			"yflag = '$this->yflag' , ".
			"tflag = '$this->tflag' , ".
			"submitflag = '$this->submitflag' ,". 
			"userid = '$this->userid' , ".
			"inputtime = '$this->inputtime' , ".
			"weather = '$this->weather' , ".
			"Healthprevention = '$this->Healthprevention' , ".
			"onedaywork = '$this->onedaywork' , ".
			"headdownlian = '$this->headdownlian' ".
			"WHERE ".
			"id = '$id' " ;
			//echo $sql;
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			//echo $res;
			return $res;
		}
		
		/**
		 * get huizongtab by id
		 */
		public function getHuizongById($id){
			$sql = "select * from huizongtab where id = '$id'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		/**
		 * get all work
		 */
		public function getTodayHuiZongByUserid($userid, $datetime){
			$sql = "SELECT * FROM huizongtab WHERE userid = '$userid' AND DATE_FORMAT(inputtime,'%Y-%m-%d') = DATE_FORMAT('$datetime','%Y-%m-%d')";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
//			var_dump($res);
			return $res;
		}
		
		/**
		 * get works by userid
		 */
		public function getWorksBySid($userid){
			$sql = "select * from work userid = '$userid' ORDER BY inputtime";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		/**
		 * get today work data
		 */
		public function getTodayWorkDataBySid($userid){
			$sql = "SELECT * FROM worktab WHERE DATE_FORMAT(inputtime,'%Y-%m-%d') = DATE_FORMAT(NOW(),'%Y-%m-%d') AND userid = '$userid'";
			//echo $sql;
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			//var_dump($res);
			return $res;
		}
		
		/**
		 * 判断是否被审核
		 */
		public function isshenhe($id){
			$sql = "SELECT yflag, tflag FROM huizongtab WHERE id = '$id'";
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
		 * 营级得到多条连级的数据
		 */
		public function getTxzqByShangjiId($userid){
//			$sql = "SELECT t.*,s_name FROM member m INNER JOIN worktab t ON m.id = t.userid INNER JOIN unit_manager u ON m.unit_id = u.id WHERE m.s_id = 10 ORDER BY u.unit_l ASC,u.unit_y ASC, u.unit_t ASC";
			$sql = "SELECT t.*,s_name,t.gbfactnum/t.gbshouldnum AS gbl,t.sgfactnum/t.sgshouldnum AS sgl,t.ywbfactnum/t.ywbshouldnum AS ywbl FROM member m INNER JOIN worktab t ON m.id = t.userid INNER JOIN unit_manager u ON m.unit_id = u.id WHERE (m.s_id = '$userid' OR m.id = '$userid') AND DATE_FORMAT(t.inputtime,'%Y-%m-%d') = DATE_FORMAT(NOW(),'%Y-%m-%d') ORDER BY u.unit_l ASC,u.unit_y ASC, u.unit_t ASC";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			//var_dump($res);
			return $res;
		}
		
		/**
		 * 得到一个营的数据并统计
		 */
		public function getTotalData($userid){
			$sql = "SELECT SUM(factnum)AS factnum,SUM(shouldnum) AS shouldnum,".
					"SUM(gbfactnum) AS gbfactnum,SUM(gbshouldnum) AS gbshouldnum,SUM(gbholiday) AS gbholiday,SUM(gbout) AS gbout,".
					"SUM(sgfactnum) AS sgfactnum,SUM(sgshouldnum) AS sgshouldnum,SUM(sgholiday) AS sgholiday,SUM(sgout) AS sgout,".
					"SUM(ywbfactnum) AS ywbfactnum,SUM(ywbshouldnum) AS ywbshouldnum,SUM(ywbholiday) AS ywbholiday,SUM(ywbout) AS ywbout ".
					"FROM member m INNER JOIN worktab t ON m.id = t.userid ".
					"INNER JOIN unit_manager u ON m.unit_id = u.id WHERE ".
					"(m.s_id = '$userid' OR m.id = '$userid') AND DATE_FORMAT(t.inputtime,'%Y-%m-%d') = DATE_FORMAT(NOW(),'%Y-%m-%d') ".
					"ORDER BY u.unit_l ASC,u.unit_y ASC, u.unit_t ASC";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		/**
		 * 得到一个营的数据并统计
		 */
		public function getTodayDataByUserid($userid){
			$sql = "SELECT * FROM worktab WHERE userid = '$userid' AND DATE_FORMAT(inputtime,'%Y-%m-%d') = DATE_FORMAT(NOW(),'%Y-%m-%d')";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		/**
		 * 通过团id得到下属所有营的数据
		 */
		public function getAllYingByTid($tid, $dateTime){
//			$sql = "SELECT h.*, m.s_name,h.gbfactnum/h.gbshouldnum AS gbl,h.sgfactnum/h.sgshouldnum AS sgl,h.ywbfactnum/h.ywbshouldnum AS ywbl".
//					" FROM huizongtab h LEFT JOIN member m ON h.userid = m.id LEFT JOIN member yy ON m.s_id = yy.unit_id INNER JOIN unit_manager u ON u.id = m.unit_id ".
//					"WHERE DATE_FORMAT(h.inputtime,'%Y-%m-%d') = DATE_FORMAT('$dateTime','%Y-%m-%d') ". 
//					"AND yy.id = '$tid' ORDER BY u.unit_t ASC,u.unit_y ASC, u.unit_l ASC";

			$sql = "SELECT h.*, m.s_name,h.gbfactnum/h.gbshouldnum AS gbl,h.sgfactnum/h.sgshouldnum AS sgl,h.ywbfactnum/h.ywbshouldnum AS ywbl, ".
					"CASE  WHEN m.role = '1' THEN CONCAT(m.s_name,'团机关') ELSE m.s_name  END AS tmp_name".
					" FROM huizongtab h LEFT JOIN member m ON h.userid = m.id LEFT JOIN member yy ON m.s_id = yy.unit_id INNER JOIN unit_manager u ON u.id = m.unit_id ".
					" WHERE (yy.id = '$tid' OR m.id = '$tid') AND DATE_FORMAT(h.inputtime,'%Y-%m-%d') = DATE_FORMAT('$dateTime','%Y-%m-%d') ".
					" ORDER BY u.unit_t ASC,u.unit_y ASC, u.unit_l ASC ";
//			echo $sql;
//			exit();
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
			
		}
		
		/**
		 * 通过团id得到下属所有营的数据（汇总）
		 */
		public function getAllYingByTidHuizongData($tid, $dateTime){

			$sql = "SELECT SUM(factnum)AS factnum,SUM(shouldnum) AS shouldnum,".
					" SUM(gbfactnum) AS gbfactnum,SUM(gbshouldnum) AS gbshouldnum,SUM(gbholiday) AS gbholiday,SUM(gbout) AS gbout,".
					" SUM(sgfactnum) AS sgfactnum,SUM(sgshouldnum) AS sgshouldnum,SUM(sgholiday) AS sgholiday,SUM(sgout) AS sgout,".
					" SUM(ywbfactnum) AS ywbfactnum,SUM(ywbshouldnum) AS ywbshouldnum,SUM(ywbholiday) AS ywbholiday,SUM(ywbout) AS ywbout ".
					" FROM huizongtab h LEFT JOIN member m ON h.userid = m.id LEFT JOIN member yy ON m.s_id = yy.unit_id INNER JOIN unit_manager u ON u.id = m.unit_id ".
					" WHERE (yy.id = '$tid' OR m.id = '$tid') AND DATE_FORMAT(h.inputtime,'%Y-%m-%d') = DATE_FORMAT('$dateTime','%Y-%m-%d') ".
					" ORDER BY u.unit_t ASC,u.unit_y ASC, u.unit_l ASC ";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
			
		}
		
		
		/**
		 * 得到团级当天添加的出勤信息
		 */
		public function getTodayDataByTid($tid, $dateTime){
			$sql = "SELECT * FROM huizongtab h WHERE h.userid = '$tid' AND DATE_FORMAT(inputtime,'%Y-%m-%d') = DATE_FORMAT('$dateTime','%Y-%m-%d')";
			
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		/**
		 * update tflag = 1  by id
		 */
		public function updateTflagById($id, $value){
			$sql = "update huizongtab set tflag = '$value' where id = '$id'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
		}
		
	}
	

?>