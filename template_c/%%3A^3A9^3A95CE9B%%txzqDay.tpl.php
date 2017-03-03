<?php /* Smarty version 2.6.18, created on 2014-12-02 14:49:12
         compiled from txzqDay.tpl */ ?>
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

	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />
</head>

<body>
<?php echo $this->_tpl_vars['position']; ?>

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
			<?php if ($this->_tpl_vars['flag'] == 'l_havedata'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="TxzqController.php?flag=l_search" method="post">
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
							<a >主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a ><?php echo $this->_tpl_vars['path2']; ?>
</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a ><?php echo $this->_tpl_vars['cz']; ?>
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
							<div class="row-fluid">
					<div class="span12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i><?php echo $this->_tpl_vars['unit']; ?>
</h3>
								<div class=" actions"><h3>时间：<?php echo $this->_tpl_vars['date']; ?>
</h3></div>
							</div>
							<div class="box-content nopadding">
								<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">战备保障情况(原机线电和局域网运行情况)</label>
										<div class="controls">
											<textarea name="machinelinework" id="machinelinework" rows="5" class="input-block-level" placeholder="无" disabled="disabled"><?php echo $this->_tpl_vars['txzqTemp']['machinelinework']; ?>
</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textfield" class="control-label">局域网运行情况</label>
										<div class="controls">
											<textarea name="lanrun" id="lanrun" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['lanrun']; ?>
</textarea>
										</div>
									</div> 
									<div class="control-group">
										<label for="textfield" class="control-label">每周二汇报各营线路巡检率低于95%的说明情况</label>
										<div class="controls">
											<textarea name="lowercase" id="lowercase" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['lowercase']; ?>
</textarea>
										</div>
									</div>-->
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="无" disabled="disabled"><?php echo $this->_tpl_vars['txzqTemp']['inforealize']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">连队整修巡线情况</label>
										<div class="controls">
											<textarea name="repairlink" id="repairlink" rows="5" class="input-block-level" placeholder="无" disabled="disabled"><?php echo $this->_tpl_vars['txzqTemp']['repairlink']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">首长机关下连情况</label>
										<div class="controls">
											<textarea name="gbgbinfo" id="gbgbinfo" rows="5" class="input-block-level" placeholder="无" disabled="disabled"><?php echo $this->_tpl_vars['txzqTemp']['gbgbinfo']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">大项活动及训练情况</label>
										<div class="controls">
											<textarea name="traininfo" id="traininfo" rows="5" class="input-block-level" placeholder="无" disabled="disabled"><?php echo $this->_tpl_vars['txzqTemp']['traininfo']; ?>
</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况</label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="5" class="input-block-level" placeholder="台站值班抽查情况"><?php echo $this->_tpl_vars['txzqTemp']['dutycheck']; ?>
</textarea>
										</div>
									</div> -->
									<?php if ($this->_tpl_vars['txzqTemp']['tflag'] == 0 && $this->_tpl_vars['txzqTemp']['yflag'] == 0): ?>
									<div class="form-actions">
										<button type="button" onclick="jump('Txzq_update_from.php?id=<?php echo $this->_tpl_vars['txzqTemp']['id']; ?>
')" class="btn btn-primary"><?php echo $this->_tpl_vars['button']; ?>
</button>
										<button type="button" onclick="jump('Txzq_delete.php?id=<?php echo $this->_tpl_vars['txzqTemp']['id']; ?>
')" class="btn">删除</button>
									</div>
									<?php else: ?>
									<div class="form-actions">
										<font color="red"><strong>信息已审核</strong></font>
									</div>
									<?php endif; ?>
								</form>
							</div>
						</div>
					</div>
				</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php elseif ($this->_tpl_vars['flag'] == 'l_nodata'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="TxzqController.php?flag=l_search" method="post">
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
								<?php if ($this->_tpl_vars['search'] == 'search'): ?>
								<font color="red">暂无当日</font>出勤信息.
								<?php else: ?>
								<font color="red">今天暂无</font>添加出勤信息，请<a href="txzq_add_from.php">添加</a>
								<?php endif; ?>
							</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			<?php elseif ($this->_tpl_vars['flag'] == 't_nohavedata'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="TxzqController.php?flag=t_search" method="post">
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
								<?php if ($this->_tpl_vars['search'] == 'search'): ?>
								<font color="red">暂无当日</font>出勤信息.
								<?php else: ?>
								<font color="red">今天暂无</font>出勤信息.
								<?php endif; ?>
							</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			<?php elseif ($this->_tpl_vars['flag'] == 't_havedata'): ?> <!-- 团  -->
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="TxzqController.php?flag=t_search" method="post">
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
							<a >主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a ><?php echo $this->_tpl_vars['path2']; ?>
</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a ><?php echo $this->_tpl_vars['cz']; ?>
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
							<div class="pull-right span2">
								<?php if ($this->_tpl_vars['huizongBtn'] == '0'): ?>
								<button class="btn btn-block btn-large" type="button" onclick="jump('Txzq_huizong_from.php?flag=t_huizong')"><strong>汇总</strong></button>
								<?php else: ?>
								<strong><font color="red">今天已进行汇总操作</font></strong>
								<?php endif; ?>
							</div>
							
					<!-- start -->	
					<?php $_from = ($this->_tpl_vars['txzqTemp']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['txzq']):
?>	
					<div class="row-fluid">
					<div class="span12">
							<div class="box box-color box-bordered">
								<div class="box-title">
									<h3>
										<i class="icon-table"></i>
										<?php echo $this->_tpl_vars['txzq']['s_name']; ?>

									</h3>
									<?php if ($this->_tpl_vars['txzq']['tflag'] == 0 && $this->_tpl_vars['txzq']['yflag'] == 0): ?>
									<!-- <div class="actions"><h3><a href="Txzq_shenhe_from.php?id=<?php echo $this->_tpl_vars['txzq']['id']; ?>
" class="btn btn-magenta"><strong>审核</strong></a></h3></div> -->
									<?php else: ?>
									<!--<div class="actions"><h3><a href="TxzqController.php?flag=delshenhe&id=<?php echo $this->_tpl_vars['txzq']['id']; ?>
" class="btn btn-magenta"><strong>取消审核</strong></a></h3></div> -->
									<?php endif; ?>
								</div>
								<div class="box-content nopadding">
									<div class="dataTables_wrapper">
										<div class="dataTables_scroll">
												<div class="dataTables_scrollBody" style="overflow: auto; width: 100%; height: 300px;"  style="margin-left: 0px;">
												<form action="#" method="post" class='form-bordered form-vertical form-validate' id="bb">
												<table  class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
												<tbody>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">战备保障情况(原机线电和局域网运行情况)</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p><?php echo $this->_tpl_vars['txzq']['machinelinework']; ?>
</p></td>
														</tr>
														<!-- 
														<tr class="odd">
															<td class="span5" style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">第周二汇报各营<br/>线路巡检率对低<br/>于95%的说明情况</td>
															<td class="span7" style="background-color: #f2f2f2;border-color:#a3a3a3;"><p><?php echo $this->_tpl_vars['txzq']['lowercase']; ?>
</p></td>
														</tr> -->
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">上级指示通<br/>知落实情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p><?php echo $this->_tpl_vars['txzq']['inforealize']; ?>
</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">连队整修<br/>巡线情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p><?php echo $this->_tpl_vars['txzq']['repairlink']; ?>
</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">首长机关下连<br/>干部跟班情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p><?php echo $this->_tpl_vars['txzq']['gbgbinfo']; ?>
</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">大项活动及训练情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p><?php echo $this->_tpl_vars['txzq']['traininfo']; ?>
</p></td>
														</tr>
														<!--  
														<tr class="odd">
														<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">台站值班<br/>抽查情况</td>
														<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p><?php echo $this->_tpl_vars['txzq']['dutycheck']; ?>
</p></td>
														</tr>-->
													
												</tbody>
											</table>
											</form>
											</div>
										</div>
									</div>
									<!-- <div class="form-actions offset8">
										<button type="submit" class="btn btn-primary">确认</button>
										<button type="button" class="btn">取消</button>
									</div> -->
								</div>
							</div>
						</div>
						</div>
						<?php endforeach; endif; unset($_from); ?>
					<!-- End -->
				
								</div>
						</div>
					</div>
				</div>
			</div>
			<?php elseif ($this->_tpl_vars['flag'] == 'y_havedata'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="TxzqController.php?flag=y_search" method="post">
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
							<a >主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a ><?php echo $this->_tpl_vars['path2']; ?>
</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a ><?php echo $this->_tpl_vars['cz']; ?>
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
							<div class="pull-right span2">
								<?php if ($this->_tpl_vars['huizongBtn'] == '0'): ?>
								<button class="btn btn-block btn-large" type="button" onclick="jump('Txzq_huizong_from.php')"><strong>汇总</strong></button>
								<?php else: ?>
								<strong><font color="red">今天已进行汇总操作</font></strong>
								<?php endif; ?>
							</div>
							
					<!-- start -->	
					<?php $_from = ($this->_tpl_vars['txzqTemp']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['txzq']):
?>	
					<div class="row-fluid">
					<div class="span12">
							<div class="box box-color box-bordered">
								<div class="box-title">
									<h3>
										<i class="icon-table"></i>
										<?php echo $this->_tpl_vars['txzq']['tmp_name']; ?>

									</h3>
								</div>
								<div class="box-content nopadding">
									<div class="dataTables_wrapper">
										<div class="dataTables_scroll">
												<div class="dataTables_scrollBody" style="overflow: auto; width: 100%; height: 300px;"  style="margin-left: 0px;">
												<form action="#" method="post" class='form-bordered form-vertical form-validate' id="bb">
												<table  class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
												<tbody>
														<tr class="odd">
															<td class="span5" style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">战备保障情况(原机线电和局域网运行情况)</td>
															<td class="span7" style="background-color: #f2f2f2;border-color:#a3a3a3;"><p><?php echo $this->_tpl_vars['txzq']['machinelinework']; ?>
</p></td>
														</tr>
														<!--  
														<tr class="odd">
															<td class="span5" style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">局域网运行情况</td>
															<td class="span7" style="background-color: #f2f2f2;border-color:#a3a3a3;"><p><?php echo $this->_tpl_vars['txzq']['lanrun']; ?>
</p></td>
														</tr>
														<tr class="odd">
															<td class="span5" style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">第周二汇报各营<br/>线路巡检率对低<br/>于95%的说明情况</td>
															<td class="span7" style="background-color: #f2f2f2;border-color:#a3a3a3;"><p><?php echo $this->_tpl_vars['txzq']['lowercase']; ?>
</p></td>
														</tr>-->
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">上级指示通<br/>知落实情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p><?php echo $this->_tpl_vars['txzq']['inforealize']; ?>
</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">连队整修<br/>巡线情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p><?php echo $this->_tpl_vars['txzq']['repairlink']; ?>
</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">首长机关下连<br/>干部跟班情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p><?php echo $this->_tpl_vars['txzq']['gbgbinfo']; ?>
</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">大项活动及训练情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p><?php echo $this->_tpl_vars['txzq']['traininfo']; ?>
</p></td>
														</tr>
														<!-- 
														<tr class="odd">
														<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">台站值班<br/>抽查情况</td>
														<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p><?php echo $this->_tpl_vars['txzq']['dutycheck']; ?>
</p></td>
														</tr>
													 	-->
												</tbody>
											</table>
											</form>
											</div>
										</div>
									</div>
									<!-- <div class="form-actions offset8">
										<button type="submit" class="btn btn-primary">确认</button>
										<button type="button" class="btn">取消</button>
									</div> -->
								</div>
							</div>
						</div>
						</div>
						<?php endforeach; endif; unset($_from); ?>
					<!-- End -->
				
								</div>
						</div>
					</div>
				</div>
			</div>
			<?php elseif ($this->_tpl_vars['flag'] == 'y_nodata'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="TxzqController.php?flag=y_search" method="post">
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
								<font color="red">今天暂无</font>连队信息。
							</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			<?php elseif ($this->_tpl_vars['flag'] == 'y_nohuizong'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="TxzqController.php?flag=y_huizong_search" method="post">
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
								<font color="red">今天暂无</font>汇总信息。
							</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php elseif ($this->_tpl_vars['flag'] == 'y_huizong'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="TxzqController.php?flag=y_huizong_search" method="post">
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
							<a >主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a ><?php echo $this->_tpl_vars['path2']; ?>
</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a ><?php echo $this->_tpl_vars['cz']; ?>
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
							<div class="row-fluid">
					<div class="span12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i><?php echo $this->_tpl_vars['unit']; ?>
</h3>
								<div class=" actions"><h3><?php echo $this->_tpl_vars['date']; ?>
</h3></div>
							</div>
							<div class="box-content nopadding">
								<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">战备保障情况(原机线电和局域网运行情况)</label>
										<div class="controls">
											<textarea name="machinelinework" id="machinelinework" rows="2" class="input-block-level" placeholder="无" disabled="disabled"><?php echo $this->_tpl_vars['txzqTemp']['machinelinework']; ?>
</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textfield" class="control-label">局域网运行情况</label>
										<div class="controls">
											<textarea name="lanrun" id="lanrun" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['lanrun']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">每周二汇报各营线路巡检率低于95%的说明情况</label>
										<div class="controls">
											<textarea name="lowercase" id="lowercase" rows="5" class="input-block-level" placeholder="每周二汇报各营线路巡检率低于95%的说明情况"><?php echo $this->_tpl_vars['txzqTemp']['lowercase']; ?>
</textarea>
										</div>
									</div> -->
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="上级指示通知落实情况" disabled="disabled"><?php echo $this->_tpl_vars['txzqTemp']['inforealize']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">连队整修巡线情况</label>
										<div class="controls">
											<textarea name="repairlink" id="repairlink" rows="5" class="input-block-level" placeholder="连队整修巡线情况" disabled="disabled"><?php echo $this->_tpl_vars['txzqTemp']['repairlink']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">首长机关下连情况</label>
										<div class="controls">
											<textarea name="gbgbinfo" id="gbgbinfo" rows="5" class="input-block-level" placeholder="首长机关下连情况" disabled="disabled"><?php echo $this->_tpl_vars['txzqTemp']['gbgbinfo']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">大项活动及训练情况</label>
										<div class="controls">
											<textarea name="traininfo" id="traininfo" rows="5" class="input-block-level" placeholder="训练情况" disabled="disabled"><?php echo $this->_tpl_vars['txzqTemp']['traininfo']; ?>
</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况</label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="5" class="input-block-level" placeholder="台站值班抽查情况"><?php echo $this->_tpl_vars['txzqTemp']['dutycheck']; ?>
</textarea>
										</div>
									</div> -->
									<?php if ($this->_tpl_vars['txzqTemp']['tflag'] == 0 && $this->_tpl_vars['txzqTemp']['yflag'] == 0): ?>
									<div class="form-actions">
										<button type="button" onclick="jump('Txzq_update_from.php?flag=y_huizong&id=<?php echo $this->_tpl_vars['txzqTemp']['id']; ?>
')" class="btn btn-primary"><?php echo $this->_tpl_vars['button']; ?>
</button>
										<button type="button" onclick="jump('Txzq_delete.php?id=<?php echo $this->_tpl_vars['txzqTemp']['id']; ?>
&flag=y_huizong')" class="btn">删除</button>
									</div>
									<?php else: ?>
									<div class="form-actions">
										<font color="red"><strong>信息已审核</strong></font>
									</div>
									<?php endif; ?>
								</form>
							</div>
						</div>
					</div>
				</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			<?php elseif ($this->_tpl_vars['flag'] == 't_nohuizong'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="TxzqController.php?flag=t_huizong_search" method="post">
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
								<font color="red">今天暂无</font>汇总信息。
							</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php elseif ($this->_tpl_vars['flag'] == 't_huizong'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['path2']; ?>
</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="TxzqController.php?flag=t_huizong_search" method="post">
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
							<a >主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a ><?php echo $this->_tpl_vars['path2']; ?>
</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a ><?php echo $this->_tpl_vars['cz']; ?>
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
							<div class="row-fluid">
					<div class="span12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i><?php echo $this->_tpl_vars['unit']; ?>
</h3>
								<div class=" actions"><h3><?php echo $this->_tpl_vars['date']; ?>
</h3></div>
							</div>
							<div class="box-content nopadding">
								<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-horizontal form-column form-bordered'>
										<!-- -->
										<div class="control-group">
											<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
												<tr >
													<td width="20%" style="text-align:center;"> <strong><font size="4">值班首长</font></strong></td>
													<td width="30%" style="text-align:center;"><?php echo $this->_tpl_vars['txzqTemp']['dutyhead']; ?>
</td>
													<td width="20%" style="text-align:center;"><strong><font size="4">值班员</font></strong></td>
													<td width="30%" style="text-align:center;"><?php echo $this->_tpl_vars['txzqTemp']['dutyer']; ?>
</td>
												</tr>
											</table>
										</div>
									<!--  
									<div class="control-group">
										<div class="control-group">
											<label for="textfield" class="control-label">值班首长</label>
											<div class="controls" class="control-label">
												<?php echo $this->_tpl_vars['txzqTemp']['dutyhead']; ?>

											</div>
										</div>
									</div>
									<div class="control-group">
										<div class="control-group">
											<label for="textfield" class="control-label">值班员</label>
											<div class="controls" class="control-label">
												<?php echo $this->_tpl_vars['txzqTemp']['dutyer']; ?>

											</div>
										</div>
									</div>-->
									<div class="control-group">
										<label for="textfield" class="control-label">战备保障情况(原机线电和局域网运行情况)</label>
										<div class="controls">
											<textarea name="machinelinework" id="machinelinework" rows="1" class="input-block-level" placeholder="无" readonly="readonly"><?php echo $this->_tpl_vars['txzqTemp']['machinelinework']; ?>
</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textfield" class="control-label">局域网运行情况</label>
										<div class="controls">
											<textarea name="lanrun" id="lanrun" rows="1" class="input-block-level" placeholder="无"  readonly="readonly"><?php echo $this->_tpl_vars['txzqTemp']['lanrun']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">每周二汇报各营线路巡检率低于95%的说明情况</label>
										<div class="controls">
											<textarea name="lowercase" id="lowercase" rows="1" class="input-block-level" placeholder="无"  readonly="readonly"><?php echo $this->_tpl_vars['txzqTemp']['lowercase']; ?>
</textarea>
										</div>
									</div> -->
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="1" class="input-block-level" placeholder="无"  readonly="readonly"><?php echo $this->_tpl_vars['txzqTemp']['inforealize']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">连队整修巡线情况</label>
										<div class="controls">
											<textarea name="repairlink" id="repairlink" rows="5" class="input-block-level" placeholder="无" readonly="readonly"><?php echo $this->_tpl_vars['txzqTemp']['repairlink']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">首长机关下连情况</label>
										<div class="controls">
											<textarea name="gbgbinfo" id="gbgbinfo" rows="5" class="input-block-level" placeholder="无" readonly="readonly"><?php echo $this->_tpl_vars['txzqTemp']['gbgbinfo']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">大项活动及训练情况</label>
										<div class="controls">
											<textarea name="traininfo" id="traininfo" rows="5" class="input-block-level" placeholder="无" readonly="readonly"><?php echo $this->_tpl_vars['txzqTemp']['traininfo']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况<br /><a href="GbgbController.php?flag=gbgb_Show&date=<?php echo $this->_tpl_vars['date']; ?>
" target="_blank">及干部跟班情况</a></label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="2" class="input-block-level" placeholder="无" readonly="readonly"><?php echo $this->_tpl_vars['txzqTemp']['dutycheck']; ?>
</textarea>
										</div>
									</div> 
									<?php if ($this->_tpl_vars['txzqTemp']['tmp_inputtime'] != 0): ?>
									<div class="form-actions">
										<button type="button" onclick="jump('Txzq_update_from.php?flag=t_huizong&id=<?php echo $this->_tpl_vars['txzqTemp']['id']; ?>
')" class="btn btn-primary"><?php echo $this->_tpl_vars['button']; ?>
</button>
										<button type="button" onclick="jump('Txzq_delete.php?id=<?php echo $this->_tpl_vars['txzqTemp']['id']; ?>
&flag=t_huizong')" class="btn">删除</button>
									</div>
									<?php else: ?>
									<div class="form-actions"><font color="#FF0000">信息不可修改</font></div>
									<?php endif; ?>
								</form>
							</div>
						</div>
					</div>
				</div>
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