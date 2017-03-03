<?php /* Smarty version 2.6.18, created on 2015-09-03 16:32:43
         compiled from MemberList.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>第三通信团网上交班系统</title>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "js.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

</head>

<body>
	<div id="navigation">
		<!--header-->
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
	<div class="container-fluid" id="content">
    	<!-- 左边栏 -->
		<div id="left">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			
		</div>
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
					
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="more-files.html"><?php echo $this->_tpl_vars['path2']; ?>
</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="more-blank.html"><?php echo $this->_tpl_vars['cz']; ?>
</a>
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
													<?php echo $this->_tpl_vars['path2']; ?>
记录列表
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
													 <?php $_from = ($this->_tpl_vars['memberTemp']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['memberTemp']):
?>
														<tr>
															<td><?php echo $this->_tpl_vars['memberTemp']['username']; ?>
</td>
														    <?php if ($this->_tpl_vars['memberTemp']['role'] == 99): ?>
														    <td>管理员</td>
														    <?php elseif ($this->_tpl_vars['memberTemp']['role'] == 1): ?>
														    <td>团行政 </td>
														    <?php elseif ($this->_tpl_vars['memberTemp']['role'] == 2): ?>
														    <td>团通信</td>
														    <?php elseif ($this->_tpl_vars['memberTemp']['role'] == 5): ?>
														    <td>营值班员</td>
														    <?php elseif ($this->_tpl_vars['memberTemp']['role'] == 9): ?>
														    <td>连值班员</td>
														    <?php elseif ($this->_tpl_vars['memberTemp']['role'] == 6): ?>
														    <td>警勤连</td>
														    <?php elseif ($this->_tpl_vars['memberTemp']['role'] == 7): ?>
														    <td>教导队</td>
														    <?php endif; ?>
														    <td><?php echo $this->_tpl_vars['memberTemp']['s_name']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['memberTemp']['sj_name']; ?>
</td>
														    <td>
														    	<a href="member_update_from.php?id=<?php echo $this->_tpl_vars['memberTemp']['id']; ?>
">修改</a>|
														    	<a href="member_delete.php?id=<?php echo $this->_tpl_vars['memberTemp']['id']; ?>
">删除</a>|
														    	<a href="MemberController.php?flag=resetpwd&id=<?php echo $this->_tpl_vars['memberTemp']['id']; ?>
">密码重置</a>
														    </td>
														    	
														</tr>
													<?php endforeach; endif; unset($_from); ?>
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
