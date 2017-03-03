<?php
require_once 'include/common/SqlHelper.class.php';

class oneweek{

	public $id; 
	public $content; 
	public $remarks; 
	public $userid; 
	public $inputtime; 
	public $dept;
	
	/**
	 * add
	 * Enter description here ...
	 */
	public function addOneweek(){
		$sql = "insert into oneweek (content,remarks, userid, inputtime, dept) VALUES ('$this->content','$this->remarks','$this->userid','$this->inputtime','$this->dept')";
		
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dml($sql);
		return $res;
	}
	
	/**
	 * delete by id
	 */
	public function deleteOneweekById($id){
		$sql = "DELETE FROM oneweek WHERE id = '$id'";
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dml($sql);
		return $res;
	}
	
	/**
	 * update by id
	 */
	public function updateRemarkById($id, $remarks){
		$sql = "update oneweek set remarks = '$remarks' where id = '$id'";
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dml($sql);
		return $res;
	}
	
	/**
	 * 通过id得到实体数据 
	 */
	public function getOneweekById($id){
		$sql = "SELECT * FROM oneweek WHERE id = '$id'";
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dql2($sql);
		return $res;
	}
	
	
	/**
	 * 得到近期的数据
	 */
	public function getOneweekJinqi(){
		$sql = "SELECT * FROM oneweek o ORDER BY o.inputtime DESC LIMIT 0,1";
		
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dql2($sql);
		return $res;
	}
	
	/**
	 * 得到本周汇总的数据
	 */
	public function getNowOneweek($datetime){
		$sql = "SELECT * FROM oneweek o WHERE DATE_FORMAT(o.inputtime,'%Y-%m-%d') = DATE_FORMAT('$datetime','%Y-%m-%d')";
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dql2($sql);
		return $res;
	}
}