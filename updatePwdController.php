<?php
	session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/member.class.php';
	require_once 'include/common/Tools.class.php';
	header("Content-type: text/html; charset=utf-8");
	$smarty->assign("member", $_SESSION["member"]);	

	$old = $_POST['oldpwd'];
	$newpwd = $_POST['newpwd'];
	$confirmpwd = $_POST['confirmpwd'];
	
//	echo $old."--".$newpwd."---".$confirmpwd;
	
	$id = $_SESSION['member']['id'];
	$memberManager = new member();	
	$memberTemp = $memberManager->getMemberById($id);
	
//	var_dump($memberTemp);
	$oldPwd = $memberTemp[0]['password'];
	
	if(md5($old) == $oldPwd){
		if($newpwd != $oldpwd){
			if($newpwd == $confirmpwd){
				// 修改密码
				$memberManager->updatePwd(md5($newpwd), $id);
				Tools::alert("密码修改成功！请重新登录！！");
				Tools::jump("logout.php");
			}else{
				Tools::alert("两次输入的新密码不一致！请重新输入！！");
				Tools::jump("updatepwd.php");
			}
		}else{
			Tools::alert("新密码不能和旧密码一致！请重新输入！！");
			Tools::jump("updatepwd.php");
		}
	}else{
		Tools::alert("旧密码输入有误！请核实！！");
		Tools::jump("updatepwd.php"); 
	}
	
?>