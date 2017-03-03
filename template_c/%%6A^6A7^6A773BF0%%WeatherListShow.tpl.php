<?php /* Smarty version 2.6.18, created on 2014-11-11 10:58:08
         compiled from WeatherListShow.tpl */ ?>
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
									<div class="span10">
										<div class="box box-color box-bordered">
											<div class="box-title">
												<h3>
													<i class="icon-table"></i>
													<?php echo $this->_tpl_vars['path2']; ?>

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
															<th width="30%" style="text-align:center;">位单所在地</th>
														    <th width="35%"  style="text-align:center;">天气情况</th>
														    <th width="35%"  style="text-align:center;">预报天气</th>
														</tr>
													</thead>
													<tbody>
													 <?php $_from = ($this->_tpl_vars['weatherData']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['weather']):
?>
														 <tr>
														    <td style="text-align:center;"><?php echo $this->_tpl_vars['weather']['local1']; ?>
</td>
														    <td style="text-align:center;"><?php echo $this->_tpl_vars['weather']['weather']; ?>
</td>
														    <td style="text-align:center;"><?php echo $this->_tpl_vars['weather']['Healthprevention']; ?>
</td>
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
