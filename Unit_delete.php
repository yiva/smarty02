<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
	//接收表单信息，实现分类的插入 
	require_once 'include/model/unitManager.class.php';
	require_once 'include/common/Tools.class.php';
	
	
	
	$id = $_REQUEST["id"];
	$unitManager = new unitManager();
	$res = $unitManager->delUnitById($id);
	if($res == 1){
		Tools::alert("删除成功!!");
		Tools::jump("UnitController.php?flag=getAllList");
	}else{
		Tools::alert("删除失败!!请重新操作...");
		Tools::jump("UnitController.php?flag=getAllList");
	}
	
	
	