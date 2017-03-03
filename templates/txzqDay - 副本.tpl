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
			--{if $flag == "l_havedata"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="TxzqController.php?flag=l_search" method="post">
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
							<a href="more-login.html">主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="more-files.html">--{$path2}--</a>
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
							<div class="row-fluid">
					<div class="span12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i>--{$unit}--</h3>
								<div class=" actions"><h3>--{$txzqTemp.inputtime}--</h3></div>
							</div>
							<div class="box-content nopadding">
								<form action="--{$action}--" method="post" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">机线电工作情况</label>
										<div class="controls">
											<textarea name="machinelinework" id="machinelinework" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.machinelinework}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">局域网运行情况</label>
										<div class="controls">
											<textarea name="lanrun" id="lanrun" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.lanrun}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">每周二汇报各营线路巡检率低于95%的说明情况</label>
										<div class="controls">
											<textarea name="lowercase" id="lowercase" rows="5" class="input-block-level" placeholder="每周二汇报各营线路巡检率低于95%的说明情况">--{$txzqTemp.lowercase}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="上级指示通知落实情况">--{$txzqTemp.inforealize}--</textarea>
										</div>
									</div>
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
									<!-- 
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况</label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="5" class="input-block-level" placeholder="台站值班抽查情况">--{$txzqTemp.dutycheck}--</textarea>
										</div>
									</div> -->
									--{if $txzqTemp.tflag == 0 && $txzqTemp.yflag ==0}--
									<div class="form-actions">
										<button type="button" onclick="jump('Txzq_update_from.php?id=--{$txzqTemp.id}--')" class="btn btn-primary">--{$button}--</button>
										<button type="button" onclick="jump('Txzq_delete.php?id=--{$txzqTemp.id}--')" class="btn">删除</button>
									</div>
									--{else}--
									<div class="form-actions">
										<font color="red"><strong>信息已审核</strong></font>
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
						<form class="form-horizontal" action="TxzqController.php?flag=l_search" method="post">
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
								<font color="red">暂无当日</font>出勤信息.
								--{else}--
								<font color="red">今天暂无</font>添加出勤信息，请<a href="txzq_add_from.php">添加</a>
								--{/if}--
							</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			--{elseif $flag == "t_nohavedata"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="TxzqController.php?flag=t_search" method="post">
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
								<font color="red">暂无当日</font>出勤信息.
								--{else}--
								<font color="red">今天暂无</font>出勤信息.
								--{/if}--
							</div>
								</div>
						</div>
					</div>
				</div>
			</div>
			--{elseif $flag == "t_havedata"}-- <!-- 团  -->
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="TxzqController.php?flag=t_search" method="post">
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
							<a href="more-login.html">主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="more-files.html">--{$path2}--</a>
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
							<div class="pull-right span2">
								--{if $huizongBtn == "0"}--
								<button class="btn btn-block btn-large" type="button" onclick="jump('Txzq_huizong_from.php?flag=t_huizong')"><strong>汇总</strong></button>
								--{else}--
								<strong><font color="red">今天已进行汇总操作</font></strong>
								--{/if}--
							</div>
							
					<!-- start -->	
					--{foreach from="$txzqTemp" item="txzq"}--	
					<div class="row-fluid">
					<div class="span12">
							<div class="box box-color box-bordered">
								<div class="box-title">
									<h3>
										<i class="icon-table"></i>
										--{$txzq.s_name}--
									</h3>
									--{if $txzq.tflag == 0 && $txzq.yflag == 0}--
									<div class="actions"><h3><a href="Txzq_shenhe_from.php?id=--{$txzq.id}--" class="btn btn-magenta"><strong>审核</strong></a></h3></div>
									--{else}--
									<div class="actions"><h3><a href="TxzqController.php?flag=delshenhe&id=--{$txzq.id}--" class="btn btn-magenta"><strong>取消审核</strong></a></h3></div>
									--{/if}--
								</div>
								<div class="box-content nopadding">
									<div class="dataTables_wrapper">
										<div class="dataTables_scroll">
												<div class="dataTables_scrollBody" style="overflow: auto; width: 100%; height: 300px;"  style="margin-left: 0px;">
												<form action="#" method="post" class='form-bordered form-vertical form-validate' id="bb">
												<table  class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
												<tbody>
														<tr class="odd">
															<td class="span5" style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">第周二汇报各营<br/>线路巡检率对低<br/>于95%的说明情况</td>
															<td class="span7" style="background-color: #f2f2f2;border-color:#a3a3a3;"><p>--{$txzq.lowercase}--</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">上级指示通<br/>知落实情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p>--{$txzq.inforealize}--</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">连队整修<br/>巡线情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p>--{$txzq.repairlink}--</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">首长机关下连<br/>干部跟班情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p>--{$txzq.gbgbinfo}--</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">训练情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p>--{$txzq.traininfo}--</p></td>
														</tr>
														<tr class="odd">
														<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">台站值班<br/>抽查情况</td>
														<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p>--{$txzq.dutycheck}--</p></td>
													</tr>
													
												</tbody>
											</table>
											</form>
											</div>
										</div>
									</div>
									<!-- <div class="form-actions offset8">
										<button type="submit" class="btn btn-primary">确认</button>
										<button type="button" class="btn">取消</button>
									</div> -->
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
			--{elseif $flag == "y_havedata"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="TxzqController.php?flag=y_search" method="post">
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
							<a href="more-login.html">主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="more-files.html">--{$path2}--</a>
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
							<div class="pull-right span2">
								--{if $huizongBtn == "0"}--
								<button class="btn btn-block btn-large" type="button" onclick="jump('Txzq_huizong_from.php')"><strong>汇总</strong></button>
								--{else}--
								<strong><font color="red">今天已进行汇总操作</font></strong>
								--{/if}--
							</div>
							
					<!-- start -->	
					--{foreach from="$txzqTemp" item="txzq"}--	
					<div class="row-fluid">
					<div class="span12">
							<div class="box box-color box-bordered">
								<div class="box-title">
									<h3>
										<i class="icon-table"></i>
										--{$txzq.s_name}--
									</h3>
								</div>
								<div class="box-content nopadding">
									<div class="dataTables_wrapper">
										<div class="dataTables_scroll">
												<div class="dataTables_scrollBody" style="overflow: auto; width: 100%; height: 300px;"  style="margin-left: 0px;">
												<form action="#" method="post" class='form-bordered form-vertical form-validate' id="bb">
												<table  class="table table-hover table-nomargin table-bordered dataTable-scroll-y">
												<tbody>
														<tr class="odd">
															<td class="span5" style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">机线电工作情况</td>
															<td class="span7" style="background-color: #f2f2f2;border-color:#a3a3a3;"><p>--{$txzq.machinelinework}--</p></td>
														</tr>
														<tr class="odd">
															<td class="span5" style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">局域网运行情况</td>
															<td class="span7" style="background-color: #f2f2f2;border-color:#a3a3a3;"><p>--{$txzq.lanrun}--</p></td>
														</tr>
														<tr class="odd">
															<td class="span5" style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">第周二汇报各营<br/>线路巡检率对低<br/>于95%的说明情况</td>
															<td class="span7" style="background-color: #f2f2f2;border-color:#a3a3a3;"><p>--{$txzq.lowercase}--</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">上级指示通<br/>知落实情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p>--{$txzq.inforealize}--</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">连队整修<br/>巡线情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p>--{$txzq.repairlink}--</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">首长机关下连<br/>干部跟班情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p>--{$txzq.gbgbinfo}--</p></td>
														</tr>
														<tr class="odd">
															<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">训练情况</td>
															<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p>--{$txzq.traininfo}--</p></td>
														</tr>
														<!-- 
														<tr class="odd">
														<td style="text-align:center;background-color: #dedede;border-color:#a3a3a3;">台站值班<br/>抽查情况</td>
														<td style="background-color: #f2f2f2;border-color:#a3a3a3;"><p>--{$txzq.dutycheck}--</p></td>
														</tr>
													 	-->
												</tbody>
											</table>
											</form>
											</div>
										</div>
									</div>
									<!-- <div class="form-actions offset8">
										<button type="submit" class="btn btn-primary">确认</button>
										<button type="button" class="btn">取消</button>
									</div> -->
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
						<form class="form-horizontal" action="TxzqController.php?flag=y_search" method="post">
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
			--{elseif $flag == "y_nohuizong"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="TxzqController.php?flag=y_huizong_search" method="post">
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
			
			--{elseif $flag == "y_huizong"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="TxzqController.php?flag=y_huizong_search" method="post">
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
							<a href="more-login.html">主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="more-files.html">--{$path2}--</a>
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
							<div class="row-fluid">
					<div class="span12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i>--{$unit}--</h3>
								<div class=" actions"><h3>--{$txzqTemp.inputtime}--</h3></div>
							</div>
							<div class="box-content nopadding">
								<form action="--{$action}--" method="post" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">机线电工作情况</label>
										<div class="controls">
											<textarea name="machinelinework" id="machinelinework" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.machinelinework}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">局域网运行情况</label>
										<div class="controls">
											<textarea name="lanrun" id="lanrun" rows="5" class="input-block-level" placeholder="无">--{$txzqTemp.lanrun}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">每周二汇报各营线路巡检率低于95%的说明情况</label>
										<div class="controls">
											<textarea name="lowercase" id="lowercase" rows="5" class="input-block-level" placeholder="每周二汇报各营线路巡检率低于95%的说明情况">--{$txzqTemp.lowercase}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="上级指示通知落实情况">--{$txzqTemp.inforealize}--</textarea>
										</div>
									</div>
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
									<!-- 
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况</label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="5" class="input-block-level" placeholder="台站值班抽查情况">--{$txzqTemp.dutycheck}--</textarea>
										</div>
									</div> -->
									--{if $txzqTemp.tflag == 0 && $txzqTemp.yflag ==0}--
									<div class="form-actions">
										<button type="button" onclick="jump('Txzq_update_from.php?flag=y_huizong&id=--{$txzqTemp.id}--')" class="btn btn-primary">--{$button}--</button>
										<button type="button" onclick="jump('Txzq_delete.php?id=--{$txzqTemp.id}--&flag=y_huizong')" class="btn">删除</button>
									</div>
									--{else}--
									<div class="form-actions">
										<font color="red"><strong>信息已审核</strong></font>
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
			--{elseif $flag == "t_nohuizong"}--
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>--{$path2}--</h1>
					</div>
					<div class="pull-right">
						<form class="form-horizontal" action="TxzqController.php?flag=t_huizong_search" method="post">
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
						<form class="form-horizontal" action="TxzqController.php?flag=t_huizong_search" method="post">
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
							<a href="more-login.html">主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="more-files.html">--{$path2}--</a>
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
							<div class="row-fluid">
					<div class="span12">
						<div class="box box-bordered">
							<div class="box-title">
								<h3><i class="icon-th-list"></i>--{$unit}--</h3>
								<div class=" actions"><h3>--{$txzqTemp.inputtime}--</h3></div>
							</div>
							<div class="box-content nopadding">
								<form action="--{$action}--" method="post" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="textfield" class="control-label">值班首长</label>
										<div class="controls">
											--{$txzqTemp.dutyhead}--
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">值班员</label>
										<div class="controls">
											--{$txzqTemp.dutyer}--
											
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">机线电工作情况</label>
										<div class="controls">
											<textarea name="machinelinework" id="machinelinework" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$txzqTemp.machinelinework}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">局域网运行情况</label>
										<div class="controls">
											<textarea name="lanrun" id="lanrun" rows="5" class="input-block-level" placeholder="无"  readonly="readonly">--{$txzqTemp.lanrun}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">每周二汇报各营线路巡检率低于95%的说明情况</label>
										<div class="controls">
											<textarea name="lowercase" id="lowercase" rows="5" class="input-block-level" placeholder="无"  readonly="readonly">--{$txzqTemp.lowercase}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">上级指示通知落实情况</label>
										<div class="controls">
											<textarea name="inforealize" id="inforealize" rows="5" class="input-block-level" placeholder="无"  readonly="readonly">--{$txzqTemp.inforealize}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">连队整修巡线情况</label>
										<div class="controls">
											<textarea name="repairlink" id="repairlink" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$txzqTemp.repairlink}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">首长机关下连情况</label>
										<div class="controls">
											<textarea name="gbgbinfo" id="gbgbinfo" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$txzqTemp.gbgbinfo}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textfield" class="control-label">训练情况</label>
										<div class="controls">
											<textarea name="traininfo" id="traininfo" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$txzqTemp.traininfo}--</textarea>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">台站值班抽查情况</label>
										<div class="controls">
											<textarea name="dutycheck" id="dutycheck" rows="5" class="input-block-level" placeholder="无" readonly="readonly">--{$txzqTemp.dutycheck}--</textarea>
										</div>
									</div> 
									--{if  $txzqTemp.tmp_inputtime != 0}--
									<div class="form-actions">
										<button type="button" onclick="jump('Txzq_update_from.php?flag=t_huizong&id=--{$txzqTemp.id}--')" class="btn btn-primary">--{$button}--</button>
										<button type="button" onclick="jump('Txzq_delete.php?id=--{$txzqTemp.id}--&flag=t_huizong')" class="btn">删除</button>
									</div>
									--{else}--
									<div class="form-actions"><font color="#FF0000">信息不可修改</font></div>
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
			
			--{/if}--
		</div>
    </div>

</body>
</html>
