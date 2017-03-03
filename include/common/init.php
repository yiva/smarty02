<?php
	//要查询导航栏信息
	$navs = NavModel::getAll();
	$smarty->assign("navs", $navs);
	//print_r($navs);
	
	//查询书籍分类树
	$tree = CategoryModel::getTree();
	$smarty->assign("tree", $tree);

	//print_r($tree);
	$smarty->assign("config", $config);
	
	
	//将 Sesson中有关登录会员的信息写入模板
	$smarty->assign("member", $_SESSION["member"]);
	
	//插入用于商品搜索的顶级分类
	$top_cats = CategoryModel::getCategories(0);
	$smarty->assign("top_cats", $top_cats);
	//print_r($top_cats);