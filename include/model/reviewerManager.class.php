<?php
	require_once 'include/common/SqlHelper.class.php';
class reviewerManager{
	
	public $id;
	public $reviewer;
	public $flag;
	
	
	/**
	 * 添加
	 */
	public function addReviewer(){
		
		$sql = "insert into reviewer_manager (reviewer, flag) values ('$this->reviewer','$this->flag')";
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dml($sql);
		return $res;
	}
	
	/**
	 * 删除
	 */
	public function delReviewer($id){
		$sql = "delete from reviewer_manager where id = '$id'";
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dml($sql);
		return $res;
	}
	
	/**
	 * update 
	 */
	public function updateReviewerById($Iid){
		$sql = "update reviewer_manager set reviewer = '$this->reviewer', flag = '$this->flag' where id = '$Iid'";
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dml($sql);
		return $res;
	}
	
	/**
	 * 通过id得到实体类
	 */
	public function getReviewerById($id){
		$sql = "select * from reviewer_manager where id = '$id'";
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dql2($sql);
		return $res;
	}
	
	/**
	 * 得到全部实体类
	 */
	public function getAllReviewer(){
		$sql = "select * from reviewer_manager ORDER BY id ";
		$sqlHelper = new SqlHelper();
		$res = $sqlHelper->execute_dql2($sql);
		return $res;
	}
	
}

?>