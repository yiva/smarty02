<?php /* Smarty version 2.6.18, created on 2014-11-11 09:50:29
         compiled from VehicleList.tpl */ ?>
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
		<?php if ($this->_tpl_vars['flag'] == 'normal'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="VehicleController.php?flag=l_search" method="post">
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
					</div>
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
								<a href="Vehicle_add_from.php">添加</a>
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
												
												<div class="actions"><h3>时间：<?php echo $this->_tpl_vars['date']; ?>
</h3></div>
											</div>
											
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>单位</th>
															<th>请示时间</th>
														    <th>任务</th>
														    <th>起止点及距离</th>
														    <th>车型及车号</th>
														    
														    <th>运行时间</th>
														    <th>驾驶员</th>
														    <th>押车干部</th>
														    <th>批准人</th>
														    <th>操作</th>
														</tr>
													</thead>
													<tbody>
													 <?php $_from = ($this->_tpl_vars['resList']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vehicle']):
?>
														 <tr>
														 	<td><?php echo $this->_tpl_vars['vehicle']['unit']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['plasetime']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['task']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['start']; ?>
<strong>至</strong><?php echo $this->_tpl_vars['vehicle']['stop']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['vehicle']['distance']; ?>
<strong>KM</strong></td>
														    <td><?php echo $this->_tpl_vars['vehicle']['vehiclemo']; ?>
</td>
														    
														    <td><?php echo $this->_tpl_vars['vehicle']['runtime']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['driver']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['supercarg']; ?>
</td>
														    <?php if ($this->_tpl_vars['vehicle']['yflag'] == 0 & $this->_tpl_vars['vehicle']['tflag'] == 0): ?>
														    <td><font color="red">未审核</font></td>
														    <td><a href="Vehicle_update_from.php?id=<?php echo $this->_tpl_vars['vehicle']['id']; ?>
">修改</a>|<a href="Vehicle_delete.php?id=<?php echo $this->_tpl_vars['vehicle']['id']; ?>
">删除</a></td>
														    <?php else: ?>
														    <td><?php echo $this->_tpl_vars['vehicle']['ratifier']; ?>
</td>
														    <td><font color="red">信息已审核</font></td>
														    <?php endif; ?>
														</tr>
													<?php endforeach; endif; unset($_from); ?>
													</tbody>
												</table>
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
		<?php elseif ($this->_tpl_vars['flag'] == 'fenye'): ?>
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
								<a href="Vehicle_add_from.php">添加</a>
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
															<th>请示时间</th>
														    <th>任务</th>
														    <th>单位</th>
														    <th>车型及车号</th>
														    <th>起止点及距离</th>
														    <th>运行时间</th>
														    <th>驾驶员</th>
														    <th>押车干部</th>
														    <th>批准人</th>
														    <th>操作</th>
														</tr>
													</thead>
													<tbody>
													 <?php $_from = ($this->_tpl_vars['resList']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vehicle']):
?>
														 <tr>
														    <td><?php echo $this->_tpl_vars['vehicle']['plasetime']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['task']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['unit']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['vehiclemo']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['startstopdistance']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['runtime']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['driver']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['supercarg']; ?>
</td>
														    <?php if ($this->_tpl_vars['vehicle']['yflag'] == 0 & $this->_tpl_vars['vehicle']['tflag'] == 0): ?>
														    <td><font color="red">未审核</font></td>
														    <td><a href="Vehicle_update_from.php?id=<?php echo $this->_tpl_vars['vehicle']['id']; ?>
">修改</a>|<a href="Vehicle_delete.php?id=<?php echo $this->_tpl_vars['vehicle']['id']; ?>
">删除</a></td>
														    <?php else: ?>
														    <td><?php echo $this->_tpl_vars['vehicle']['ratifier']; ?>
</td>
														    <td><font color="red">该信息已通过上级审核，不可修改</font></td>
														    <?php endif; ?>
														</tr>
													<?php endforeach; endif; unset($_from); ?>
													</tbody>
												</table>
												<div class="table-pagination">
													<a href="<?php echo $this->_tpl_vars['shouye1']; ?>
">首页</a>
													<?php if ($this->_tpl_vars['sahngyiye1'] == '0'): ?>
													<a href="#" class='disabled'>上一页</a>
													<?php else: ?>
													<a href="<?php echo $this->_tpl_vars['sahngyiye1']; ?>
">上一页</a>
													<?php endif; ?>
													<?php if ($this->_tpl_vars['xiayiye1'] == '0'): ?>
													<a href="#" class='disabled'>下一页</a>
													<?php else: ?>
													<a href="<?php echo $this->_tpl_vars['xiayiye1']; ?>
">下一页</a>
													<?php endif; ?>
													<a href="<?php echo $this->_tpl_vars['weiye1']; ?>
">尾页</a>
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
		<?php elseif ($this->_tpl_vars['flag'] == 'y_fenye'): ?>
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
记录列表
												</h3>
											</div>
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>请示时间</th>
														    <th>任务</th>
														    <th>单位</th>
														    <th>车型及车号</th>
														    <th>起止点及距离</th>
														    <th>运行时间</th>
														    <th>驾驶员</th>
														    <th>押车干部</th>
														    <th>批准人</th>
														</tr>
													</thead>
													<tbody>
													 <?php $_from = ($this->_tpl_vars['resList']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vehicle']):
?>
														 <tr>
														    <td><?php echo $this->_tpl_vars['vehicle']['plasetime']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['task']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['unit']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['vehiclemo']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['startstopdistance']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['runtime']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['driver']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['supercarg']; ?>
</td>
														    <?php if ($this->_tpl_vars['vehicle']['yflag'] == 0 & $this->_tpl_vars['vehicle']['tflag'] == 0): ?>
														    <td><font color="red">未审核</font></td>
														    <?php else: ?>
														    <td><?php echo $this->_tpl_vars['vehicle']['ratifier']; ?>
</td>
														    <?php endif; ?>
														</tr>
													<?php endforeach; endif; unset($_from); ?>
													</tbody>
												</table>
												<div class="table-pagination">
													<a href="<?php echo $this->_tpl_vars['shouye1']; ?>
">首页</a>
													<?php if ($this->_tpl_vars['sahngyiye1'] == '0'): ?>
													<a href="#" class='disabled'>上一页</a>
													<?php else: ?>
													<a href="<?php echo $this->_tpl_vars['sahngyiye1']; ?>
">上一页</a>
													<?php endif; ?>
													<?php if ($this->_tpl_vars['xiayiye1'] == '0'): ?>
													<a href="#" class='disabled'>下一页</a>
													<?php else: ?>
													<a href="<?php echo $this->_tpl_vars['xiayiye1']; ?>
">下一页</a>
													<?php endif; ?>
													<a href="<?php echo $this->_tpl_vars['weiye1']; ?>
">尾页</a>
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
			<?php elseif ($this->_tpl_vars['flag'] == 'tuan'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="VehicleController.php?flag=t_search" method="post">
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
					</div>
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
								<!-- ************批量 审核  start********** -->
								<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-horizontal'>
									<div class="control-group">
										<label for="ratifier" class="control-label" style="width:80px;">审核人：</label>
										<div class="controls" style="margin-left:80px;">
											<select name="ratifier" id="ratifier" class='input-large'>
												<?php $_from = ($this->_tpl_vars['reviewer']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reviewer']):
?>
												<option value="<?php echo $this->_tpl_vars['reviewer']['reviewer']; ?>
"><?php echo $this->_tpl_vars['reviewer']['reviewer']; ?>
</option>
												<?php endforeach; endif; unset($_from); ?>
											</select>
											<button type="submit" class="btn btn-primary">批量审核</button>
										</div>
									</div>
									
								</form>
								<!-- ************批量 审核  end *********** -->
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
															<th>序号</th>
															<th>单位</th>
															<th>请示时间</th>
														    <th>任务</th>
														    <th>起止点及距离</th>
														    <th>车型及车号</th>
														    
														    <th>运行时间</th>
														    <th>驾驶员</th>
														    <th>押车干部</th>
														    <th>批准人</th>
														    <th>操作</th>
														</tr>
													</thead>
													<tbody>
													 <?php $_from = ($this->_tpl_vars['resList']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vehicle']):
?>
														 <tr>
														 	<td><?php echo $this->_tpl_vars['vehicle'][0]; ?>
</td>
														 	<td><?php echo $this->_tpl_vars['vehicle']['unit']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['plasetime']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['task']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['start']; ?>
<strong>至</strong><?php echo $this->_tpl_vars['vehicle']['stop']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['vehicle']['distance']; ?>
<strong>KM</strong></td>
														    <td><?php echo $this->_tpl_vars['vehicle']['vehiclemo']; ?>
</td>
														    
														    <td><?php echo $this->_tpl_vars['vehicle']['runtime']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['driver']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['supercarg']; ?>
</td>
														    <?php if ($this->_tpl_vars['vehicle']['yflag'] == 0 & $this->_tpl_vars['vehicle']['tflag'] == 0): ?>
														    <td><a href="Vehicle_shenhe_from.php?id=<?php echo $this->_tpl_vars['vehicle']['id']; ?>
"><font color="red">未审核</font></a></td>
														    <td><a href="Vehicle_update_from.php?flag=t_update&id=<?php echo $this->_tpl_vars['vehicle']['id']; ?>
">修改</a>|<a href="Vehicle_delete.php?flag=t_delete&id=<?php echo $this->_tpl_vars['vehicle']['id']; ?>
">删除</a></td>
														    <?php else: ?>
														    <td><?php echo $this->_tpl_vars['vehicle']['ratifier']; ?>
</td>
														    <td><a  href="VehicleController.php?flag=delshenhe&id=<?php echo $this->_tpl_vars['vehicle']['id']; ?>
"><font color="#B2B2B2">取消审核</font></a></td>
														    <?php endif; ?>
														</tr>
													<?php endforeach; endif; unset($_from); ?>
													</tbody>
												</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php elseif ($this->_tpl_vars['flag'] == 'tuan_search'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="VehicleController.php?flag=t_search" method="post">
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
					</div>
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
								<!-- ************批量 审核  start********** -->
								<!-- ************批量 审核  end *********** -->
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
															<th>请示时间</th>
														    <th>任务</th>
														    <th>单位</th>
														    <th>车型及车号</th>
														    <th>起止点及距离</th>
														    <th>运行时间</th>
														    <th>驾驶员</th>
														    <th>押车干部</th>
														    <th>批准人</th>
														    <th>操作</th>
														</tr>
													</thead>
													<tbody>
													 <?php $_from = ($this->_tpl_vars['resList']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vehicle']):
?>
														 <tr>
														    <td><?php echo $this->_tpl_vars['vehicle']['plasetime']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['task']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['unit']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['vehiclemo']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['startstopdistance']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['runtime']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['driver']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['supercarg']; ?>
</td>
														    <?php if ($this->_tpl_vars['vehicle']['yflag'] == 0 & $this->_tpl_vars['vehicle']['tflag'] == 0): ?>
														    <td><a href="Vehicle_shenhe_from.php?id=<?php echo $this->_tpl_vars['vehicle']['id']; ?>
"><font color="red">未审核</font></a></td>
														    <td><a href="Vehicle_update_from.php?flag=t_update&id=<?php echo $this->_tpl_vars['vehicle']['id']; ?>
">修改</a>|<a href="Vehicle_delete.php?flag=t_delete&id=<?php echo $this->_tpl_vars['vehicle']['id']; ?>
">删除</a></td>
														    <?php else: ?>
														    <td><?php echo $this->_tpl_vars['vehicle']['ratifier']; ?>
</td>
														    <td><a  href="VehicleController.php?flag=delshenhe&id=<?php echo $this->_tpl_vars['vehicle']['id']; ?>
"><font color="#B2B2B2">取消审核</font></a></td>
														    <?php endif; ?>
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
												</div> -->
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
			<?php elseif ($this->_tpl_vars['flag'] == 'y_list'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="VehicleController.php?flag=y_search" method="post">
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
					</div>
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
记录列表
												</h3>
												<div class="actions"><h3>时间：<?php echo $this->_tpl_vars['date']; ?>
</h3></div>
											</div>
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>单位</th>
															<th>请示时间</th>
														    <th>任务</th>
														    <th>起止点及距离</th>
														    <th>车型及车号</th>
														    
														    <th>运行时间</th>
														    <th>驾驶员</th>
														    <th>押车干部</th>
														    <th>批准人</th>
														</tr>
													</thead>
													<tbody>
													 <?php $_from = ($this->_tpl_vars['resList']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vehicle']):
?>
														 <tr>
														 	<td><?php echo $this->_tpl_vars['vehicle']['tmp_name']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['plasetime']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['task']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['start']; ?>
<strong>至</strong><?php echo $this->_tpl_vars['vehicle']['stop']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['vehicle']['distance']; ?>
<strong>KM</strong></td>
														    <td><?php echo $this->_tpl_vars['vehicle']['vehiclemo']; ?>
</td>
														    
														    <td><?php echo $this->_tpl_vars['vehicle']['runtime']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['driver']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['supercarg']; ?>
</td>
														    <?php if ($this->_tpl_vars['vehicle']['yflag'] == 0 & $this->_tpl_vars['vehicle']['tflag'] == 0): ?>
														    <td><font color="red">未审核</font></td>
														    <?php else: ?>
														    <td><font color="red"><?php echo $this->_tpl_vars['vehicle']['ratifier']; ?>
</font></td>
														    <!-- <td><font color="red">信息已审核</font></td> -->
														    <?php endif; ?>
														</tr>
													<?php endforeach; endif; unset($_from); ?>
													</tbody>
												</table>
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
			<?php else: ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="VehicleController.php?flag=y_search" method="post">
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
					</div>
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
记录列表
												</h3>
												<div class="actions"><h3>时间：<?php echo $this->_tpl_vars['date']; ?>
</h3></div>
											</div>
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>单位</th>
															<th>请示时间</th>
														    <th>任务</th>
														    <th>起止点及距离</th>
														    <th>车型及车号</th>
														    
														    <th>运行时间</th>
														    <th>驾驶员</th>
														    <th>押车干部</th>
														    <th>批准人</th>
														</tr>
													</thead>
													<tbody>
													 <?php $_from = ($this->_tpl_vars['resList']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vehicle']):
?>
														 <tr>
														 	<td><?php echo $this->_tpl_vars['vehicle']['unit']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['plasetime']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['task']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['start']; ?>
<strong>至</strong><?php echo $this->_tpl_vars['vehicle']['stop']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['vehicle']['distance']; ?>
<strong>KM</strong></td>
														    <td><?php echo $this->_tpl_vars['vehicle']['vehiclemo']; ?>
</td>
														    
														    <td><?php echo $this->_tpl_vars['vehicle']['runtime']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['driver']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['vehicle']['supercarg']; ?>
</td>
														    <?php if ($this->_tpl_vars['vehicle']['yflag'] == 0 & $this->_tpl_vars['vehicle']['tflag'] == 0): ?>
														    <td><font color="red">未审核</font></td>
														    <?php else: ?>
														    <td><?php echo $this->_tpl_vars['vehicle']['ratifier']; ?>
</td>
														    <td><font color="red">信息已审核</font></td>
														    <?php endif; ?>
														</tr>
													<?php endforeach; endif; unset($_from); ?>
													</tbody>
												</table>
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
			<?php endif; ?>
		</div>
    </div>
		
	</body>

	</html>
