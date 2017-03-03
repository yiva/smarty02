<?php
require_once 'include/common/SqlHelper.class.php';
	class unitManager{
		
		public $id;
		public $unit_t;
		public $unit_y;
		public $unit_l;
		
		
		/**
		 * 添加单元信息
		 */
		public function addUnit($unit_t, $unit_y, $unit_l){
			$sql = "insert into unit_manager (unit_t, unit_y, unit_l) values ('$unit_t','$unit_y','$unit_l')";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			
			return $res;
		}
		
		
		/**
		 * 删除单元信息
		 */
		public function delUnitById($id){
			$sql = "delete from unit_manager where id = '$id'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
		}
		
		/**
		 * 修改单元信息
		 */
		public function updateUnitById($id){
			$sql = "update unit_manager set unit_t = '$this->unit_t', unit_y = '$this->unit_y', unit_l = '$this->unit_l' where id = '$id'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
		}
		
		/**
		 * 查询单条数据
		 * 通过id
		 */
		public function getUnitById($id){
			$sql = "select * from unit_manager where id = '$id'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
			
		}
		
		/**
		 * 查询id
		 */
		public function getIdByUnits($unit_t,$unit_y,$unit_l){
			$sql = "SELECT * FROM unit_manager WHERE unit_t = '$unit_t' AND unit_y = '$unit_y' AND unit_l = '$unit_l'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
			
		}
		
		/**
		 * 得到全部数据
		 */
		public function getAllUnit(){
//			$sql = "select * from unit_manager ORDER BY id ";
			$sql = "SELECT *,CASE unit_y WHEN '998' THEN '警勤连' WHEN '999' THEN '教导队' ELSE unit_y END AS tmp_unit_y FROM unit_manager ORDER BY unit_t ASC,unit_y ASC, unit_l ASC";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			//echo var_dump($res);
			return $res;
		}
	}

?>
