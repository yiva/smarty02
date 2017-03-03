<?php /* Smarty version 2.6.18, created on 2015-09-03 16:32:55
         compiled from UnitList.tpl */ ?>
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
						<h1>单位管理</h1>
					</div>
					
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a>主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a>单位管理</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a><?php echo $this->_tpl_vars['cz']; ?>
</a>
						</li>
					</ul>
					<div class="close-bread">
						<a><i class="icon-remove"></i></a>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-content">
								<a href="Unit_add_from.php">添加</a>
								<!-- ******************************* -->
								<div class="row-fluid">
									<div class="span12">
										<div class="box box-color box-bordered">
											<div class="box-title">
												<h3>
													<i class="icon-table"></i>
													单位名称
												</h3>
											</div>
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>单位名称</th>
    														<th>操作</th>
														</tr>
													</thead>
													<tbody>
													 <?php $_from = ($this->_tpl_vars['resList']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['unit']):
?>
														<tr>
														<?php if ($this->_tpl_vars['unit']['unit_y'] == 0): ?>
															<td><?php echo $this->_tpl_vars['unit']['unit_t']; ?>
团</td>
														<?php elseif ($this->_tpl_vars['unit']['unit_l'] == 0): ?>
														<td><?php echo $this->_tpl_vars['unit']['unit_t']; ?>
团
															<?php if ($this->_tpl_vars['unit']['unit_y'] == 999 || $this->_tpl_vars['unit']['unit_y'] == 998): ?>
																<?php echo $this->_tpl_vars['unit']['tmp_unit_y']; ?>
</td>
															<?php else: ?>
															<?php echo $this->_tpl_vars['unit']['unit_y']; ?>
营</td>
															<?php endif; ?>
														<?php else: ?>
															<td><?php echo $this->_tpl_vars['unit']['unit_t']; ?>
团<?php echo $this->_tpl_vars['unit']['unit_y']; ?>
营<?php echo $this->_tpl_vars['unit']['unit_l']; ?>
连</td>
														<?php endif; ?>
    														<td>
	    														<!-- <a href="Unit_update_from.php?id=<?php echo $this->_tpl_vars['unit']['id']; ?>
">修改</a>| -->
	    														<a href="Unit_delete.php?id=<?php echo $this->_tpl_vars['unit']['id']; ?>
">删除</a>
    														</td>
														</tr>
													<?php endforeach; endif; unset($_from); ?>
													</tbody>
												</table>
												<!--  
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
												</div>-->
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
