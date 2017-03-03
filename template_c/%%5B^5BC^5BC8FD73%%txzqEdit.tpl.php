<?php /* Smarty version 2.6.18, created on 2015-09-16 15:44:04
         compiled from txzqEdit.tpl */ ?>
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
			<?php if ($this->_tpl_vars['flag'] == 'add'): ?>
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['head']; ?>
</h1>
					</div>
					
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a >主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a ><?php echo $this->_tpl_vars['head']; ?>
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
							<div class="row-fluid">
					<!-- <div class="span12"> -->
					<div class="span12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i><?php echo $this->_tpl_vars['unit']; ?>
</h3>
							</div>
							<div class="box-content nopadding">
								<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">战备保障情况(原机线电和局域网运行情况)</label>
										<div class="controls">
											<textarea name="machinelinework" id="machinelinework" rows="5" class="input-block-level" placeholder="无"></textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textfield" class="control-label">局域网运行情况</label>
										<div class="controls">
											<textarea name="lanrun" id="lanrun" rows="5" class="input-block-level" placeholder="无"></textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">每周二汇报各营线路巡检率低于95%的说明情况</label>
										<div class="controls">
											<textarea name="lowercase" id="lowercase" rows="5" class="input-block-level" placeholder="无"></textarea>
										</div>
									</div> -->
									
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="无"></textarea>
										</div>
									</div>
									
									<div class="control-group">
										<label for="textfield" class="control-label">连队整修巡线情况</label>
										<div class="controls">
											<textarea name="repairlink" id="repairlink" rows="5" class="input-block-level" placeholder="无"></textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">首长机关下连情况</label>
										<div class="controls">
											<textarea name="gbgbinfo" id="gbgbinfo" rows="5" class="input-block-level" placeholder="无"></textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">大项活动及训练情况</label>
										<div class="controls">
											<textarea name="traininfo" id="traininfo" rows="5" class="input-block-level" placeholder="无"></textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况</label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="5" class="input-block-level" placeholder="无"></textarea>
										</div>
									</div> -->
									<div class="form-actions">
										<button type="submit" class="btn btn-primary"><?php echo $this->_tpl_vars['button']; ?>
</button>
										<!--  <button type="button" class="btn">取消</button>-->
									</div>
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
			<?php elseif ($this->_tpl_vars['flag'] == 'huizong'): ?>
			
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
							<a><?php echo $this->_tpl_vars['path2']; ?>
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
								<h3><i class="icon-th-list"></i><?php echo $this->_tpl_vars['cz']; ?>
</h3>
								<!-- <div class=" actions"><h3><?php echo $this->_tpl_vars['inputtime']; ?>
</h3></div> -->
							</div>
							<div class="box-content nopadding">
								<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">战备保障情况(原机线电和局域网运行情况)</label>
										<div class="controls">
											<textarea name="machinelinework" id="machinelinework" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['machinelinework']; ?>
</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textfield" class="control-label">局域网运行情况</label>
										<div class="controls">
											<textarea name="lanrun" id="lanrun" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['lanrun']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">每周二汇报各营线路巡检率低于95%的说明情况</label>
										<div class="controls">
										<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['txzqTemp']['id']; ?>
"/>
											<textarea name="lowercase" id="lowercase" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['lowercase']; ?>
</textarea>
										</div>
									</div> -->
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['inforealize']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">连队整修巡线情况</label>
										<div class="controls">
											<textarea name="repairlink" id="repairlink" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['repairlink']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">首长机关下连情况</label>
										<div class="controls">
											<textarea name="gbgbinfo" id="gbgbinfo" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['gbgbinfo']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">大项活动及训练情况</label>
										<div class="controls">
											<textarea name="traininfo" id="traininfo" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['traininfo']; ?>
</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况</label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['dutycheck']; ?>
</textarea>
										</div>
									</div> -->
									<div class="form-actions">
										<button type="submit" class="btn btn-primary"><?php echo $this->_tpl_vars['button']; ?>
</button>
										<!-- <button type="button" class="btn">取消</button> -->
									</div>
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
			<?php elseif ($this->_tpl_vars['flag'] == 'updatehuizong'): ?>
			
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
							<div class="row-fluid">
					<div class="span12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i><?php echo $this->_tpl_vars['cz']; ?>
</h3>
								<!-- <div class=" actions"><h3><?php echo $this->_tpl_vars['inputtime']; ?>
</h3></div> -->
							</div>
							<div class="box-content nopadding">
								<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-horizontal form-bordered'>
									<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['txzqTemp']['id']; ?>
"/>
									<div class="control-group">
										<label for="textfield" class="control-label">战备保障情况(原机线电和局域网运行情况)</label>
										<div class="controls">
											<textarea name="machinelinework" id="machinelinework" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['machinelinework']; ?>
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
									</div> -->
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['inforealize']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">连队整修巡线情况</label>
										<div class="controls">
											<textarea name="repairlink" id="repairlink" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['repairlink']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">首长机关下连情况</label>
										<div class="controls">
											<textarea name="gbgbinfo" id="gbgbinfo" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['gbgbinfo']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">大项活动及训练情况</label>
										<div class="controls">
											<textarea name="traininfo" id="traininfo" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['traininfo']; ?>
</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况</label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['dutycheck']; ?>
</textarea>
										</div>
									</div> -->
									<div class="form-actions">
										<button type="submit" class="btn btn-primary"><?php echo $this->_tpl_vars['button']; ?>
</button>
										<!-- <button type="button" class="btn">取消</button> -->
									</div>
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
			<?php elseif ($this->_tpl_vars['flag'] == 't_huizong'): ?>
			
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
							<a><?php echo $this->_tpl_vars['path2']; ?>
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
								<h3><i class="icon-th-list"></i><?php echo $this->_tpl_vars['cz']; ?>
</h3>
								 <div class=" actions"><h3><?php echo $this->_tpl_vars['inputtime']; ?>
</h3></div>
							</div>
							<div class="box-content nopadding">
								<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">值班首长</label>
										<div class="controls">
											<input name="dutyhead" id="dutyhead"  class="input-xlarge" placeholder="无" />
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">值班员</label>
										<div class="controls">
											<input name="dutyer" id="dutyer"  class="input-xlarge" placeholder="无" />
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">战备保障情况(原机线电和局域网运行情况)</label>
										<div class="controls">
											<textarea name="machinelinework" id="machinelinework" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['machinelinework']; ?>
</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textfield" class="control-label">局域网运行情况</label>
										<div class="controls">
											<textarea name="lanrun" id="lanrun" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['lanrun']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">每周二汇报各营线路巡检率低于95%的说明情况</label>
										<div class="controls">
										<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['txzqTemp']['id']; ?>
"/>
											<textarea name="lowercase" id="lowercase" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['lowercase']; ?>
</textarea>
										</div>
									</div> -->
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['inforealize']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">连队整修巡线情况</label>
										<div class="controls">
											<textarea name="repairlink" id="repairlink" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['repairlink']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">首长机关下连情况</label>
										<div class="controls">
											<textarea name="gbgbinfo" id="gbgbinfo" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['gbgbinfo']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">大项活动及训练情况</label>
										<div class="controls">
											<textarea name="traininfo" id="traininfo" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['traininfo']; ?>
</textarea>
										</div>
									</div>
									
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况</label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['dutycheck']; ?>
</textarea>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary"><?php echo $this->_tpl_vars['button']; ?>
</button>
										<!-- <button type="button" class="btn">取消</button> -->
									</div>
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
			<?php elseif ($this->_tpl_vars['flag'] == 'update_t_huizong'): ?>
			
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
							<a><?php echo $this->_tpl_vars['path2']; ?>
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
								<h3><i class="icon-th-list"></i><?php echo $this->_tpl_vars['cz']; ?>
</h3>
								 <div class=" actions"><h3><?php echo $this->_tpl_vars['inputtime']; ?>
</h3></div>
							</div>
							<div class="box-content nopadding">
								<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">值班首长</label>
										<div class="controls">
											<input name="id" value="<?php echo $this->_tpl_vars['txzqTemp']['id']; ?>
" type="hidden" />
											<input name="dutyhead" id="dutyhead" value="<?php echo $this->_tpl_vars['txzqTemp']['dutyhead']; ?>
" class="input-xlarge" placeholder="无" />
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">值班员</label>
										<div class="controls">
											<input name="dutyer" id="dutyer" value="<?php echo $this->_tpl_vars['txzqTemp']['dutyer']; ?>
" class="input-xlarge" placeholder="无" />
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">战备保障情况(原机线电和局域网运行情况)</label>
										<div class="controls">
											<textarea name="machinelinework" id="machinelinework" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['machinelinework']; ?>
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
										<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['txzqTemp']['id']; ?>
"/>
											<textarea name="lowercase" id="lowercase" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['lowercase']; ?>
</textarea>
										</div>
									</div> -->
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['inforealize']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">连队整修巡线情况</label>
										<div class="controls">
											<textarea name="repairlink" id="repairlink" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['repairlink']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">首长机关下连情况</label>
										<div class="controls">
											<textarea name="gbgbinfo" id="gbgbinfo" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['gbgbinfo']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">大项活动及训练情况</label>
										<div class="controls">
											<textarea name="traininfo" id="traininfo" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['traininfo']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况</label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['dutycheck']; ?>
</textarea>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary"><?php echo $this->_tpl_vars['button']; ?>
</button>
										<!-- <button type="button" class="btn">取消</button> -->
									</div>
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
			<?php elseif ($this->_tpl_vars['flag'] == 'shenhe'): ?>
			
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['head']; ?>
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
							<a><?php echo $this->_tpl_vars['head']; ?>
</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a><?php echo $this->_tpl_vars['head']; ?>
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
								<h3><i class="icon-th-list"></i><?php echo $this->_tpl_vars['cz']; ?>
</h3>
							</div>
							<div class="box-content nopadding">
								<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">每周二汇报各营线路巡检率低于95%的说明情况</label>
										<div class="controls">
										<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['txzqTemp']['id']; ?>
"/>
											<textarea name="lowercase" id="lowercase" rows="5" class="input-block-level" placeholder="每周二汇报各营线路巡检率低于95%的说明情况"><?php echo $this->_tpl_vars['txzqTemp']['lowercase']; ?>
</textarea>
										</div>
									</div>
									<?php if ($this->_tpl_vars['member']['role'] == 1 || $this->_tpl_vars['member']['role'] == 2): ?>
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="上级指示通知落实情况"></textarea>
										</div>
									</div>
									<?php else: ?>
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="上级指示通知落实情况" readonly="readonly"></textarea>
										</div>
									</div>
									<?php endif; ?>
									<div class="control-group">
										<label for="textfield" class="control-label">连队整修巡线情况</label>
										<div class="controls">
											<textarea name="repairlink" id="repairlink" rows="5" class="input-block-level" placeholder="连队整修巡线情况"><?php echo $this->_tpl_vars['txzqTemp']['repairlink']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">首长机关下连情况</label>
										<div class="controls">
											<textarea name="gbgbinfo" id="gbgbinfo" rows="5" class="input-block-level" placeholder="首长机关下连情况"><?php echo $this->_tpl_vars['txzqTemp']['gbgbinfo']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">训练情况</label>
										<div class="controls">
											<textarea name="traininfo" id="traininfo" rows="5" class="input-block-level" placeholder="训练情况"><?php echo $this->_tpl_vars['txzqTemp']['traininfo']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况</label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="5" class="input-block-level" placeholder="台站值班抽查情况"><?php echo $this->_tpl_vars['txzqTemp']['dutycheck']; ?>
</textarea>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary"><?php echo $this->_tpl_vars['button']; ?>
</button>
										<button type="button" class="btn">取消</button>
									</div>
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
			<?php else: ?>   <!-- update -->
			
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $this->_tpl_vars['head']; ?>
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
							<div class="row-fluid">
					<div class="span12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i><?php echo $this->_tpl_vars['cz']; ?>
</h3>
							</div>
							<div class="box-content nopadding">
								<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-horizontal form-bordered'>
									<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['txzqTemp']['id']; ?>
"/>
									<div class="control-group">
										<label for="textfield" class="control-label">战备保障情况(原机线电和局域网运行情况)</label>
										<div class="controls">
											<textarea name="machinelinework" id="machinelinework" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['machinelinework']; ?>
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
									</div> -->
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['inforealize']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">连队整修巡线情况</label>
										<div class="controls">
											<textarea name="repairlink" id="repairlink" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['repairlink']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">首长机关下连情况</label>
										<div class="controls">
											<textarea name="gbgbinfo" id="gbgbinfo" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['gbgbinfo']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">大项活动及训练情况</label>
										<div class="controls">
											<textarea name="traininfo" id="traininfo" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['traininfo']; ?>
</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况</label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['txzqTemp']['dutycheck']; ?>
</textarea>
										</div>
									</div> -->
									<div class="form-actions">
										<button type="submit" class="btn btn-primary"><?php echo $this->_tpl_vars['button']; ?>
</button>
										<!-- <button type="button" class="btn">取消</button> -->
									</div>
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