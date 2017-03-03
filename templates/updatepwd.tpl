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
						<h1>--{$head}--</h1>
					</div>
					
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="#">位置</a>
							<i class="icon-angle-right"></i>
						</li>
						<!-- 
						<li>
							<a href="more-files.html"></a>
							<i class="icon-angle-right"></i>
						</li> -->
						<li>
							<a href="#">--{$head}--</a>
						</li>
					</ul>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-content">
								<div class="row-fluid">
									<div class="span12">
										<div class="box box-bordered">
											<div class="box-title">
												<h3><i class="icon-th-list"></i>--{$head}-- </h3>
											</div>
											<div class="box-content nopadding">
												<div class="box-content">
								<form action="--{$action}--" method="post" class='form-horizontal form-striped form-validate' id="bb">
									<div class="control-group">
										<label for="pwfield" class="control-label">当前密码</label>
										<!-- <input type="hidden" name="id"  value="--{$id}--"/> --> 
										<div class="controls">
											<input type="text" name="oldpwd" id="oldpwd" class="input-xlarge" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="pwfield" class="control-label">新密码</label>
										<div class="controls">
											<input type="password" name="newpwd" id="newpwd" class="input-xlarge" data-rule-required="true">
										</div>
									</div>
									<div class="control-group">
										<label for="confirmfield" class="control-label">确认密码</label>
										<div class="controls">
											<input type="password" name="confirmpwd" id="confirmpwd" class="input-xlarge" data-rule-equalTo="#newpwd" data-rule-required="true">
										</div>
									</div>
									<div class="form-actions">
										<!-- <input type="button" onclick="submitData()" class="btn btn-primary" value="确认"> -->
										<input type="submit" class="btn btn-primary" value="确认">
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
			</div>
		</div>
    </div>
		
	</body>

	</html>

