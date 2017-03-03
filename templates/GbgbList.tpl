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
						<form class="form-horizontal" action="GbgbController.php?flag=l_search" method="post">
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
												<div class="actions"><h3>时间：--{$date}--</h3></div>
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
															<!-- <th>备注</th> -->
															<th>操作</th>
														</tr>
													</thead>
													<tbody>
													 --{foreach from="$resList" item="gbgb"}--
														<tr>
															<td>--{$date}--</td>
														    <td>--{$gbgb.dept}--</td>
														    <td>--{$gbgb.gbzw}--</td>
														    <td>--{$gbgb.nx}--</td>
														    <td>--{$gbgb.wx}--</td>
														    <td>--{$gbgb.fxwt}--</td>
														    <!--<td>--{$gbgb.remark}--</td>-->
														    --{if $gbgb.yflag == 0 & $gbgb.tflag == 0 & $gbgb.tmp_mdate != "0" & $gbgb.remark == ""}--
														    <td><!-- <a href="Gbgb_update_from.php?id=--{$gbgb.id}--">修改</a>| -->
														    	<a href="Gbgb_delete.php?id=--{$gbgb.id}--">删除</a></td>
														    --{elseif $gbgb.remark == "h"}--
														    <td><font color="red">谎报信息</font></td>
														    --{else}--
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
														    --{if $gbgb.yflag == 0 & $gbgb.tflag == 0 & $gbgb.tmp_mdate != "0"}--
														    <td><a href="Gbgb_update_from.php?id=--{$gbgb.id}--">修改</a>|<a href="Gbgb_delete.php?id=--{$gbgb.id}--">删除</a></td>
														    --{else}--
														    <td><font color="red">信息已审核</font></td>
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
			--{elseif  $flag == "t_normal"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>干部跟班记录</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="GbgbController.php?flag=t_search" method="post">
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
								<!-- ******************************* -->
								<div class="row-fluid">
									<div class="span12">
										<div class="box box-color box-bordered">
											<div class="box-title">
												<h3>
													<i class="icon-table"></i>
													干部跟班记录列表
												</h3>
												<div class="actions"><h3>时间：--{$date}--</h3></div>
											</div>
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>序号</th>
															<th>跟班日期</th>
															<th>单位</th>
															<th>干部职务</th>
															<th>内线</th>
															<th>外线</th>
															<th>发现问题</th>
															<!-- <th>备注</th> -->
															<th>操作</th>
														</tr>
													</thead>
													<tbody>
													
													 --{foreach from="$resList" item="gbgb"}--
														<tr>
															<td>--{$gbgb[0]}--</td>
															<td>--{$gbgb.mdate}--</td>
														    <td>--{$gbgb.dept}--</td>
														    <td>--{$gbgb.gbzw}--</td>
														    <td>--{$gbgb.nx}--</td>
														    <td>--{$gbgb.wx}--</td>
														    <td>--{$gbgb.fxwt}--</td>
														    <!-- <td>--{$gbgb.remark}--</td> -->
														    --{if $gbgb.yflag == 0 & $gbgb.tflag == 0 & $gbgb.tmp_mdate != "0" & $gbgb.remark == ""}--
														    <td><a href="Gbgb_update_from.php?flag=t_update&id=--{$gbgb.id}--">修改</a>
														    |<a href="Gbgb_delete.php?flag=t_delete&id=--{$gbgb.id}--">删除</a>
														    |<a href="Gbgb_huangbao.php?flag=hb&id=--{$gbgb.id}--">谎报</a>
														    </td>
														    --{elseif $gbgb.remark == "h"}--
														    	
															    <td><font color="red">谎报信息</font>
															    --{if  $gbgb.tmp_mdate != "0" }--
															    	|<a href="Gbgb_huangbao.php?flag=cxhb&id=--{$gbgb.id}--">撤销谎报</a>
															    --{/if}--
															    </td>
															 
														    --{else}--
														    <td><font color="blue">信息已审核</font></td>
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
			--{elseif  $flag == "onedaytime"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="GbgbController.php?flag=onedaytime_search" method="post">
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
													--{$path2}--列表
												</h3>
												<div class="actions"><h3>时间：--{$datetimeStart}-- 至 --{$datetimeEnd}--</div>
											</div>
											<div class="box-content nopadding">
												<table class="table table-hover table-nomargin">
													<thead>
														<tr>
															<th>单位</th>
															<th>职位</th>
															<th>时间（小时）</th>
															<th>跟班完成率</th>
														</tr>
													</thead>
													<tbody>
													 --{foreach from="$gbgbAllTime" item="gbgb"}--
														<tr>
														    <td>--{$gbgb.dept}--</td>
														    <td>--{$gbgb.gbzw}--</td>
														    <td>--{$gbgb.alltime}--（小时）</td>
														    <td>--{$gbgb.timeLv*100}--%</td>
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
			--{elseif  $flag == "oneWeektime"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
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
													--{$path2}--列表
												</h3>
												<div class="actions"><h3>时间：--{$datetimeStart}-- 至 --{$datetimeEnd}--</h3></div>
											</div>
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
														    <td>--{$Week.alltime}--</td>
														    <td>--{$Week.timeLv}--（小时）</td>
														    <td>--{$gbgb.alltime}--（小时）</td>
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
			--{elseif  $flag == "t_normal_fenye"}--
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
															--{if $gbgb.tmp_mdate != 0}--
														    <td><a href="Gbgb_update_from.php?flag=t_update&id=--{$gbgb.id}--">修改</a>|<a href="Gbgb_delete.php?flag=t_delete&id=--{$gbgb.id}--">删除</a></td>
															--{else}--
															<td><font color="#FF0000">信息不可修改</font></td>
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
			--{/if}--
		</div>
    </div>
		
	</body>

	</html>

