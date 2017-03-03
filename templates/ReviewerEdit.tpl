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
			--{if $flag == "add"}--
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
							<a>审核人记录</a>
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
								<form action="--{$action}--" method="post" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">单位名称</label>
										<div class="controls">
											<input type="text" name="reviewer" id="reviewer" placeholder="审核人" class="input-xlarge" >
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">--{$button}--</button>
										<button type="button" class="btn">取消</button>
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
							<a>审核人记录</a>
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
							<div class="row-fluid">
					<div class="span8">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i>--{$cz}--</h3>
							</div>
							<div class="box-content nopadding">
								<form action="--{$action}--" method="post" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">单位名称</label>
										<div class="controls">
											<input type="hidden" name="id" value="--{$reviewer.id}--" />
											<input type="text" name="reviewer" id="reviewer" placeholder="审核人" value="--{$reviewer.reviewer}--"  class="input-xlarge">
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">--{$button}--</button>
										<button type="button" class="btn">取消</button>
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
