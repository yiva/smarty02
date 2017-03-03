<?php 
	session_start();
	require_once 'include/common/Tools.class.php';
	unset($_SESSION['member']);
//	session_destroy();
//	var_dump($_SESSION['member']) ;
	Tools::jump("index.php");
?>