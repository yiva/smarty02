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
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>干部跟班记录</h1>
					</div>
					
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="more-files.html">干部跟班记录</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="more-blank.html">--{$cz}--</a>
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
								<a href="Gbgb_add_from.php">添加</a>
								<!-- ******************************* -->
								<div class="row-fluid">
									<div class="span12">
										<div class="box box-color box-bordered">
											<div class="box-title">
												<h3>
													<i class="icon-table"></i>
													干部跟班记录列表
												</h3>
											</div>
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>输入跟班日期</th>
															<th>单位</th>
															<th>干部职务</th>
															<th>内线</th>
															<th>外线</th>
															<th>发现问题</th>
															<th>备注</th>
															<th>操作</th>
														</tr>
													</thead>
													<tbody>
													 --{foreach from="$resList" item="gbgb"}--
														<tr>
															<td>--{$gbgb.mdate}--</td>
														    <td>--{$gbgb.dept}--</td>
														    <td>--{$gbgb.gbzw}--</td>
														    <td>--{$gbgb.nx}--</td>
														    <td>--{$gbgb.wx}--</td>
														    <td>--{$gbgb.fxwt}--</td>
														    <td>--{$gbgb.remark}--</td>
														    --{if $gbgb.yflag == 0 & $gbgb.tflag == 0}--
														    <td><a href="Gbgb_update_from.php?id=--{$gbgb.id}--">修改</a>|<a href="Gbgb_delete.php?id=--{$gbgb.id}--">删除</a></td>
														    --{else}--
														    <td><font color="red">该信息已通过上级审核，不可修改</font></td>
														    --{/if}--
														</tr>
													--{/foreach}--
													</tbody>
												</table>
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
		</div>
    </div>
		
	</body>

	</html>

