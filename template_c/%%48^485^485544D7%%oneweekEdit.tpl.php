<?php /* Smarty version 2.6.18, created on 2014-11-16 16:57:14
         compiled from oneweekEdit.tpl */ ?>
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
		<?php if ($this->_tpl_vars['flag'] == 'oneWeektime'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
					<!-- 
					<div class="pull-right">
						<form class="form-horizontal" action="GbgbController.php?flag=oneWeektime_search" method="post">
							<div class="control-group">
								<label for="textfield" class="control-label"></label>
								<div class="controls">
									<div class="input-append input-prepend">
										<span class="add-on"><i class="icon-search"></i></span>
										<input type="text" name="datetime" placeholder="搜索" class='input-medium datepick'>
										<button class="btn" type="submit">搜索</button>
									</div>
								</div>
							</div>
						</form>
					</div> -->
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a>主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a><?php echo $this->_tpl_vars['path2']; ?>
</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a><?php echo $this->_tpl_vars['cz']; ?>
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
								<!-- ******************************* -->
								<div class="row-fluid">
									<div class="span12">
										<div class="box box-color box-bordered">
											<div class="box-title">
												<h3>
													<i class="icon-table"></i>
													<?php echo $this->_tpl_vars['path2']; ?>
列表
												</h3>
												<div class="actions"><h3>时间：<?php echo $this->_tpl_vars['datetimeStart']; ?>
 至 <?php echo $this->_tpl_vars['datetimeEnd']; ?>
</h3></div>
											</div>
											<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-horizontal form-bordered'>
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>排名</th>
															<th>单位</th>
															<th>时间（小时）</th>
															<th>跟班完成率</th>
															<th>备注</th>
														</tr>
													</thead>
													<tbody>
													 <?php $_from = ($this->_tpl_vars['resWeek']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Week']):
?>
														<tr>
															<td><?php echo $this->_tpl_vars['Week'][0]; ?>
</td>
														    <td><?php echo $this->_tpl_vars['Week']['dept2']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['Week']['alltime']; ?>
（小时）</td>
														    <td><?php echo $this->_tpl_vars['Week']['timeLv']; ?>
%</td>
														    <td>
														    	<input type="text" name="remark<?php echo $this->_tpl_vars['Week'][0]; ?>
" placeholder="无"  />
														    </td>
														</tr>
													<?php endforeach; endif; unset($_from); ?>
													 <?php $_from = ($this->_tpl_vars['resNO']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['WeekNO']):
?>
														<tr>
															<td></td>
														    <td><?php echo $this->_tpl_vars['WeekNO'][0]; ?>
</td>
														    <td>0（小时）</td>
														    <td>0%</td>
														    <td>
														    	<input type="text" name="remark<?php echo $this->_tpl_vars['Week'][0]+$this->_tpl_vars['WeekNO'][1]; ?>
" placeholder="无"  />
														    </td>
														</tr>
													<?php endforeach; endif; unset($_from); ?>
														<tr>
															<td>汇总：</td>
															<td colspan="4">
																<textarea name="remark_hz" id="remark_hz" rows="5" class="input-block-level" placeholder="无" ></textarea>
															</td>
														</tr>
														<tr>
															<td  colspan="5">
																<div class="form-actions">
																	<button type="submit" class="btn btn-primary"><?php echo $this->_tpl_vars['button']; ?>
</button>
																	<!-- <button type="button" class="btn">取消</button> -->
																</div>
															</td>
														</tr>
													</tbody>
													
												</table>
											</div>
											
											</form>
										</div>
									</div>
								</div>
								<!-- ******************************* -->
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php elseif ($this->_tpl_vars['flag'] == 'updateoneWeektime'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
					<!-- 
					<div class="pull-right">
						<form class="form-horizontal" action="GbgbController.php?flag=oneWeektime_search" method="post">
							<div class="control-group">
								<label for="textfield" class="control-label"></label>
								<div class="controls">
									<div class="input-append input-prepend">
										<span class="add-on"><i class="icon-search"></i></span>
										<input type="text" name="datetime" placeholder="搜索" class='input-medium datepick'>
										<button class="btn" type="submit">搜索</button>
									</div>
								</div>
							</div>
						</form>
					</div> -->
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a>主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a><?php echo $this->_tpl_vars['path2']; ?>
</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a><?php echo $this->_tpl_vars['cz']; ?>
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
								<!-- ******************************* -->
								<div class="row-fluid">
									<div class="span12">
										<div class="box box-color box-bordered">
											<div class="box-title">
												<h3>
													<i class="icon-table"></i>
													修改
												</h3>
												<div class="actions"><h3>时间：<?php echo $this->_tpl_vars['datetimeStart']; ?>
 至 <?php echo $this->_tpl_vars['datetimeEnd']; ?>
</h3></div>
											</div>
											<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-horizontal form-bordered'>
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>排名</th>
															<th>单位</th>
															<th>时间（小时）</th>
															<th>跟班完成率</th>
															<th>备注</th>
														</tr>
													</thead>
													<tbody>
													 <?php $_from = ($this->_tpl_vars['content']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['Week']):
?>
														<tr>
															<td><?php echo $this->_tpl_vars['Week'][0]; ?>
</td>
														    <td><?php echo $this->_tpl_vars['Week'][1]; ?>
</td>
														    <td><?php echo $this->_tpl_vars['Week'][2]; ?>
</td>
														    <td><?php echo $this->_tpl_vars['Week'][3]; ?>
%</td>
														    <td>
														    	<input type="text" name="remark<?php echo $this->_tpl_vars['Week'][0]; ?>
" value="<?php echo $this->_tpl_vars['Week'][4]; ?>
" placeholder="无"  />
														    </td>
														</tr>
													<?php endforeach; endif; unset($_from); ?>
														<tr>
															<td>汇总：</td>
															<td colspan="4">
																<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
																<textarea name="remark_hz" id="remark_hz" rows="5" class="input-block-level" placeholder="无" ><?php echo $this->_tpl_vars['huizongRemarks']; ?>
</textarea>
															</td>
														</tr>
														<tr>
															<td  colspan="5">
																<div class="form-actions">
																	<button type="submit" class="btn btn-primary"><?php echo $this->_tpl_vars['button']; ?>
</button>
																	<!-- <button type="button" class="btn">取消</button> -->
																</div>
															</td>
														</tr>
													</tbody>
													
												</table>
											</div>
											
											</form>
										</div>
									</div>
								</div>
								<!-- ******************************* -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
    </div>
		
	</body>

	</html>
