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
		--{if $flag == "oneWeektime"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<!-- 
					<div class="pull-right">
						<form class="form-horizontal" action="GbgbController.php?flag=oneWeektime_search" method="post">
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
					</div> -->
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
													--{$path2}--列表
												</h3>
												<div class="actions"><h3>时间：--{$datetimeStart}-- 至 --{$datetimeEnd}--</h3></div>
											</div>
											<form action="--{$action}--" method="post" class='form-horizontal form-bordered'>
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>排名</th>
															<th>单位</th>
															<th>时间（小时）</th>
															<th>跟班完成率</th>
															<th>备注</th>
														</tr>
													</thead>
													<tbody>
													 --{foreach from="$resWeek" item="Week"}--
														<tr>
															<td>--{$Week[0]}--</td>
														    <td>--{$Week.dept2}--</td>
														    <td>--{$Week.alltime}--（小时）</td>
														    <td>--{$Week.timeLv}--%</td>
														    <td>
														    	<input type="text" name="remark--{$Week[0]}--" placeholder="无"  />
														    </td>
														</tr>
													--{/foreach}--
													 --{foreach from="$resNO" item="WeekNO"}--
														<tr>
															<td></td>
														    <td>--{$WeekNO[0]}--</td>
														    <td>0（小时）</td>
														    <td>0%</td>
														    <td>
														    	<input type="text" name="remark--{$Week[0]+$WeekNO[1]}--" placeholder="无"  />
														    </td>
														</tr>
													--{/foreach}--
														<tr>
															<td>汇总：</td>
															<td colspan="4">
																<textarea name="remark_hz" id="remark_hz" rows="5" class="input-block-level" placeholder="无" ></textarea>
															</td>
														</tr>
														<tr>
															<td  colspan="5">
																<div class="form-actions">
																	<button type="submit" class="btn btn-primary">--{$button}--</button>
																	<!-- <button type="button" class="btn">取消</button> -->
																</div>
															</td>
														</tr>
													</tbody>
													
												</table>
											</div>
											
											</form>
										</div>
									</div>
								</div>
								<!-- ******************************* -->
							</div>
						</div>
					</div>
				</div>
			</div>
		--{elseif $flag == "updateoneWeektime"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<!-- 
					<div class="pull-right">
						<form class="form-horizontal" action="GbgbController.php?flag=oneWeektime_search" method="post">
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
					</div> -->
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
													修改
												</h3>
												<div class="actions"><h3>时间：--{$datetimeStart}-- 至 --{$datetimeEnd}--</h3></div>
											</div>
											<form action="--{$action}--" method="post" class='form-horizontal form-bordered'>
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>排名</th>
															<th>单位</th>
															<th>时间（小时）</th>
															<th>跟班完成率</th>
															<th>备注</th>
														</tr>
													</thead>
													<tbody>
													 --{foreach from="$content" item="Week"}--
														<tr>
															<td>--{$Week[0]}--</td>
														    <td>--{$Week[1]}--</td>
														    <td>--{$Week[2]}--</td>
														    <td>--{$Week[3]}--%</td>
														    <td>
														    	<input type="text" name="remark--{$Week[0]}--" value="--{$Week[4]}--" placeholder="无"  />
														    </td>
														</tr>
													--{/foreach}--
														<tr>
															<td>汇总：</td>
															<td colspan="4">
																<input type="hidden" name="id" value="--{$id}--" />
																<textarea name="remark_hz" id="remark_hz" rows="5" class="input-block-level" placeholder="无" >--{$huizongRemarks}--</textarea>
															</td>
														</tr>
														<tr>
															<td  colspan="5">
																<div class="form-actions">
																	<button type="submit" class="btn btn-primary">--{$button}--</button>
																	<!-- <button type="button" class="btn">取消</button> -->
																</div>
															</td>
														</tr>
													</tbody>
													
												</table>
											</div>
											
											</form>
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

