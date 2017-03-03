<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>第三通信团网上交班系统</title>
	--{include file="js.tpl"}--

</head>

<body>
	<div id="navigation">
		<!--header-->
		--{include file="header.tpl"}--
	</div>
	<div class="container-fluid" id="content">
    	<!-- 左边栏 -->
		<div id="left">
			--{include file="left.tpl"}--
			
		</div>
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="more-files.html">--{$path2}--</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="more-blank.html">--{$cz}--</a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#"><i class="icon-remove"></i></a>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-content">
								<a href="Member_add_from.php">添加用户</a>
								<!-- ******************************* -->
								<div class="row-fluid">
									<div class="span12">
										<div class="box box-color box-bordered">
											<div class="box-title">
												<h3>
													<i class="icon-table"></i>
													--{$path2}--记录列表
												</h3>
											</div>
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>用户名</th>
														    <th>权限</th>
														    <th>单位</th>
														    <th>所属上级</th>
														    <th>操作</th>
														</tr>
													</thead>
													<tbody>
													 --{foreach from="$memberTemp" item="memberTemp"}--
														<tr>
															<td>--{$memberTemp.username}--</td>
														    --{if $memberTemp.role == 99}--
														    <td>管理员</td>
														    --{elseif $memberTemp.role == 1}--
														    <td>团行政 </td>
														    --{elseif $memberTemp.role == 2}--
														    <td>团通信</td>
														    --{elseif $memberTemp.role == 5}--
														    <td>营值班员</td>
														    --{elseif $memberTemp.role == 9}--
														    <td>连值班员</td>
														    --{elseif $memberTemp.role == 6}--
														    <td>警勤连</td>
														    --{elseif $memberTemp.role == 7}--
														    <td>教导队</td>
														    --{/if}--
														    <td>--{$memberTemp.s_name}--</td>
														    <td>--{$memberTemp.sj_name}--</td>
														    <td>
														    	<a href="member_update_from.php?id=--{$memberTemp.id}--">修改</a>|
														    	<a href="member_delete.php?id=--{$memberTemp.id}--">删除</a>|
														    	<a href="MemberController.php?flag=resetpwd&id=--{$memberTemp.id}--">密码重置</a>
														    </td>
														    	
														</tr>
													--{/foreach}--
													</tbody>
												</table>
												<div class="table-pagination">
													<a href="#" class='disabled'>First</a>
													<a href="#" class='disabled'>Previous</a>
													<span>
														<a href="#" class='active'>1</a>
														<a href="#">2</a>
														<a href="#">3</a>
													</span>
													<a href="#">Next</a>
													<a href="#">Last</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- ******************************* -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
		
	</body>

	</html>

