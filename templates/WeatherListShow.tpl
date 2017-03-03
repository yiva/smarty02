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
									<div class="span10">
										<div class="box box-color box-bordered">
											<div class="box-title">
												<h3>
													<i class="icon-table"></i>
													--{$path2}--
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
															<th width="30%" style="text-align:center;">位单所在地</th>
														    <th width="35%"  style="text-align:center;">天气情况</th>
														    <th width="35%"  style="text-align:center;">预报天气</th>
														</tr>
													</thead>
													<tbody>
													 --{foreach from="$weatherData" item="weather"}--
														 <tr>
														    <td style="text-align:center;">--{$weather.local1}--</td>
														    <td style="text-align:center;">--{$weather.weather}--</td>
														    <td style="text-align:center;">--{$weather.Healthprevention}--</td>
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

