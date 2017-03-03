<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>第三通信团网上交班系统</title>
--{include file="js.tpl"}--


	<script type="text/javascript">
		$(function(){
			$("#tyl1").change(function(){
				if('1' == $("#tyl1").val()){
					$("#tuan").removeAttr("disabled");
					$("#ying").attr("disabled","disabled");
					$("#lian").attr("disabled","disabled");
					}
				else if('2' == $("#tyl1").val()){
					$("#tuan").removeAttr("disabled");
					$("#ying").removeAttr("disabled");
					$("#lian").attr("disabled","disabled");
				}else{
					$("#tuan").removeAttr("disabled");
					$("#ying").removeAttr("disabled");
					$("#lian").removeAttr("disabled");
				}
			});
			});
	</script>
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
						<h1>单位管理</h1>
					</div>
					
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a>主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a>单位管理记录</a>
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
								<div class="row-fluid">
									<form action="--{$action}--" method="post" class='form-horizontal form-striped form-validate' id="bb">
										<div class="control-group span11">
										<label class="control-label">添加单位：</label>
										<div class="controls controls-row">
										
											<div class="span2">
													<select name="tyl1" id="tyl1" class='input-small'>
														<option value="1">团</option>
														<option value="2">营</option>
														<option value="3">连</option>
													</select>
											</div>
											<div class="span2">
													<select name="tuan" id="tuan" class='input-small'>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
													</select>
													<span class="add-on">团</span>
												</div>
												
											<div class=" span2">
													<select name="ying" id="ying" class='input-small' disabled="disabled">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="998">教导队</option>
														<option value="999">警勤连</option>
													</select>
													<span class="add-on">营</span>
												</div>
											
											<div class=" span2">
													<select name="lian" id="lian" class='input-small' disabled="disabled">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option value="20">20</option>
													</select>
													<span class="add-on">连</span>
											</div>
											
										</div>
										<div class="form-actions offset2">
											<button type="submit" class="btn btn-primary">添加</button>
										</div>
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
			
			--{else}--
			
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>单位管理</h1>
					</div>
					
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a>主页</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a>单位管理记录</a>
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
											<input type="hidden" name="id" value="--{$unit.id}--" />
											<input type="text" name="unitname" id="unitname" placeholder="单位名称" value="--{$unit.unit}--"  class="input-xlarge">
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
