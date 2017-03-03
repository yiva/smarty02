<?php
	session_start();
	require_once 'smarty_config.php';
	require_once 'include/model/member.class.php';
	require_once 'include/model/unitManager.class.php';
	require_once 'include/common/Tools.class.php';
	$smarty->assign("member", $_SESSION["member"]);

	$flag = $_REQUEST["flag"];

	$memberManager = new member();
	
	if($flag == "login"){  // 登陆
		
		$username = $_POST["username"];
		$pwd = $_POST["pwd"];
		$memberTemp = $memberManager->getMemberByName($username);
		
		if($memberTemp[0]['password'] == md5($pwd)){  // 登陆成功
			//Tools::alert("添加成功!!");
			// 将用户信息放到session中
			$_SESSION["member"] = $memberTemp[0];
			$smarty->assign("member", $_SESSION["member"]);
//			$smarty->display("main.tpl");
			
			// 1:团行政， 2：团通信； 5：营； 6：警勤连； 7：教导队； 9：连； 99：管理员
			if($_SESSION['member']['role'] == 1){
				Tools::jump("WorkController.php?flag=t_getHuizong");
			}elseif ($_SESSION['member']['role'] == 2){
				Tools::jump("TxzqController.php?flag=t_getHuizong");
			}elseif ($_SESSION['member']['role'] == 5){
				Tools::jump("WorkController.php?flag=todaydata");
			}elseif ($_SESSION['member']['role'] == 6){
				Tools::jump("WorkController.php?flag=todaydata");
			}elseif ($_SESSION['member']['role'] == 7){
				Tools::jump("WorkController.php?flag=todaydata");
			}elseif ($_SESSION['member']['role'] == 9){
				Tools::jump("WorkController.php?flag=todaydata");
			}elseif ($_SESSION['member']['role'] == 99){
				Tools::jump("MemberController.php?flag=getAllList");
			}
		}else{
			// 登陆失败
			Tools::alert("登陆失败!!用户名或密码输入有误，请重新操作...");
			Tools::back();
		}
		
	}elseif ($flag == "getAllList"){
		$res = $memberManager->getAllMember();
		$smarty->assign("memberTemp", $res);
		$smarty->assign("path2", "用户管理");
		$smarty->assign("cz", "列表");
		$smarty->display("MemberList.tpl");
	
	}elseif ($flag == "add"){
		$username = $_POST['username'];
		$role = $_POST['role'];
		$unitid = $_POST['unit'];
		
		$memberAdd = new member();
		$memberAdd->username = $username;
		$memberAdd->password = md5("123");
		$memberAdd->role = $role;
		// 得到上级id
		$unitManager = new unitManager();
		$unitRes = $unitManager->getUnitById($unitid);
		if($unitRes[0]['unit_l'] != 0){
			// 以$unitRes[0]['unit_t']，$unitRes[0]['unit_y']，0 查询得到id 
			$resID = $unitManager->getIdByUnits($unitRes[0]['unit_t'], $unitRes[0]['unit_y'], 0);
			$memberAdd->s_id = $resID[0]['id'];
			$memberAdd->s_name = $unitRes[0]['unit_t']."团".$unitRes[0]['unit_y']."营".$unitRes[0]['unit_l']."连";
		}else{ // 营级以上
			if($unitRes[0]['unit_y'] != 0){
				// 以$unitRes[0]['unit_t']，0，0 查询得到id 
				$resID = $unitManager->getIdByUnits($unitRes[0]['unit_t'], 0, 0);
				$memberAdd->s_id = $resID[0]['id'];  // 上级id
				if ($unitRes[0]['unit_y'] == 999){
					$memberAdd->role = 7;
					$memberAdd->s_name = $unitRes[0]['unit_t']."团教导队";
				}elseif ($unitRes[0]['unit_y'] == 998){
					$memberAdd->role = 6;
					$memberAdd->s_name = $unitRes[0]['unit_t']."团警勤连";
				}else{
					$memberAdd->s_name = $unitRes[0]['unit_t']."团".$unitRes[0]['unit_y']."营";
				}
				
			}else{
				$memberAdd->s_id = "";
				$memberAdd->s_name = $unitRes[0]['unit_t']."团";
			}
		}
		$memberAdd->unit_id = $unitid;
		$resAdd = $memberAdd->addMember();
		if ($resAdd == 1){
			Tools::alert("添加成功!!");
			Tools::jump("MemberController.php?flag=getAllList");
		}else{
			Tools::alert("添加失败!!请重新操作...");
			Tools::jump("MemberController.php?flag=getAllList");
		}
	
	}elseif ($flag == "update"){
		$id = $_POST['id'];
		$username = $_POST['username'];
		$role = $_POST['role'];
//		$unitid = $_POST['unit'];
		
		$memberUpdate = new member();

		$resUpdate = $memberUpdate->updateUserNameAndRole($id, $username, $role);
		
		if ($resUpdate == 1){
			Tools::alert("修改成功!!");
			Tools::jump("MemberController.php?flag=getAllList");
		}else{
			Tools::alert("修改失败!!请重新操作...");
			Tools::jump("MemberController.php?flag=getAllList");
		}
	
	}elseif ($flag == "resetpwd"){
		$id = $_REQUEST['id'];
		$res = $memberManager->resetPwd($id, md5("123"));
		if($res == 1){
			Tools::alert("修改成功!!");
		}else{
			Tools::alert("修改失败!!请重新操作...");
		}
		Tools::jump("MemberController.php?flag=getAllList");
	}
	
?>