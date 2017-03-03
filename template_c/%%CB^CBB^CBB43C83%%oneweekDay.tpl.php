<?php /* Smarty version 2.6.18, created on 2014-12-02 14:49:17
         compiled from oneweekDay.tpl */ ?>
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
<script type="text/javascript">

	function jump(url){
		window.location = url;
		}
</script>

	<style>
	.middle-demo-1{
	height: 4em;
	line-height: 4em;
	overflow: hidden;
	}
</style>
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
		<?php if ($this->_tpl_vars['flag'] == 'oneWeek'): ?>
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
														    <td><?php echo $this->_tpl_vars['Week'][4]; ?>
</td>
														</tr>
													<?php endforeach; endif; unset($_from); ?>
														<tr>
															<td colspan="5">
															<textarea name="remark_5" id="remark_5" rows="3" class="input-block-level" placeholder="无" readonly="readonly"><?php echo $this->_tpl_vars['huizongRemarks']; ?>
</textarea>
															</td>
														</tr>
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
			
		<?php elseif ($this->_tpl_vars['flag'] == 'oneWeeknodata'): ?>
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
					</ul>
					<div class="close-bread">
						<a href="#"><i class="icon-remove"></i></a>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-content">
							<div class="row-fluid">
								<font color="red">暂无统计信息</font>.
							</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		<?php elseif ($this->_tpl_vars['flag'] == 'oneWeekupdate'): ?>
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
														    <td><?php echo $this->_tpl_vars['Week'][4]; ?>
</td>
														</tr>
													<?php endforeach; endif; unset($_from); ?>
														<tr>
															<td colspan="5">
															<textarea name="remark_5" id="remark_5" rows="3" class="input-block-level" placeholder="无" readonly="readonly"><?php echo $this->_tpl_vars['huizongRemarks']; ?>
</textarea>
															</td>
														</tr>
														<tr>
															<td></td>
															<td colspan="4">
																<div class="form-actions">
																	<button type="button" onclick="jump('oneweek_update_from.php?id=<?php echo $this->_tpl_vars['id']; ?>
')" class="btn btn-primary"><?php echo $this->_tpl_vars['button']; ?>
</button>
																	<button type="button" onclick="jump('oneweek_delete.php?id=<?php echo $this->_tpl_vars['id']; ?>
')" class="btn">删除</button>
																</div>
															</td>
														</tr>
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