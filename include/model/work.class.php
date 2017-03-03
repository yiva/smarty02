<?php
require_once 'include/common/SqlHelper.class.php';
	class work{
		
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
		public function addWork(){
			$sql = "insert into worktab ".
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
		public function delWorkById($id){
			$sql ="delete from worktab where id = '$id'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
		}
		
		/**
		 * update
		 */
		public function updateWork($id){
			
			$sql = "UPDATE worktab SET  ".
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
//			echo $sql;
//			exit();
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			//echo $res;
			return $res;
		}
		
		/**
		 * get work by id
		 */
		public function getWorkById($id){
			$sql = "select * from worktab where id = '$id'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		/**
		 * get all work
		 */
		public function getAllWork(){
			$sql = "select * from worktab ";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
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
		public function getTodayWorkDataBySid($userid, $datetime){
			$sql = "SELECT * FROM worktab WHERE DATE_FORMAT(inputtime,'%Y-%m-%d') = DATE_FORMAT('$datetime','%Y-%m-%d') AND userid = '$userid'";
			//echo $sql;
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			//var_dump($res);
			return $res;
		}
		
		/**
		 * 判断是否被审核
		 */
		public function isshenhe($userid){
			$sql = "SELECT yflag, tflag FROM worktab WHERE DATE_FORMAT(inputtime,'%Y-%m-%d') = DATE_FORMAT(NOW(),'%Y-%m-%d') AND userid = '$userid'";
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
		public function getWorkByShangjiId($userid, $s_id, $datetime){
//			$sql = "SELECT t.*,s_name FROM member m INNER JOIN worktab t ON m.id = t.userid INNER JOIN unit_manager u ON m.unit_id = u.id WHERE m.s_id = 10 ORDER BY u.unit_l ASC,u.unit_y ASC, u.unit_t ASC";
			$sql = "SELECT t.*,s_name,t.gbfactnum/t.gbshouldnum AS gbl,t.sgfactnum/t.sgshouldnum AS sgl,t.ywbfactnum/t.ywbshouldnum AS ywbl,".
			" CASE  WHEN role = '5' THEN CONCAT(s_name,'营部') ELSE s_name  END AS tmp_name ".
			"FROM member m INNER JOIN worktab t ON m.id = t.userid INNER JOIN unit_manager u ON m.unit_id = u.id ".
			"WHERE (m.s_id = '$s_id' OR m.id = '$userid') AND DATE_FORMAT(t.inputtime,'%Y-%m-%d') = DATE_FORMAT('$datetime','%Y-%m-%d') ORDER BY u.unit_l ASC,u.unit_y ASC, u.unit_t ASC";
//			echo $sql;
//			exit();
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			//var_dump($res);
			return $res;
		}
		
		/**
		 * 得到一个营的数据并统计
		 */
		public function getTotalData($userid, $s_id){
			$sql = "SELECT SUM(factnum)AS factnum,SUM(shouldnum) AS shouldnum,".
					"SUM(gbfactnum) AS gbfactnum,SUM(gbshouldnum) AS gbshouldnum,SUM(gbholiday) AS gbholiday,SUM(gbout) AS gbout,".
					"SUM(sgfactnum) AS sgfactnum,SUM(sgshouldnum) AS sgshouldnum,SUM(sgholiday) AS sgholiday,SUM(sgout) AS sgout,".
					"SUM(ywbfactnum) AS ywbfactnum,SUM(ywbshouldnum) AS ywbshouldnum,SUM(ywbholiday) AS ywbholiday,SUM(ywbout) AS ywbout ".
					"FROM member m INNER JOIN worktab t ON m.id = t.userid ".
					"INNER JOIN unit_manager u ON m.unit_id = u.id WHERE ".
					"(m.s_id = '$s_id' OR m.id = '$userid') AND DATE_FORMAT(t.inputtime,'%Y-%m-%d') = DATE_FORMAT(NOW(),'%Y-%m-%d') ".
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
		 * update yflag = 1  by id
		 */
		public function updateYflagById($id, $value){
			$sql = "update worktab set yflag = '$value' where id = '$id'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
		}
		
		/**
		 * 检查今天是否已经添加
		 */
		public function checkReadyAdd($id){
			$sql = "select * FROM worktab where userid = '$id' AND DATE_FORMAT(inputtime,'%Y-%m-%d') = DATE_FORMAT(NOW(),'%Y-%m-%d')";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		/**
		 * 通过团用户的unit_id 得到该团对应的所有连得天气情况  
		 */
		public function getLianWeatherByUnitId($unit_id, $datetime){
			/*
			$sql = "SELECT  w.weather, w.Healthprevention, m.s_name FROM worktab w ".
					"LEFT JOIN member m ON w.userid = m.id ".
					"LEFT JOIN member yy ON m.s_id = yy.unit_id ".
					"INNER JOIN unit_manager u ON m.unit_id = u.id ".
					"WHERE  DATE_FORMAT(w.inputtime,'%Y-%m-%d') = DATE_FORMAT('$datetime','%Y-%m-%d') ".
					"AND yy.s_id = '$unit_id' ".
					"ORDER BY u.unit_l ASC,u.unit_y ASC, u.unit_t ASC";
			*/
			$sql = "SELECT w.weather, w.Healthprevention, m.s_name, ".
					"CASE ".
					"WHEN m.s_name = '1团1营1连' THEN '天津'  ".
					"WHEN m.s_name = '1团1营2连' THEN '天津'  ".
					"WHEN m.s_name = '1团1营3连' THEN '塘沽'  ".
					"WHEN m.s_name = '1团1营4连' THEN '沧州'  ".
					"WHEN m.s_name = '1团2营5连' THEN '蓟县'  ".
					"WHEN m.s_name = '1团2营6连' THEN '密云'  ".
					"WHEN m.s_name = '1团2营7连' THEN '廊坊'  ".
					"WHEN m.s_name = '1团3营8连' THEN '平泉'  ".
					"WHEN m.s_name = '1团3营9连' THEN '承德'  ".
					"WHEN m.s_name = '1团3营10连' THEN '滦平'  ".
					"WHEN m.s_name = '1团4营11连' THEN '迁安'  ".
					"WHEN m.s_name = '1团4营12连' THEN '唐山'  ".
					"WHEN m.s_name = '1团4营13连' THEN '丰润'  ".
					"WHEN m.s_name = '1团5营14连' THEN '秦皇岛'  ".
					"WHEN m.s_name = '1团5营15连' THEN '北戴河' ".
					"WHEN m.s_name = '1团5营16连' THEN '青龙' ".
					"END AS local1 ".
					"FROM worktab w  ".
					"LEFT JOIN member m ON w.userid = m.id  ".
					"LEFT JOIN member yy ON m.s_id = yy.unit_id  ".
					"INNER JOIN unit_manager u ON m.unit_id = u.id  ".
					"WHERE DATE_FORMAT(w.inputtime,'%Y-%m-%d') = DATE_FORMAT('$datetime','%Y-%m-%d')  ".
					"AND m.s_name != '1团1营2连' ".
					"AND yy.s_id = '$unit_id' ORDER BY u.unit_l ASC,u.unit_y ASC, u.unit_t ASC";
//			echo $sql;
//			exit();
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
	}
	

?>