<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>第三通信团网上交班系统</title>
--{include file="js.tpl"}--
</head>

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
		--{if $flag == "normal"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
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
								<a href="Vehicle_add_from.php">添加</a>
								<!-- ******************************* -->
								<div class="row-fluid">
									<div class="span12">
										<div class="box box-color box-bordered">
											<div class="box-title">
												<h3>
													<i class="icon-table"></i>
													--{$path2}--记录列表
												</h3>
												
												<div class="actions"><h3>时间：--{$date}--</h3></div>
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
													 --{foreach from="$resList" item="vehicle"}--
														 <tr>
														 	<td>--{$vehicle.unit}--</td>
														    <td>--{$vehicle.plasetime}--</td>
														    <td>--{$vehicle.task}--</td>
														    <td>--{$vehicle.start}--<strong>至</strong>--{$vehicle.stop}--&nbsp;&nbsp;--{$vehicle.distance}--<strong>KM</strong></td>
														    <td>--{$vehicle.vehiclemo}--</td>
														    
														    <td>--{$vehicle.runtime}--</td>
														    <td>--{$vehicle.driver}--</td>
														    <td>--{$vehicle.supercarg}--</td>
														    --{if $vehicle.yflag == 0 & $vehicle.tflag == 0}--
														    <td><font color="red">未审核</font></td>
														    <td><a href="Vehicle_update_from.php?id=--{$vehicle.id}--">修改</a>|<a href="Vehicle_delete.php?id=--{$vehicle.id}--">删除</a></td>
														    --{else}--
														    <td>--{$vehicle.ratifier}--</td>
														    <td><font color="red">信息已审核</font></td>
														    --{/if}--
														</tr>
													--{/foreach}--
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
		--{elseif $flag == "fenye"}--
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
								<a href="Vehicle_add_from.php">添加</a>
								<!-- ******************************* -->
								<div class="row-fluid">
									<div class="span12">
										<div class="box box-color box-bordered">
											<div class="box-title">
												<h3>
													<i class="icon-table"></i>
													--{$path2}--记录列表
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
													 --{foreach from="$resList" item="vehicle"}--
														 <tr>
														    <td>--{$vehicle.plasetime}--</td>
														    <td>--{$vehicle.task}--</td>
														    <td>--{$vehicle.unit}--</td>
														    <td>--{$vehicle.vehiclemo}--</td>
														    <td>--{$vehicle.startstopdistance}--</td>
														    <td>--{$vehicle.runtime}--</td>
														    <td>--{$vehicle.driver}--</td>
														    <td>--{$vehicle.supercarg}--</td>
														    --{if $vehicle.yflag == 0 & $vehicle.tflag == 0}--
														    <td><font color="red">未审核</font></td>
														    <td><a href="Vehicle_update_from.php?id=--{$vehicle.id}--">修改</a>|<a href="Vehicle_delete.php?id=--{$vehicle.id}--">删除</a></td>
														    --{else}--
														    <td>--{$vehicle.ratifier}--</td>
														    <td><font color="red">该信息已通过上级审核，不可修改</font></td>
														    --{/if}--
														</tr>
													--{/foreach}--
													</tbody>
												</table>
												<div class="table-pagination">
													<a href="--{$shouye1}--">首页</a>
													--{if $sahngyiye1 == "0"}--
													<a href="#" class='disabled'>上一页</a>
													--{else}--
													<a href="--{$sahngyiye1}--">上一页</a>
													--{/if}--
													--{if $xiayiye1 == "0"}--
													<a href="#" class='disabled'>下一页</a>
													--{else}--
													<a href="--{$xiayiye1}--">下一页</a>
													--{/if}--
													<a href="--{$weiye1}--">尾页</a>
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
		--{elseif $flag == "y_fenye"}--
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
								<!-- ******************************* -->
								<div class="row-fluid">
									<div class="span12">
										<div class="box box-color box-bordered">
											<div class="box-title">
												<h3>
													<i class="icon-table"></i>
													--{$path2}--记录列表
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
													 --{foreach from="$resList" item="vehicle"}--
														 <tr>
														    <td>--{$vehicle.plasetime}--</td>
														    <td>--{$vehicle.task}--</td>
														    <td>--{$vehicle.unit}--</td>
														    <td>--{$vehicle.vehiclemo}--</td>
														    <td>--{$vehicle.startstopdistance}--</td>
														    <td>--{$vehicle.runtime}--</td>
														    <td>--{$vehicle.driver}--</td>
														    <td>--{$vehicle.supercarg}--</td>
														    --{if $vehicle.yflag == 0 & $vehicle.tflag == 0}--
														    <td><font color="red">未审核</font></td>
														    --{else}--
														    <td>--{$vehicle.ratifier}--</td>
														    --{/if}--
														</tr>
													--{/foreach}--
													</tbody>
												</table>
												<div class="table-pagination">
													<a href="--{$shouye1}--">首页</a>
													--{if $sahngyiye1 == "0"}--
													<a href="#" class='disabled'>上一页</a>
													--{else}--
													<a href="--{$sahngyiye1}--">上一页</a>
													--{/if}--
													--{if $xiayiye1 == "0"}--
													<a href="#" class='disabled'>下一页</a>
													--{else}--
													<a href="--{$xiayiye1}--">下一页</a>
													--{/if}--
													<a href="--{$weiye1}--">尾页</a>
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
			--{elseif $flag == "tuan"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
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
								<!-- ************批量 审核  start********** -->
								<form action="--{$action}--" method="post" class='form-horizontal'>
									<div class="control-group">
										<label for="ratifier" class="control-label" style="width:80px;">审核人：</label>
										<div class="controls" style="margin-left:80px;">
											<select name="ratifier" id="ratifier" class='input-large'>
												--{foreach from="$reviewer" item="reviewer"}--
												<option value="--{$reviewer.reviewer}--">--{$reviewer.reviewer}--</option>
												--{/foreach}--
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
													--{$path2}--记录列表
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
													 --{foreach from="$resList" item="vehicle"}--
														 <tr>
														 	<td>--{$vehicle[0]}--</td>
														 	<td>--{$vehicle.unit}--</td>
														    <td>--{$vehicle.plasetime}--</td>
														    <td>--{$vehicle.task}--</td>
														    <td>--{$vehicle.start}--<strong>至</strong>--{$vehicle.stop}--&nbsp;&nbsp;--{$vehicle.distance}--<strong>KM</strong></td>
														    <td>--{$vehicle.vehiclemo}--</td>
														    
														    <td>--{$vehicle.runtime}--</td>
														    <td>--{$vehicle.driver}--</td>
														    <td>--{$vehicle.supercarg}--</td>
														    --{if $vehicle.yflag == 0 & $vehicle.tflag == 0}--
														    <td><a href="Vehicle_shenhe_from.php?id=--{$vehicle.id}--"><font color="red">未审核</font></a></td>
														    <td><a href="Vehicle_update_from.php?flag=t_update&id=--{$vehicle.id}--">修改</a>|<a href="Vehicle_delete.php?flag=t_delete&id=--{$vehicle.id}--">删除</a></td>
														    --{else}--
														    <td>--{$vehicle.ratifier}--</td>
														    <td><a  href="VehicleController.php?flag=delshenhe&id=--{$vehicle.id}--"><font color="#B2B2B2">取消审核</font></a></td>
														    --{/if}--
														</tr>
													--{/foreach}--
													</tbody>
												</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			--{elseif $flag == "tuan_search"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
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
								<!-- ************批量 审核  start********** -->
								<!-- ************批量 审核  end *********** -->
								<!-- ******************************* -->
								<div class="row-fluid">
									<div class="span12">
										<div class="box box-color box-bordered">
											<div class="box-title">
												<h3>
													<i class="icon-table"></i>
													--{$path2}--记录列表
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
													 --{foreach from="$resList" item="vehicle"}--
														 <tr>
														    <td>--{$vehicle.plasetime}--</td>
														    <td>--{$vehicle.task}--</td>
														    <td>--{$vehicle.unit}--</td>
														    <td>--{$vehicle.vehiclemo}--</td>
														    <td>--{$vehicle.startstopdistance}--</td>
														    <td>--{$vehicle.runtime}--</td>
														    <td>--{$vehicle.driver}--</td>
														    <td>--{$vehicle.supercarg}--</td>
														    --{if $vehicle.yflag == 0 & $vehicle.tflag == 0}--
														    <td><a href="Vehicle_shenhe_from.php?id=--{$vehicle.id}--"><font color="red">未审核</font></a></td>
														    <td><a href="Vehicle_update_from.php?flag=t_update&id=--{$vehicle.id}--">修改</a>|<a href="Vehicle_delete.php?flag=t_delete&id=--{$vehicle.id}--">删除</a></td>
														    --{else}--
														    <td>--{$vehicle.ratifier}--</td>
														    <td><a  href="VehicleController.php?flag=delshenhe&id=--{$vehicle.id}--"><font color="#B2B2B2">取消审核</font></a></td>
														    --{/if}--
														</tr>
													--{/foreach}--
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
			--{elseif $flag == "y_list"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
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
								<!-- ******************************* -->
								<div class="row-fluid">
									<div class="span12">
										<div class="box box-color box-bordered">
											<div class="box-title">
												<h3>
													<i class="icon-table"></i>
													--{$path2}--记录列表
												</h3>
												<div class="actions"><h3>时间：--{$date}--</h3></div>
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
													 --{foreach from="$resList" item="vehicle"}--
														 <tr>
														 	<td>--{$vehicle.tmp_name}--</td>
														    <td>--{$vehicle.plasetime}--</td>
														    <td>--{$vehicle.task}--</td>
														    <td>--{$vehicle.start}--<strong>至</strong>--{$vehicle.stop}--&nbsp;&nbsp;--{$vehicle.distance}--<strong>KM</strong></td>
														    <td>--{$vehicle.vehiclemo}--</td>
														    
														    <td>--{$vehicle.runtime}--</td>
														    <td>--{$vehicle.driver}--</td>
														    <td>--{$vehicle.supercarg}--</td>
														    --{if $vehicle.yflag == 0 & $vehicle.tflag == 0}--
														    <td><font color="red">未审核</font></td>
														    --{else}--
														    <td><font color="red">--{$vehicle.ratifier}--</font></td>
														    <!-- <td><font color="red">信息已审核</font></td> -->
														    --{/if}--
														</tr>
													--{/foreach}--
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
			--{else}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
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
								<!-- ******************************* -->
								<div class="row-fluid">
									<div class="span12">
										<div class="box box-color box-bordered">
											<div class="box-title">
												<h3>
													<i class="icon-table"></i>
													--{$path2}--记录列表
												</h3>
												<div class="actions"><h3>时间：--{$date}--</h3></div>
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
													 --{foreach from="$resList" item="vehicle"}--
														 <tr>
														 	<td>--{$vehicle.unit}--</td>
														    <td>--{$vehicle.plasetime}--</td>
														    <td>--{$vehicle.task}--</td>
														    <td>--{$vehicle.start}--<strong>至</strong>--{$vehicle.stop}--&nbsp;&nbsp;--{$vehicle.distance}--<strong>KM</strong></td>
														    <td>--{$vehicle.vehiclemo}--</td>
														    
														    <td>--{$vehicle.runtime}--</td>
														    <td>--{$vehicle.driver}--</td>
														    <td>--{$vehicle.supercarg}--</td>
														    --{if $vehicle.yflag == 0 & $vehicle.tflag == 0}--
														    <td><font color="red">未审核</font></td>
														    --{else}--
														    <td>--{$vehicle.ratifier}--</td>
														    <td><font color="red">信息已审核</font></td>
														    --{/if}--
														</tr>
													--{/foreach}--
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
			--{/if}--
		</div>
    </div>
		
	</body>

	</html>

