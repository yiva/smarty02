<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>第三通信团网上交班系统</title>
--{include file="js.tpl"}--

		<link rel="stylesheet" media="all" type="text/css" href="css/time1/jquery-ui.css" />
		<link rel="stylesheet" media="all" type="text/css" href="css/time1/jquery-ui-timepicker-addon.css" />
		
		<script type="text/javascript" src="js/time1/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/time1/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="js/time1/jquery-ui-sliderAccess.js"></script>
</head>
<!-- custom -->
	<script src="js/compare.time.js"></script>
    <script type="text/javascript">
	
	$(function(){

		$('#start_n_timepicker').timepicker();
		$('#end_n_timepicker').timepicker();
		
		$("#bb").submit(function(){
				if($("#task").val() == ""){
					alert("请填写任务!");
					return false;
				}
				if($("#vehiclemo").val() == ""){
					alert("请填写车型及车号!");
					return false;
				}
				var reg = new RegExp("^[0-9]*$");
				
			    if(!reg.test($("#distance").val())){
			        alert("请输入有效的公里数!");
			        return false;
			    }
				if($("#start").val() == "" || $("#stop").val() == "" || $("#distance").val() == ""){
					alert("请正确填写起止点及距离!");
					return false;
				}
				if($("#driver").val() == ""){
					alert("请填写驾驶员");
					return false;
				}
				if($("#supercarg").val() == ""){
					alert("请填写押车干部");
					return false;
				}

				var s_res = $("#start_n_timepicker").checkTime();
				var e_res = $("#end_n_timepicker").checkTime();
				if(s_res == true && e_res ==true){
					return true;
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
							<a >--{$path2}--</a>
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
					<div class="span10">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i>--{$cz}--</h3>
							</div>
							<div class="box-content nopadding">
								<form action="--{$action}--" method="post" class='form-horizontal form-bordered ' id="bb">
									<div class="control-group">
										<label for="textfield" class="control-label">请示时间</label>
										<div class="controls">
											<input type="text" name="time1" id="time1" placeholder="请示时间" value="--{$time}--" class="input-xlarge" readonly="readonly">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">单位</label>
										<div class="controls">
											<select name="unit">
											--{foreach from="$unitList" item="unitList"}--
												<option value="--{$unitList.id}--">--{$unitList.tmp_name}--</option>
											--{/foreach}--
											</select>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">任务</label>
										<div class="controls">
											<input type="text" name="task" id="task" placeholder="任务" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">车型及车号</label>
										<div class="controls">
											<input type="text" name="vehiclemo" id="vehiclemo" placeholder="车型及车号" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">起止点及距离</label>
										<div class="controls">
											<input type="text" name="start" id="start" placeholder="" class="input-small">至
											<input type="text" name="stop" id="stop" placeholder="" class="input-small">&nbsp;&nbsp;&nbsp;&nbsp;
											<input type="text" name="distance" id="distance" placeholder="" class="input-small" >&nbsp;&nbsp;KM
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">运行时间</label>
										<div class="controls">
											<!-- <input type="text" name="runtime" id="runtime" placeholder="运行时间" class="input-xlarge"> -->
											<div class="bootstrap-timepicker">
												<input type="text" name="start_n_timepicker" id="start_n_timepicker" class="input-small">
												-
												<input type="text" name="end_n_timepicker" id="end_n_timepicker" class="input-small" check-time="start_n_timepicker">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">驾驶员</label>
										<div class="controls">
											<input type="text" name="driver" id="driver" placeholder="驾驶员" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">押车干部</label>
										<div class="controls">
											<input type="text" name="supercarg" id="supercarg" placeholder="押车干部" class="input-xlarge">
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textfield" class="control-label">批准人</label>
										<div class="controls">
											<input type="text" name="ratifier" id="ratifier" placeholder="批准人" class="input-xlarge">
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
			
			--{elseif $flag == "shenhe"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="#">主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="#">--{$path2}--</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="#">--{$cz}--</a>
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
										<label for="textfield" class="control-label">请示时间</label>
										<div class="controls">
											<input type="hidden" name="id" value="--{$vehicle.id}--" />
											<input type="text" name="time1" id="time1" placeholder="请示时间" value="--{$vehicle.plasetime}--" class="input-xlarge" readonly="readonly">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">单位</label>
										<div class="controls">
											<input type="text" name="unit" id="unit" value="--{$vehicle.unit}--" placeholder="单位" class="input-xlarge"  readonly="readonly">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">任务</label>
										<div class="controls">
											<input type="text" name="task" id="task" placeholder="任务"  value="--{$vehicle.task}--" class="input-xlarge"  readonly="readonly">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">车型及车号</label>
										<div class="controls">
											<input type="text" name="vehiclemo" id="vehiclemo"  placeholder="车型及车号" value="--{$vehicle.vehiclemo}--" class="input-xlarge"  readonly="readonly">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">起止点及距离</label>
										<div class="controls">
											<input type="text" name="startstopdistance" id="startstopdistance" placeholder="起止点及距离" value="--{$vehicle.startstopdistance}--" class="input-xlarge"  readonly="readonly">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">运行时间</label>
										<div class="controls">
											<input type="text" name="runtime" id="runtime" placeholder="运行时间"  value="--{$vehicle.runtime}--"  class="input-xlarge"  readonly="readonly">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">驾驶员</label>
										<div class="controls">
											<input type="text" name="driver" id="driver" placeholder="驾驶员"  value="--{$vehicle.driver}--" class="input-xlarge"  readonly="readonly">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">押车干部</label>
										<div class="controls">
											<input type="text" name="supercarg" id="supercarg" placeholder="押车干部" value="--{$vehicle.supercarg}--" class="input-xlarge"  readonly="readonly">
										</div>
									</div>
									
									<div class="control-group">
										<label for="textfield" class="control-label">批准人</label>
										<div class="controls">
											<select name="ratifier">
												--{foreach from="$reviewer" item="reviewer"}--
												<option value="--{$reviewer.reviewer}--">--{$reviewer.reviewer}--</option>
												--{/foreach}--
											</select>
										</div>
									</div>
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
								<form action="--{$action}--" method="post" class='form-horizontal form-bordered' id="bb">
									<div class="control-group">
										<label for="textfield" class="control-label">请示时间</label>
										<div class="controls">
											<input type="hidden" name="id" value="--{$vehicle.id}--" />
											<input type="hidden" name="person_id" value="--{$vehicle.person_no}--" />
											<input type="text" name="time1" id="time1" placeholder="请示时间" value="--{$vehicle.plasetime}--" class="input-xlarge" readonly="readonly">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">单位</label>
										<div class="controls">
											<input type="text" name="unit" id="unit" value="--{$vehicle.unit}--" placeholder="单位" class="input-xlarge"  readonly="readonly">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">任务</label>
										<div class="controls">
											<input type="text" name="task" id="task" placeholder="任务"  value="--{$vehicle.task}--" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">车型及车号</label>
										<div class="controls">
											<input type="text" name="vehiclemo" id="vehiclemo"  placeholder="车型及车号" value="--{$vehicle.vehiclemo}--" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">起止点及距离</label>
										<div class="controls">
											<!-- <input type="text" name="startstopdistance" id="startstopdistance" placeholder="起止点及距离" value="--{$vehicle.startstopdistance}--" class="input-xlarge"> -->
											<input type="text" name="start" id="start" placeholder="" class="input-small" value="--{$vehicle.start}--">至
											<input type="text" name="stop" id="stop" placeholder="" class="input-small" value="--{$vehicle.stop}--">&nbsp;&nbsp;&nbsp;&nbsp;
											<input type="text" name="distance" id="distance" placeholder="" class="input-small" value="--{$vehicle.distance}--">&nbsp;&nbsp;KM
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">运行时间</label>
										<div class="controls">
											<!-- <input type="text" name="runtime" id="runtime" placeholder="运行时间"  value="--{$vehicle.runtime}--"  class="input-xlarge"> -->
											<div class="bootstrap-timepicker">
												<input type="text" name="start_n_timepicker" id="start_n_timepicker" class="input-small" value="--{$starttime}--">
												-
												<input type="text" name="end_n_timepicker" id="end_n_timepicker" class="input-small" value="--{$stoptime}--" check-time="start_n_timepicker">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">驾驶员</label>
										<div class="controls">
											<input type="text" name="driver" id="driver" placeholder="驾驶员"  value="--{$vehicle.driver}--" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">押车干部</label>
										<div class="controls">
											<input type="text" name="supercarg" id="supercarg" placeholder="押车干部" value="--{$vehicle.supercarg}--" class="input-xlarge">
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textfield" class="control-label">批准人</label>
										<div class="controls">
											<input type="text" name="ratifier" id="ratifier" placeholder="批准人"  value="--{$vehicle.ratifier}--" class="input-xlarge">
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
