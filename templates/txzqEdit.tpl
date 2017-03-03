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
						<h1>--{$head}--</h1>
					</div>
					
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a >主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a >--{$head}--</a>
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
					<!-- <div class="span12"> -->
					<div class="span12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i>--{$unit}--</h3>
							</div>
							<div class="box-content nopadding">
								<form action="--{$action}--" method="post" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">战备保障情况(原机线电和局域网运行情况)</label>
										<div class="controls">
											<textarea name="machinelinework" id="machinelinework" rows="5" class="input-block-level" placeholder="无"></textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textfield" class="control-label">局域网运行情况</label>
										<div class="controls">
											<textarea name="lanrun" id="lanrun" rows="5" class="input-block-level" placeholder="无"></textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">每周二汇报各营线路巡检率低于95%的说明情况</label>
										<div class="controls">
											<textarea name="lowercase" id="lowercase" rows="5" class="input-block-level" placeholder="无"></textarea>
										</div>
									</div> -->
									
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="无"></textarea>
										</div>
									</div>
									
									<div class="control-group">
										<label for="textfield" class="control-label">连队整修巡线情况</label>
										<div class="controls">
											<textarea name="repairlink" id="repairlink" rows="5" class="input-block-level" placeholder="无"></textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">首长机关下连情况</label>
										<div class="controls">
											<textarea name="gbgbinfo" id="gbgbinfo" rows="5" class="input-block-level" placeholder="无"></textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">大项活动及训练情况</label>
										<div class="controls">
											<textarea name="traininfo" id="traininfo" rows="5" class="input-block-level" placeholder="无"></textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况</label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="5" class="input-block-level" placeholder="无"></textarea>
										</div>
									</div> -->
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">--{$button}--</button>
										<!--  <button type="button" class="btn">取消</button>-->
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
			--{elseif $flag == "huizong"}--
			
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
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
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i>--{$cz}--</h3>
								<!-- <div class=" actions"><h3>--{$inputtime}--</h3></div> -->
							</div>
							<div class="box-content nopadding">
								<form action="--{$action}--" method="post" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">战备保障情况(原机线电和局域网运行情况)</label>
										<div class="controls">
											<textarea name="machinelinework" id="machinelinework" rows="5" class="input-block-level" placeholder="无">--{$machinelinework}--</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textfield" class="control-label">局域网运行情况</label>
										<div class="controls">
											<textarea name="lanrun" id="lanrun" rows="5" class="input-block-level" placeholder="无">--{$lanrun}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">每周二汇报各营线路巡检率低于95%的说明情况</label>
										<div class="controls">
										<input type="hidden" name="id" value="--{$txzqTemp.id}--"/>
											<textarea name="lowercase" id="lowercase" rows="5" class="input-block-level" placeholder="无">--{$lowercase}--</textarea>
										</div>
									</div> -->
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="无">--{$inforealize}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">连队整修巡线情况</label>
										<div class="controls">
											<textarea name="repairlink" id="repairlink" rows="5" class="input-block-level" placeholder="无">--{$repairlink}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">首长机关下连情况</label>
										<div class="controls">
											<textarea name="gbgbinfo" id="gbgbinfo" rows="5" class="input-block-level" placeholder="无">--{$gbgbinfo}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">大项活动及训练情况</label>
										<div class="controls">
											<textarea name="traininfo" id="traininfo" rows="5" class="input-block-level" placeholder="无">--{$traininfo}--</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况</label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.dutycheck}--</textarea>
										</div>
									</div> -->
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">--{$button}--</button>
										<!-- <button type="button" class="btn">取消</button> -->
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
			--{elseif $flag == "updatehuizong"}--
			
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
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
							<div class="row-fluid">
					<div class="span12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i>--{$cz}--</h3>
								<!-- <div class=" actions"><h3>--{$inputtime}--</h3></div> -->
							</div>
							<div class="box-content nopadding">
								<form action="--{$action}--" method="post" class='form-horizontal form-bordered'>
									<input type="hidden" name="id" value="--{$txzqTemp.id}--"/>
									<div class="control-group">
										<label for="textfield" class="control-label">战备保障情况(原机线电和局域网运行情况)</label>
										<div class="controls">
											<textarea name="machinelinework" id="machinelinework" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.machinelinework}--</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textfield" class="control-label">局域网运行情况</label>
										<div class="controls">
											<textarea name="lanrun" id="lanrun" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.lanrun}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">每周二汇报各营线路巡检率低于95%的说明情况</label>
										<div class="controls">
										
											<textarea name="lowercase" id="lowercase" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.lowercase}--</textarea>
										</div>
									</div> -->
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.inforealize}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">连队整修巡线情况</label>
										<div class="controls">
											<textarea name="repairlink" id="repairlink" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.repairlink}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">首长机关下连情况</label>
										<div class="controls">
											<textarea name="gbgbinfo" id="gbgbinfo" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.gbgbinfo}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">大项活动及训练情况</label>
										<div class="controls">
											<textarea name="traininfo" id="traininfo" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.traininfo}--</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况</label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.dutycheck}--</textarea>
										</div>
									</div> -->
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">--{$button}--</button>
										<!-- <button type="button" class="btn">取消</button> -->
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
			--{elseif $flag == "t_huizong"}--
			
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
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
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i>--{$cz}--</h3>
								 <div class=" actions"><h3>--{$inputtime}--</h3></div>
							</div>
							<div class="box-content nopadding">
								<form action="--{$action}--" method="post" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">值班首长</label>
										<div class="controls">
											<input name="dutyhead" id="dutyhead"  class="input-xlarge" placeholder="无" />
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">值班员</label>
										<div class="controls">
											<input name="dutyer" id="dutyer"  class="input-xlarge" placeholder="无" />
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">战备保障情况(原机线电和局域网运行情况)</label>
										<div class="controls">
											<textarea name="machinelinework" id="machinelinework" rows="5" class="input-block-level" placeholder="无">--{$machinelinework}--</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textfield" class="control-label">局域网运行情况</label>
										<div class="controls">
											<textarea name="lanrun" id="lanrun" rows="5" class="input-block-level" placeholder="无">--{$lanrun}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">每周二汇报各营线路巡检率低于95%的说明情况</label>
										<div class="controls">
										<input type="hidden" name="id" value="--{$txzqTemp.id}--"/>
											<textarea name="lowercase" id="lowercase" rows="5" class="input-block-level" placeholder="无">--{$lowercase}--</textarea>
										</div>
									</div> -->
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="无">--{$inforealize}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">连队整修巡线情况</label>
										<div class="controls">
											<textarea name="repairlink" id="repairlink" rows="5" class="input-block-level" placeholder="无">--{$repairlink}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">首长机关下连情况</label>
										<div class="controls">
											<textarea name="gbgbinfo" id="gbgbinfo" rows="5" class="input-block-level" placeholder="无">--{$gbgbinfo}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">大项活动及训练情况</label>
										<div class="controls">
											<textarea name="traininfo" id="traininfo" rows="5" class="input-block-level" placeholder="无">--{$traininfo}--</textarea>
										</div>
									</div>
									
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况</label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.dutycheck}--</textarea>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">--{$button}--</button>
										<!-- <button type="button" class="btn">取消</button> -->
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
			--{elseif $flag == "update_t_huizong"}--
			
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
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
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i>--{$cz}--</h3>
								 <div class=" actions"><h3>--{$inputtime}--</h3></div>
							</div>
							<div class="box-content nopadding">
								<form action="--{$action}--" method="post" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">值班首长</label>
										<div class="controls">
											<input name="id" value="--{$txzqTemp.id}--" type="hidden" />
											<input name="dutyhead" id="dutyhead" value="--{$txzqTemp.dutyhead}--" class="input-xlarge" placeholder="无" />
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">值班员</label>
										<div class="controls">
											<input name="dutyer" id="dutyer" value="--{$txzqTemp.dutyer}--" class="input-xlarge" placeholder="无" />
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">战备保障情况(原机线电和局域网运行情况)</label>
										<div class="controls">
											<textarea name="machinelinework" id="machinelinework" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.machinelinework}--</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textfield" class="control-label">局域网运行情况</label>
										<div class="controls">
											<textarea name="lanrun" id="lanrun" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.lanrun}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">每周二汇报各营线路巡检率低于95%的说明情况</label>
										<div class="controls">
										<input type="hidden" name="id" value="--{$txzqTemp.id}--"/>
											<textarea name="lowercase" id="lowercase" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.lowercase}--</textarea>
										</div>
									</div> -->
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.inforealize}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">连队整修巡线情况</label>
										<div class="controls">
											<textarea name="repairlink" id="repairlink" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.repairlink}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">首长机关下连情况</label>
										<div class="controls">
											<textarea name="gbgbinfo" id="gbgbinfo" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.gbgbinfo}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">大项活动及训练情况</label>
										<div class="controls">
											<textarea name="traininfo" id="traininfo" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.traininfo}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况</label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.dutycheck}--</textarea>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">--{$button}--</button>
										<!-- <button type="button" class="btn">取消</button> -->
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
			--{elseif $flag == "shenhe"}--
			
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$head}--</h1>
					</div>
					
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a>主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a>--{$head}--</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a>--{$head}--</a>
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
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i>--{$cz}--</h3>
							</div>
							<div class="box-content nopadding">
								<form action="--{$action}--" method="post" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">每周二汇报各营线路巡检率低于95%的说明情况</label>
										<div class="controls">
										<input type="hidden" name="id" value="--{$txzqTemp.id}--"/>
											<textarea name="lowercase" id="lowercase" rows="5" class="input-block-level" placeholder="每周二汇报各营线路巡检率低于95%的说明情况">--{$txzqTemp.lowercase}--</textarea>
										</div>
									</div>
									--{if $member.role == 1 || $member.role == 2}--
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="上级指示通知落实情况"></textarea>
										</div>
									</div>
									--{else }--
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="上级指示通知落实情况" readonly="readonly"></textarea>
										</div>
									</div>
									--{/if }--
									<div class="control-group">
										<label for="textfield" class="control-label">连队整修巡线情况</label>
										<div class="controls">
											<textarea name="repairlink" id="repairlink" rows="5" class="input-block-level" placeholder="连队整修巡线情况">--{$txzqTemp.repairlink}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">首长机关下连情况</label>
										<div class="controls">
											<textarea name="gbgbinfo" id="gbgbinfo" rows="5" class="input-block-level" placeholder="首长机关下连情况">--{$txzqTemp.gbgbinfo}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">训练情况</label>
										<div class="controls">
											<textarea name="traininfo" id="traininfo" rows="5" class="input-block-level" placeholder="训练情况">--{$txzqTemp.traininfo}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况</label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="5" class="input-block-level" placeholder="台站值班抽查情况">--{$txzqTemp.dutycheck}--</textarea>
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
			--{else}--   <!-- update -->
			
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$head}--</h1>
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
							<div class="row-fluid">
					<div class="span12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i>--{$cz}--</h3>
							</div>
							<div class="box-content nopadding">
								<form action="--{$action}--" method="post" class='form-horizontal form-bordered'>
									<input type="hidden" name="id" value="--{$txzqTemp.id}--"/>
									<div class="control-group">
										<label for="textfield" class="control-label">战备保障情况(原机线电和局域网运行情况)</label>
										<div class="controls">
											<textarea name="machinelinework" id="machinelinework" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.machinelinework}--</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textfield" class="control-label">局域网运行情况</label>
										<div class="controls">
											<textarea name="lanrun" id="lanrun" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.lanrun}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">每周二汇报各营线路巡检率低于95%的说明情况</label>
										<div class="controls">
										
											<textarea name="lowercase" id="lowercase" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.lowercase}--</textarea>
										</div>
									</div> -->
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.inforealize}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">连队整修巡线情况</label>
										<div class="controls">
											<textarea name="repairlink" id="repairlink" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.repairlink}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">首长机关下连情况</label>
										<div class="controls">
											<textarea name="gbgbinfo" id="gbgbinfo" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.gbgbinfo}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">大项活动及训练情况</label>
										<div class="controls">
											<textarea name="traininfo" id="traininfo" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.traininfo}--</textarea>
										</div>
									</div>
									<!-- 
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况</label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.dutycheck}--</textarea>
										</div>
									</div> -->
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">--{$button}--</button>
										<!-- <button type="button" class="btn">取消</button> -->
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
