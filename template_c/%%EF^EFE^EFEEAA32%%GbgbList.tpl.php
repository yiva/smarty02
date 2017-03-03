<?php /* Smarty version 2.6.18, created on 2014-11-09 09:42:58
         compiled from GbgbList.tpl */ ?>
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
						<form class="form-horizontal" action="GbgbController.php?flag=l_search" method="post">
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
								<a href="Gbgb_add_from.php">添加</a>
								<!-- ******************************* -->
								<div class="row-fluid">
									<div class="span12">
										<div class="box box-color box-bordered">
											<div class="box-title">
												<h3>
													<i class="icon-table"></i>
													干部跟班记录列表
												</h3>
												<div class="actions"><h3>时间：<?php echo $this->_tpl_vars['date']; ?>
</h3></div>
											</div>
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>输入跟班日期</th>
															<th>单位</th>
															<th>干部职务</th>
															<th>内线</th>
															<th>外线</th>
															<th>发现问题</th>
															<!-- <th>备注</th> -->
															<th>操作</th>
														</tr>
													</thead>
													<tbody>
													 <?php $_from = ($this->_tpl_vars['resList']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gbgb']):
?>
														<tr>
															<td><?php echo $this->_tpl_vars['date']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['dept']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['gbzw']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['nx']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['wx']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['fxwt']; ?>
</td>
														    <!--<td><?php echo $this->_tpl_vars['gbgb']['remark']; ?>
</td>-->
														    <?php if ($this->_tpl_vars['gbgb']['yflag'] == 0 & $this->_tpl_vars['gbgb']['tflag'] == 0 & $this->_tpl_vars['gbgb']['tmp_mdate'] != '0' & $this->_tpl_vars['gbgb']['remark'] == ""): ?>
														    <td><!-- <a href="Gbgb_update_from.php?id=<?php echo $this->_tpl_vars['gbgb']['id']; ?>
">修改</a>| -->
														    	<a href="Gbgb_delete.php?id=<?php echo $this->_tpl_vars['gbgb']['id']; ?>
">删除</a></td>
														    <?php elseif ($this->_tpl_vars['gbgb']['remark'] == 'h'): ?>
														    <td><font color="red">谎报信息</font></td>
														    <?php else: ?>
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
						<h1>干部跟班记录</h1>
					</div>
					
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="more-files.html">干部跟班记录</a>
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
								<a href="Gbgb_add_from.php">添加</a>
								<!-- ******************************* -->
								<div class="row-fluid">
									<div class="span12">
										<div class="box box-color box-bordered">
											<div class="box-title">
												<h3>
													<i class="icon-table"></i>
													干部跟班记录列表
												</h3>
											</div>
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>输入跟班日期</th>
															<th>单位</th>
															<th>干部职务</th>
															<th>内线</th>
															<th>外线</th>
															<th>发现问题</th>
															<th>备注</th>
															<th>操作</th>
														</tr>
													</thead>
													<tbody>
													 <?php $_from = ($this->_tpl_vars['resList']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gbgb']):
?>
														<tr>
															<td><?php echo $this->_tpl_vars['gbgb']['mdate']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['dept']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['gbzw']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['nx']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['wx']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['fxwt']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['remark']; ?>
</td>
														    <?php if ($this->_tpl_vars['gbgb']['yflag'] == 0 & $this->_tpl_vars['gbgb']['tflag'] == 0 & $this->_tpl_vars['gbgb']['tmp_mdate'] != '0'): ?>
														    <td><a href="Gbgb_update_from.php?id=<?php echo $this->_tpl_vars['gbgb']['id']; ?>
">修改</a>|<a href="Gbgb_delete.php?id=<?php echo $this->_tpl_vars['gbgb']['id']; ?>
">删除</a></td>
														    <?php else: ?>
														    <td><font color="red">信息已审核</font></td>
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
			<?php elseif ($this->_tpl_vars['flag'] == 't_normal'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>干部跟班记录</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="GbgbController.php?flag=t_search" method="post">
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
							<a>干部跟班记录</a>
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
													干部跟班记录列表
												</h3>
												<div class="actions"><h3>时间：<?php echo $this->_tpl_vars['date']; ?>
</h3></div>
											</div>
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>序号</th>
															<th>跟班日期</th>
															<th>单位</th>
															<th>干部职务</th>
															<th>内线</th>
															<th>外线</th>
															<th>发现问题</th>
															<!-- <th>备注</th> -->
															<th>操作</th>
														</tr>
													</thead>
													<tbody>
													
													 <?php $_from = ($this->_tpl_vars['resList']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gbgb']):
?>
														<tr>
															<td><?php echo $this->_tpl_vars['gbgb'][0]; ?>
</td>
															<td><?php echo $this->_tpl_vars['gbgb']['mdate']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['dept']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['gbzw']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['nx']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['wx']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['fxwt']; ?>
</td>
														    <!-- <td><?php echo $this->_tpl_vars['gbgb']['remark']; ?>
</td> -->
														    <?php if ($this->_tpl_vars['gbgb']['yflag'] == 0 & $this->_tpl_vars['gbgb']['tflag'] == 0 & $this->_tpl_vars['gbgb']['tmp_mdate'] != '0' & $this->_tpl_vars['gbgb']['remark'] == ""): ?>
														    <td><a href="Gbgb_update_from.php?flag=t_update&id=<?php echo $this->_tpl_vars['gbgb']['id']; ?>
">修改</a>
														    |<a href="Gbgb_delete.php?flag=t_delete&id=<?php echo $this->_tpl_vars['gbgb']['id']; ?>
">删除</a>
														    |<a href="Gbgb_huangbao.php?flag=hb&id=<?php echo $this->_tpl_vars['gbgb']['id']; ?>
">谎报</a>
														    </td>
														    <?php elseif ($this->_tpl_vars['gbgb']['remark'] == 'h'): ?>
														    	
															    <td><font color="red">谎报信息</font>
															    <?php if ($this->_tpl_vars['gbgb']['tmp_mdate'] != '0'): ?>
															    	|<a href="Gbgb_huangbao.php?flag=cxhb&id=<?php echo $this->_tpl_vars['gbgb']['id']; ?>
">撤销谎报</a>
															    <?php endif; ?>
															    </td>
															 
														    <?php else: ?>
														    <td><font color="blue">信息已审核</font></td>
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
			<?php elseif ($this->_tpl_vars['flag'] == 'onedaytime'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="GbgbController.php?flag=onedaytime_search" method="post">
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
列表
												</h3>
												<div class="actions"><h3>时间：<?php echo $this->_tpl_vars['datetimeStart']; ?>
 至 <?php echo $this->_tpl_vars['datetimeEnd']; ?>
</div>
											</div>
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>单位</th>
															<th>职位</th>
															<th>时间（小时）</th>
															<th>跟班完成率</th>
														</tr>
													</thead>
													<tbody>
													 <?php $_from = ($this->_tpl_vars['gbgbAllTime']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gbgb']):
?>
														<tr>
														    <td><?php echo $this->_tpl_vars['gbgb']['dept']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['gbzw']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['alltime']; ?>
（小时）</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['timeLv']*100; ?>
%</td>
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
			<?php elseif ($this->_tpl_vars['flag'] == 'oneWeektime'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
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
列表
												</h3>
												<div class="actions"><h3>时间：<?php echo $this->_tpl_vars['datetimeStart']; ?>
 至 <?php echo $this->_tpl_vars['datetimeEnd']; ?>
</h3></div>
											</div>
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
</td>
														    <td><?php echo $this->_tpl_vars['Week']['timeLv']; ?>
（小时）</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['alltime']; ?>
（小时）</td>
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
			<?php elseif ($this->_tpl_vars['flag'] == 't_normal_fenye'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>干部跟班记录</h1>
					</div>
					
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="more-files.html">干部跟班记录</a>
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
								<!-- ******************************* -->
								<div class="row-fluid">
									<div class="span12">
										<div class="box box-color box-bordered">
											<div class="box-title">
												<h3>
													<i class="icon-table"></i>
													干部跟班记录列表
												</h3>
											</div>
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>输入跟班日期</th>
															<th>单位</th>
															<th>干部职务</th>
															<th>内线</th>
															<th>外线</th>
															<th>发现问题</th>
															<th>备注</th>
															<th>操作</th>
														</tr>
													</thead>
													<tbody>
													 <?php $_from = ($this->_tpl_vars['resList']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['gbgb']):
?>
														<tr>
															<td><?php echo $this->_tpl_vars['gbgb']['mdate']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['dept']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['gbzw']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['nx']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['wx']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['fxwt']; ?>
</td>
														    <td><?php echo $this->_tpl_vars['gbgb']['remark']; ?>
</td>
															<?php if ($this->_tpl_vars['gbgb']['tmp_mdate'] != 0): ?>
														    <td><a href="Gbgb_update_from.php?flag=t_update&id=<?php echo $this->_tpl_vars['gbgb']['id']; ?>
">修改</a>|<a href="Gbgb_delete.php?flag=t_delete&id=<?php echo $this->_tpl_vars['gbgb']['id']; ?>
">删除</a></td>
															<?php else: ?>
															<td><font color="#FF0000">信息不可修改</font></td>
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
			<?php endif; ?>
		</div>
    </div>
		
	</body>

	</html>
