<?php
require_once 'include/common/SqlHelper.class.php';
require_once 'include/common/fenyePage.class.php';

class gbgb{
	
	public $id;   // 主键
	public $mdate; 	//输入跟班日期
	public $dept; // 单位
	public $gbzw; // 干部职务
	public $nx;	//内线
	public $wx; // 外线
	public $nxtimelong;  //内线耗时
	public $wxtimelong;  //外线耗时
	public $fxwt;	//发现问题 
	public $remark;	// 备注
	public $yflag; //营级审核标志位  0：未审核  1：已审核
	public $tflag; // 团级审核标志位  0：未审核  1：已审核
	public $submitflag; // 提交标志位 0：未提交 1：已提交
	public $userid;   // 申请人id
	public $inputtime;  // 录入时间
	
	/**
	 * add
	 * Enter description here ...
	 */
	public function addGbgb(){
		$sql = "insert into gbgb (mdate, dept, gbzw, nx, wx,nxtimelong,wxtimelong, fxwt, remark, yflag, tflag, submitflag, userid, inputtime) values ".
		"('$this->mdate','$this->dept','$this->gbzw','$this->nx','$this->wx','$this->nxtimelong','$this->wxtimelong','$this->fxwt','$this->remark','$this->yflag','$this->tflag','$this->submitflag','$this->userid','$this->inputtime')";
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dml($sql);
		return $res;
	}
	
	/**
	 * delete  by id
	 */
	public function delGbgbById($id){
		$sql = "delete from gbgb where id = '$id'";
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dml($sql);
		return $res;
	}
	
	/**
	 * update by id
	 */
	public function updateGbgbById($id){
		$sql = "update gbgb set mdate = '$this->mdate', dept = '$this->dept', gbzw = '$this->gbzw',".
		" nx = '$this->nx', wx = '$this->wx',nxtimelong='$this->nxtimelong',wxtimelong='$this->wxtimelong', fxwt='$this->fxwt', remark = '$this->remark', yflag = '$this->yflag', tflag = '$this->tflag', submitflag = '$this->submitflag', userid = '$this->userid', inputtime = '$this->inputtime' where id = '$id'";
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dml($sql);
		return $res;
	}
	
	/**
	 * get gbgb by id
	 */
	public function getGbgbById($id){
		$sql = "select * from gbgb where id = '$id'";
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dql2($sql);
		return $res;
	}
	
	/**
	 * get all gbgb
	 */
	public function getAllGbgb(){
//		$sql = "select * from gbgb";
		$sql = "SELECT * FROM gbgb ORDER BY mdate DESC";
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
			
//			$sql1 = "select * from gbgb WHERE userid = '$userid' ORDER BY mdate DESC limit ".
//			($fenyePage->pageNow-1)*$fenyePage->pageSize.
//			",".$fenyePage->pageSize;

			// 对历史数据取消修改删除的权限
			$sql1 = "select *, CASE  WHEN DATE_FORMAT(mdate,'%Y-%m-%d') = DATE_FORMAT(NOW(),'%Y-%m-%d') THEN mdate ELSE '0' END AS tmp_mdate ".
			" from gbgb WHERE userid = '$userid' ORDER BY mdate DESC limit ".
			($fenyePage->pageNow-1)*$fenyePage->pageSize.
			",".$fenyePage->pageSize;
			
			$sql2 = "select count(*) from gbgb WHERE userid = '$userid'";
			
			$sqlHelper->execute_dql_fenye($sql1, $sql2, $fenyePage);
			
			$sqlHelper->my_close();
		}
	
	/**
	 * 得到指定用户的全部登记信息
	 * get all gbgb by userid
	 */
	public function getAllGbgbBySid($userId, $datetime){
		//$sql = "select * from gbgb where  userid = '$userId' ORDER BY mdate DESC";
		$sql = "select *, CASE  WHEN DATE_FORMAT(mdate,'%Y-%m-%d') = DATE_FORMAT(NOW(),'%Y-%m-%d') THEN mdate ELSE '0' END AS tmp_mdate ".
		" from gbgb where DATE_FORMAT(inputtime,'%Y-%m-%d') = DATE_FORMAT('$datetime','%Y-%m-%d') AND userid = '$userId' ORDER BY mdate DESC";
//		echo $sql;
//		exit();
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dql2($sql);
		return $res;
	}
	
	/**
		 * 通过营id得到所属连的用车情况
		 */
		public function getLianAllByYid($yid){
			$sql="SELECT g.* FROM member m INNER JOIN gbgb g ON m.id = g.userid WHERE m.s_id = '$yid' ORDER BY g.inputtime DESC";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		/**
		 * 通过团id得到所属连的用车情况
		 */
		public function getYingAllByTid($tid, $datetime){
			$sql=
			" SELECT g.*,CASE  WHEN DATE_FORMAT(mdate,'%Y-%m-%d') = DATE_FORMAT(NOW(),'%Y-%m-%d') THEN mdate ELSE '0' END AS tmp_mdate ".
			"FROM gbgb g LEFT JOIN member m ON g.userid = m.id LEFT JOIN member yy ON m.s_id = yy.unit_id INNER JOIN unit_manager u ON u.id = m.unit_id".
			" WHERE (yy.s_id = (SELECT unit_id FROM member WHERE id = '$tid') OR yy.id = '$tid') ".
			"AND DATE_FORMAT(inputtime,'%Y-%m-%d') = DATE_FORMAT('$datetime','%Y-%m-%d')".
			" ORDER BY u.unit_t ASC,u.unit_y ASC, u.unit_l ASC, g.gbzw DESC";

			//$sql = "SET @rn=0; "; 
//			$sql = "SELECT g.*,CASE WHEN DATE_FORMAT(mdate,'%Y-%m-%d') = DATE_FORMAT(NOW(),'%Y-%m-%d') THEN mdate ELSE '0' END AS tmp_mdate ". 
//					"FROM gbgb g LEFT JOIN member m ON g.userid = m.id LEFT JOIN member yy ON m.s_id = yy.unit_id INNER JOIN unit_manager u ON u.id = m.unit_id  ".
//					"WHERE (yy.s_id = (SELECT unit_id FROM member WHERE id = '$tid') OR yy.id = '$tid') ". 
//					"AND DATE_FORMAT(inputtime,'%Y-%m-%d') = DATE_FORMAT('$datetime','%Y-%m-%d') ". 
//					"ORDER BY u.unit_t ASC,u.unit_y ASC, u.unit_l ASC, g.gbzw DESC";
//			echo $sql;
//			exit();
			$sqlHelper = new SqlHelper();
			//$res = $sqlHelper->execute_dql2($sql);
			$res1 = $sqlHelper->execute_dql2($sql);
			return $res1;
		}
		
/**
		 * 分页
		 * Enter description here ...
		 * @param unknown_type $fenyePage
		 */
		public function getYingAllByTidFenyePage($fenyePage, $tid){
			// 创建一个SqlHelper对象实例
			$sqlHelper = new SqlHelper();
			
			$sql1="SELECT g.*, CASE  WHEN DATE_FORMAT(g.mdate,'%Y-%m-%d') = DATE_FORMAT(NOW(),'%Y-%m-%d') THEN g.mdate ELSE '0' END AS tmp_mdate ".
			" FROM gbgb g LEFT JOIN member m ON g.userid = m.id LEFT JOIN member yy ON m.s_id = yy.unit_id INNER JOIN unit_manager u ON u.id = m.unit_id".
			" WHERE yy.s_id = (SELECT unit_id FROM member WHERE id = '$tid') OR yy.id = '$tid'".
			" ORDER BY g.mdate DESC limit ".
			($fenyePage->pageNow-1)*$fenyePage->pageSize.
			",".$fenyePage->pageSize;
			
			$sql2="SELECT count(*) FROM gbgb g LEFT JOIN member m ON g.userid = m.id LEFT JOIN member yy ON m.s_id = yy.unit_id INNER JOIN unit_manager u ON u.id = m.unit_id".
			" WHERE yy.s_id = (SELECT unit_id FROM member WHERE id = '$tid') OR yy.id = '$tid'".
			" ORDER BY g.mdate DESC ";
			
			$sqlHelper->execute_dql_fenye($sql1, $sql2, $fenyePage);
			
			$sqlHelper->my_close();
		}
		
		/**
		 * 通过unitid得到当天干部跟班情况
		 */
		public function getGbgbByUnitId($unitId, $datetime){
			$sql = "SELECT g.* FROM gbgb g ".
					"LEFT JOIN member m ON g.userid = m.id ".
					"LEFT JOIN member yy ON m.s_id = yy.unit_id ".
					"INNER JOIN unit_manager u ON m.unit_id = u.id ".
					"WHERE  DATE_FORMAT(g.inputtime,'%Y-%m-%d') = DATE_FORMAT('$datetime','%Y-%m-%d') ".
					"AND yy.s_id = '$unitId' ".
					"ORDER BY u.unit_l ASC,u.unit_y ASC, u.unit_t ASC, g.gbzw DESC";
//			echo $sql;
//			exit();
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
			
		}
		
		/**
		 * 判断当天是否有重复 添加的信息
		 */
		public function chongfuData($shenfen, $id){
			$sql = "SELECT * FROM gbgb g WHERE g.gbzw = '$shenfen'" . 
					"AND DATE_FORMAT(g.mdate,'%Y-%m-%d') = DATE_FORMAT(NOW(),'%Y-%m-%d') AND g.userid = '$id'";
			
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		/**
		 * 统计一天的跟班时间 并按连的顺序排序
		 */
		public function getOneDayTimeAndOrderLian($datetime){
			$sql = "SELECT *, SUM(nxtimelong)+SUM(wxtimelong) as alltime FROM gbgb g ".
					"LEFT JOIN member m ON g.userid = m.id ".
					"LEFT JOIN unit_manager u ON m.unit_id = u.id ".
					"WHERE DATE_FORMAT(g.mdate,'%Y-%m-%d') = DATE_FORMAT('$datetime','%Y-%m-%d') ".
					"GROUP BY g.dept, g.gbzw  ".
					"ORDER BY u.unit_t ASC,u.unit_y ASC, u.unit_l ASC, g.gbzw DESC";
//			echo $sql;
//			exit();
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		/**
		 * 连级统计一周跟班时间
		 */
		public function getOneWeekByUserId($userid, $datetimeStart, $datetimeEnd){
			$sql = "SELECT g.dept,g.gbzw,SUM(nxtimelong)+SUM(wxtimelong) AS alltime,ROUND((SUM(nxtimelong)+SUM(wxtimelong))/18,2) AS timeLv ".
					" FROM gbgb g ".
					"WHERE (g.mdate >= '$datetimeStart' AND g.mdate <= '$datetimeEnd') AND g.userid='$userid' AND g.remark != 'h' ".
					"GROUP BY g.dept, g.gbzw ".
					"ORDER BY g.gbzw DESC";
//			echo $sql;
//			exit();
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		
		/**
		 * 统计一周的跟班时间 并按连的顺序排序
		 */
		public function getOneWeekTimeAndOrderAlltime($datetimeStart, $datetimeEnd){
			$sql = "SELECT g.mdate, CONCAT(u.unit_l,'连', g.gbzw) AS dept2, g.inputtime, g.gbzw, SUM(nxtimelong) AS neixian ,SUM(wxtimelong) AS waixian, ".
					"SUM(nxtimelong)+SUM(wxtimelong) AS alltime, ROUND((SUM(nxtimelong)+SUM(wxtimelong))/18*100,2)  AS timeLv ". 
					"FROM gbgb g LEFT JOIN member m ON g.userid = m.id  ".
					"LEFT JOIN unit_manager u ON m.unit_id = u.id  ".
					"WHERE ".
//					"g.mdate >= '$datetimeStart' AND g.mdate <= '$datetimeEnd' ".
					"(g.mdate >= '$datetimeStart' AND g.mdate <= '$datetimeEnd') AND g.remark != 'h' ".
					"GROUP BY g.dept, g.gbzw  ".
					"ORDER BY alltime DESC, u.unit_t ASC,u.unit_y ASC, u.unit_l ASC";
//			echo $sql;
//			exit();
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		/**
		 * 得到没有出勤值班的人员
		 */
		public function getNoZhiban($resArray){
			$zhiwu=array("1连连长","1连指导员","2连连长","2连指导员","3连连长","3连指导员","4连连长","4连指导员","5连连长","5连指导员","6连连长","6连指导员",
			"7连连长","7连指导员","8连连长","8连指导员","9连连长","9连指导员","10连连长","10连指导员","11连连长","11连指导员","12连连长","12连指导员",
			"13连连长","13连指导员","14连连长","14连指导员","15连连长","15连指导员","16连连长","16连指导员");
			
			$res = array();
			
			$flagTemp = false;
			for($i=0; $i<count($zhiwu); $i++){
				for($j=0; $j<count($resArray); $j++){
					if($zhiwu[$i] == $resArray[$j]['dept2']){
						$flagTemp = true;
						break;
					}
				}
				if(!$flagTemp){
					$res1 = array();
					array_push($res1, $zhiwu[$i]);
					array_push($res, $res1);
				}
				$flagTemp = false;
			}
//			var_dump($res);
			return $res;
		}
		
		/**
		 * 谎报处理
		 */
		public function huangbaoControl($hbType, $id){
			$sql = "UPDATE gbgb g SET  g.remark = '$hbType' WHERE g.id = '$id'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
		}
		
		
}

?>