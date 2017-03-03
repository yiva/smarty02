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
					<!-- Begin 用户表 -->
					<div class="row-fluid">
						<!-- Begin 用户列表 -->
					<div class="span12">
						<div class="box box-color box-bordered">
								<div class="box-title">
									<h3>
										<i class="icon-table"></i>
										汇总
									</h3>
								</div>
								<div class="box-content nopadding">
									<div class="dataTables_wrapper">
										<div class="dataTables_scroll">
												<div class="dataTables_scrollBody" style="width: 100%; "  style="margin-left: 0px;">
												<form action="--{$action}--" method="post" class='form-bordered form-vertical form-validate' id="bb">
												<div class="row-fluid">
												<table  class="table table-hover table-nomargin table-bordered">
												<thead>
													<tr>
														<th class="span2" style="text-align:center;">用户名</th>
														<th class="span2" style="text-align:center;">权限</th>
														<th class="span2" style="text-align:center;">单位</th>
													</tr>
												</thead>
												
												<tbody>
													
														<tr>
															<td>
																<div class="control-group" style="border:none;">
																	<div class="controls">
																		<input type="text" name="username" id="username" placeholder="用户名" class="input-block-level" data-rule-number="true" data-rule-required="true">
																	</div>
																</div>
															</td>
															<td>
																<div class="control-group" style="border: none;">
																	<div class="controls">
																		<select name="role" id="role" class="input-small">
																			<option value="1">团行政值班员</option>
																    		<option value="2">团通信值班员</option>
																    		<option value="5">营值班员</option>
																    		<option value="9">连值班员</option>
																    		<option value="99">管理员</option>
																		</select>
																	</div>
																</div>
															</td>
															<td>
																<div class="control-group" style="border: none;">
																	<div class="controls">
																		<select name="unit" id="unit" class="input-small">
																			--{foreach from="$unitList" item="unit1"}--
																    		<option value="--{$unit1.id}--">
																    			--{if $unit1.unit_y == 0}--
																					--{$unit1.unit_t}--团
																				--{elseif $unit1.unit_l == 0}--
																					--{if $unit1.unit_y == 999 || $unit1.unit_y == 998}--
																						--{$unit1.unit_t}--团--{$unit1.tmp_unit_y}--
																					--{else}--
																						--{$unit1.unit_t}--团--{$unit1.unit_y}--营
																					--{/if}--
																				--{else }--
																					--{$unit1.unit_t}--团--{$unit1.unit_y}--营--{$unit1.unit_l}--连
																				--{/if}--
																    		</option>
	    	 																--{/foreach}--
																		</select>
																	</div>
																</div>
															</td>
															
														</tr>
												</tbody>
											</table>
											<div class="table-pagination">
												<input type="submit" value="提交" />
											</div>
											</div>
											</form>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
					</div>
					<!-- End 用户列表 -->
						
					</div>
					<!-- End 用户表 -->
			</div>
			
			--{else}--
			
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
					<!-- Begin 用户表 -->
					<div class="row-fluid">
						<!-- Begin 用户列表 -->
					<div class="span12">
						<div class="box box-color box-bordered">
								<div class="box-title">
									<h3>
										<i class="icon-table"></i>
										汇总
									</h3>
								</div>
								<div class="box-content nopadding">
									<div class="dataTables_wrapper">
										<div class="dataTables_scroll">
												<div class="dataTables_scrollBody" style="width: 100%; "  style="margin-left: 0px;">
												<form action="--{$action}--" method="post" class='form-bordered form-vertical form-validate' id="bb">
												<div class="row-fluid">
												<table  class="table table-hover table-nomargin table-bordered">
												<thead>
													<tr>
														<th class="span2" style="text-align:center;">用户名</th>
														<th class="span2" style="text-align:center;">权限</th>
														<th class="span2" style="text-align:center;">单位</th>
													</tr>
												</thead>
												
												<tbody>
													
														<tr>
															<td>
																<div class="control-group" style="border:none;">
																	<div class="controls">
																		<input type="hidden" name="id" value="--{$memberTemp.id}--"/>
																		<input type="text" name="username" id="username" placeholder="用户名" value="--{$memberTemp.username}--" class="input-block-level" data-rule-number="true" data-rule-required="true">
																	</div>
																</div>
															</td>
															<td>
																<div class="control-group" style="border: none;">
																	<div class="controls">
																		<select name="role" id="role" class="input-small">
																			--{if $memberTemp.role == 99}--
																			<option value="1">团行政值班员</option>
																    		<option value="2">团通信值班员</option>
																    		<option value="5">营值班员</option>
																    		<option value="9">连值班员</option>
																    		<option value="99" selected="selected">管理员</option>
																			--{elseif $memberTemp.role == 1}--
																			<option value="1" selected="selected">团行政值班员</option>
																    		<option value="2">团通信值班员</option>
																    		<option value="5">营值班员</option>
																    		<option value="9">连值班员</option>
																    		<option value="99">管理员</option>
																			--{elseif $memberTemp.role == 2}--
																			<option value="1">团行政值班员</option>
																    		<option value="2" selected="selected">团通信值班员</option>
																    		<option value="5">营值班员</option>
																    		<option value="9">连值班员</option>
																    		<option value="99">管理员</option>
																			--{elseif $memberTemp.role == 5}--
																			<option value="1">团行政值班员</option>
																    		<option value="2">团通信值班员</option>
																    		<option value="5" selected="selected">营值班员</option>
																    		<option value="9">连值班员</option>
																    		<option value="99">管理员</option>
																			--{elseif $memberTemp.role == 9}--
																			<option value="1">团行政值班员</option>
																    		<option value="2">团通信值班员</option>
																    		<option value="5">营值班员</option>
																    		<option value="9" selected="selected">连值班员</option>
																    		<option value="99">管理员</option>
																			--{/if}--
																		</select>
																	</div>
																</div>
															</td>
															<td>
																<div class="control-group" style="border: none;">
																	<div class="controls">
																		<input type="text" name="s_name" value="--{$memberTemp.s_name}--" readonly="readonly"/>
																		
																	</div>
																</div>
															</td>
															
														</tr>
												</tbody>
											</table>
											<div class="table-pagination">
												<input type="submit" value="提交" />
											</div>
											</div>
											</form>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
					</div>
					<!-- End 用户列表 -->
						
					</div>
					<!-- End 用户表 -->
			</div>
			--{/if}--
		</div>
    </div>

</body>
</html>
