<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>第三通信团网上交班系统</title>
	--{include file="js.tpl"}--
<script type="text/javascript">

	function jump(url){
		window.location = url;
		}
</script>

	<style>
	.middle-demo-1{
	height: 4em;
	line-height: 4em;
	overflow: hidden;
	}
</style>
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
		--{if $flag == "oneWeektime_show_no"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<!-- 
					<div class="pull-right">
						<form class="form-horizontal" action="WorkController.php?flag=l_search" method="post">
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
								--{if $ShowMessage == "1"}--
								
								
								--{elseif $ShowMessage == "2"}--
								<font color="red">本周暂无</font>添加一周跟班统计信息，请<a href="oneweek_add_from.php">添加</a>
								
								--{elseif $ShowMessage == "3"}--
								请在<font color="red">每周日16:00~24:00</font>进行数据统计，其他时段不可操作.
								--{/if}--
							</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			
			--{elseif $flag == "oneWeektime_show"}--
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
							<a>主页1111111111111111111111111111</a>
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
											<{$content|@print_r}> 
											
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
													 --{foreach from="$content" item="gbgb"}--
														<tr>
															<td>--{$gbgb[0]}--</td>
														    <td>--{$Week[0]}--</td>
														    <td>--{$Week[2]}--</td>
														    <td>--{$Week[3]}--%</td>
														    <td>--{$gbgb[4]}--</td>
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
