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
						<h1>审核人管理</h1>
					</div>
					
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a>主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a>审核人管理</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a>--{$cz}--</a>
						</li>
					</ul>
					<div class="close-bread">
						<a><i class="icon-remove"></i></a>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-content">
								<a href="Reviewer_add_from.php">添加</a>
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
															<th>审核人名称</th>
    														<th>操作</th>
														</tr>
													</thead>
													<tbody>
													   --{foreach from="$resList" item="reviewer"}--
														<tr>
															<td>--{$reviewer.reviewer}--</td>
														    <td><a href="Reviewer_update_from.php?id=--{$reviewer.id}--">修改</a>|<a href="Reviewer_delete.php?id=--{$reviewer.id}--">删除</a></td>
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
												</div>-->
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

