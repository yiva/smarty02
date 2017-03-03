<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>第三通信团网上交班系统</title>
--{include file="js.tpl"}--
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
													--{$path2}--记录列表
												</h3>
												<div class="actions">
													<h3>
														时间：--{$date}--
													</h3>
												</div>
											</div>
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>序号</th>
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
														    <td>--{$vehicle[0]}--</td>
														    <td>--{$vehicle.plasetime}--</td>
														    <td>--{$vehicle.task}--</td>
														    <td>--{$vehicle.unit}--</td>
														    <td>--{$vehicle.vehiclemo}--</td>
														    <td>--{$vehicle.start}--<strong>至</strong>--{$vehicle.stop}--&nbsp;&nbsp;--{$vehicle.distance}--KM</td>
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

