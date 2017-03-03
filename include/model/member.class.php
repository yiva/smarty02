<?php
require_once 'include/common/SqlHelper.class.php';
	class member{
		
		public $id;   // 主键
		public $username; // 用户名
		public $password; // 密码
		public $role; 	// 权限
		public $s_id;	// 所属上级
		public $s_name;	// 所属上级名称
		public $unit_id;	// 单位id
		
		
		/**
		 * get member by id
		 */
		public function getMemberById($id){
			$sql = "select * from member where id = '$id'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		/**
		 * get member by username
		 */
		public function getMemberByName($username){
			$sql = "select * from member where username = '$username'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		/**
		 * get all member
		 */
		public function getAllMember(){
//			$sql = "SELECT  m.id,m.username,m.role,m.s_name,m2.s_name AS sj_name FROM member m LEFT JOIN member m2 ON m.s_id = m2.id".
//			" LEFT JOIN unit_manager u ON m.unit_id = u.id ORDER BY u.unit_l ASC,u.unit_y ASC, u.unit_t ASC";
			$sql = "SELECT DISTINCT (m.username) AS A, m.*, yy.s_name AS sj_name FROM member m LEFT JOIN member yy ON m.s_id = yy.unit_id LEFT JOIN unit_manager u ON m.unit_id = u.id".
					"	ORDER BY u.unit_l ASC,u.unit_y ASC, u.unit_t ASC";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dql2($sql);
			return $res;
		}
		
		/**
		 * add  member
		 */
		public function addMember(){
			$sql = "insert into member (username, password, role, s_id, s_name, unit_id) values ('$this->username','$this->password','$this->role','$this->s_id','$this->s_name','$this->unit_id')";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
		}
		
		/**
		 * 修改密码
		 */
		public function updatePwd($newPwd, $id){
			$sql = "update member set password = '$newPwd' where id = '$id'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
		}
		
		/**
		 * 修改  姓名和角色
		 */
		public function updateUserNameAndRole($id, $username1, $role1){
			$sql = "update member set username = '$username1', role = '$role1' where id = '$id'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
		}
		
		/**
		 * 通过id删除
		 */
		public function deleteMemberById($id){
			$sql = "delete from member where id = '$id'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
		}
		
		/**
		 * 重置密码
		 */
		public function resetPwd($id, $pwd){
			$sql = "update member set password = '$pwd' where id = '$id'";
			$sqlHelper = new SqlHelper();
			$res = $sqlHelper->execute_dml($sql);
			return $res;
		}
		
		
	}

?>