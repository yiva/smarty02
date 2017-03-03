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
		--{if $flag == "l_havedata"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
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
							<a>当天出勤汇报表</a>
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
								<h3 class="span4"><i class="icon-group"></i> <span style="font-weight: bolder;">--{$unit}--:</span>--{$workTemp.factnum}--/--{$workTemp.shouldnum}--(<span id="factnum">实到</span>/<span id="shouldnum">应到</span>)</h3>
								<div class=" span6">
									<h3><strong>值班首长:</strong><span id="dutyhead">--{$workTemp.dutyhead}--</span>&nbsp;&nbsp;&nbsp;&nbsp;<strong>值班员:</strong><span id="dutyer">--{$workTemp.dutyer}--</span></h3>
									<h3><div style="margin-left:20px;">时间：--{$date}--</div></h3>
								</div>
							</div>
							<div class="box-content nopadding">
								<form action="" method="post" class='form-horizontal form-bordered form-vertical'>
									<div class="control-group">
										<label for="gbfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">干部</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="gbfactnum" id="gbshouldnum" placeholder="无" value="--{$workTemp.gbshouldnum}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="gbfactnum" id="gbfactnum" placeholder="无" value="--{$workTemp.gbfactnum}--" readonly="readonly" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="gbholiday" id="gbholiday" placeholder="无" value="--{$workTemp.gbholiday}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>外出</label>
												<input type="text" name="gbout" id="gbout" placeholder="无" value="--{$workTemp.gbout}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="sgfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">士官</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="sgshouldnum" id="sgshouldnum" placeholder="无" value="--{$workTemp.sgshouldnum}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="sgfactnum" id="sgfactnum" placeholder="无" value="--{$workTemp.sgfactnum}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="sgholiday" id="sgholiday" placeholder="无"  value="--{$workTemp.sgholiday}--" readonly="readonly" class="input-small" data-rule-required="true">
											</div>
												<div class="span3">
												<label>外出</label>
											<input type="text" name="sgout" id="sgout" placeholder="无" value="--{$workTemp.sgout}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="ywbfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">义务兵</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="ywbshouldnum" id="ywbshouldnum" placeholder="无"  value="--{$workTemp.ywbshouldnum}--" readonly="readonly" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="ywbfactnum" id="ywbfactnum" placeholder="无" value="--{$workTemp.ywbfactnum}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="ywbholiday" id="ywbholiday" placeholder="无" value="--{$workTemp.ywbholiday}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>外出</label>
												<input type="text" name="ywbout" id="ywbout" placeholder="无" value="--{$workTemp.ywbout}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">人员变动情况</label>
										<div class="controls">
											<textarea name="remark" id="remark" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp.remark}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">一日工作开展情况</label>
										<div class="controls">
											<textarea name="onedaywork" id="onedaywork" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp.onedaywork}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">首长机关下连情况</label>
										<div class="controls">
											<textarea name="headdownlian" id="headdownlian" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp.headdownlian}--</textarea>
										</div>
									</div>
									--{if $unitNum == "9"}--
									<div class="control-group">
										<label for="weather" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">天气</label>
										<div class="controls">
										<input type="text" name="weather" id="weather" placeholder="无" value="--{$workTemp.weather}--" class="input" data-rule-required="true" readonly="readonly"  />
										</div>
										</div>
									<div class="control-group">
										<label for="Healthprevention" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">明日预报天气</label>
										<div class="controls">
											<input type="text" name="Healthprevention" id="Healthprevention" placeholder="无" value="--{$workTemp.Healthprevention}--" class="input" data-rule-required="true" readonly="readonly" />
										</div>
									</div>
									--{/if}--
									--{if $workTemp.yflag == 0 && $workTemp.tflag == 0}--
									<div class="form-actions">
										<button type="button" onclick="jump('Work_update_from.php?id=--{$workTemp.id}--')" class="btn btn-primary">--{$button}--</button>
										<button type="button" onclick="jump('Work_delete.php?id=--{$workTemp.id}--')" class="btn">删除</button>
									</div>
									--{else}--
									<div class="form-actions">
										<strong><font color="red">已进行汇总，不可修改</font></strong>
									</div>
									--{/if}--
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
			--{elseif $flag == "l_nodata"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
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
								
								--{if $search == "search"}--
								<font color="red">暂无当日</font>添加出勤信息.
								--{else}--
								<font color="red">今天暂无</font>添加出勤信息，请<a href="Work_add_from.php">添加</a>
								--{/if}--
							</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		--{elseif $flag == "t_havedata_self"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="WorkController.php?flag=t_search_self" method="post">
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
							<a>当天出勤汇报表</a>
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
								<h3 class="span5"><i class="icon-group"></i> <span style="font-weight: bolder;">--{$unit}--:</span>--{$workTemp.factnum}--/--{$workTemp.shouldnum}--(<span id="factnum">实到</span>/<span id="shouldnum">应到</span>)</h3>
								<div class=" span5" style=""><h3><strong>值班首长:</strong><span id="dutyhead">--{$workTemp.dutyhead}--</span>&nbsp;&nbsp;&nbsp;&nbsp;<strong>值班员:</strong><span id="dutyer">--{$workTemp.dutyer}--</span></h3>
								</div>
								<!-- <div class=" span3 actions" ><h3>时间：--{$date}--</h3></div> -->
								<h3 class="actions">时间：--{$date}--</h3>
							</div>
							<div class="box-content nopadding">
								<form action="" method="post" class='form-horizontal form-bordered form-vertical'>
									<div class="control-group">
										<label for="gbfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">干部</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="gbfactnum" id="gbshouldnum" placeholder="无" value="--{$workTemp.gbshouldnum}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="gbfactnum" id="gbfactnum" placeholder="无" value="--{$workTemp.gbfactnum}--" readonly="readonly" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="gbholiday" id="gbholiday" placeholder="无" value="--{$workTemp.gbholiday}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>外出</label>
												<input type="text" name="gbout" id="gbout" placeholder="无" value="--{$workTemp.gbout}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="sgfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">士官</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="sgshouldnum" id="sgshouldnum" placeholder="无" value="--{$workTemp.sgshouldnum}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="sgfactnum" id="sgfactnum" placeholder="无" value="--{$workTemp.sgfactnum}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="sgholiday" id="sgholiday" placeholder="无"  value="--{$workTemp.sgholiday}--" readonly="readonly" class="input-small" data-rule-required="true">
											</div>
												<div class="span3">
												<label>外出</label>
											<input type="text" name="sgout" id="sgout" placeholder="无" value="--{$workTemp.sgout}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="ywbfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">义务兵</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="ywbshouldnum" id="ywbshouldnum" placeholder="无"  value="--{$workTemp.ywbshouldnum}--" readonly="readonly" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="ywbfactnum" id="ywbfactnum" placeholder="无" value="--{$workTemp.ywbfactnum}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="ywbholiday" id="ywbholiday" placeholder="无" value="--{$workTemp.ywbholiday}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>外出</label>
												<input type="text" name="ywbout" id="ywbout" placeholder="无" value="--{$workTemp.ywbout}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">人员变动情况</label>
										<div class="controls">
											<textarea name="remark" id="remark" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp.remark}--</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">一日工作开展情况</label>
										<div class="controls">
											<textarea name="onedaywork" id="onedaywork" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp.onedaywork}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">首长机关下连情况</label>
										<div class="controls">
											<textarea name="headdownlian" id="headdownlian" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp.headdownlian}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="weather" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">天气</label>
										<div class="controls">
										<input type="text" name="weather" id="weather" placeholder="无" value="--{$workTemp.weather}--" class="input" data-rule-required="true" readonly="readonly"  />
										</div>
										</div>
									<div class="control-group">
										<label for="Healthprevention" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">卫生防疫</label>
										<div class="controls">
											<input type="text" name="Healthprevention" id="Healthprevention" placeholder="无" value="--{$workTemp.Healthprevention}--" class="input" data-rule-required="true" readonly="readonly" />
										</div>
									</div> -->
									--{if $workTemp.yflag == 0 && $workTemp.tflag == 0}--
									<div class="form-actions">
										<button type="button" onclick="jump('Work_update_from.php?flag=t_update&id=--{$workTemp.id}--')" class="btn btn-primary">--{$button}--</button>
										<button type="button" onclick="jump('Work_delete.php?flag=t_delete&id=--{$workTemp.id}--')" class="btn">删除</button>
									</div>
									--{else}--
									<div class="form-actions">
										<strong><font color="red">信息已审核</font></strong>
									</div>
									--{/if}--
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
			--{elseif $flag == "t_nodata_self"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="WorkController.php?flag=t_search_self" method="post">
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
								
								--{if $search == "search"}--
								<font color="red">暂无当日</font>添加出勤信息.
								--{else}--
								<font color="red">今天暂无</font>添加出勤信息，请<a href="Work_add_from.php?flag=t_add_self">添加</a>
								--{/if}--
							</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			--{elseif $flag == "y_havedata"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="WorkController.php?flag=y_search" method="post">
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
								<div class="pull-right span2">
								--{if $huizongBtn == "0"}--
								<button class="btn btn-block btn-large" type="button" onclick="jump('Work_huizong_from.php?flag=y_huizong')"><strong>汇总</strong></button>
								--{elseif $huizongBtn == "1"}--
								<strong><font color="red">今天已进行汇总操作</font></strong>
								--{else}--
								<strong><font color="red">以下为历史数据不可汇总</font></strong>
								--{/if}--
								</div>
							
					<!-- start -->	
					--{foreach from="$workTemp" item="work"}--	
					<div class="row-fluid">
					<div class="span12">
							<div class="box box-color box-bordered">
								<div class="box-title">
									<h3>
										<i class="icon-table"></i>
										--{$work.tmp_name}--
									</h3>
									<div class="offset2">
										<h3 >
											--{$work.factnum}--/--{$work.shouldnum}--(总数实在/总数应在)
										</h3>
									</div>
								</div>
								<div class="box-content nopadding">
									<div class="dataTables_wrapper">
										<div class="dataTables_scroll">
												<div class="dataTables_scrollBody" style="overflow: auto; width: 100%;"  style="margin-left: 0px;">
												<form action="#" method="post" class='form-bordered form-vertical form-validate' id="bb">
												<table  class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
												<tbody>
													
														<tr class="odd">
															<td class="span5" style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">值班领导</td>
															<td class="span7" style="background-color: #f2f2f2;border-color:#a3a3a3;">
															<p>--{$work.dutyhead}--</p></td>
														</tr>
														<tr class="odd">
															<td class="span5" style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">值班人</td>
															<td class="span7" style="background-color: #f2f2f2;border-color:#a3a3a3;">
															<p>--{$work.dutyer}--</p></td>
														</tr>
														<tr class="odd">
															<td class="span5" style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">干部</td>
															<td class="span7" style="background-color: #f2f2f2;border-color:#a3a3a3;">
															<p>应在：--{$work.gbshouldnum}--&nbsp;&nbsp;实在：--{$work.gbfactnum}--&nbsp;&nbsp;休假：--{$work.gbholiday}--&nbsp;&nbsp;外出：--{$work.gbout}--&nbsp;&nbsp;在位率：--{$work.gbl}--</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">士官</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;">
															<p>应在：--{$work.sgshouldnum}--&nbsp;&nbsp;实在：--{$work.sgfactnum}--&nbsp;&nbsp;休假：--{$work.sgholiday}--&nbsp;&nbsp;外出：--{$work.sgout}--&nbsp;&nbsp;在位率：--{$work.sgl}--</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">义务兵</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;">
															<p>应在：--{$work.ywbshouldnum}--&nbsp;&nbsp;实在：--{$work.ywbfactnum}--&nbsp;&nbsp;休假：--{$work.ywbholiday}--&nbsp;&nbsp;外出：--{$work.ywbout}--&nbsp;&nbsp;在位率：--{$work.ywbl}--</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">人员变动情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;">
															<p>--{$work.remark}--</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">一日工作开展情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;">
															<p>--{$work.onedaywork}--</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">首长机关下连情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;">
															<p>--{$work.headdownlian}--</p></td>
														</tr>
												</tbody>
											</table>
											</form>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						</div>
						--{/foreach}--
					<!-- End -->
				
								</div>
						</div>
					</div>
				</div>
			</div>
			--{elseif $flag == "y_nodata"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="WorkController.php?flag=y_search" method="post">
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
								<font color="red">今天暂无</font>连队信息。
							</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			--{elseif $flag == "t_havedata"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="WorkController.php?flag=t_search" method="post">
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
								<div class="pull-right span2">
								--{if $huizongBtn == "0"}--
								<button class="btn btn-block btn-large" type="button" onclick="jump('Work_huizong_from.php?flag=t_huizong')"><strong>汇总</strong></button>
								--{elseif $huizongBtn == "1"}--
								<strong><font color="red">今天已进行汇总操作</font></strong>
								--{elseif $huizongBtn == "2"}--
								<strong><font color="red">数据信息不全,<br/>不能进行汇总操作</font></strong>
								--{/if}--
								</div>
							
					<!-- start -->	
					--{foreach from="$workTemp" item="work"}--	
					<div class="row-fluid">
					<div class="span12">
							<div class="box box-color box-bordered">
								<div class="box-title">
									<h3>
										<i class="icon-table"></i>
										--{$work.tmp_name}--
									</h3>
									<div class="offset2">
										<h3 >
											--{$work.factnum}--/--{$work.shouldnum}--(总数实在/总数应在)
										</h3>
									</div>
								</div>
								<div class="box-content nopadding">
									<div class="dataTables_wrapper">
										<div class="dataTables_scroll">
												<div class="dataTables_scrollBody" style="overflow: auto; width: 100%;"  style="margin-left: 0px;">
												<form action="#" method="post" class='form-bordered form-vertical form-validate' id="bb">
												<table  class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
												<tbody>
													
														<tr class="odd">
															<td class="span5" style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">值班领导</td>
															<td class="span7" style="background-color: #f2f2f2;border-color:#a3a3a3;">
															<p>--{$work.dutyhead}--</p></td>
														</tr>
														<tr class="odd">
															<td class="span5" style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">值班人</td>
															<td class="span7" style="background-color: #f2f2f2;border-color:#a3a3a3;">
															<p>--{$work.dutyer}--</p></td>
														</tr>
														<tr class="odd">
															<td class="span5" style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">干部</td>
															<td class="span7" style="background-color: #f2f2f2;border-color:#a3a3a3;">
															<p>应在：--{$work.gbshouldnum}--&nbsp;&nbsp;实在：--{$work.gbfactnum}--&nbsp;&nbsp;休假：--{$work.gbholiday}--&nbsp;&nbsp;外出：--{$work.gbout}--&nbsp;&nbsp;在位率：--{$work.gbl}--</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">士官</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;">
															<p>应在：--{$work.sgshouldnum}--&nbsp;&nbsp;实在：--{$work.sgfactnum}--&nbsp;&nbsp;休假：--{$work.sgholiday}--&nbsp;&nbsp;外出：--{$work.sgout}--&nbsp;&nbsp;在位率：--{$work.sgl}--</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">义务兵</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;">
															<p>应在：--{$work.ywbshouldnum}--&nbsp;&nbsp;实在：--{$work.ywbfactnum}--&nbsp;&nbsp;休假：--{$work.ywbholiday}--&nbsp;&nbsp;外出：--{$work.ywbout}--&nbsp;&nbsp;在位率：--{$work.ywbl}--</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">人员变动情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;">
															<p>--{$work.remark}--</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">一日工作开展情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;">
															<p>--{$work.onedaywork}--</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">首长机关下连情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;">
															<p>--{$work.headdownlian}--</p></td>
														</tr>
												</tbody>
											</table>
											</form>
											</div>
										</div>
									</div>
									<!-- 
									<div class="form-actions offset8">
										<button type="submit" class="btn btn-primary">确认</button>
										<button type="button" class="btn">取消</button>
									</div>
									 -->
								</div>
								
							</div>
						</div>
						</div>
						--{/foreach}--
					<!-- End -->
				
								</div>
						</div>
					</div>
				</div>
			</div>
			--{elseif $flag == "t_nodata"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="WorkController.php?flag=t_search" method="post">
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
								<font color="red">今天暂无</font>连队信息。
							</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			--{elseif $flag == "y_huizong"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="WorkController.php?flag=y_search_huizong" method="post">
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
					<div class="span12">
						<div class="box box-bordered box-color">
							<div class="box-title">
								<h3 class="span4"><i class="icon-group"></i> <span style="font-weight: bolder;">--{$unit}--<font color="red">汇总</font>:</span>--{$workTemp.factnum}--/--{$workTemp.shouldnum}--(<span id=factnum>实到</span>/<span id="shouldnum">应到</span>)</h3>
								<div class=" span6">
									<h3><strong>值班首长:</strong><span id="dutyhead">--{$workTemp.dutyhead}--</span>&nbsp;&nbsp;&nbsp;&nbsp;<strong>值班员:</strong><span id="dutyer">--{$workTemp.dutyer}--</span></h3>
									<h3><div style="margin-left:20px;">时间：--{$date}--</div></h3>
								</div>
							</div>
							<div class="box-content nopadding">
								<form action="" method="post" class='form-horizontal form-bordered form-vertical'>
									<div class="control-group">
										<label for="gbfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">干部</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="gbfactnum" id="gbshouldnum" placeholder="应在" value="--{$workTemp.gbshouldnum}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="gbfactnum" id="gbfactnum" placeholder="实在" value="--{$workTemp.gbfactnum}--" readonly="readonly" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="gbholiday" id="gbholiday" placeholder="休假" value="--{$workTemp.gbholiday}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>外出</label>
												<input type="text" name="gbout" id="gbout" placeholder="外出" value="--{$workTemp.gbout}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="sgfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">士官</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="sgshouldnum" id="sgshouldnum" placeholder="应在" value="--{$workTemp.sgshouldnum}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="sgfactnum" id="sgfactnum" placeholder="实在" value="--{$workTemp.sgfactnum}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="sgholiday" id="sgholiday" placeholder="休假"  value="--{$workTemp.sgholiday}--" readonly="readonly" class="input-small" data-rule-required="true">
											</div>
												<div class="span3">
												<label>外出</label>
											<input type="text" name="sgout" id="sgout" placeholder="外出" value="--{$workTemp.sgout}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									<div class="control-group">
										<label for="ywbfactnum" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">义务兵</label>
										<div class="controls">
											<div class="span3">
												<label>应在</label>
												<input type="text" name="ywbshouldnum" id="ywbshouldnum" placeholder="应在"  value="--{$workTemp.ywbshouldnum}--" readonly="readonly" class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>实在</label>
												<input type="text" name="ywbfactnum" id="ywbfactnum" placeholder="实在" value="--{$workTemp.ywbfactnum}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>休假</label>
												<input type="text" name="ywbholiday" id="ywbholiday" placeholder="休假" value="--{$workTemp.ywbholiday}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
											<div class="span3">
												<label>外出</label>
												<input type="text" name="ywbout" id="ywbout" placeholder="外出" value="--{$workTemp.ywbout}--" readonly="readonly"  class="input-small" data-rule-required="true">
											</div>
										</div>
									</div>
									
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">人员变动情况</label>
										<div class="controls">
											<textarea name="remark" id="remark" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp.remark}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">一日工作开展情况</label>
										<div class="controls">
											<textarea name="remark" id="remark" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp.onedaywork}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="remark" class="control-label middle-demo-1 nopadding" style="font-size: 20px;font-weight: bolder;text-align:right;">首长机关下连情况</label>
										<div class="controls">
											<textarea name="remark" id="remark" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp.headdownlian}--</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="weather" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">天气</label>
										<div class="controls">
										<input type="text" name="weather" id="weather" placeholder="天气" value="--{$workTemp.weather}--" class="input" data-rule-required="true" readonly="readonly"  />
										</div>
										</div>
									<div class="control-group">
										<label for="Healthprevention" class="control-label" style="font-size: 20px;font-weight: bolder;text-align:right;">卫生防疫</label>
										<div class="controls">
											<input type="text" name="Healthprevention" id="Healthprevention" placeholder="卫生防疫" value="--{$workTemp.Healthprevention}--" class="input" data-rule-required="true" readonly="readonly" />
										</div>
									</div> -->
									<div class="form-actions">
										--{if $workTemp.yflag == 0 && $workTemp.tflag == 0}--
										<div class="form-actions">
											<button type="button" onclick="jump('Work_update_from.php?flag=y_huizong&id=--{$workTemp.id}--')" class="btn btn-primary">--{$button}--</button>
											<button type="button" onclick="jump('Work_delete.php?flag=y_huizong&id=--{$workTemp.id}--')" class="btn">删除</button>
										</div>
										--{else}--
										<div class="form-actions">
											<strong><font color="red">信息已审核</font></strong>
										</div>
										--{/if}--
										
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
			--{elseif $flag == "y_nohuizong"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="WorkController.php?flag=y_search_huizong" method="post">
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
								<font color="red">今天暂无</font>汇总信息。
							</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			
			--{elseif $flag == "t_huizong"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="WorkController.php?flag=t_search_huizong" method="post">
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
							<i class="icon-angle-right"></i>
						</li>
					</ul>
					<div class="close-bread">
						<a><i class="icon-remove"></i></a>
					</div>
				</div>
				<!-- Begin 表格组 -->
					<div class="row-fluid">
					<!-- Begin 单个表格 -->
						<div class="span12">
							<div class="box box-color box-bordered">
								<div class="box-title">
									<h3>
										<i class="icon-table"></i>
									</h3>
									<div class="span11">
										<h3>汇报单位:--{$unit}--&nbsp;&nbsp;&nbsp;&nbsp;</h3>
										<h3>值班时间:--{$date}--</h3>
									</div>
								</div>
								<div class="box-content nopadding">
									<div class="dataTables_wrapper">
										<div class="dataTables_scroll">
												<div class="dataTables_scrollBody" style="overflow: auto; width: 100%; "  style="margin-left: 0px;">
												<form action="#" method="post" class='form-bordered form-vertical'>
												<table  class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
												<tbody>
													<!-- Begin 工作情况及营领导位置 -->
													<tr class="odd">
														<td style="text-align:center;background-color: #e8e8e8;"><h4>全团值班情况</h4></td>
														<td colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>团值班首长</h4></td>
																	<td style="text-align: center;background-color: #ffffff; font-size:16px">--{$workTemp.dutyhead}--</td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>团值班员</h4></td>
																	<td style="text-align: center;background-color: #ffffff; font-size:16px"">--{$workTemp.dutyer}--</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>一营值班首长</h4></td>
																	<td style="text-align: center;background-color: #ffffff; font-size:16px">--{$workTemp1.dutyhead_t}--</td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>一营值班员</h4></td>
																	<td style="text-align: center;background-color: #ffffff; font-size:16px"">--{$workTemp1.dutyer_t}--</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>二营值班首长</h4></td>
																	<td style="text-align: center;background-color: #ffffff; font-size:16px">--{$workTemp2.dutyhead_t}--</td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>二营值班员</h4></td>
																	<td style="text-align: center;background-color: #ffffff; font-size:16px"">--{$workTemp2.dutyer_t}--</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>三营值班首长</h4></td>
																	<td style="text-align: center;background-color: #ffffff; font-size:16px">--{$workTemp3.dutyhead_t}--</td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>三营值班员</h4></td>
																	<td style="text-align: center;background-color: #ffffff; font-size:16px"">--{$workTemp3.dutyer_t}--</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>四营值班首长</h4></td>
																	<td style="text-align: center;background-color: #ffffff; font-size:16px">--{$workTemp4.dutyhead_t}--</td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>四营值班员</h4></td>
																	<td style="text-align: center;background-color: #ffffff; font-size:16px"">--{$workTemp4.dutyer_t}--</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>五营值班首长</h4></td>
																	<td style="text-align: center;background-color: #ffffff; font-size:16px">--{$workTemp5.dutyhead_t}--</td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>五营值班员</h4></td>
																	<td style="text-align: center;background-color: #ffffff; font-size:16px"">--{$workTemp5.dutyer_t}--</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>警勤连值班首长</h4></td>
																	<td style="text-align: center;background-color: #ffffff; font-size:16px">--{$workTemp6.dutyhead_t}--</td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>警勤连值班员</h4></td>
																	<td style="text-align: center;background-color: #ffffff; font-size:16px"">--{$workTemp6.dutyer_t}--</td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>教导队值班首长</h4></td>
																	<td style="text-align: center;background-color: #ffffff; font-size:16px">--{$workTemp7.dutyhead_t}--</td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>教导队值班员</h4></td>
																	<td style="text-align: center;background-color: #ffffff; font-size:16px"">--{$workTemp7.dutyer_t}--</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr class="odd">
															<td class="span3" style="text-align:center;background-color: #dedede;" rowspan="7"><h4>工作情况及<br/>营领导位置</h4></td>
															<td class="span1" style="text-align: center;background-color: #f2f2f2;"><h4>一营</h4></td>
															<td class="span8" >
																<textarea name="onedaywork1" id="onedaywork1" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp1.onedaywork1}--</textarea>
															</td>
													</tr>
													<tr class="odd">
														<td  style="text-align: center;background-color: #f2f2f2;"><h4>二营</h4></td>
															<td style="">
																<textarea name="onedaywork2" id="onedaywork2" rows="5" class="input-block-level" placeholder="无"  readonly="readonly">--{$workTemp2.onedaywork1}--</textarea>
															</td>
													</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>三营</h4></td>
															<td style="">
																<textarea name="onedaywork3" id="onedaywork3" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp3.onedaywork1}--</textarea>
															</td>
														</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>四营</h4></td>
															<td style="">
																<textarea name="onedaywork4" id="onedaywork4" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp4.onedaywork1}--</textarea>
															</td>
														</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>五营</h4></td>
															<td style="">
																<textarea name="onedaywork5" id="onedaywork5" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp5.onedaywork1}--</textarea>
															</td>
														</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>警勤连</h4></td>
														<td style="">
															<textarea name="onedayworkjql" id="onedayworkjql" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp6.onedaywork1}--</textarea>
														</td>
													</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>教导队</h4></td>
														<td style="">
															<textarea name="onedayworkjdd" id="onedayworkjdd" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp7.onedaywork1}--</textarea>
														</td>
													</tr>
													<!-- End 工作情况及营领导位置 -->
													
													<!-- start 人员在位情况   全团值班情况-->
													<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>人员在位情况</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
															<tr class="odd" style="background-color: #f2f2f2;">
																<td></td>
																
																<td colspan="4" style="text-align: center;"><h4>现有</h4></td>
																<td colspan="4" style="text-align: center;"><h4>在位</h4></td>
																<td colspan="4" style="text-align: center;"><h4>休假</h4></td>
																<td colspan="4" style="text-align: center;"><h4>外出</h4></td>
															</tr>
															<tr>
																<td style="background-color: #f2f2f2;"></td>
																
																<td>干部</td>
																<td>士官</td>
																<td>义务兵</td>
																<td>总数</td>
																<td>干部</td>
																<td>士官</td>
																<td>义务兵</td>
																<td>总数</td>
																<td>干部</td>
																<td>士官</td>
																<td>义务兵</td>
																<td>总数</td>
																<td>干部</td>
																<td>士官</td>
																<td>义务兵</td>
																<td>总数</td>
															</tr>
															<tr>
																<td style="text-align: center; background-color: #f2f2f2;"><h5>全团</h5></td>
																
																<td>--{$workTemp0.gbshouldnum_t}--</td>
																<td>--{$workTemp0.sgshouldnum_t}--</td>
																<td>--{$workTemp0.ywbshouldnum_t}--</td>
																<td>--{$workTemp0.gbshouldnum_t+$workTemp0.sgshouldnum_t+$workTemp0.ywbshouldnum_t}--</td>
																<td>--{$workTemp0.gbfactnum_t}--</td>
																<td>--{$workTemp0.sgfactnum_t}--</td>
																<td>--{$workTemp0.ywbfactnum_t}--</td>
																<td>--{$workTemp0.gbfactnum_t+$workTemp0.sgfactnum_t+$workTemp0.ywbfactnum_t}--</td>
																<td>--{$workTemp0.gbholiday_t}--</td>
																<td>--{$workTemp0.sgholiday_t}--</td>
																<td>--{$workTemp0.ywbholiday_t}--</td>
																<td>--{$workTemp0.gbholiday_t+$workTemp0.sgholiday_t+$workTemp0.ywbholiday_t}--</td>
																<td>--{$workTemp0.gbout_t}--</td>
																<td>--{$workTemp0.sgout_t}--</td>
																<td>--{$workTemp0.ywbout_t}--</td>
																<td>--{$workTemp0.gbout_t+$workTemp0.sgout_t+$workTemp0.ywbout_t}--</td>
															</tr>
															<tr>
																<td style="text-align: center;background-color: #f2f2f2;"><h5>一营</h5></td>
																
																<td>--{$workTemp1.gbshouldnum_t}--</td>
																<td>--{$workTemp1.sgshouldnum_t}--</td>
																<td>--{$workTemp1.ywbshouldnum_t}--</td>
																<td>--{$workTemp1.gbshouldnum_t+$workTemp1.sgshouldnum_t+$workTemp1.ywbshouldnum_t}--</td>
																<td>--{$workTemp1.gbfactnum_t}--</td>
																<td>--{$workTemp1.sgfactnum_t}--</td>
																<td>--{$workTemp1.ywbfactnum_t}--</td>
																<td>--{$workTemp1.gbfactnum_t+$workTemp1.sgfactnum_t+$workTemp1.ywbfactnum_t}--</td>
																<td>--{$workTemp1.gbholiday_t}--</td>
																<td>--{$workTemp1.sgholiday_t}--</td>
																<td>--{$workTemp1.ywbholiday_t}--</td>
																<td>--{$workTemp1.gbholiday_t+$workTemp1.sgholiday_t+$workTemp1.ywbholiday_t}--</td>
																<td>--{$workTemp1.gbout_t}--</td>
																<td>--{$workTemp1.sgout_t}--</td>
																<td>--{$workTemp1.ywbout_t}--</td>
																<td>--{$workTemp1.gbout_t+$workTemp1.sgout_t+$workTemp1.ywbout_t}--</td>
															</tr>
															<tr>
																<td style="text-align: center;background-color: #f2f2f2;"><h5>二营</h5></td>
																
																<td>--{$workTemp2.gbshouldnum_t}--</td>
																<td>--{$workTemp2.sgshouldnum_t}--</td>
																<td>--{$workTemp2.ywbshouldnum_t}--</td>
																<td>--{$workTemp2.gbshouldnum_t+$workTemp2.sgshouldnum_t+$workTemp2.ywbshouldnum_t}--</td>
																<td>--{$workTemp2.gbfactnum_t}--</td>
																<td>--{$workTemp2.sgfactnum_t}--</td>
																<td>--{$workTemp2.ywbfactnum_t}--</td>
																<td>--{$workTemp2.gbfactnum_t+$workTemp2.sgfactnum_t+$workTemp2.ywbfactnum_t}--</td>
																<td>--{$workTemp2.gbholiday_t}--</td>
																<td>--{$workTemp2.sgholiday_t}--</td>
																<td>--{$workTemp2.ywbholiday_t}--</td>
																<td>--{$workTemp2.gbholiday_t+$workTemp2.sgholiday_t+$workTemp2.ywbholiday_t}--</td>
																<td>--{$workTemp2.gbout_t}--</td>
																<td>--{$workTemp2.sgout_t}--</td>
																<td>--{$workTemp2.ywbout_t}--</td>
																<td>--{$workTemp2.gbout_t+$workTemp2.sgout_t+$workTemp2.ywbout_t}--</td>
															</tr>
															<tr>
																<td style="text-align: center;background-color: #f2f2f2;"><h5>三营</h5></td>
																
																<td>--{$workTemp3.gbshouldnum_t}--</td>
																<td>--{$workTemp3.sgshouldnum_t}--</td>
																<td>--{$workTemp3.ywbshouldnum_t}--</td>
																<td>--{$workTemp3.gbshouldnum_t+$workTemp3.sgshouldnum_t+$workTemp3.ywbshouldnum_t}--</td>
																<td>--{$workTemp3.gbfactnum_t}--</td>
																<td>--{$workTemp3.sgfactnum_t}--</td>
																<td>--{$workTemp3.ywbfactnum_t}--</td>
																<td>--{$workTemp3.gbfactnum_t+$workTemp3.sgfactnum_t+$workTemp3.ywbfactnum_t}--</td>
																<td>--{$workTemp3.gbholiday_t}--</td>
																<td>--{$workTemp3.sgholiday_t}--</td>
																<td>--{$workTemp3.ywbholiday_t}--</td>
																<td>--{$workTemp3.gbholiday_t+$workTemp3.sgholiday_t+$workTemp3.ywbholiday_t}--</td>
																<td>--{$workTemp3.gbout_t}--</td>
																<td>--{$workTemp3.sgout_t}--</td>
																<td>--{$workTemp3.ywbout_t}--</td>
																<td>--{$workTemp3.gbout_t+$workTemp3.sgout_t+$workTemp3.ywbout_t}--</td>
															</tr>
															<tr>
																<td style="text-align: center;background-color: #f2f2f2;"><h5>四营</h5></td>
																
																<td>--{$workTemp4.gbshouldnum_t}--</td>
																<td>--{$workTemp4.sgshouldnum_t}--</td>
																<td>--{$workTemp4.ywbshouldnum_t}--</td>
																<td>--{$workTemp4.gbshouldnum_t+$workTemp4.sgshouldnum_t+$workTemp4.ywbshouldnum_t}--</td>
																<td>--{$workTemp4.gbfactnum_t}--</td>
																<td>--{$workTemp4.sgfactnum_t}--</td>
																<td>--{$workTemp4.ywbfactnum_t}--</td>
																<td>--{$workTemp4.gbfactnum_t+$workTemp4.sgfactnum_t+$workTemp4.ywbfactnum_t}--</td>
																<td>--{$workTemp4.gbholiday_t}--</td>
																<td>--{$workTemp4.sgholiday_t}--</td>
																<td>--{$workTemp4.ywbholiday_t}--</td>
																<td>--{$workTemp4.gbholiday_t+$workTemp4.sgholiday_t+$workTemp4.ywbholiday_t}--</td>
																<td>--{$workTemp4.gbout_t}--</td>
																<td>--{$workTemp4.sgout_t}--</td>
																<td>--{$workTemp4.ywbout_t}--</td>
																<td>--{$workTemp4.gbout_t+$workTemp4.sgout_t+$workTemp4.ywbout_t}--</td>
															</tr>
															<tr>
																<td style="text-align: center;background-color: #f2f2f2;"><h5>五营</h5></td>
																
																<td>--{$workTemp5.gbshouldnum_t}--</td>
																<td>--{$workTemp5.sgshouldnum_t}--</td>
																<td>--{$workTemp5.ywbshouldnum_t}--</td>
																<td>--{$workTemp5.gbshouldnum_t+$workTemp5.sgshouldnum_t+$workTemp5.ywbshouldnum_t}--</td>
																<td>--{$workTemp5.gbfactnum_t}--</td>
																<td>--{$workTemp5.sgfactnum_t}--</td>
																<td>--{$workTemp5.ywbfactnum_t}--</td>
																<td>--{$workTemp5.gbfactnum_t+$workTemp5.sgfactnum_t+$workTemp5.ywbfactnum_t}--</td>
																<td>--{$workTemp5.gbholiday_t}--</td>
																<td>--{$workTemp5.sgholiday_t}--</td>
																<td>--{$workTemp5.ywbholiday_t}--</td>
																<td>--{$workTemp5.gbholiday_t+$workTemp5.sgholiday_t+$workTemp5.ywbholiday_t}--</td>
																<td>--{$workTemp5.gbout_t}--</td>
																<td>--{$workTemp5.sgout_t}--</td>
																<td>--{$workTemp5.ywbout_t}--</td>
																<td>--{$workTemp5.gbout_t+$workTemp5.sgout_t+$workTemp5.ywbout_t}--</td>
															</tr>
															<tr>
																<td style="text-align: center;background-color: #f2f2f2;"><h5>警勤连</h5></td>
																
																<td>--{$workTemp6.gbshouldnum_t}--</td>
																<td>--{$workTemp6.sgshouldnum_t}--</td>
																<td>--{$workTemp6.ywbshouldnum_t}--</td>
																<td>--{$workTemp6.gbshouldnum_t+$workTemp6.sgshouldnum_t+$workTemp6.ywbshouldnum_t}--</td>
																<td>--{$workTemp6.gbfactnum_t}--</td>
																<td>--{$workTemp6.sgfactnum_t}--</td>
																<td>--{$workTemp6.ywbfactnum_t}--</td>
																<td>--{$workTemp6.gbfactnum_t+$workTemp6.sgfactnum_t+$workTemp6.ywbfactnum_t}--</td>
																<td>--{$workTemp6.gbholiday_t}--</td>
																<td>--{$workTemp6.sgholiday_t}--</td>
																<td>--{$workTemp6.ywbholiday_t}--</td>
																<td>--{$workTemp6.gbholiday_t+$workTemp6.sgholiday_t+$workTemp6.ywbholiday_t}--</td>
																<td>--{$workTemp6.gbout_t}--</td>
																<td>--{$workTemp6.sgout_t}--</td>
																<td>--{$workTemp6.ywbout_t}--</td>
																<td>--{$workTemp6.gbout_t+$workTemp6.sgout_t+$workTemp6.ywbout_t}--</td>
															</tr>
															<tr>
																<td style="text-align: center;background-color: #f2f2f2;"><h5>教导队</h5></td>
																
																<td>--{$workTemp7.gbshouldnum_t}--</td>
																<td>--{$workTemp7.sgshouldnum_t}--</td>
																<td>--{$workTemp7.ywbshouldnum_t}--</td>
																<td>--{$workTemp7.gbshouldnum_t+$workTemp7.sgshouldnum_t+$workTemp7.ywbshouldnum_t}--</td>
																<td>--{$workTemp7.gbfactnum_t}--</td>
																<td>--{$workTemp7.sgfactnum_t}--</td>
																<td>--{$workTemp7.ywbfactnum_t}--</td>
																<td>--{$workTemp7.gbfactnum_t+$workTemp7.sgfactnum_t+$workTemp7.ywbfactnum_t}--</td>
																<td>--{$workTemp7.gbholiday_t}--</td>
																<td>--{$workTemp7.sgholiday_t}--</td>
																<td>--{$workTemp7.ywbholiday_t}--</td>
																<td>--{$workTemp7.gbholiday_t+$workTemp7.sgholiday_t+$workTemp7.ywbholiday_t}--</td>
																<td>--{$workTemp7.gbout_t}--</td>
																<td>--{$workTemp7.sgout_t}--</td>
																<td>--{$workTemp7.ywbout_t}--</td>
																<td>--{$workTemp7.gbout_t+$workTemp7.sgout_t+$workTemp7.ywbout_t}--</td>
															</tr>
															</table>
														</td>
													</tr>
													<!-- end 人员在位情况 -->
													
													<!-- start 人员变动情况-->
													<tr class="odd">
															<td class="span3" style="text-align:center;background-color: #dedede;" rowspan="8"><h4>人员变动情况</h4></td>
															<td class="span1" style="text-align: center;background-color: #f2f2f2;"><h4>团机关</h4></td>
															<td class="span8" style="background-color: #f2f2f2;">
																<textarea name="remark_t" id="remark_t" rows="3" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp0.remark_t}--</textarea>
															</td>
													</tr>
													<tr class="odd">
														<td  style="text-align: center;background-color: #f2f2f2;"><h4>一营</h4></td>
															<td style="background-color: #f2f2f2;">
																<textarea name="remark_1" id="remark_1" rows="3" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp1.remark_t}--</textarea>
															</td>
													</tr>
													<tr class="odd">
														<td  style="text-align: center;background-color: #f2f2f2;"><h4>二营</h4></td>
															<td style="background-color: #f2f2f2;">
																<textarea name="remark_2" id="remark_2" rows="3" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp2.remark_t}--</textarea>
															</td>
													</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>三营</h4></td>
															<td style="background-color: #f2f2f2;">
																<textarea name="remark_2" id="remark_2" rows="3" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp3.remark_t}--</textarea>
															</td>
														</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>四营</h4></td>
															<td style="background-color: #f2f2f2;">
																<textarea name="remark_2" id="remark_2" rows="3" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp4.remark_t}--</textarea>
															</td>
														</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>五营</h4></td>
															<td style="background-color: #f2f2f2;">
																<textarea name="remark_2" id="remark_2" rows="3" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp5.remark_t}--</textarea>
															</td>
														</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>警勤连</h4></td>
														<td style="background-color: #f2f2f2;">
															<textarea name="remark_2" id="remark_2" rows="3" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp6.remark_t}--</textarea>
														</td>
													</tr>
														<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>教导队</h4></td>
														<td style="background-color: #f2f2f2;">
															<textarea name="remark_2" id="remark_2" rows="3" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp7.remark_t}--</textarea>
														</td>
													</tr>
													
													<!-- end 人员变动情况 -->
													
													
													<tr class="odd">
														<td style="text-align: center;background-color: #dedede;"><h4>上级指示通<br/>知落实情况</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<textarea name="shangjiinforealize" id="shangjiinforealize" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp.shangjiinforealize}--</textarea>
														</td>
													</tr>
													<tr class="odd">
														<td style="text-align: center;background-color: #e8e8e8;"><h4>首长机关<br/>下连情况</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<textarea name="headdownlian" id="headdownlian" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp.headdownlian}--</textarea>
														</td>
													</tr>
													<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>营院监控及<br/>重要目标报警情况</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<textarea name="controlwarning" id="controlwarning" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp.controlwarning}--</textarea>
														</td>
													</tr>
													<tr class="odd">
														<td style="text-align: center;background-color: #f2f2f2;"><h4>人员抽查情况</h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<textarea name="persontestcheck" id="persontestcheck" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$workTemp.persontestcheck}--</textarea>
														</td>
													</tr>
													<tr class="odd">
														<td style="text-align: center;background-color: #e8e8e8;" ><h4><a href="VehicleController.php?flag=getAllTuan_show&date=--{$date}--" target="_blank">车辆动用情况</a></h4></td>
														<td style="background-color: #f2f2f2;" colspan="2">
															<table class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
																<tr class="odd">
																	
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>请示台次</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>动用台次</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;"><h4>部队安全情况</h4></td>
																	<td style="text-align: center;background-color: #f2f2f2;" rowspan="2"><h4><a href="WorkController.php?flag=WeatherShow&date=--{$date}--" target="_blank">天气情况</a></h4></td>
																</tr>
																<tr class="odd">
																	<td style="text-align: center;"><input type="text" name="vehiclepleasenum" id="vehiclepleasenum" readonly="readonly" value="--{$workTemp.vehiclepleasenum}--" placeholder="无" class="input-block-level" data-rule-required="true"/></td>
																	<td style="text-align: center;"><input type="text" name="vehicleusednum" id="vehicleusednum" readonly="readonly" value="--{$workTemp.vehicleusednum}--" placeholder="无" class="input-block-level" data-rule-required="true"/></td>
																	<td style="text-align: center;"><input type="text" name="safesituation" id="safesituation" readonly="readonly" value="--{$workTemp.safesituation}--" placeholder="无" class="input-block-level" data-rule-required="true"/></td>
																</tr>
															</table>
														</td>
													</tr>
													
												</tbody>
											</table>
											</form>
											</div>
										</div>
									</div>
									
										--{if $showupdatedelete == "1" && $updateflag != 0}--
										<div class="form-actions offset8">
											<button type="button" onclick="jump('Work_update_from.php?flag=t_huizong&id=--{$workTemp.id}--')" class="btn btn-primary">--{$button}--</button>
											<button type="button" onclick="jump('Work_delete.php?flag=t_huizong&id=--{$workTemp.id}--')" class="btn">删除</button>
										</div>
										--{else}--
										<div class="form-actions offset8">
											<strong><font color="red">信息不可修改</font></strong>
										</div>
										--{/if}--
									
								</div>
								
							</div>
							
						</div>
					<!-- End 单个表格 -->
					</div>
					<!-- End 表格组 -->
			</div>
			--{elseif $flag == "t_nohuizong"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="WorkController.php?flag=t_search_huizong" method="post">
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
								<font color="red">今天暂无</font>汇总信息。
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
