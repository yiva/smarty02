<?php /* Smarty version 2.6.18, created on 2014-11-08 09:30:00
         compiled from GbgbList_Show.tpl */ ?>
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
			<div class="container-fluid">
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
												<div class="actions">
													<h3>
														时间：<?php echo $this->_tpl_vars['date']; ?>

													</h3>
												</div>
											</div>
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>序号</th>
															<th>输入跟班日期</th>
															<th>单位</th>
															<th>干部职务</th>
															<th>内线</th>
															<th>外线</th>
															<th>发现问题</th>
															<th>状态</th>
														</tr>
													</thead>
													<tbody>
													 <?php $_from = ($this->_tpl_vars['gbgbShow']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
														    <?php if ($this->_tpl_vars['gbgb']['remark'] == 'h'): ?>
														    <td><font color="red">谎报</font></td>
														    <?php else: ?>
														    <td><font color="blue">正常</font></td>
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
		
	</body>

	</html>
