<?php /* Smarty version 2.6.18, created on 2014-11-12 09:53:58
         compiled from workEdit.tpl */ ?>
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

<style>
	.middle-demo-1{
	height: 4em;
	line-height: 4em;
	overflow: hidden;
	}
</style>
</head>
<?php if ($this->_tpl_vars['flag'] != 't_huizong'): ?>
<script type="text/javascript">
	$(function(){
		$("#bb").submit(function(){
			if($("#dutyhead").val() == ""){
				alert("请填写值班首长!");
				return false;
			}
			if($("#dutyer").val() == ""){
				alert("请填写值班员!");
				return false;
			}

			var reg = new RegExp("^[0-9]*$");
			
		    if(!reg.test($("#gbshouldnum").val())){
		        alert("干部应在输入有误！请输入数字!");return false;
		    }
		    if(!reg.test($("#gbfactnum").val())){
		        alert("干部实在输入有误！请输入数字!");return false;
		    }
		    if(!reg.test($("#gbholiday").val())){
		        alert("干部休假输入有误！请输入数字!");return false;
		    }
		    if(!reg.test($("#gbout").val())){
		        alert("干部外出输入有误！请输入数字!");return false;
		    }
			
		    if(!reg.test($("#sgshouldnum").val())){
		        alert("士官应在输入有误！请输入数字!");return false;
		    }
		    if(!reg.test($("#sgfactnum").val())){
		        alert("士官实在输入有误！请输入数字!");return false;
		    }
		    if(!reg.test($("#sgholiday").val())){
		        alert("士官休假输入有误！请输入数字!");return false;
		    }
		    if(!reg.test($("#sgout").val())){
		        alert("士官外出输入有误！请输入数字!");return false;
		    }
			
		    if(!reg.test($("#ywbshouldnum").val())){
		        alert("义务兵应在输入有误！请输入数字!");return false;
		    }
		    if(!reg.test($("#ywbfactnum").val())){
		        alert("义务兵实在输入有误！请输入数字!");return false;
		    }
		    if(!reg.test($("#ywbholiday").val())){
		        alert("义务兵休假输入有误！请输入数字!");return false;
		    }
		    if(!reg.test($("#ywbout").val())){
		        alert("义务兵外出输入有误！请输入数字!");return false;
		    }

		    var gbnum = parseInt($("#gbfactnum").val())+parseInt($("#gbholiday").val())+parseInt($("#gbout").val());
		    var sgnum = parseInt($("#sgfactnum").val())+parseInt($("#sgholiday").val())+parseInt($("#sgout").val());
		    var ywbnum = parseInt($("#ywbfactnum").val())+parseInt($("#ywbholiday").val())+parseInt($("#ywbout").val());
		    
		    if($("#gbshouldnum").val() != gbnum){
				alert("干部人数输入有误，请核对！");return false;
			}
		    if($("#sgshouldnum").val() != sgnum){
				alert("士官人数输入有误，请核对！");return false;
			}
		    if($("#ywbshouldnum").val() != ywbnum){
				alert("义务兵人数输入有误，请核对！");return false;
			}

			});

		});

</script>
<?php endif; ?>
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
							<i class="icon-angle-right"></i>
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
							<div class="row-fluid">
					<div class="span12">
						<div class="box box-bordered box-color ">
							<div class="box-title">
								<h3 class="span4"><i class="icon-group"></i> <span style="font-weight: bolder;"><?php echo $this->_tpl_vars['unit']; ?>
</span>(<span id=factnum>实到</span>/<span id="shouldnum">应到</span>)</h3>
								<div class="offset2 span6" style=""><h3></h3></div>
							</div>
							<div class="box-content nopadding">
								<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-bordered' id="bb">
							<div class="box-content nopadding ">
								
								<table class="table table-hover table-nomargin table-bordered">
									<tbody>
										<tr>
											<td class="span2" style="text-align:right;"><h4>值班首长</h4></td>
											<td>
												<div class="control-group" style="border:none;">
													<div class="controls">
														<label for="weather" class="control-label">&nbsp;</label>
														<input type="text" name="dutyhead" id="dutyhead" placeholder="无" class="input" data-rule-required="true">
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td class="span2" style="text-align:right;"><h4>值班员</h4></td>
											<td>
												<div class="control-group" style="border:none;">
													<div class="controls">
														<label for="Healthprevention" class="control-label">&nbsp;</label>
														<input type="text" name="dutyer" id="dutyer" placeholder="无" class="input" data-rule-required="true">
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td class="span2" style="text-align:right;"><h4>干部</h4></td>
											<td class="span10 form-vertical"><div class="row-fluid">
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="gbshouldnum" class="control-label">应在</label>
												<div class="controls controls-row">
													<input type="text" name="gbshouldnum" id="gbshouldnum" placeholder="应在" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="gbfactnum" class="control-label">实在</label>
												<div class="controls controls-row">
													<input type="text" name="gbfactnum" id="gbfactnum" placeholder="实在" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="gbholiday" class="control-label">休假</label>
												<div class="controls controls-row">
													<input type="text" name="gbholiday" id="gbholiday" placeholder="休假" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="gbout" class="control-label">外出</label>
												<div class="controls controls-row">
													<input type="text" name="gbout" id="gbout" placeholder="外出" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
									</div></td>
										</tr>
										<tr>
											<td class="span2" style="text-align:right;"><h4>士官</h4></td>
											<td class="span10 form-vertical"><div class="row-fluid">
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="sgshouldnum" class="control-label">应在</label>
												<div class="controls controls-row">
													<input type="text" name="sgshouldnum" id="sgshouldnum" placeholder="应在" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="sgfactnum" class="control-label">实在</label>
												<div class="controls controls-row">
													<input type="text" name="sgfactnum" id="sgfactnum" placeholder="实在" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="sgholiday" class="control-label">休假</label>
												<div class="controls controls-row">
													<input type="text" name="sgholiday" id="sgholiday" placeholder="休假" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="sgout" class="control-label">外出</label>
												<div class="controls controls-row">
													<input type="text" name="sgout" id="sgout" placeholder="外出" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
									</div></td>
										</tr><tr>
											<td class="span2" style="text-align:right;"><h4>义务兵</h4></td>
											<td class="span10 form-vertical"><div class="row-fluid">
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="ywbshouldnum" class="control-label">应在</label>
												<div class="controls controls-row">
													<input type="text" name="ywbshouldnum" id="ywbshouldnum" placeholder="应在" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="ywbfactnum" class="control-label">实在</label>
												<div class="controls controls-row">
													<input type="text" name="ywbfactnum" id="ywbfactnum" placeholder="实在" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="ywbholiday" class="control-label">休假</label>
												<div class="controls controls-row">
													<input type="text" name="ywbholiday" id="ywbholiday" placeholder="休假" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="ywbout" class="control-label">外出</label>
												<div class="controls controls-row">
													<input type="text" name="ywbout" id="ywbout" placeholder="外出" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
									</div></td>
										</tr>
										<tr>
											<td class="span2" style="text-align:right;"><h4>人员变动情况</h4></td>
											<td>
												<div class="control-group" style="border:none;">
													<div class="controls">
														<textarea name="remark" id="remark" rows="5" class="input-block-level" placeholder="无"></textarea>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td class="span2" style="text-align:right;"><h4>一日工作开展情况</h4></td>
											<td>
												<div class="control-group" style="border:none;">
													<div class="controls">
														<textarea name="onedaywork" id="onedaywork" rows="5" class="input-block-level" placeholder="无"></textarea>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td class="span2" style="text-align:right;"><h4>首长机关下连情况</h4></td>
											<td>
												<div class="control-group" style="border:none;">
													<div class="controls">
														<textarea name="headdownlian" id="headdownlian" rows="5" class="input-block-level" placeholder="无"></textarea>
													</div>
												</div>
											</td>
										</tr>
										<?php if ($this->_tpl_vars['unitNum'] == '9'): ?>
										<tr>
											<td class="span2" style="text-align:right;"><h4>天气</h4></td>
											<td>
												<div class="control-group" style="border:none;">
													<div class="controls">
														<label for="weather" class="control-label">&nbsp;</label>
														<!-- <input type="text" name="weather" id="weather" placeholder="无" class="input" data-rule-required="true"> -->
														<select name="weather">
															<option value="晴" selected="selected">晴</option>
														    <option value="阴">阴</option>
														    <option value="多云">多云</option>
														    <option value="小雨">小雨</option>
														    <option value="中雨">中雨</option>
														    <option value="大雨">大雨</option>
														    <option value="阵雨">阵雨</option>
														    <option value="雷阵雨">雷阵雨</option>
														    <option value="暴雨">暴雨</option>
														    <option value="雾">雾</option>
														    <option value="霾">霾</option>
														    <option value="霜冻">霜冻</option>
														    <option value="暴风">暴风</option>
														    <option value="暴风雪">暴风雪</option>
														    <option value="大雪">大雪</option>
														    <option value="中雪">中雪</option>
														    <option value="小雪">小雪</option>
														    <option value="雨夹雪">雨夹雪</option>
														    <option value="冰雹">冰雹</option>
														    <option value="扬沙">扬沙</option>
														</select>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td class="span2" style="text-align:right;"><h4>明天预报天气</h4></td>
											<td>
												<div class="control-group" style="border:none;">
													<div class="controls">
														<label for="Healthprevention" class="control-label">&nbsp;</label>
														<!-- <input type="text" name="Healthprevention" id="Healthprevention" placeholder="无" class="input" data-rule-required="true"> -->
														<select name="Healthprevention">
															<option value="晴" selected="selected">晴</option>
														    <option value="阴">阴</option>
														    <option value="多云">多云</option>
														    <option value="小雨">小雨</option>
														    <option value="中雨">中雨</option>
														    <option value="大雨">大雨</option>
														    <option value="阵雨">阵雨</option>
														    <option value="雷阵雨">雷阵雨</option>
														    <option value="暴雨">暴雨</option>
														    <option value="雾">雾</option>
														    <option value="霾">霾</option>
														    <option value="霜冻">霜冻</option>
														    <option value="暴风">暴风</option>
														    <option value="暴风雪">暴风雪</option>
														    <option value="大雪">大雪</option>
														    <option value="中雪">中雪</option>
														    <option value="小雪">小雪</option>
														    <option value="雨夹雪">雨夹雪</option>
														    <option value="冰雹">冰雹</option>
														    <option value="扬沙">扬沙</option>
														</select>
													</div>
												</div>
											</td>
										</tr>
										<?php endif; ?>
									</tbody>
								</table>
									
									<div class="form-actions offset2">
										<button type="submit" class="btn btn-primary">确认</button>
										<!-- <button type="button" class="btn">取消</button> -->
									</div>
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
			<?php elseif ($this->_tpl_vars['flag'] == 't_add'): ?>
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
							<i class="icon-angle-right"></i>
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
							<div class="row-fluid">
					<div class="span12">
						<div class="box box-bordered box-color ">
							<div class="box-title">
								<h3 class="span4"><i class="icon-group"></i> <span style="font-weight: bolder;"><?php echo $this->_tpl_vars['unit']; ?>
</span>(<span id=factnum>实到</span>/<span id="shouldnum">应到</span>)</h3>
								<div class="offset2 span6" style=""><h3></h3></div>
							</div>
							<div class="box-content nopadding">
								<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-bordered' id="bb">
							<div class="box-content nopadding ">
								<table class="table table-hover table-nomargin table-bordered">
									<tbody>
									
										<tr>
											<td class="span2" style="text-align:right;"><h4>值班首长</h4></td>
											<td>
												<div class="control-group" style="border:none;">
													<div class="controls">
														<label for="weather" class="control-label">&nbsp;</label>
														<input type="text" name="dutyhead" id="dutyhead" placeholder="值班领导" class="input" data-rule-required="true">
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td class="span2" style="text-align:right;"><h4>值班员</h4></td>
											<td>
												<div class="control-group" style="border:none;">
													<div class="controls">
														<label for="Healthprevention" class="control-label">&nbsp;</label>
														<input type="text" name="dutyer" id="dutyer" placeholder="值班人" class="input" data-rule-required="true">
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td class="span2" style="text-align:right;"><h4>干部</h4></td>
											<td class="span10 form-vertical"><div class="row-fluid">
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="gbshouldnum" class="control-label">应在</label>
												<div class="controls controls-row">
													<input type="text" name="gbshouldnum" id="gbshouldnum" placeholder="应在" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="gbfactnum" class="control-label">实在</label>
												<div class="controls controls-row">
													<input type="text" name="gbfactnum" id="gbfactnum" placeholder="实在" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="gbholiday" class="control-label">休假</label>
												<div class="controls controls-row">
													<input type="text" name="gbholiday" id="gbholiday" placeholder="休假" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="gbout" class="control-label">外出</label>
												<div class="controls controls-row">
													<input type="text" name="gbout" id="gbout" placeholder="外出" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
									</div></td>
										</tr>
										<tr>
											<td class="span2" style="text-align:right;"><h4>士官</h4></td>
											<td class="span10 form-vertical"><div class="row-fluid">
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="sgshouldnum" class="control-label">应在</label>
												<div class="controls controls-row">
													<input type="text" name="sgshouldnum" id="sgshouldnum" value="0" placeholder="应在" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="sgfactnum" class="control-label">实在</label>
												<div class="controls controls-row">
													<input type="text" name="sgfactnum" id="sgfactnum" value="0" placeholder="实在" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="sgholiday" class="control-label">休假</label>
												<div class="controls controls-row">
													<input type="text" name="sgholiday" id="sgholiday" value="0" placeholder="休假" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="sgout" class="control-label">外出</label>
												<div class="controls controls-row">
													<input type="text" name="sgout" id="sgout" value="0" placeholder="外出" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
									</div></td>
										</tr><tr>
											<td class="span2" style="text-align:right;"><h4>义务兵</h4></td>
											<td class="span10 form-vertical"><div class="row-fluid">
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="ywbshouldnum" class="control-label">应在</label>
												<div class="controls controls-row">
													<input type="text" name="ywbshouldnum" id="ywbshouldnum" value="0" placeholder="应在" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="ywbfactnum" class="control-label">实在</label>
												<div class="controls controls-row">
													<input type="text" name="ywbfactnum" id="ywbfactnum" value="0" placeholder="实在" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="ywbholiday" class="control-label">休假</label>
												<div class="controls controls-row">
													<input type="text" name="ywbholiday" id="ywbholiday" value="0" placeholder="休假" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
										<div class="span3">
											<div class="control-group" style="border: none;">
												<label for="ywbout" class="control-label">外出</label>
												<div class="controls controls-row">
													<input type="text" name="ywbout" id="ywbout" value="0" placeholder="外出" class="input-small" data-rule-number="true" data-rule-required="true">
												</div>
											</div>
										</div>
									</div></td>
										</tr>
										<tr>
											<td class="span2" style="text-align:right;"><h4>人员变动情况</h4></td>
											<td>
												<div class="control-group" style="border:none;">
													<div class="controls">
														<textarea name="remark" id="remark" rows="5" class="input-block-level" placeholder="无"></textarea>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
									
									<div class="form-actions offset2">
										<button type="submit" class="btn btn-primary">确认</button>
										<!-- <button type="button" class="btn">取消</button> -->
									</div>
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
			<?php elseif ($this->_tpl_vars['flag'] == 'y_huizong'): ?>
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
							<i class="icon-angle-right"></i>
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
							<div class="row-fluid">
					<div class="span12">
						<div class="box box-bordered box-color">
							<div class="box-title">
								<h3 class="span4"><i class="icon-group"></i> <span style="font-weight: bolder;"><?php echo $this->_tpl_vars['unit']; ?>
汇总</span></h3>
								<div class="offset2 span6" style=""><h3><?php echo $this->_tpl_vars['workTemp']['factnum']; ?>
/<?php echo $this->_tpl_vars['workTemp']['shouldnum']; ?>
(<span id=factnum>实到</span>/<span id="shouldnum">应到</span>)</h3></div>
							</div>
							<div class="box-content nopadding">
								<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-horizontal form-bordered form-vertical'  id="bb">
                                	<div class="control-group">
										<label for="weather" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">值班首长</label>
										<div class="controls">
										<input type="text" name="dutyhead" id="dutyhead" placeholder="值班首长" value="<?php echo $this->_tpl_vars['workhead']['dutyhead']; ?>
"  class="input" data-rule-required="true">
										</div>
										</div>
									<div class="control-group">
										<label for="Healthprevention" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">值班员</label>
										<div class="controls">
											<input type="text" name="dutyer" id="dutyer" placeholder="值班员" value="<?php echo $this->_tpl_vars['workhead']['dutyer']; ?>
" class="input" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="gbfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">干部</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="gbshouldnum" id="gbshouldnum" placeholder="应在" value="<?php echo $this->_tpl_vars['workTemp']['gbshouldnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="gbfactnum" id="gbfactnum" placeholder="实在" value="<?php echo $this->_tpl_vars['workTemp']['gbfactnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="gbholiday" id="gbholiday" placeholder="休假" value="<?php echo $this->_tpl_vars['workTemp']['gbholiday']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>外出</label>
												<input type="text" name="gbout" id="gbout" placeholder="外出" value="<?php echo $this->_tpl_vars['workTemp']['gbout']; ?>
" class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="sgfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">士官</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="sgshouldnum" id="sgshouldnum" placeholder="应在" value="<?php echo $this->_tpl_vars['workTemp']['sgshouldnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="sgfactnum" id="sgfactnum" placeholder="实在" value="<?php echo $this->_tpl_vars['workTemp']['sgfactnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="sgholiday" id="sgholiday" placeholder="休假" value="<?php echo $this->_tpl_vars['workTemp']['sgholiday']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>外出</label>
												<input type="text" name="sgout" id="sgout" placeholder="外出" value="<?php echo $this->_tpl_vars['workTemp']['sgout']; ?>
" class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="ywbfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">义务兵</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="ywbshouldnum" id="ywbshouldnum" placeholder="应在" value="<?php echo $this->_tpl_vars['workTemp']['ywbshouldnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="ywbfactnum" id="ywbfactnum" placeholder="实在" value="<?php echo $this->_tpl_vars['workTemp']['ywbfactnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="ywbholiday" id="ywbholiday" placeholder="休假" value="<?php echo $this->_tpl_vars['workTemp']['ywbholiday']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>外出</label>
												<input type="text" name="ywbout" id="ywbout" placeholder="外出" value="<?php echo $this->_tpl_vars['workTemp']['ywbout']; ?>
" class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">人员变动情况</label>
										<div class="controls">
											<textarea name="remark" id="remark" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['remarkHuizong']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="onedaywork" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">一日工作开展情况</label>
										<div class="controls">
											<textarea name="onedaywork" id="onedaywork" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['onedayworkHuizong']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="headdownlian" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">首长机关下连情况</label>
										<div class="controls">
											<textarea name="headdownlian" id="headdownlian" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['headdownlianHuizong']; ?>
</textarea>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary"><?php echo $this->_tpl_vars['button']; ?>
</button>
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
			<?php elseif ($this->_tpl_vars['flag'] == 'y_updatehuizong'): ?>
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
							<i class="icon-angle-right"></i>
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
							<div class="row-fluid">
					<div class="span12">
						<div class="box box-bordered box-color">
							<div class="box-title">
								<h3 class="span4"><i class="icon-group"></i> <span style="font-weight: bolder;"><?php echo $this->_tpl_vars['unit']; ?>
</span>(<span id=factnum>实到</span>/<span id="shouldnum">应到</span>)</h3>
								<div class="offset2 span6" style=""><h3></h3></div>
							</div>
							<div class="box-content nopadding">
								<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-horizontal form-bordered form-vertical'  id="bb">
                                	<div class="control-group">
										<label for="weather" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">值班首长</label>
										<div class="controls">
										<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['workTemp']['id']; ?>
" />
										<input type="text" name="dutyhead" id="dutyhead" placeholder="值班首长" value="<?php echo $this->_tpl_vars['workTemp']['dutyhead']; ?>
" class="input" data-rule-required="true">
										</div>
										</div>
									<div class="control-group">
										<label for="Healthprevention" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">值班员</label>
										<div class="controls">
											<input type="text" name="dutyer" id="dutyer" placeholder="值班员" value="<?php echo $this->_tpl_vars['workTemp']['dutyer']; ?>
" class="input" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="gbfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">干部</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="gbshouldnum" id="gbshouldnum" placeholder="应在" value="<?php echo $this->_tpl_vars['workTemp']['gbshouldnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="gbfactnum" id="gbfactnum" placeholder="实在" value="<?php echo $this->_tpl_vars['workTemp']['gbfactnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="gbholiday" id="gbholiday" placeholder="休假" value="<?php echo $this->_tpl_vars['workTemp']['gbholiday']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>外出</label>
												<input type="text" name="gbout" id="gbout" placeholder="外出" value="<?php echo $this->_tpl_vars['workTemp']['gbout']; ?>
" class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="sgfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">士官</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="sgshouldnum" id="sgshouldnum" placeholder="应在" value="<?php echo $this->_tpl_vars['workTemp']['sgshouldnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="sgfactnum" id="sgfactnum" placeholder="实在" value="<?php echo $this->_tpl_vars['workTemp']['sgfactnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="sgholiday" id="sgholiday" placeholder="休假" value="<?php echo $this->_tpl_vars['workTemp']['sgholiday']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>外出</label>
												<input type="text" name="sgout" id="sgout" placeholder="外出" value="<?php echo $this->_tpl_vars['workTemp']['sgout']; ?>
" class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="ywbfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">义务兵</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="ywbshouldnum" id="ywbshouldnum" placeholder="应在" value="<?php echo $this->_tpl_vars['workTemp']['ywbshouldnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="ywbfactnum" id="ywbfactnum" placeholder="实在" value="<?php echo $this->_tpl_vars['workTemp']['ywbfactnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="ywbholiday" id="ywbholiday" placeholder="休假" value="<?php echo $this->_tpl_vars['workTemp']['ywbholiday']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>外出</label>
												<input type="text" name="ywbout" id="ywbout" placeholder="外出" value="<?php echo $this->_tpl_vars['workTemp']['ywbout']; ?>
" class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">人员变动情况</label>
										<div class="controls">
											<textarea name="remark" id="remark" rows="5" class="input-block-level" placeholder="人员变动情况"><?php echo $this->_tpl_vars['workTemp']['remark']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">一日工作开展情况</label>
										<div class="controls">
											<textarea name="onedaywork" id="onedaywork" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp']['onedaywork']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">首长机关下连情况</label>
										<div class="controls">
											<textarea name="headdownlian" id="headdownlian" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp']['headdownlian']; ?>
</textarea>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary"><?php echo $this->_tpl_vars['button']; ?>
</button>
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
							<a><?php echo $this->_tpl_vars['cz']; ?>
</a>
							<i class="icon-angle-right"></i>
						</li>
					</ul>
					<div class="close-bread">
						<a><i class="icon-remove"></i></a>
					</div>
				</div>
				<!-- Begin 表格组 -->
					<div class="row-fluid">
					<!-- Begin 单个表格 -->
						<div class="span12">
							<div class="box box-color box-bordered">
								<div class="box-title">
									<h3>
										<i class="icon-table"></i>
									</h3>
									<div class="span11">
										<h3>汇报单位:<?php echo $this->_tpl_vars['unit']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;</h3>
										<h3>值班时间:<?php echo $this->_tpl_vars['datetime']; ?>
</h3>
									</div>
									
									<!-- 
									<div class="pull-right span5">
										<h3>值班首长:########&nbsp;&nbsp;&nbsp;&nbsp;</h3>
										<h3>值班员:########</h3>
									</div> -->
								</div>
								<div class="box-content nopadding">
									<div class="dataTables_wrapper">
										<div class="dataTables_scroll">
												<div class="dataTables_scrollBody" style="overflow: auto; width: 100%; "  style="margin-left: 0px;">
												<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-bordered form-vertical' id="bb">
												<table  class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
												<tbody>
													<!-- Begin 工作情况及营领导位置 -->
													<tr>
														<td class="span2" style="text-align:center;background-color: #dedede;"><h4>值班首长</h4></td>
														<td class="span10" colspan="2">
															<div class="row-fluid">
																<div class="control-group" style="border:none;">
																	<div class="controls">
																		<label for="weather" class="control-label">&nbsp;</label>
																		<input type="text" name="dutyhead_th" id="dutyhead_th" placeholder="值班首长" value="<?php echo $this->_tpl_vars['workTemp0']['dutyhead_t']; ?>
" class="input-large" data-rule-required="true"/>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td class="span2" style="text-align:center;background-color: #e8e8e8;"><h4>值班员</h4></td>
														<td class="span10" colspan="2">
															<div class="row-fluid">
																<div class="control-group" style="border:none;">
																	<div class="controls">
																		<label for="Healthprevention" class="control-label">&nbsp;</label>
																		<input type="text" name="dutyer_th" id="dutyer_th" placeholder="值班员" value="<?php echo $this->_tpl_vars['workTemp0']['dutyer_t']; ?>
" class="input-large" data-rule-required="true"/>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr class="odd">
															<td class="span3" style="text-align:center;background-color: #dedede;" rowspan="7"><h4>工作情况及<br/>营领导位置</h4></td>
															<td class="span1" style="text-align: center;background-color: #f2f2f2;"><h4>一营</h4></td>
															<td class="span8" >
															<div class="row-fluid">
																<div class="control-group" style="border:none;">
																	<div class="controls">
																		<textarea name="onedaywork1" id="onedaywork1" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp1']['onedaywork1']; ?>
</textarea>
																	</div>
																</div>
															</div>
															</td>
														</tr>
													<tr class="odd">
														<td  style="text-align: center;background-color: #f2f2f2;"><h4>二营</h4></td>
															<td style="">
															<div class="row-fluid">
																<div class="control-group" style="border:none;">
																	<div class="controls">
																<textarea name="onedaywork2" id="onedaywork2" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp2']['onedaywork1']; ?>
</textarea>
																	</div>
																</div>
															</div>
															</td>
														</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>三营</h4></td>
															<td style="">
															<div class="row-fluid">
																<div class="control-group" style="border:none;">
																	<div class="controls">
																		<textarea name="onedaywork3" id="onedaywork3" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp3']['onedaywork1']; ?>
</textarea>
																	</div>
																</div>
															</div>		
															</td>
														</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>四营</h4></td>
															<td style="">
															<div class="row-fluid">
																<div class="control-group" style="border:none;">
																	<div class="controls">
																		<textarea name="onedaywork4" id="onedaywork4" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp4']['onedaywork1']; ?>
</textarea>
																	</div>
																</div>
															</div>		
															</td>
														</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>五营</h4></td>
															<td style="">
															<div class="row-fluid">
																<div class="control-group" style="border:none;">
																	<div class="controls">
																		<textarea name="onedaywork5" id="onedaywork5" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp5']['onedaywork1']; ?>
</textarea>
																	</div>
																</div>
															</div>
															</td>
														</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>警勤连</h4></td>
														<td style="">
															<div class="row-fluid">
																<div class="control-group" style="border:none;">
																	<div class="controls">
																		<textarea name="onedayworkjql" id="onedayworkjql" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp6']['onedaywork1']; ?>
</textarea>
																	</div>
																</div>
															</div>			
														</td>
													</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>教导队</h4></td>
														<td style="">
															<div class="row-fluid">
																<div class="control-group" style="border:none;">
																	<div class="controls">
																		<textarea name="onedayworkjdd" id="onedayworkjdd" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp7']['onedaywork1']; ?>
</textarea>
																	</div>
																</div>
															</div>			
														</td>
													</tr>
													<!-- End 工作情况及营领导位置 -->
													
													<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>上级指示通<br/>知落实情况</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
														<div class="row-fluid">
																<div class="control-group" style="border:none;">
																	<div class="controls">
																		<textarea name="shangjiinforealize" id="shangjiinforealize" rows="5" class="input-block-level" placeholder="无"></textarea>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr class="odd">
														<td style="text-align: center;background-color: #e8e8e8;"><h4>首长机关<br/>下连情况</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<div class="row-fluid">
																<div class="control-group" style="border:none;">
																	<div class="controls">
																		<textarea name="headdownlian" id="headdownlian" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp1']['headdownlian']; ?>
<?php echo $this->_tpl_vars['workTemp2']['headdownlian']; ?>
<?php echo $this->_tpl_vars['workTemp3']['headdownlian']; ?>
<?php echo $this->_tpl_vars['workTemp4']['headdownlian']; ?>
<?php echo $this->_tpl_vars['workTemp5']['headdownlian']; ?>
<?php echo $this->_tpl_vars['workTemp6']['headdownlian']; ?>
<?php echo $this->_tpl_vars['workTemp7']['headdownlian']; ?>
</textarea>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr class="odd">
														<td style="text-align: center;background-color: #e8e8e8;"><h4>营院监控及<br/>重要目标报警情况</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
														<div class="row-fluid">
																<div class="control-group" style="border:none;">
																	<div class="controls">
																		<textarea name="controlwarning" id="controlwarning" rows="5" class="input-block-level" placeholder="无"></textarea>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr class="odd">
														<td style="text-align: center;background-color: #dedede;"><h4>人员抽查情况</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
														<div class="row-fluid">
															<div class="control-group" style="border:none;">
																<div class="controls">
																	<textarea name="persontestcheck" id="persontestcheck" rows="5" class="input-block-level" placeholder="无"></textarea>
																</div>
															</div>
														</div>			
														</td>
													</tr>
													<tr class="odd">
														<td style="text-align: center;background-color: #e8e8e8;"><h4>全团</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y" style="border:none;">
																<tr class="odd" >
																	<td style="background-color: #f2f2f2; text-align: center;" colspan="3">
															<div class="row-fluid">
																<div class="span3">
																	<div class="control-group" style="border:none;">
																		<div class="controls controls-row">
																			<strong>值班首长:</strong>
																				<input type="text" name="dutyhead_t" value="<?php echo $this->_tpl_vars['workTemp0']['dutyhead_t']; ?>
" class="input-block-level" />
																		</div>
																	</div>	
																</div>
																<div class="span3">
																	<div class="control-group" style="border:none;">
																		<div class="controls controls-row">
																			<strong>值班员:</strong>
																			<input type="text" name="dutyer_t" value="<?php echo $this->_tpl_vars['workTemp0']['dutyer_t']; ?>
"    class="input-block-level" />
																		</div>
																	</div>	
																</div>
																<div class="span3">
																	<div class="control-group" style="border:none;">
																		<div class="controls controls-row">
																			<strong>应到人数:</strong>
																			<input type="text" name="shouldnum_t" value="<?php echo $this->_tpl_vars['workTempHuizong']['shouldnum']; ?>
"   class="input-block-level" />
																		</div>
																	</div>	
																</div>
																<div class="span3">
																	<div class="control-group" style="border:none;">
																		<div class="controls controls-row">
																			<strong>实到人数:</strong>
																			<input type="text" name="factnum_t" value="<?php echo $this->_tpl_vars['workTempHuizong']['factnum']; ?>
"  class="input-block-level" />
																		</div>
																	</div>	
																</div>
																<div class="control-group" style="border:none;">
																	<div class="controls controls-row">
																		
																					
																					
																					
																	</div>
																</div>
															</div>
															</td>
															</tr>
															<tr class="odd">
																<td style="text-align: center;background-color: #f2f2f2;"><h4>干部</h4></td>
																<td style="text-align: center;background-color: #f2f2f2;"><h4>士官</h4></td>
																<td style="text-align: center;background-color: #f2f2f2;"><h4>义务兵</h4></td>
															</tr>
															<tr class="odd">
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="gbshouldnum_t" value="<?php echo $this->_tpl_vars['workTempHuizong']['gbshouldnum']; ?>
"  class="span2" />
																		实在：<input type="text" name="gbfactnum_t"  value="<?php echo $this->_tpl_vars['workTempHuizong']['gbfactnum']; ?>
" class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="gbholiday_t" id="gbholiday_t" value="<?php echo $this->_tpl_vars['workTempHuizong']['gbholiday']; ?>
"  class="span2" />
																		外出：<input type="text" name="gbout_t" id="gbout_t" value="<?php echo $this->_tpl_vars['workTempHuizong']['gbout']; ?>
" class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="sgshouldnum_t" id="sgshouldnum_t" value="<?php echo $this->_tpl_vars['workTempHuizong']['sgshouldnum']; ?>
" class="span2" />
																		实在：<input type="text" name="sgfactnum_t" id="sgfactnum_t" value="<?php echo $this->_tpl_vars['workTempHuizong']['sgfactnum']; ?>
" class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="sgholiday_t" id="sgholiday_t" value="<?php echo $this->_tpl_vars['workTempHuizong']['sgholiday']; ?>
" class="span2" />
																		外出：<input type="text" name="sgout_t" id="sgout_t" value="<?php echo $this->_tpl_vars['workTempHuizong']['sgout']; ?>
" class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="ywbshouldnum_t" id="ywbshouldnum_t" value="<?php echo $this->_tpl_vars['workTempHuizong']['ywbshouldnum']; ?>
" class="span2" />
																		实在：<input type="text" name="ywbfactnum_t" id="ywbfactnum_t" value="<?php echo $this->_tpl_vars['workTempHuizong']['ywbfactnum']; ?>
" class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="ywbholiday_t" id="ywbholiday_t" value="<?php echo $this->_tpl_vars['workTempHuizong']['ywbholiday']; ?>
" class="span2" />
																		外出：<input type="text" name="ywbout_t" id="ywbout_t" value="<?php echo $this->_tpl_vars['workTempHuizong']['ywbout']; ?>
" class="span2" />
																		</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="background-color: #f2f2f2;" colspan="3">
																		<div class="row-fluid">
																			<div class="control-group" style="border:none;">
																				<div class="controls">
																					<textarea name="remark_t" id="remark_t" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp0']['remark_t']; ?>
</textarea>
																				</div>
																			</div>
																		</div>
																	</td>
																</tr>	
															</table>
														</td>
													</tr>
													<tr class="odd">
														<td style="text-align: center;background-color: #dedede;"><h4>一营</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y" style="border:none;">
																<tr class="odd">
																	<td style="background-color: #f2f2f2; text-align: center;" colspan="3">
																		<div class="row-fluid">
																			<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																						<strong>值班首长:</strong>
																						<input type="text" name="dutyhead_1" value="<?php echo $this->_tpl_vars['workTemp1']['dutyhead_t']; ?>
" class="input-block-level" />
																						</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>值班员:</strong>
																				<input type="text" name="dutyer_1" value="<?php echo $this->_tpl_vars['workTemp1']['dutyer_t']; ?>
" class="input-block-level" />
																				</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>应到人数:</strong>
																				<input type="text" name="shouldnum_1" value="<?php echo $this->_tpl_vars['workTemp1']['shouldnum_t']; ?>
"  class="input-block-level" />
																				</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>实到人数:</strong>
																				<input type="text" name="factnum_1" value="<?php echo $this->_tpl_vars['workTemp1']['factnum_t']; ?>
" class="input-block-level" />
																				</div>
																					</div>
																				</div>
																			</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>干部</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>士官</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>义务兵</h4></td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="gbshouldnum_1" value="<?php echo $this->_tpl_vars['workTemp1']['gbshouldnum_t']; ?>
" class="span2" />
																		实在：<input type="text" name="gbfactnum_1"  value="<?php echo $this->_tpl_vars['workTemp1']['gbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="gbholiday_1" id="gbholiday_1" value="<?php echo $this->_tpl_vars['workTemp1']['gbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="gbout_1" id="gbout_1" value="<?php echo $this->_tpl_vars['workTemp1']['gbout_t']; ?>
" class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="sgshouldnum_1" id="sgshouldnum_1" value="<?php echo $this->_tpl_vars['workTemp1']['sgshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="sgfactnum_1" id="sgfactnum_1" value="<?php echo $this->_tpl_vars['workTemp1']['sgfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="sgholiday_1" id="sgholiday_1" value="<?php echo $this->_tpl_vars['workTemp1']['sgholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="sgout_1" id="sgout_1" value="<?php echo $this->_tpl_vars['workTemp1']['sgout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="ywbshouldnum_1" id="ywbshouldnum_1" value="<?php echo $this->_tpl_vars['workTemp1']['ywbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="ywbfactnum_1" id="ywbfactnum_1" value="<?php echo $this->_tpl_vars['workTemp1']['ywbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="ywbholiday_1" id="ywbholiday_1" value="<?php echo $this->_tpl_vars['workTemp1']['ywbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="ywbout_1" id="ywbout_1" value="<?php echo $this->_tpl_vars['workTemp1']['ywbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																</tr>
																<tr class="odd">
																<td style="background-color: #f2f2f2;" colspan="3">
																	<div class="control-group" style="border:none;">
																		<div class="controls">
																			<textarea name="remark_1" id="remark_1" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp1']['remark_t']; ?>
</textarea>
																		</div>
																	</div>
																</td>
															</tr>
															</table>
														</td>
													</tr>
													<tr class="odd">
														<td style="text-align: center;background-color: #e8e8e8;"><h4>二营</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y" style="border:none;">
																<tr class="odd">
																	<td style="background-color: #f2f2f2; text-align: center;" colspan="3">
																		<div class="row-fluid">
																			<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																					<strong>值班首长:</strong>
																				<input type="text" name="dutyhead_2" value="<?php echo $this->_tpl_vars['workTemp2']['dutyhead_t']; ?>
"  class="input-block-level" />
																				</div></div></div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>值班员:</strong>
																				<input type="text" name="dutyer_2" value="<?php echo $this->_tpl_vars['workTemp2']['dutyer_t']; ?>
"   class="input-block-level" />
																				</div></div></div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>应到人数:</strong>
																				<input type="text" name="shouldnum_2" value="<?php echo $this->_tpl_vars['workTemp2']['shouldnum_t']; ?>
"  class="input-block-level" />
																				</div></div></div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>实到人数:</strong><span id="factnum_t">
																				<input type="text" name="factnum_2" value="<?php echo $this->_tpl_vars['workTemp2']['factnum_t']; ?>
"  class="input-block-level" />
																				</div></div></div>
																		</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>干部</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>士官</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>义务兵</h4></td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="gbshouldnum_2" value="<?php echo $this->_tpl_vars['workTemp2']['gbshouldnum_t']; ?>
" class="span2" />
																		实在：<input type="text" name="gbfactnum_2"  value="<?php echo $this->_tpl_vars['workTemp2']['gbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="gbholiday_2" id="gbholiday_2" value="<?php echo $this->_tpl_vars['workTemp2']['gbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="gbout_2" id="gbout_2" value="<?php echo $this->_tpl_vars['workTemp2']['gbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="sgshouldnum_2" id="sgshouldnum_2" value="<?php echo $this->_tpl_vars['workTemp2']['sgshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="sgfactnum_2" id="sgfactnum_2" value="<?php echo $this->_tpl_vars['workTemp2']['sgfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="sgholiday_2" id="sgholiday_2" value="<?php echo $this->_tpl_vars['workTemp2']['sgholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="sgout_2" id="sgout_2" value="<?php echo $this->_tpl_vars['workTemp2']['sgout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="ywbshouldnum_2" id="ywbshouldnum_2" value="<?php echo $this->_tpl_vars['workTemp2']['ywbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="ywbfactnum_2" id="ywbfactnum_2" value="<?php echo $this->_tpl_vars['workTemp2']['ywbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="ywbholiday_2" id="ywbholiday_2" value="<?php echo $this->_tpl_vars['workTemp2']['ywbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="ywbout_2" id="ywbout_2" value="<?php echo $this->_tpl_vars['workTemp2']['ywbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="background-color: #f2f2f2;" colspan="3">
																	<div class="row-fluid">
																			<div class="span12">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																		<textarea name="remark_2" id="remark_2" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp2']['remark_t']; ?>
</textarea>
																	</div></div></div></div>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													
													
													<tr class="odd">
														<td style="text-align: center;background-color: #dedede;"><h4>三营</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y" style="border:none;">
																<tr class="odd">
																	<td style="background-color: #f2f2f2; text-align: center;" colspan="3">
																		<div class="row-fluid">
																			<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																					<strong>值班首长:</strong>
																				<input type="text" name="dutyhead_3" value="<?php echo $this->_tpl_vars['workTemp3']['dutyhead_t']; ?>
"  class="input-block-level" />
																				</div></div></div>	
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>值班员:</strong>
																				<input type="text" name="dutyer_3" value="<?php echo $this->_tpl_vars['workTemp3']['dutyer_t']; ?>
" class="input-block-level" />
																				</div></div></div>	
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>应到人数:</strong>
																				<input type="text" name="shouldnum_3" value="<?php echo $this->_tpl_vars['workTemp3']['shouldnum_t']; ?>
"  class="input-block-level" />
																				</div></div></div>	
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>实到人数:</strong>
																				<input type="text" name="factnum_3" value="<?php echo $this->_tpl_vars['workTemp3']['factnum_t']; ?>
"  class="input-block-level" />
																				</div></div></div>
																		</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>干部</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>士官</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>义务兵</h4></td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="gbshouldnum_3" value="<?php echo $this->_tpl_vars['workTemp3']['gbshouldnum_t']; ?>
" class="span2" />
																		实在：<input type="text" name="gbfactnum_3"  value="<?php echo $this->_tpl_vars['workTemp3']['gbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="gbholiday_3" id="gbholiday_3" value="<?php echo $this->_tpl_vars['workTemp3']['gbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="gbout_3" id="gbout_3" value="<?php echo $this->_tpl_vars['workTemp3']['gbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="sgshouldnum_3" id="sgshouldnum_3" value="<?php echo $this->_tpl_vars['workTemp3']['sgshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="sgfactnum_3" id="sgfactnum_3" value="<?php echo $this->_tpl_vars['workTemp3']['sgfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="sgholiday_3" id="sgholiday_3" value="<?php echo $this->_tpl_vars['workTemp3']['sgholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="sgout_3" id="sgout_3" value="<?php echo $this->_tpl_vars['workTemp3']['sgout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="ywbshouldnum_3" id="ywbshouldnum_3" value="<?php echo $this->_tpl_vars['workTemp3']['ywbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="ywbfactnum_3" id="ywbfactnum_3" value="<?php echo $this->_tpl_vars['workTemp3']['ywbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="ywbholiday_3" id="ywbholiday_3" value="<?php echo $this->_tpl_vars['workTemp3']['ywbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="ywbout_3" id="ywbout_3" value="<?php echo $this->_tpl_vars['workTemp3']['ywbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="background-color: #f2f2f2;" colspan="3">
																		<div class="row-fluid">
																			<div class="span12">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																		<textarea name="remark_3" id="remark_3" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp3']['remark_t']; ?>
</textarea>
																		</div></div></div></div>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													
													
													<tr class="odd">
														<td style="text-align: center;background-color: #e8e8e8;"><h4>四营</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y" style="border:none;">
																<tr class="odd">
																	<td style="background-color: #f2f2f2; text-align: center;" colspan="3">
																		<div class="row-fluid">
																			<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																					<strong>值班首长:</strong>
																				<input type="text" name="dutyhead_4" value="<?php echo $this->_tpl_vars['workTemp4']['dutyhead_t']; ?>
"  class="input-block-level" />
																				</div></div></div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>值班员:</strong>
																				<input type="text" name="dutyer_4" value="<?php echo $this->_tpl_vars['workTemp4']['dutyer_t']; ?>
"   class="input-block-level" />
																				</div></div></div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>应到人数:</strong>
																				<input type="text" name="shouldnum_4" value="<?php echo $this->_tpl_vars['workTemp4']['shouldnum_t']; ?>
"  class="input-block-level" />
																				</div></div></div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>实到人数:</strong>
																				<input type="text" name="factnum_4" value="<?php echo $this->_tpl_vars['workTemp4']['factnum_t']; ?>
"  class="input-block-level" />
																				</div></div></div>
																		</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>干部</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>士官</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>义务兵</h4></td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="gbshouldnum_4" value="<?php echo $this->_tpl_vars['workTemp4']['gbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="gbfactnum_4"  value="<?php echo $this->_tpl_vars['workTemp4']['gbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="gbholiday_4" id="gbholiday_4" value="<?php echo $this->_tpl_vars['workTemp4']['gbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="gbout_4" id="gbout_4" value="<?php echo $this->_tpl_vars['workTemp4']['gbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="sgshouldnum_4" id="sgshouldnum_4" value="<?php echo $this->_tpl_vars['workTemp4']['sgshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="sgfactnum_4" id="sgfactnum_4" value="<?php echo $this->_tpl_vars['workTemp4']['sgfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="sgholiday_4" id="sgholiday_4" value="<?php echo $this->_tpl_vars['workTemp4']['sgholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="sgout_4" id="sgout_4" value="<?php echo $this->_tpl_vars['workTemp4']['sgout_t']; ?>
" class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="ywbshouldnum_4" id="ywbshouldnum_4" value="<?php echo $this->_tpl_vars['workTemp4']['ywbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="ywbfactnum_4" id="ywbfactnum_4" value="<?php echo $this->_tpl_vars['workTemp4']['ywbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="ywbholiday_4" id="ywbholiday_4" value="<?php echo $this->_tpl_vars['workTemp4']['ywbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="ywbout_4" id="ywbout_4" value="<?php echo $this->_tpl_vars['workTemp4']['ywbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="background-color: #f2f2f2;" colspan="3">
																		<div class="row-fluid">
																		<div class="span12">
																			<div class="control-group" style="border:none;">
																				<div class="controls controls-row">
																					<textarea name="remark_4" id="remark_4" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp4']['remark_t']; ?>
</textarea>
																			</div></div></div></div>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													
													
													<tr class="odd">
														<td style="text-align: center;background-color: #dedede;"><h4>五营</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y" style="border:none;">
																<tr class="odd">
																	<td style="background-color: #f2f2f2; text-align: center;" colspan="3">
																		<div class="row-fluid">
																			<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																			<strong>值班首长:</strong>
																				<input type="text" name="dutyhead_5" value="<?php echo $this->_tpl_vars['workTemp5']['dutyhead_t']; ?>
"  class="input-block-level" />
																				</div></div></div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>值班员:</strong>
																				<input type="text" name="dutyer_5" value="<?php echo $this->_tpl_vars['workTemp5']['dutyer_t']; ?>
"   class="input-block-level" />
																				</div></div></div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>应到人数:</strong>
																				<input type="text" name="shouldnum_5" value="<?php echo $this->_tpl_vars['workTemp5']['shouldnum_t']; ?>
"   class="input-block-level" />
																				</div></div></div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>实到人数:</strong>
																				<input type="text" name="factnum_5" value="<?php echo $this->_tpl_vars['workTemp5']['factnum_t']; ?>
"  class="input-block-level" />
																				</div></div>
																		</div>
																		</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>干部</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>士官</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>义务兵</h4></td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="gbshouldnum_5" value="<?php echo $this->_tpl_vars['workTemp5']['gbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="gbfactnum_5"  value="<?php echo $this->_tpl_vars['workTemp5']['gbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="gbholiday_5" id="gbholiday_5" value="<?php echo $this->_tpl_vars['workTemp5']['gbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="gbout_5" id="gbout_5" value="<?php echo $this->_tpl_vars['workTemp5']['gbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="sgshouldnum_5" id="sgshouldnum_5" value="<?php echo $this->_tpl_vars['workTemp5']['sgshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="sgfactnum_5" id="sgfactnum_5" value="<?php echo $this->_tpl_vars['workTemp5']['sgfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="sgholiday_5" id="sgholiday_t" value="<?php echo $this->_tpl_vars['workTemp5']['sgholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="sgout_5" id="sgout_t" value="<?php echo $this->_tpl_vars['workTemp5']['sgout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="ywbshouldnum_5" id="ywbshouldnum_5" value="<?php echo $this->_tpl_vars['workTemp5']['ywbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="ywbfactnum_5" id="ywbfactnum_5" value="<?php echo $this->_tpl_vars['workTemp5']['ywbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="ywbholiday_5" id="ywbholiday_5" value="<?php echo $this->_tpl_vars['workTemp5']['ywbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="ywbout_5" id="ywbout_5" value="<?php echo $this->_tpl_vars['workTemp5']['ywbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																</tr>
																<tr class="odd">
														<td style="background-color: #f2f2f2;" colspan="3">
														<div class="row-fluid">
															<div class="span12">
																<div class="control-group" style="border:none;">
																	<div class="controls controls-row">
															<textarea name="remark_5" id="remark_5" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp5']['remark_t']; ?>
</textarea>
															</div></div></div></div>
														</td>
													</tr>
															</table>
														</td>
													</tr>
													<tr class="odd">
														<td style="text-align: center;background-color: #e8e8e8;"><h4>警勤连</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y" style="border:none;">
																<tr class="odd">
																	<td style="background-color: #f2f2f2; text-align: center;" colspan="3">
																		<div class="row-fluid">
																			<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>值班首长:</strong>
																				<input type="text" name="dutyhead_jql" value="<?php echo $this->_tpl_vars['workTemp6']['dutyhead_t']; ?>
"  class="input-block-level" />
																				</div></div></div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>值班员:</strong>
																				<input type="text" name="dutyer_jql" value="<?php echo $this->_tpl_vars['workTemp6']['dutyer_t']; ?>
"   class="input-block-level" />
																				</div></div></div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>应到人数:</strong>
																				<input type="text" name="shouldnum_jql" value="<?php echo $this->_tpl_vars['workTemp6']['shouldnum_t']; ?>
"  class="input-block-level" />
																				</div></div></div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>实到人数:</strong>
																				<input type="text" name="factnum_jql" value="<?php echo $this->_tpl_vars['workTemp6']['factnum_t']; ?>
"  class="input-block-level" />
																				</div></div>
																		</div>
																		</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>干部</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>士官</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>义务兵</h4></td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="gbshouldnum_jql" value="<?php echo $this->_tpl_vars['workTemp6']['gbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="gbfactnum_jql"  value="<?php echo $this->_tpl_vars['workTemp6']['gbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="gbholiday_jql" id="gbholiday_jql" value="<?php echo $this->_tpl_vars['workTemp6']['gbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="gbout_jql" id="gbout_jql" value="<?php echo $this->_tpl_vars['workTemp6']['gbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="sgshouldnum_jql" id="sgshouldnum_jql" value="<?php echo $this->_tpl_vars['workTemp6']['sgshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="sgfactnum_jql" id="sgfactnum_jql" value="<?php echo $this->_tpl_vars['workTemp6']['sgfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="sgholiday_jql" id="sgholiday_jql" value="<?php echo $this->_tpl_vars['workTemp6']['sgholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="sgout_jql" id="sgout_jql" value="<?php echo $this->_tpl_vars['workTemp6']['sgout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="ywbshouldnum_jql" id="ywbshouldnum_jql" value="<?php echo $this->_tpl_vars['workTemp6']['ywbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="ywbfactnum_jql" id="ywbfactnum_jql" value="<?php echo $this->_tpl_vars['workTemp6']['ywbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="ywbholiday_jql" id="ywbholiday_jql" value="<?php echo $this->_tpl_vars['workTemp6']['ywbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="ywbout_jql" id="ywbout_jql" value="<?php echo $this->_tpl_vars['workTemp6']['ywbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="background-color: #f2f2f2;" colspan="3">
																	<div class="row-fluid">
																			<div class="span12">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																		<textarea name="remark_jql" id="remark_jql" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp6']['remark_t']; ?>
</textarea>
																		</div></div></div></div>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													
													<tr class="odd">
														<td style="text-align: center;background-color: #dedede;"><h4>教导队</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y" style="border:none;">
																<tr class="odd">
																	<td style="background-color: #f2f2f2; text-align: center;" colspan="3">
																		<div class="row-fluid">
																			<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																			<strong>值班首长:</strong>
																				<input type="text" name="dutyhead_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['dutyhead_t']; ?>
"  class="input-block-level" />
																				</div></div></div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>值班员:</strong>
																				<input type="text" name="dutyer_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['dutyer_t']; ?>
"  class="input-block-level" />
																				</div></div></div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>应到人数:</strong>
																				<input type="text" name="shouldnum_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['shouldnum_t']; ?>
"  class="input-block-level" />
																				</div></div></div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<strong>实到人数:</strong>
																				<input type="text" name="factnum_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['factnum_t']; ?>
"  class="input-block-level" />
																				</div></div></div>
																		</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>干部</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>士官</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>义务兵</h4></td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="gbshouldnum_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['gbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="gbfactnum_jdd"  value="<?php echo $this->_tpl_vars['workTemp7']['gbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="gbholiday_jdd" id="gbholiday_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['gbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="gbout_jdd" id="gbout_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['gbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="sgshouldnum_jdd" id="sgshouldnum_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['sgshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="sgfactnum_jdd" id="sgfactnum_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['sgfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="sgholiday_jdd" id="sgholiday_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['sgholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="sgout_jdd" id="sgout_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['sgout_t']; ?>
" class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="ywbshouldnum_jdd" id="ywbshouldnum_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['ywbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="ywbfactnum_jdd" id="ywbfactnum_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['ywbfactnum_t']; ?>
" class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="ywbholiday_jdd" id="ywbholiday_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['ywbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="ywbout_jdd" id="ywbout_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['ywbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="background-color: #f2f2f2;" colspan="3">
																	<div class="row-fluid">
																			<div class="span12">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																		<textarea name="remark_jdd" id="remark_jdd" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp7']['remark_t']; ?>
</textarea>
																		</div></div></div></div>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr class="odd">
														<td style="text-align: center;background-color: #e8e8e8;" ><h4>车辆动用情况</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y" style="border:none;">
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>请示台次</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>动用台次</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>部队安全情况</h4></td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;"><input type="text" name="vehiclepleasenum" id="vehiclepleasenum" placeholder="无" class="input-block-level" data-rule-required="true"></td>
																	<td style="text-align: center;"><input type="text" name="vehicleusednum" id="vehicleusednum" placeholder="无" class="input-block-level" data-rule-required="true"></td>
																	<td style="text-align: center;"><input type="text" name="safesituation" id="safesituation" placeholder="无" class="input-block-level" data-rule-required="true"></td>
																</tr>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
											<div class="form-actions offset8">
												<button type="submit" class="btn btn-primary">汇总</button>
											</div>
											</form>
											</div>
										</div>
									</div>
									
								</div>
								
							</div>
							
						</div>
					<!-- End 单个表格 -->
										</div>
					<!-- End 表格组 -->
			</div>
			
			<?php elseif ($this->_tpl_vars['flag'] == 't_updatehuizong'): ?>
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
							<i class="icon-angle-right"></i>
						</li>
					</ul>
					<div class="close-bread">
						<a><i class="icon-remove"></i></a>
					</div>
				</div>
				<!-- Begin 表格组 -->
					<div class="row-fluid">
					<!-- Begin 单个表格 -->
						<div class="span12">
							<div class="box box-color box-bordered">
								<div class="box-title">
									<h3>
										<i class="icon-table"></i>
									</h3>
									<div class="span5">
										<h3>汇报单位:<?php echo $this->_tpl_vars['unit']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;</h3>
										<h3>值班时间:<?php echo $this->_tpl_vars['date']; ?>
</h3>
									</div>
									
									<!-- 
									<div class="pull-right span5">
										<h3>值班首长:########&nbsp;&nbsp;&nbsp;&nbsp;</h3>
										<h3>值班员:########</h3>
									</div> -->
								</div>
								<div class="box-content nopadding">
									<div class="dataTables_wrapper">
										<div class="dataTables_scroll">
												<div class="dataTables_scrollBody" style="overflow: auto; width: 100%; "  style="margin-left: 0px;">
												<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-bordered form-vertical ' id="bb">
												<table  class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
												<tbody>
													<!-- Begin 工作情况及营领导位置 -->
													<tr>
														<td class="span2" style="text-align:center;background-color: #dedede;"><h4>值班首长</h4></td>
														<td colspan="2">
															<div class="control-group" style="border:none;">
																<div class="controls">
																	<label for="weather" class="control-label">&nbsp;</label>
																	<input type="text" name="dutyhead_th" id="dutyhead_th" placeholder="值班首长" value="<?php echo $this->_tpl_vars['workTemp']['dutyhead']; ?>
" class="input" data-rule-required="true">
																	<input type="hidden" name="inputtime" id="inputtime" value="<?php echo $this->_tpl_vars['workTemp']['inputtime']; ?>
" class="input" >
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td class="span2" style="text-align:center;background-color: #e8e8e8;"><h4>值班员</h4></td>
														<td colspan="2">
															<div class="control-group" style="border:none;">
																<div class="controls">
																	<label for="Healthprevention" class="control-label">&nbsp;</label>
																	<input type="text" name="dutyer_th" id="dutyer_th" placeholder="值班员" value="<?php echo $this->_tpl_vars['workTemp']['dutyer']; ?>
" class="input" data-rule-required="true">
																</div>
															</div>
														</td>
													</tr>
														<tr class="odd">
															<td class="span3" style="text-align:center;background-color: #dedede;" rowspan="7"><h4>工作情况及<br/>营领导位置</h4></td>
															<td class="span1" style="text-align: center;background-color: #f2f2f2;"><h4>一营</h4></td>
															<td class="span8" >
																<textarea name="onedaywork1" id="onedaywork1" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp1']['onedaywork1']; ?>
</textarea>
															</td>
														</tr>
														<tr class="odd">
														<td  style="text-align: center;background-color: #f2f2f2;"><h4>二营</h4></td>
															<td style="">
																<textarea name="onedaywork2" id="onedaywork2" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp2']['onedaywork1']; ?>
</textarea>
															</td>
														</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>三营</h4></td>
															<td style="">
																<textarea name="onedaywork3" id="onedaywork3" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp3']['onedaywork1']; ?>
</textarea>
															</td>
														</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>四营</h4></td>
															<td style="">
																<textarea name="onedaywork4" id="onedaywork4" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp4']['onedaywork1']; ?>
</textarea>
															</td>
														</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>五营</h4></td>
															<td style="">
																<textarea name="onedaywork5" id="onedaywork5" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp5']['onedaywork1']; ?>
</textarea>
															</td>
														</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>警勤连</h4></td>
														<td style="">
															<textarea name="onedayworkjql" id="onedayworkjql" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp6']['onedaywork1']; ?>
</textarea>
														</td>
													</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>教导队</h4></td>
														<td style="">
															<textarea name="onedayworkjdd" id="onedayworkjdd" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp7']['onedaywork1']; ?>
</textarea>
														</td>
													</tr>
													<!-- End 工作情况及营领导位置 -->
													
													<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>上级指示通<br/>知落实情况</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<textarea name="shangjiinforealize" id="shangjiinforealize" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp']['shangjiinforealize']; ?>
</textarea>
														</td>
													</tr>
													<tr class="odd">
														<td style="text-align: center;background-color: #e8e8e8;"><h4>首长机关<br/>下连情况</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<textarea name="headdownlian" id="headdownlian" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp']['headdownlian']; ?>
</textarea>
														</td>
													</tr>
													<tr class="odd">
														<td style="text-align: center;background-color: #e8e8e8;"><h4>营院监控及<br/>重要目标报警情况</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
														<div class="row-fluid">
																<div class="control-group" style="border:none;">
																	<div class="controls">
																		<textarea name="controlwarning" id="controlwarning" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp']['controlwarning']; ?>
</textarea>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr class="odd">
														<td style="text-align: center;background-color: #dedede;"><h4>人员抽查情况</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<textarea name="persontestcheck" id="persontestcheck" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp']['persontestcheck']; ?>
</textarea>
														</td>
													</tr>
													
													
													<tr class="odd">
														<td style="text-align: center;background-color: #e8e8e8;" rowspan="2"><h4>全团</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
																<tr class="odd">
																	<td style="background-color: #f2f2f2; text-align: center;" colspan="3">
																	<div class="row-fluid">
																			<div class="span3">
																						<div class="control-group" style="border:none;">
																						<h4><strong>值班首长</strong></h4>
																						<div class="controls controls-row" id="dutyhead_t">
																							<input type="text" name="dutyhead_t" value="<?php echo $this->_tpl_vars['workTemp0']['dutyhead_t']; ?>
" class="input-block-level"/>
																							</div>
																						</div>
																					</div>
																					<div class="span3">
																						<div class="control-group" style="border:none;">
																							<h4><strong>值班员</strong></h4>
																							<div class="controls controls-row" id="dutyer_t" style="">
																							<input type="text" name="dutyer_t" value="<?php echo $this->_tpl_vars['workTemp0']['dutyer_t']; ?>
"  class="input-block-level" />
																							</div>
																						</div>
																					</div>
																					<div class="span3">
																						<div class="control-group" style="border:none;">
																							<h4><strong>应到人数</strong></h4>
																							<div class="controls controls-row" id="shouldnum_t">
																							<input type="text" name="shouldnum_t" value="<?php echo $this->_tpl_vars['workTemp0']['shouldnum_t']; ?>
" class="input-block-level" />
																							</div>
																						</div>
																					</div>
																					<div class="span3">
																						<div class="control-group" style="border:none;">
																							<h4><strong>实到人数</strong></h4>
																							<div class="controls controls-row" id="factnum_t">
																							<input type="text" name="factnum_t" value="<?php echo $this->_tpl_vars['workTemp0']['factnum_t']; ?>
"  class="input-block-level"/>
																							</div>
																						</div>
																					</div>
																			</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>干部</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>士官</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>义务兵</h4></td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="gbshouldnum_t" value="<?php echo $this->_tpl_vars['workTemp0']['gbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="gbfactnum_t"  value="<?php echo $this->_tpl_vars['workTemp0']['gbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="gbholiday_t" id="gbholiday_t" value="<?php echo $this->_tpl_vars['workTemp0']['gbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="gbout_t" id="gbout_t" value="<?php echo $this->_tpl_vars['workTemp0']['gbout_t']; ?>
" class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="sgshouldnum_t" id="sgshouldnum_t" value="<?php echo $this->_tpl_vars['workTemp0']['sgshouldnum_t']; ?>
" class="span2" />
																		实在：<input type="text" name="sgfactnum_t" id="sgfactnum_t" value="<?php echo $this->_tpl_vars['workTemp0']['sgfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="sgholiday_t" id="sgholiday_t" value="<?php echo $this->_tpl_vars['workTemp0']['sgholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="sgout_t" id="sgout_t" value="<?php echo $this->_tpl_vars['workTemp0']['sgout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="ywbshouldnum_t" id="ywbshouldnum_t" value="<?php echo $this->_tpl_vars['workTemp0']['ywbshouldnum_t']; ?>
" class="span2" />
																		实在：<input type="text" name="ywbfactnum_t" id="ywbfactnum_t" value="<?php echo $this->_tpl_vars['workTemp0']['ywbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="ywbholiday_t" id="ywbholiday_t" value="<?php echo $this->_tpl_vars['workTemp0']['ywbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="ywbout_t" id="ywbout_t" value="<?php echo $this->_tpl_vars['workTemp0']['ywbout_t']; ?>
" class="span2" />
																		</div>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr class="odd">
														<td style="background-color: #f2f2f2;" colspan="2">
															<textarea name="remark_t" id="remark_t" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp0']['remark_t']; ?>
</textarea>
														</td>
													</tr>
													
													<tr class="odd">
														<td style="text-align: center;background-color: #dedede;" rowspan="2"><h4>一营</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
																<tr class="odd">
																	<td style="background-color: #f2f2f2; text-align: center;" colspan="3">
																	<div class="row-fluid">
																			<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																						<h4><strong>值班首长:</strong></h4>
																						<input type="text" name="dutyhead_1" value="<?php echo $this->_tpl_vars['workTemp1']['dutyhead_t']; ?>
"  class="input-block-level" />
																						</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>值班员:</strong></h4>
																				<input type="text" name="dutyer_1" value="<?php echo $this->_tpl_vars['workTemp1']['dutyer_t']; ?>
"   class="input-block-level" />
																				</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>应到人数:</strong></h4>
																				<input type="text" name="shouldnum_1" value="<?php echo $this->_tpl_vars['workTemp1']['shouldnum_t']; ?>
"  class="input-block-level" />
																				</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>实到人数:</strong></h4>
																				<input type="text" name="factnum_1" value="<?php echo $this->_tpl_vars['workTemp1']['factnum_t']; ?>
"  class="input-block-level" />
																				</div>
																					</div>
																				</div>
																			</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>干部</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>士官</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>义务兵</h4></td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="gbshouldnum_1" value="<?php echo $this->_tpl_vars['workTemp1']['gbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="gbfactnum_1"  value="<?php echo $this->_tpl_vars['workTemp1']['gbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="gbholiday_1" id="gbholiday_1" value="<?php echo $this->_tpl_vars['workTemp1']['gbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="gbout_1" id="gbout_1" value="<?php echo $this->_tpl_vars['workTemp1']['gbout_t']; ?>
" class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="sgshouldnum_1" id="sgshouldnum_1" value="<?php echo $this->_tpl_vars['workTemp1']['sgshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="sgfactnum_1" id="sgfactnum_1" value="<?php echo $this->_tpl_vars['workTemp1']['sgfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="sgholiday_1" id="sgholiday_1" value="<?php echo $this->_tpl_vars['workTemp1']['sgholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="sgout_1" id="sgout_1" value="<?php echo $this->_tpl_vars['workTemp1']['sgout_t']; ?>
" class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="ywbshouldnum_1" id="ywbshouldnum_1" value="<?php echo $this->_tpl_vars['workTemp1']['ywbshouldnum_t']; ?>
" class="span2" />
																		实在：<input type="text" name="ywbfactnum_1" id="ywbfactnum_1" value="<?php echo $this->_tpl_vars['workTemp1']['ywbfactnum_t']; ?>
" class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="ywbholiday_1" id="ywbholiday_1" value="<?php echo $this->_tpl_vars['workTemp1']['ywbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="ywbout_1" id="ywbout_1" value="<?php echo $this->_tpl_vars['workTemp1']['ywbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr class="odd">
														<td style="background-color: #f2f2f2;" colspan="2">
															<textarea name="remark_1" id="remark_1" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp1']['remark_t']; ?>
</textarea>
														</td>
													</tr>
													
													<tr class="odd">
														<td style="text-align: center;background-color: #e8e8e8;" rowspan="2"><h4>二营</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
																<tr class="odd">
																	<td style="background-color: #f2f2f2; text-align: center;" colspan="3">
																	<div class="row-fluid">
																			<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																						<h4><strong>值班首长:</strong></h4>
																						<input type="text" name="dutyhead_2" value="<?php echo $this->_tpl_vars['workTemp2']['dutyhead_t']; ?>
" class="input-block-level" />
																						</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>值班员:</strong></h4>
																				<input type="text" name="dutyer_2" value="<?php echo $this->_tpl_vars['workTemp2']['dutyer_t']; ?>
"  class="input-block-level" />
																				</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>应到人数:</strong></h4>
																				<input type="text" name="shouldnum_2" value="<?php echo $this->_tpl_vars['workTemp2']['shouldnum_t']; ?>
"  class="input-block-level" />
																				</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>实到人数:</strong></h4>
																				<input type="text" name="factnum_2" value="<?php echo $this->_tpl_vars['workTemp2']['factnum_t']; ?>
"  class="input-block-level" />
																				</div>
																					</div>
																				</div>
																			</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>干部</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>士官</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>义务兵</h4></td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="gbshouldnum_2" value="<?php echo $this->_tpl_vars['workTemp2']['gbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="gbfactnum_2"  value="<?php echo $this->_tpl_vars['workTemp2']['gbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="gbholiday_2" id="gbholiday_2" value="<?php echo $this->_tpl_vars['workTemp2']['gbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="gbout_2" id="gbout_2" value="<?php echo $this->_tpl_vars['workTemp2']['gbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="sgshouldnum_2" id="sgshouldnum_2" value="<?php echo $this->_tpl_vars['workTemp2']['sgshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="sgfactnum_2" id="sgfactnum_2" value="<?php echo $this->_tpl_vars['workTemp2']['sgfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="sgholiday_2" id="sgholiday_2" value="<?php echo $this->_tpl_vars['workTemp2']['sgholiday_t']; ?>
" class="span2" />
																		外出：<input type="text" name="sgout_2" id="sgout_2" value="<?php echo $this->_tpl_vars['workTemp2']['sgout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="ywbshouldnum_2" id="ywbshouldnum_2" value="<?php echo $this->_tpl_vars['workTemp2']['ywbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="ywbfactnum_2" id="ywbfactnum_2" value="<?php echo $this->_tpl_vars['workTemp2']['ywbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="ywbholiday_2" id="ywbholiday_2" value="<?php echo $this->_tpl_vars['workTemp2']['ywbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="ywbout_2" id="ywbout_2" value="<?php echo $this->_tpl_vars['workTemp2']['ywbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr class="odd">
														<td style="background-color: #f2f2f2;" colspan="2">
															<textarea name="remark_2" id="remark_2" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp2']['remark_t']; ?>
</textarea>
														</td>
													</tr>
													
													<tr class="odd">
														<td style="text-align: center;background-color: #dedede;" rowspan="2"><h4>三营</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
																<tr class="odd">
																	<td style="background-color: #f2f2f2; text-align: center;" colspan="3">
																	<div class="row-fluid">
																			<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																						<h4><strong>值班首长:</strong></h4>
																						<input type="text" name="dutyhead_3" value="<?php echo $this->_tpl_vars['workTemp3']['dutyhead_t']; ?>
" class="input-block-level" />
																						</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>值班员:</strong></h4>
																				<input type="text" name="dutyer_3" value="<?php echo $this->_tpl_vars['workTemp3']['dutyer_t']; ?>
"  class="input-block-level" />
																				</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>应到人数:</strong></h4>
																				<input type="text" name="shouldnum_3" value="<?php echo $this->_tpl_vars['workTemp3']['shouldnum_t']; ?>
"  class="input-block-level" />
																				</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>实到人数:</strong></h4>
																				<input type="text" name="factnum_3" value="<?php echo $this->_tpl_vars['workTemp3']['factnum_t']; ?>
"  class="input-block-level" />
																				</div>
																					</div>
																				</div>
																			</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>干部</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>士官</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>义务兵</h4></td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="gbshouldnum_3" value="<?php echo $this->_tpl_vars['workTemp3']['gbshouldnum_t']; ?>
" class="span2" />
																		实在：<input type="text" name="gbfactnum_3"  value="<?php echo $this->_tpl_vars['workTemp3']['gbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="gbholiday_3" id="gbholiday_3" value="<?php echo $this->_tpl_vars['workTemp3']['gbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="gbout_3" id="gbout_3" value="<?php echo $this->_tpl_vars['workTemp3']['gbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="sgshouldnum_3" id="sgshouldnum_3" value="<?php echo $this->_tpl_vars['workTemp3']['sgshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="sgfactnum_3" id="sgfactnum_3" value="<?php echo $this->_tpl_vars['workTemp3']['sgfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="sgholiday_3" id="sgholiday_3" value="<?php echo $this->_tpl_vars['workTemp3']['sgholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="sgout_3" id="sgout_3" value="<?php echo $this->_tpl_vars['workTemp3']['sgout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="ywbshouldnum_3" id="ywbshouldnum_3" value="<?php echo $this->_tpl_vars['workTemp3']['ywbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="ywbfactnum_3" id="ywbfactnum_3" value="<?php echo $this->_tpl_vars['workTemp3']['ywbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="ywbholiday_3" id="ywbholiday_3" value="<?php echo $this->_tpl_vars['workTemp3']['ywbholiday_t']; ?>
" class="span2" />
																		外出：<input type="text" name="ywbout_3" id="ywbout_3" value="<?php echo $this->_tpl_vars['workTemp3']['ywbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr class="odd">
														<td style="background-color: #f2f2f2;" colspan="2">
															<textarea name="remark_3" id="remark_3" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp3']['remark_t']; ?>
</textarea>
														</td>
													</tr>
													
													<tr class="odd">
														<td style="text-align: center;background-color: #e8e8e8;" rowspan="2"><h4>四营</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
																<tr class="odd">
																	<td style="background-color: #f2f2f2; text-align: center;" colspan="3">
																	<div class="row-fluid">
																			<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																						<h4><strong>值班首长:</strong></h4>
																						<input type="text" name="dutyhead_4" value="<?php echo $this->_tpl_vars['workTemp4']['dutyhead_t']; ?>
"  class="input-block-level" />
																						</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>值班员:</strong></h4>
																				<input type="text" name="dutyer_4" value="<?php echo $this->_tpl_vars['workTemp4']['dutyer_t']; ?>
"   class="input-block-level" />
																				</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>应到人数:</strong></h4>
																				<input type="text" name="shouldnum_4" value="<?php echo $this->_tpl_vars['workTemp4']['shouldnum_t']; ?>
"  class="input-block-level" />
																				</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>实到人数:</strong></h4>
																				<input type="text" name="factnum_4" value="<?php echo $this->_tpl_vars['workTemp4']['factnum_t']; ?>
"  class="input-block-level" />
																				</div>
																					</div>
																				</div>
																			</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>干部</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>士官</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>义务兵</h4></td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="gbshouldnum_4" value="<?php echo $this->_tpl_vars['workTemp4']['gbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="gbfactnum_4"  value="<?php echo $this->_tpl_vars['workTemp4']['gbfactnum_t']; ?>
" class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="gbholiday_4" id="gbholiday_4" value="<?php echo $this->_tpl_vars['workTemp4']['gbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="gbout_4" id="gbout_4" value="<?php echo $this->_tpl_vars['workTemp4']['gbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="sgshouldnum_4" id="sgshouldnum_4" value="<?php echo $this->_tpl_vars['workTemp4']['sgshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="sgfactnum_4" id="sgfactnum_4" value="<?php echo $this->_tpl_vars['workTemp4']['sgfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="sgholiday_4" id="sgholiday_4" value="<?php echo $this->_tpl_vars['workTemp4']['sgholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="sgout_4" id="sgout_4" value="<?php echo $this->_tpl_vars['workTemp4']['sgout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="ywbshouldnum_4" id="ywbshouldnum_4" value="<?php echo $this->_tpl_vars['workTemp4']['ywbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="ywbfactnum_4" id="ywbfactnum_4" value="<?php echo $this->_tpl_vars['workTemp4']['ywbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="ywbholiday_4" id="ywbholiday_4" value="<?php echo $this->_tpl_vars['workTemp4']['ywbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="ywbout_4" id="ywbout_4" value="<?php echo $this->_tpl_vars['workTemp4']['ywbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr class="odd">
														<td style="background-color: #f2f2f2;" colspan="2">
															<textarea name="remark_4" id="remark_4" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp4']['remark_t']; ?>
</textarea>
														</td>
													</tr>
													
													<tr class="odd">
														<td style="text-align: center;background-color: #dedede;" rowspan="2"><h4>五营</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
																<tr class="odd">
																	<td style="background-color: #f2f2f2; text-align: center;" colspan="3">
																	<div class="row-fluid">
																			<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																						<h4><strong>值班首长:</strong></h4>
																						<input type="text" name="dutyhead_5" value="<?php echo $this->_tpl_vars['workTemp5']['dutyhead_t']; ?>
"  class="input-block-level" />
																						</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>值班员:</strong></h4>
																				<input type="text" name="dutyer_5" value="<?php echo $this->_tpl_vars['workTemp5']['dutyer_t']; ?>
"  class="input-block-level" />
																				</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>应到人数:</strong></h4>
																				<input type="text" name="shouldnum_5" value="<?php echo $this->_tpl_vars['workTemp5']['shouldnum_t']; ?>
" class="input-block-level" />
																				</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>实到人数:</strong></h4>
																				<input type="text" name="factnum_5" value="<?php echo $this->_tpl_vars['workTemp5']['factnum_t']; ?>
"  class="input-block-level" />
																				</div>
																					</div>
																				</div>
																			</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>干部</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>士官</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>义务兵</h4></td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="gbshouldnum_5" value="<?php echo $this->_tpl_vars['workTemp5']['gbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="gbfactnum_5"  value="<?php echo $this->_tpl_vars['workTemp5']['gbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="gbholiday_5" id="gbholiday_5" value="<?php echo $this->_tpl_vars['workTemp5']['gbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="gbout_5" id="gbout_5" value="<?php echo $this->_tpl_vars['workTemp5']['gbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="sgshouldnum_5" id="sgshouldnum_5" value="<?php echo $this->_tpl_vars['workTemp5']['sgshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="sgfactnum_5" id="sgfactnum_5" value="<?php echo $this->_tpl_vars['workTemp5']['sgfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="sgholiday_5" id="sgholiday_t" value="<?php echo $this->_tpl_vars['workTemp5']['sgholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="sgout_5" id="sgout_t" value="<?php echo $this->_tpl_vars['workTemp5']['sgout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="ywbshouldnum_5" id="ywbshouldnum_5" value="<?php echo $this->_tpl_vars['workTemp5']['ywbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="ywbfactnum_5" id="ywbfactnum_5" value="<?php echo $this->_tpl_vars['workTemp5']['ywbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="ywbholiday_5" id="ywbholiday_5" value="<?php echo $this->_tpl_vars['workTemp5']['ywbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="ywbout_5" id="ywbout_5" value="<?php echo $this->_tpl_vars['workTemp5']['ywbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr class="odd">
														<td style="background-color: #f2f2f2;" colspan="2">
															<textarea name="remark_5" id="remark_5" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp5']['remark_t']; ?>
</textarea>
														</td>
													</tr>
													<tr class="odd">
														<td style="text-align: center;background-color: #e8e8e8;" rowspan="2"><h4>警勤连</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
																<tr class="odd">
																	<td style="background-color: #f2f2f2; text-align: center;" colspan="3">
																	<div class="row-fluid">
																			<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																						<h4><strong>值班首长:</strong></h4>
																						<input type="text" name="dutyhead_jql" value="<?php echo $this->_tpl_vars['workTemp6']['dutyhead_t']; ?>
"  class="input-block-level" />
																						</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>值班员:</strong></h4>
																				<input type="text" name="dutyer_jql" value="<?php echo $this->_tpl_vars['workTemp6']['dutyer_t']; ?>
"   class="input-block-level" />
																				</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>应到人数:</strong></h4>
																				<input type="text" name="shouldnum_jql" value="<?php echo $this->_tpl_vars['workTemp6']['shouldnum_t']; ?>
"  class="input-block-level" />
																				</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>实到人数:</strong></h4>
																				<input type="text" name="factnum_jql" value="<?php echo $this->_tpl_vars['workTemp6']['factnum_t']; ?>
"  class="input-block-level" />
																				</div>
																					</div>
																				</div>
																			</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>干部</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>士官</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>义务兵</h4></td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="gbshouldnum_jql" value="<?php echo $this->_tpl_vars['workTemp6']['gbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="gbfactnum_jql"  value="<?php echo $this->_tpl_vars['workTemp6']['gbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="gbholiday_jql" id="gbholiday_jql" value="<?php echo $this->_tpl_vars['workTemp6']['gbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="gbout_jql" id="gbout_jql" value="<?php echo $this->_tpl_vars['workTemp6']['gbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="sgshouldnum_jql" id="sgshouldnum_jql" value="<?php echo $this->_tpl_vars['workTemp6']['sgshouldnum_t']; ?>
" class="span2" />
																		实在：<input type="text" name="sgfactnum_jql" id="sgfactnum_jql" value="<?php echo $this->_tpl_vars['workTemp6']['sgfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="sgholiday_jql" id="sgholiday_jql" value="<?php echo $this->_tpl_vars['workTemp6']['sgholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="sgout_jql" id="sgout_jql" value="<?php echo $this->_tpl_vars['workTemp6']['sgout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="ywbshouldnum_jql" id="ywbshouldnum_jql" value="<?php echo $this->_tpl_vars['workTemp6']['ywbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="ywbfactnum_jql" id="ywbfactnum_jql" value="<?php echo $this->_tpl_vars['workTemp6']['ywbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="ywbholiday_jql" id="ywbholiday_jql" value="<?php echo $this->_tpl_vars['workTemp6']['ywbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="ywbout_jql" id="ywbout_jql" value="<?php echo $this->_tpl_vars['workTemp6']['ywbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr class="odd">
														<td style="background-color: #f2f2f2;" colspan="2">
															<textarea name="remark_jql" id="remark_jql" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp6']['remark_t']; ?>
</textarea>
														</td>
													</tr>
													<tr class="odd">
														<td style="text-align: center;background-color: #dedede;" rowspan="2"><h4>教导队</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
																<tr class="odd">
																	<td style="background-color: #f2f2f2; text-align: center;" colspan="3">
																	<div class="row-fluid">
																			<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																						<h4><strong>值班首长:</strong></h4>
																						<input type="text" name="dutyhead_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['dutyhead_t']; ?>
"  class="input-block-level" />
																						</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>值班员:</strong></h4>
																				<input type="text" name="dutyer_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['dutyer_t']; ?>
"  class="input-block-level" />
																				</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>应到人数:</strong></h4>
																				<input type="text" name="shouldnum_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['shouldnum_t']; ?>
"  class="input-block-level" />
																				</div>
																					</div>
																				</div>
																				<div class="span3">
																				<div class="control-group" style="border:none;">
																					<div class="controls controls-row">
																				<h4><strong>实到人数:</strong></h4>
																				<input type="text" name="factnum_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['factnum_t']; ?>
" class="input-block-level" />
																				</div>
																					</div>
																				</div>
																			</div>
																	</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>干部</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>士官</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>义务兵</h4></td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="gbshouldnum_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['gbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="gbfactnum_jdd"  value="<?php echo $this->_tpl_vars['workTemp7']['gbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="gbholiday_jdd" id="gbholiday_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['gbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="gbout_jdd" id="gbout_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['gbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="sgshouldnum_jdd" id="sgshouldnum_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['sgshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="sgfactnum_jdd" id="sgfactnum_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['sgfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="sgholiday_jdd" id="sgholiday_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['sgholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="sgout_jdd" id="sgout_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['sgout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																	<td style="text-align: center;">
																		<div>
																		应在：<input type="text" name="ywbshouldnum_jdd" id="ywbshouldnum_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['ywbshouldnum_t']; ?>
"  class="span2" />
																		实在：<input type="text" name="ywbfactnum_jdd" id="ywbfactnum_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['ywbfactnum_t']; ?>
"  class="span2" />
																		</div>
																		<div>
																		休假：<input type="text" name="ywbholiday_jdd" id="ywbholiday_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['ywbholiday_t']; ?>
"  class="span2" />
																		外出：<input type="text" name="ywbout_jdd" id="ywbout_jdd" value="<?php echo $this->_tpl_vars['workTemp7']['ywbout_t']; ?>
"  class="span2" />
																		</div>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr class="odd">
														<td style="background-color: #f2f2f2;" colspan="2">
															<textarea name="remark_jdd" id="remark_jdd" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp7']['remark_t']; ?>
</textarea>
														</td>
													</tr>
													<tr class="odd">
														<td style="text-align: center;background-color: #e8e8e8;" ><h4>车辆动用情况</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>请示台次</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>动用台次</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>部队安全情况</h4></td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;"><input type="text" name="vehiclepleasenum" id="vehiclepleasenum" value="<?php echo $this->_tpl_vars['workTemp']['vehiclepleasenum']; ?>
" placeholder="无" class="input-block-level" data-rule-required="true"/></td>
																	<td style="text-align: center;"><input type="text" name="vehicleusednum" id="vehicleusednum" value="<?php echo $this->_tpl_vars['workTemp']['vehicleusednum']; ?>
" placeholder="无" class="input-block-level" data-rule-required="true"/></td>
																	<td style="text-align: center;"><input type="text" name="safesituation" id="safesituation" value="<?php echo $this->_tpl_vars['workTemp']['safesituation']; ?>
" placeholder="无" class="input-block-level" data-rule-required="true"/></td>
																</tr>
															</table>
														</td>
													</tr>
													<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['workTemp']['id']; ?>
" />
												</tbody>
											</table>
											<div class="form-actions offset8">
												<button type="submit" class="btn btn-primary"><?php echo $this->_tpl_vars['button']; ?>
</button>
											</div>
											</form>
											</div>
										</div>
									</div>
									
								</div>
								
							</div>
							
						</div>
					<!-- End 单个表格 -->
					</div>
					<!-- End 表格组 -->
			</div>
			
			<?php elseif ($this->_tpl_vars['flag'] == 't_update'): ?>
			
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
							<i class="icon-angle-right"></i>
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
							<div class="row-fluid">
					<div class="span12">
						<div class="box box-bordered box-color">
							<div class="box-title">
								<h3 class="span4"><i class="icon-group"></i> <span style="font-weight: bolder;"><?php echo $this->_tpl_vars['unit']; ?>
</span>(<span id=factnum>实到</span>/<span id="shouldnum">应到</span>)</h3>
								<div class="offset2 span6" style=""><h3></h3></div>
							</div>
							<div class="box-content nopadding">
								<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-horizontal form-bordered ' id="bb">
                                	<div class="control-group">
										<label for="weather" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">值班首长</label>
										<div class="controls">
										<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['workTemp']['id']; ?>
" />
										<input type="text" name="dutyhead" id="dutyhead" placeholder="值班首长" value="<?php echo $this->_tpl_vars['workTemp']['dutyhead']; ?>
" class="input" data-rule-required="true">
										</div>
										</div>
									<div class="control-group">
										<label for="Healthprevention" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">值班员</label>
										<div class="controls">
											<input type="text" name="dutyer" id="dutyer" placeholder="值班员" value="<?php echo $this->_tpl_vars['workTemp']['dutyer']; ?>
" class="input" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="gbfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">干部</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="gbshouldnum" id="gbshouldnum" placeholder="应在" value="<?php echo $this->_tpl_vars['workTemp']['gbshouldnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="gbfactnum" id="gbfactnum" placeholder="实在" value="<?php echo $this->_tpl_vars['workTemp']['gbfactnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="gbholiday" id="gbholiday" placeholder="休假" value="<?php echo $this->_tpl_vars['workTemp']['gbholiday']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>外出</label>
												<input type="text" name="gbout" id="gbout" placeholder="外出" value="<?php echo $this->_tpl_vars['workTemp']['gbout']; ?>
" class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="sgfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">士官</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="sgshouldnum" id="sgshouldnum" placeholder="应在" value="<?php echo $this->_tpl_vars['workTemp']['sgshouldnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="sgfactnum" id="sgfactnum" placeholder="实在" value="<?php echo $this->_tpl_vars['workTemp']['sgfactnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="sgholiday" id="sgholiday" placeholder="休假" value="<?php echo $this->_tpl_vars['workTemp']['sgholiday']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>外出</label>
												<input type="text" name="sgout" id="sgout" placeholder="外出" value="<?php echo $this->_tpl_vars['workTemp']['sgout']; ?>
" class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="ywbfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">义务兵</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="ywbshouldnum" id="ywbshouldnum" placeholder="应在" value="<?php echo $this->_tpl_vars['workTemp']['ywbshouldnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="ywbfactnum" id="ywbfactnum" placeholder="实在" value="<?php echo $this->_tpl_vars['workTemp']['ywbfactnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="ywbholiday" id="ywbholiday" placeholder="休假" value="<?php echo $this->_tpl_vars['workTemp']['ywbholiday']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>外出</label>
												<input type="text" name="ywbout" id="ywbout" placeholder="外出" value="<?php echo $this->_tpl_vars['workTemp']['ywbout']; ?>
" class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">人员变动情况</label>
										<div class="controls">
											<textarea name="remark" id="remark" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp']['remark']; ?>
</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">一日工作开展情况</label>
										<div class="controls">
											<textarea name="onedaywork" id="onedaywork" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp']['onedaywork']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">首长机关下连情况</label>
										<div class="controls">
											<textarea name="headdownlian" id="headdownlian" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp']['headdownlian']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="weather" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">天气</label>
										<div class="controls">
										<input type="text" name="weather" id="weather" placeholder="天气" value="<?php echo $this->_tpl_vars['workTemp']['weather']; ?>
" class="input" data-rule-required="true" />
										</div>
										</div>
									<div class="control-group">
										<label for="Healthprevention" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">卫生防疫</label>
										<div class="controls">
											<input type="text" name="Healthprevention" id="Healthprevention" placeholder="卫生防疫" value="<?php echo $this->_tpl_vars['workTemp']['Healthprevention']; ?>
" class="input" data-rule-required="true" />
										</div>
									</div> -->
									<div class="form-actions">
										<button type="submit" class="btn btn-primary"><?php echo $this->_tpl_vars['button']; ?>
</button>
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
			
			<?php else: ?>  <!-- update -->
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
							<i class="icon-angle-right"></i>
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
							<div class="row-fluid">
					<div class="span12">
						<div class="box box-bordered box-color">
							<div class="box-title">
								<h3 class="span4"><i class="icon-group"></i> <span style="font-weight: bolder;"><?php echo $this->_tpl_vars['unit']; ?>
</span>(<span id=factnum>实到</span>/<span id="shouldnum">应到</span>)</h3>
								<div class="offset2 span6" style=""><h3></h3></div>
							</div>
							<div class="box-content nopadding">
								<form action="<?php echo $this->_tpl_vars['action']; ?>
" method="post" class='form-horizontal form-bordered' id="bb">
                                	<div class="control-group">
										<label for="weather" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">值班首长</label>
										<div class="controls">
										<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['workTemp']['id']; ?>
" />
										<input type="text" name="dutyhead" id="dutyhead" placeholder="值班首长" value="<?php echo $this->_tpl_vars['workTemp']['dutyhead']; ?>
" class="input" data-rule-required="true">
										</div>
										</div>
									<div class="control-group">
										<label for="Healthprevention" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">值班员</label>
										<div class="controls">
											<input type="text" name="dutyer" id="dutyer" placeholder="值班员" value="<?php echo $this->_tpl_vars['workTemp']['dutyer']; ?>
" class="input" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="gbfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">干部</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="gbshouldnum" id="gbshouldnum" placeholder="应在" value="<?php echo $this->_tpl_vars['workTemp']['gbshouldnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="gbfactnum" id="gbfactnum" placeholder="实在" value="<?php echo $this->_tpl_vars['workTemp']['gbfactnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="gbholiday" id="gbholiday" placeholder="休假" value="<?php echo $this->_tpl_vars['workTemp']['gbholiday']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>外出</label>
												<input type="text" name="gbout" id="gbout" placeholder="外出" value="<?php echo $this->_tpl_vars['workTemp']['gbout']; ?>
" class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="sgfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">士官</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="sgshouldnum" id="sgshouldnum" placeholder="应在" value="<?php echo $this->_tpl_vars['workTemp']['sgshouldnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="sgfactnum" id="sgfactnum" placeholder="实在" value="<?php echo $this->_tpl_vars['workTemp']['sgfactnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="sgholiday" id="sgholiday" placeholder="休假" value="<?php echo $this->_tpl_vars['workTemp']['sgholiday']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>外出</label>
												<input type="text" name="sgout" id="sgout" placeholder="外出" value="<?php echo $this->_tpl_vars['workTemp']['sgout']; ?>
" class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="ywbfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">义务兵</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="ywbshouldnum" id="ywbshouldnum" placeholder="应在" value="<?php echo $this->_tpl_vars['workTemp']['ywbshouldnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="ywbfactnum" id="ywbfactnum" placeholder="实在" value="<?php echo $this->_tpl_vars['workTemp']['ywbfactnum']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="ywbholiday" id="ywbholiday" placeholder="休假" value="<?php echo $this->_tpl_vars['workTemp']['ywbholiday']; ?>
" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>外出</label>
												<input type="text" name="ywbout" id="ywbout" placeholder="外出" value="<?php echo $this->_tpl_vars['workTemp']['ywbout']; ?>
" class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">人员变动情况</label>
										<div class="controls">
											<textarea name="remark" id="remark" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp']['remark']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">一日工作开展情况</label>
										<div class="controls">
											<textarea name="onedaywork" id="onedaywork" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp']['onedaywork']; ?>
</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">首长机关下连情况</label>
										<div class="controls">
											<textarea name="headdownlian" id="headdownlian" rows="5" class="input-block-level" placeholder="无"><?php echo $this->_tpl_vars['workTemp']['headdownlian']; ?>
</textarea>
										</div>
									</div>
									<?php if ($this->_tpl_vars['unitNum'] == '9'): ?>
									<div class="control-group">
										<label for="weather" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">天气</label>
										<div class="controls">
											<!--  <input type="text" name="weather" id="weather" placeholder="天气" value="<?php echo $this->_tpl_vars['workTemp']['weather']; ?>
" class="input" data-rule-required="true" />-->
										 <select name="weather">
										 <?php if ($this->_tpl_vars['workTemp']['weather'] == "晴"): ?>
											<option value="晴" selected="selected">晴</option>
										    <option value="阴">阴</option>
										    <option value="多云">多云</option>
										    <option value="小雨">小雨</option>
										    <option value="中雨">中雨</option>
										    <option value="大雨">大雨</option>
										    <option value="阵雨">阵雨</option>
										    <option value="雷阵雨">雷阵雨</option>
										    <option value="暴雨">暴雨</option>
										    <option value="雾">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['weather'] == "阴"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" selected="selected">阴</option>
										    <option value="多云">多云</option>
										    <option value="小雨">小雨</option>
										    <option value="中雨">中雨</option>
										    <option value="大雨">大雨</option>
										    <option value="阵雨">阵雨</option>
										    <option value="雷阵雨">雷阵雨</option>
										    <option value="暴雨">暴雨</option>
										    <option value="雾">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['weather'] == "多云"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" selected="selected">多云</option>
										    <option value="小雨">小雨</option>
										    <option value="中雨">中雨</option>
										    <option value="大雨">大雨</option>
										    <option value="阵雨">阵雨</option>
										    <option value="雷阵雨">雷阵雨</option>
										    <option value="暴雨">暴雨</option>
										    <option value="雾">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['weather'] == "小雨"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" selected="selected">小雨</option>
										    <option value="中雨">中雨</option>
										    <option value="大雨">大雨</option>
										    <option value="阵雨">阵雨</option>
										    <option value="雷阵雨">雷阵雨</option>
										    <option value="暴雨">暴雨</option>
										    <option value="雾">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['weather'] == "中雨"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" selected="selected">中雨</option>
										    <option value="大雨">大雨</option>
										    <option value="阵雨">阵雨</option>
										    <option value="雷阵雨">雷阵雨</option>
										    <option value="暴雨">暴雨</option>
										    <option value="雾">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['weather'] == "大雨"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" selected="selected">大雨</option>
										    <option value="阵雨">阵雨</option>
										    <option value="雷阵雨">雷阵雨</option>
										    <option value="暴雨">暴雨</option>
										    <option value="雾">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['weather'] == "阵雨"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" selected="selected">阵雨</option>
										    <option value="雷阵雨">雷阵雨</option>
										    <option value="暴雨">暴雨</option>
										    <option value="雾">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['weather'] == "雷阵雨"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" selected="selected">雷阵雨</option>
										    <option value="暴雨">暴雨</option>
										    <option value="雾">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['weather'] == "暴雨"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" selected="selected">暴雨</option>
										    <option value="雾">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['weather'] == "雾"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" selected="selected">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['weather'] == "霾"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" selected="selected">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['weather'] == "霜冻"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" >霾</option>
										    <option value="霜冻" selected="selected">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['weather'] == "暴风"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" >霾</option>
										    <option value="霜冻" >霜冻</option>
										    <option value="暴风" selected="selected">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['weather'] == "暴风雪"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" >霾</option>
										    <option value="霜冻" >霜冻</option>
										    <option value="暴风" >暴风</option>
										    <option value="暴风雪" selected="selected">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['weather'] == "大雪"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" >霾</option>
										    <option value="霜冻" >霜冻</option>
										    <option value="暴风" >暴风</option>
										    <option value="暴风雪" >暴风雪</option>
										    <option value="大雪" selected="selected">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['weather'] == "中雪"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" >霾</option>
										    <option value="霜冻" >霜冻</option>
										    <option value="暴风" >暴风</option>
										    <option value="暴风雪" >暴风雪</option>
										    <option value="大雪" >大雪</option>
										    <option value="中雪" selected="selected">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['weather'] == "小雪"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" >霾</option>
										    <option value="霜冻" >霜冻</option>
										    <option value="暴风" >暴风</option>
										    <option value="暴风雪" >暴风雪</option>
										    <option value="大雪" >大雪</option>
										    <option value="中雪" >中雪</option>
										    <option value="小雪" selected="selected">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['weather'] == "雨夹雪"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" >霾</option>
										    <option value="霜冻" >霜冻</option>
										    <option value="暴风" >暴风</option>
										    <option value="暴风雪" >暴风雪</option>
										    <option value="大雪" >大雪</option>
										    <option value="中雪" >中雪</option>
										    <option value="小雪" >小雪</option>
										    <option value="雨夹雪" selected="selected">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['weather'] == "冰雹"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" >霾</option>
										    <option value="霜冻" >霜冻</option>
										    <option value="暴风" >暴风</option>
										    <option value="暴风雪" >暴风雪</option>
										    <option value="大雪" >大雪</option>
										    <option value="中雪" >中雪</option>
										    <option value="小雪" >小雪</option>
										    <option value="雨夹雪" >雨夹雪</option>
										    <option value="冰雹" selected="selected">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['weather'] == "扬沙"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" >霾</option>
										    <option value="霜冻" >霜冻</option>
										    <option value="暴风" >暴风</option>
										    <option value="暴风雪" >暴风雪</option>
										    <option value="大雪" >大雪</option>
										    <option value="中雪" >中雪</option>
										    <option value="小雪" >小雪</option>
										    <option value="雨夹雪" >雨夹雪</option>
										    <option value="冰雹" >冰雹</option>
										    <option value="扬沙" selected="selected">扬沙</option>
										    <?php endif; ?>
										</select>
										</div>
										</div>
									<div class="control-group">
										<label for="Healthprevention" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">明日预报天气</label>
										<div class="controls">
											<!-- <input type="text" name="Healthprevention" id="Healthprevention" placeholder="卫生防疫" value="<?php echo $this->_tpl_vars['workTemp']['Healthprevention']; ?>
" class="input" data-rule-required="true" /> -->
											<select name="Healthprevention">
										 <?php if ($this->_tpl_vars['workTemp']['Healthprevention'] == "晴"): ?>
											<option value="晴" selected="selected">晴</option>
										    <option value="阴">阴</option>
										    <option value="多云">多云</option>
										    <option value="小雨">小雨</option>
										    <option value="中雨">中雨</option>
										    <option value="大雨">大雨</option>
										    <option value="阵雨">阵雨</option>
										    <option value="雷阵雨">雷阵雨</option>
										    <option value="暴雨">暴雨</option>
										    <option value="雾">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['Healthprevention'] == "阴"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" selected="selected">阴</option>
										    <option value="多云">多云</option>
										    <option value="小雨">小雨</option>
										    <option value="中雨">中雨</option>
										    <option value="大雨">大雨</option>
										    <option value="阵雨">阵雨</option>
										    <option value="雷阵雨">雷阵雨</option>
										    <option value="暴雨">暴雨</option>
										    <option value="雾">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['Healthprevention'] == "多云"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" selected="selected">多云</option>
										    <option value="小雨">小雨</option>
										    <option value="中雨">中雨</option>
										    <option value="大雨">大雨</option>
										    <option value="阵雨">阵雨</option>
										    <option value="雷阵雨">雷阵雨</option>
										    <option value="暴雨">暴雨</option>
										    <option value="雾">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['Healthprevention'] == "小雨"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" selected="selected">小雨</option>
										    <option value="中雨">中雨</option>
										    <option value="大雨">大雨</option>
										    <option value="阵雨">阵雨</option>
										    <option value="雷阵雨">雷阵雨</option>
										    <option value="暴雨">暴雨</option>
										    <option value="雾">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['Healthprevention'] == "中雨"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" selected="selected">中雨</option>
										    <option value="大雨">大雨</option>
										    <option value="阵雨">阵雨</option>
										    <option value="雷阵雨">雷阵雨</option>
										    <option value="暴雨">暴雨</option>
										    <option value="雾">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['Healthprevention'] == "大雨"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" selected="selected">大雨</option>
										    <option value="阵雨">阵雨</option>
										    <option value="雷阵雨">雷阵雨</option>
										    <option value="暴雨">暴雨</option>
										    <option value="雾">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['Healthprevention'] == "阵雨"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" selected="selected">阵雨</option>
										    <option value="雷阵雨">雷阵雨</option>
										    <option value="暴雨">暴雨</option>
										    <option value="雾">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['Healthprevention'] == "雷阵雨"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" selected="selected">雷阵雨</option>
										    <option value="暴雨">暴雨</option>
										    <option value="雾">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['Healthprevention'] == "暴雨"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" selected="selected">暴雨</option>
										    <option value="雾">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['Healthprevention'] == "雾"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" selected="selected">雾</option>
										    <option value="霾">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['Healthprevention'] == "霾"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" selected="selected">霾</option>
										    <option value="霜冻">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['Healthprevention'] == "霜冻"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" >霾</option>
										    <option value="霜冻" selected="selected">霜冻</option>
										    <option value="暴风">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['Healthprevention'] == "暴风"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" >霾</option>
										    <option value="霜冻" >霜冻</option>
										    <option value="暴风" selected="selected">暴风</option>
										    <option value="暴风雪">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['Healthprevention'] == "暴风雪"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" >霾</option>
										    <option value="霜冻" >霜冻</option>
										    <option value="暴风" >暴风</option>
										    <option value="暴风雪" selected="selected">暴风雪</option>
										    <option value="大雪">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['Healthprevention'] == "大雪"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" >霾</option>
										    <option value="霜冻" >霜冻</option>
										    <option value="暴风" >暴风</option>
										    <option value="暴风雪" >暴风雪</option>
										    <option value="大雪" selected="selected">大雪</option>
										    <option value="中雪">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['Healthprevention'] == "中雪"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" >霾</option>
										    <option value="霜冻" >霜冻</option>
										    <option value="暴风" >暴风</option>
										    <option value="暴风雪" >暴风雪</option>
										    <option value="大雪" >大雪</option>
										    <option value="中雪" selected="selected">中雪</option>
										    <option value="小雪">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['Healthprevention'] == "小雪"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" >霾</option>
										    <option value="霜冻" >霜冻</option>
										    <option value="暴风" >暴风</option>
										    <option value="暴风雪" >暴风雪</option>
										    <option value="大雪" >大雪</option>
										    <option value="中雪" >中雪</option>
										    <option value="小雪" selected="selected">小雪</option>
										    <option value="雨夹雪">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['Healthprevention'] == "雨夹雪"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" >霾</option>
										    <option value="霜冻" >霜冻</option>
										    <option value="暴风" >暴风</option>
										    <option value="暴风雪" >暴风雪</option>
										    <option value="大雪" >大雪</option>
										    <option value="中雪" >中雪</option>
										    <option value="小雪" >小雪</option>
										    <option value="雨夹雪" selected="selected">雨夹雪</option>
										    <option value="冰雹">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['Healthprevention'] == "冰雹"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" >霾</option>
										    <option value="霜冻" >霜冻</option>
										    <option value="暴风" >暴风</option>
										    <option value="暴风雪" >暴风雪</option>
										    <option value="大雪" >大雪</option>
										    <option value="中雪" >中雪</option>
										    <option value="小雪" >小雪</option>
										    <option value="雨夹雪" >雨夹雪</option>
										    <option value="冰雹" selected="selected">冰雹</option>
										    <option value="扬沙">扬沙</option>
										<?php elseif ($this->_tpl_vars['workTemp']['Healthprevention'] == "扬沙"): ?>
											<option value="晴" >晴</option>
										    <option value="阴" >阴</option>
										    <option value="多云" >多云</option>
										    <option value="小雨" >小雨</option>
										    <option value="中雨" >中雨</option>
										    <option value="大雨" >大雨</option>
										    <option value="阵雨" >阵雨</option>
										    <option value="雷阵雨" >雷阵雨</option>
										    <option value="暴雨" >暴雨</option>
										    <option value="雾" >雾</option>
										    <option value="霾" >霾</option>
										    <option value="霜冻" >霜冻</option>
										    <option value="暴风" >暴风</option>
										    <option value="暴风雪" >暴风雪</option>
										    <option value="大雪" >大雪</option>
										    <option value="中雪" >中雪</option>
										    <option value="小雪" >小雪</option>
										    <option value="雨夹雪" >雨夹雪</option>
										    <option value="冰雹" >冰雹</option>
										    <option value="扬沙" selected="selected">扬沙</option>
										    <?php endif; ?>
										</select>
										</div>
									</div>
									<?php endif; ?>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary"><?php echo $this->_tpl_vars['button']; ?>
</button>
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