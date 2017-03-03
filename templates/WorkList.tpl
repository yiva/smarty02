<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>第三通信团网上交班系统</title>
--{include file="js.tpl"}--
	<style>
	.middle-demo-1{
	height: 4em;
	line-height: 4em;
	overflow: hidden;
	}
</style>
</head>

<body>
--{$position}--
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
						<h1>行政出勤汇报表</h1>
					</div>
					
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="more-login.html">主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="more-files.html">行政出勤汇报表</a>
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
					<div class="span12">
						<div class="box box-bordered box-color">
							<div class="box-title">
								<h3 class="span4"><i class="icon-group"></i> <span style="font-weight: bolder;">一营</span>(<span id=factnum>实到</span>/<span id="shouldnum">应到</span>)</h3>
								<div class="offset2 span6" style=""><h3><strong>值班首长</strong><span id="dutyhead">***</span><strong>值班员</strong><span id="dutyer">***</span></h3></div>
							</div>
							<div class="box-content nopadding">
								<form action="#" method="post" class='form-horizontal form-bordered form-vertical'>
									<div class="control-group">
										<label for="gbfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">干部</label>
										<div class="controls">
										<div class="span3">
										<label>实在</label>
											<input type="text" name="gbfactnum" id="gbfactnum" placeholder="实在" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
											<label>应在</label>
											<input type="text" name="gbfactnum" id="gbfactnum" placeholder="应在" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
											<label>休假</label>
											<input type="text" name="gbholiday" id="gbholiday" placeholder="休假" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
											<label>外出</label>
											<input type="text" name="gbout" id="gbout" placeholder="外出" class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="sgfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">士官</label>
										<div class="controls">
										<div class="span3">
										<label>实在</label>
											<input type="text" name="sgfactnum" id="sgfactnum" placeholder="实在" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
											<label>应在</label>
											<input type="text" name="sgfactnum" id="sgfactnum" placeholder="应在" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
											<label>休假</label>
											<input type="text" name="sgholiday" id="sgholiday" placeholder="休假" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
											<label>外出</label>
											<input type="text" name="sgout" id="sgout" placeholder="外出" class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="ywbfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">义务兵</label>
										<div class="controls">
										<div class="span3">
										<label>实在</label>
											<input type="text" name="ywbfactnum" id="ywbfactnum" placeholder="实在" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
											<label>应在</label>
											<input type="text" name="ywbfactnum" id="ywbfactnum" placeholder="应在" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
											<label>休假</label>
											<input type="text" name="ywbholiday" id="ywbholiday" placeholder="休假" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
											<label>外出</label>
											<input type="text" name="ywbout" id="ywbout" placeholder="外出" class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">备注</label>
										<div class="controls">
											<textarea name="remark" id="remark" rows="5" class="input-block-level" placeholder="备注"></textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="weather" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">天气</label>
										<div class="controls">
										<input type="text" name="weather" id="weather" placeholder="天气" class="input" data-rule-required="true">
										</div>
										</div>
									<div class="control-group">
										<label for="Healthprevention" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">卫生防疫</label>
										<div class="controls">
											<input type="text" name="Healthprevention" id="Healthprevention" placeholder="卫生防疫" class="input" data-rule-required="true">
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">确认</button>
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
			
			
			--{/if}--
		</div>
    </div>

</body>
</html>
