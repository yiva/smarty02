<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>第三通信团网上交班系统</title>
	--{include file="js.tpl"}--
</head>

<script src="js/compare.time.js"></script>
<script type="text/javascript">
		$(function(){
				$("#bb").submit(function(){
					var hasChk2 = $('#nx').is(':checked');
					if(hasChk2){
						var s_res = $("#nx_start").checkTime();
						var e_res = $("#nx_end").checkTime();
						if(s_res == true && e_res ==true){
							return true;
						}
					}
					var hasChk3 = $('#yx').is(':checked');
					if(hasChk3){
						//alert('123');
						var s_res2 = $("#yx_start").checkTime();
						var e_res2 = $("#yx_end").checkTime();
						if(s_res2 == true && e_res2 ==true){
							return true;
						}
					}
					if(!hasChk2 && !hasChk3){
						alert("选择并填写值班时间！");
					}
						
						return false;
					});
			});
    </script>
<body>
<div id="navigation">
		<!--header-->
		--{include file="header.tpl"}--
	</div>
	<div class="container-fluid" id="content">
    	<!-- 左边栏 -->
		<div id="left">
			--{include file="left.tpl"}--
			
		</div>
		<div id="main">
			--{if $flag == "add"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a>主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a>--{$path2}--</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a>--{$cz}--</a>
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
					<div class="span8">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i>--{$cz}--</h3>
							</div>
							<div class="box-content nopadding">
								<form action="--{$action}--" method="post" class='form-horizontal form-bordered'  id='bb'>
									<div class="control-group">
										<label for="textfield" class="control-label">跟班日期</label>
										<div class="controls">
											<input type="text" name="mdate" id="mdate" placeholder="跟班日期" value="--{$time}--" class="input-xlarge" readonly="readonly">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">单位</label>
										<div class="controls">
											<input type="text" name="dept" id="dept" value="--{$unit}--" placeholder="单位" class="input-xlarge"  readonly="readonly">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">干部职务</label>
										<div class="controls">
											<select name="gbzw">
												<option value="连长">连长</option>
												<!-- <option value="连长">副连长</option> -->
												<option value="指导员">指导员</option>
											</select>
										</div>
									</div> 
									<div class="control-group">
										<label for="textfield" class="control-label">内线跟班时间</label>
										<div class="controls">
											<!-- <input type="text" name="nx" id="nx" placeholder="无" class="input-xlarge"> -->
											<script type="text/javascript">
												$(function(){
													$("#nx").change(function(){
														var hasChk = $('#nx').is(':checked');
														if(hasChk){
															$("#nx_start").removeAttr("disabled");
															$("#nx_end").removeAttr("disabled");
														}else{
															$("#nx_start").attr("disabled","disabled");
															$("#nx_end").attr("disabled","disabled");
														}
														
													});
													});
												$(function(){
													$("#yx").change(function(){
														var hasChk = $('#yx').is(':checked');
														if(hasChk){
															$("#yx_start").removeAttr("disabled");
															$("#yx_end").removeAttr("disabled");
														}else{
															$("#yx_start").attr("disabled","disabled");
															$("#yx_end").attr("disabled","disabled");
														}
														
													});
													});
										
											</script>
											<div class="bootstrap-timepicker">
												<input type="checkbox" name="nx" id="nx" class="input-xlarge">&nbsp;&nbsp;
												<input type="text" name="nx_start" id="nx_start" disabled="disabled" class="input-small timepick">
												-
												<input type="text" name="nx_end" id="nx_end" disabled="disabled" class="input-small timepick" check-time="nx_start">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">外线跟班时间</label>
										<div class="controls">
											<!-- <input type="text" name="wx" id="wx" placeholder="无" class="input-xlarge"> -->
											<div class="bootstrap-timepicker">
												<input type="checkbox" name="yx" id="yx" class="input-xlarge">&nbsp;&nbsp;
												<input type="text" name="yx_start" id="yx_start" disabled="disabled"  class="input-small timepick">
												-
												<input type="text" name="yx_end" id="yx_end" disabled="disabled"  class="input-small timepick" check-time="yx_start">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">跟班期间工作<br/>及发现问题</label>
										<div class="controls">
											<textarea name="fxwt" id="fxwt" rows="5" class="input-block-level" placeholder="无"></textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textarea" class="control-label">备注</label>
										<div class="controls">
											<textarea name="remark" id="remark" rows="5" class="input-block-level" placeholder="无"></textarea>
										</div>
									</div> -->
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">--{$button}--</button>
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
			
			--{elseif $flag == "t_update"}--
			
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$head}--</h1>
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
							<a>--{$cz}--</a>
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
					<div class="span8">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i>--{$cz}--</h3>
							</div>
							<div class="box-content nopadding">
								<form action="--{$action}--" method="post" class='form-horizontal form-bordered' id='bb'>
									<div class="control-group">
										<label for="textfield" class="control-label">跟班日期</label>
										<div class="controls">
											<input type="hidden" name="id" value="--{$gbgb.id}--" />
											<input type="hidden" name="userid" value="--{$gbgb.userid}--" />
											<input type="text" name="mdate" id="mdate" placeholder="跟班日期" value="--{$gbgb.mdate}--" class="input-xlarge" readonly="readonly">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">单位</label>
										<div class="controls">
											<input type="text" name="dept" id="dept" value="--{$gbgb.dept}--" placeholder="单位" class="input-xlarge"  readonly="readonly">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">干部职务</label>
										<div class="controls">
											<select name="gbzw">
												--{if $gbgb.gbzw == "连长"}--
												<option value="连长" selected="selected">连长</option>
												<!-- <option value="副连长">副连长</option> -->
												<option value="指导员">指导员</option>
												--{elseif $gbgb.gbzw == "指导员"}--
												<option value="连长" >连长</option>
												<!--<option value="副连长">副连长</option>-->
												<option value="指导员" selected="selected">指导员</option>
												--{/if}--
											</select>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">内线</label>
										<script type="text/javascript">
												$(function(){
													$("#nx").change(function(){
														var hasChk = $('#nx').is(':checked');
														if(hasChk){
															$("#nx_start").removeAttr("disabled");
															$("#nx_end").removeAttr("disabled");
														}else{
															$("#nx_start").attr("disabled","disabled");
															$("#nx_end").attr("disabled","disabled");
														}
														
													});
													});
												$(function(){
													$("#yx").change(function(){
														var hasChk = $('#yx').is(':checked');
														if(hasChk){
															$("#yx_start").removeAttr("disabled");
															$("#yx_end").removeAttr("disabled");
														}else{
															$("#yx_start").attr("disabled","disabled");
															$("#yx_end").attr("disabled","disabled");
														}
														
													});
													});
										
											</script>
											<div class="controls">
											--{if $nxSign == 0}--
												<div class="bootstrap-timepicker">
													<input type="checkbox" name="nx" id="nx" class="input-xlarge">&nbsp;&nbsp;
													<input type="text" name="nx_start" id="nx_start" disabled="disabled" class="input-small timepick" value="--{$nxstart}--">
													-
													<input type="text" name="nx_end" id="nx_end" disabled="disabled" class="input-small timepick" value="--{$nxend}--" check-time="nx_start">
												</div>
											--{else}--
												<div class="bootstrap-timepicker">
													<input type="checkbox" name="nx" id="nx" class="input-xlarge" checked="checked">&nbsp;&nbsp;
													<input type="text" name="nx_start" id="nx_start" class="input-small timepick" value="--{$nxstart}--">
													-
													<input type="text" name="nx_end" id="nx_end" class="input-small timepick" value="--{$nxend}--" check-time="nx_start">
												</div>
											--{/if}--
											</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">外线</label>
										<div class="controls">
										--{if $wxSign == 0}--
											<div class="bootstrap-timepicker">
												<input type="checkbox" name="yx" id="yx" class="input-xlarge">&nbsp;&nbsp;
												<input type="text" name="yx_start" id="yx_start" disabled="disabled"  class="input-small timepick" value="--{$wxstart}--">
												-
												<input type="text" name="yx_end" id="yx_end" disabled="disabled"  class="input-small timepick" value="--{$wxend}--" check-time="yx_start">
											</div>
										--{else}--
											<div class="bootstrap-timepicker">
												<input type="checkbox" name="yx" id="yx" class="input-xlarge" checked="checked">&nbsp;&nbsp;
												<input type="text" name="yx_start" id="yx_start" class="input-small timepick" value="--{$wxstart}--">
												-
												<input type="text" name="yx_end" id="yx_end"  class="input-small timepick" value="--{$wxend}--" check-time="yx_start">
											</div>
										--{/if}--
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">跟班期间工作<br/>及发现问题</label>
										<div class="controls">
											<textarea name="fxwt" id="fxwt" rows="5" class="input-block-level" placeholder="无">--{$gbgb.fxwt}--</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textarea" class="control-label">备注</label>
										<div class="controls">
											<textarea name="remark" id="remark" rows="5" class="input-block-level" placeholder="无">--{$gbgb.remark}--</textarea>
										</div>
									</div> -->
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">--{$button}--</button>
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
			--{else}--
			
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$head}--</h1>
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
							<a>--{$cz}--</a>
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
					<div class="span8">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i>--{$cz}--</h3>
							</div>
							<div class="box-content nopadding">
								<form action="--{$action}--" method="post" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">跟班日期</label>
										<div class="controls"><input type="hidden" name="id" value="--{$gbgb.id}--" />
											<input type="text" name="mdate" id="mdate" placeholder="跟班日期" value="--{$gbgb.mdate}--" class="input-xlarge" readonly="readonly">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">单位</label>
										<div class="controls">
											<input type="text" name="dept" id="dept" value="--{$gbgb.dept}--" placeholder="单位" class="input-xlarge"  readonly="readonly">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">干部职务</label>
										<div class="controls">
											<select name="gbzw">
												--{if $gbgb.gbzw == "连长"}--
												<option value="连长" selected="selected">连长</option>
												<!-- <option value="副连长">副连长</option> -->
												<option value="指导员">指导员</option>
												--{elseif $gbgb.gbzw == "指导员"}--
												<option value="连长" >连长</option>
												<!-- <option value="副连长">副连长</option> -->
												<option value="指导员" selected="selected">指导员</option>
												
												--{/if}--
											</select>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">内线</label>
										<script type="text/javascript">
												$(function(){
													$("#nx").change(function(){
														var hasChk = $('#nx').is(':checked');
														if(hasChk){
															$("#nx_start").removeAttr("disabled");
															$("#nx_end").removeAttr("disabled");
														}else{
															$("#nx_start").attr("disabled","disabled");
															$("#nx_end").attr("disabled","disabled");
														}
														
													});
													});
												$(function(){
													$("#yx").change(function(){
														var hasChk = $('#yx').is(':checked');
														if(hasChk){
															$("#yx_start").removeAttr("disabled");
															$("#yx_end").removeAttr("disabled");
														}else{
															$("#yx_start").attr("disabled","disabled");
															$("#yx_end").attr("disabled","disabled");
														}
														
													});
													});
										
											</script>
											<div class="controls">
											<div class="bootstrap-timepicker">
												<input type="checkbox" name="nx" id="nx" class="input-xlarge">&nbsp;&nbsp;
												<input type="text" name="nx_start" id="nx_start" disabled="disabled" class="input-small timepick" value="--{$nxstart}--">
												-
												<input type="text" name="nx_end" id="nx_end" disabled="disabled" class="input-small timepick" value="--{$nxend}--">
											</div>
											</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">外线</label>
										<div class="controls">
											<div class="bootstrap-timepicker">
												<input type="checkbox" name="yx" id="yx" class="input-xlarge">&nbsp;&nbsp;
												<input type="text" name="yx_start" id="yx_start" disabled="disabled"  class="input-small timepick" value="--{$wxstart}--">
												-
												<input type="text" name="yx_end" id="yx_end" disabled="disabled"  class="input-small timepick" value="--{$wxend}--">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">跟班期间工作<br/>及发现问题</label>
										<div class="controls">
											<textarea name="fxwt" id="fxwt" rows="5" class="input-block-level" placeholder="无">--{$gbgb.fxwt}--</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textarea" class="control-label">备注</label>
										<div class="controls">
											<textarea name="remark" id="remark" rows="5" class="input-block-level" placeholder="无">--{$gbgb.remark}--</textarea>
										</div>
									</div> -->
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">--{$button}--</button>
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
			--{/if}--
		</div>
    </div>

</body>
</html>
