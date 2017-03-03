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
													 --{foreach from="$gbgbShow" item="gbgb"}--
														<tr>
															<td>--{$gbgb[0]}--</td>
															<td>--{$gbgb.mdate}--</td>
														    <td>--{$gbgb.dept}--</td>
														    <td>--{$gbgb.gbzw}--</td>
														    <td>--{$gbgb.nx}--</td>
														    <td>--{$gbgb.wx}--</td>
														    <td>--{$gbgb.fxwt}--</td>
														    --{if $gbgb.remark == "h"}--
														    <td><font color="red">谎报</font></td>
														    --{else}--
														    <td><font color="blue">正常</font></td>
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

