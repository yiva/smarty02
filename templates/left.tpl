--{if $member.role == 9}--
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>连值班员</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="WorkController.php?flag=todaydata">行政汇报</a>
					</li>
					<li>
						<a href="TxzqController.php?flag=getAllList">通信汇报</a>
					</li>
					 
					<li>
						<a href="GbgbController.php?flag=getAllList">干部跟班信息</a>
					</li>
					<li>
						<a href="GbgbController.php?flag=onedaytime">查看一周跟班时间</a>
					</li>
					 <!--
					<li>
						<a href="GbgbController.php?flag=fenye">干部跟班信息</a>
					</li>-->
				</ul>
			</div>
--{elseif $member.role == 5}--		
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>营值班员</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="WorkController.php?flag=todaydata">营部行政汇报</a>
					</li>
					<li>
						<a href="VehicleController.php?flag=getAllListByYing">车辆请示</a>
					</li>
					<li>
						<a href="TxzqController.php?flag=getAllList">营部通信汇报</a>
					</li>
					
					<!-- 
					<li>
						<a href="GbgbController.php?flag=getAllList">干部跟班信息</a>
					</li> -->
					<li>
						<a href="WorkController.php?flag=y_getHuizong">行政汇报汇总表</a>
					</li>
					<li>
						<a href="TxzqController.php?flag=getHuizong">通信汇报汇总表</a>
					</li>
					
				</ul>
			</div>	
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>查看连队信息</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="WorkController.php?flag=getLianAll">行政汇报</a>
					</li>
					
					<li>
						<a href="VehicleController.php?flag=getLianAll">车辆动用情况</a>
					</li> 
					<!-- <li>
						<a href="VehicleController.php?flag=getLianAllFenye">车辆动用情况</a>
					</li>-->
					<li>
						<a href="TxzqController.php?flag=getLianAll">通信汇报</a>
					</li>
					
					<!-- 
					<li>
						<a href="GbgbController.php?flag=getLianAll">干部跟班信息</a>
					</li> -->
				</ul>
			</div>
--{elseif $member.role == 1}--	<!-- 团行政 -->
			<div class="subnav">
				<div class="subnav-title">
					<span>团行政值班员</span>
				</div>
				<br/>
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>操作</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="WorkController.php?flag=t_todaydata">团机关行政汇报</a>
					</li>
					<li>
						<a href="WorkController.php?flag=getAllTuan">行政汇报汇总</a>
					</li>
				</ul>
			</div>	
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>查看</span></a>
				</div> 
				<ul class="subnav-menu">
					<li>
						<a href="VehicleController.php?flag=getAllTuan">车辆动用情况</a>
					</li>
					<li>
						<a href="WorkController.php?flag=t_getHuizong">行政汇报汇总表</a>
					</li>
				</ul>
			</div>
--{elseif $member.role == 2}--	<!-- 团通信 -->
<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>团通信值班员</span></a>
				</div>
				<!-- 
				<ul class="subnav-menu">
					<li>
						<a href="TxzqController.php?flag=getAllList">通信值勤汇报</a>
					</li>
					<li>
						<a href="GbgbController.php?flag=getAllList">干部跟班信息</a>
					</li>
				</ul>
			</div>	
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>查看营，连信息</span></a>
				</div> -->
				<ul class="subnav-menu">
					<li>
						<a href="TxzqController.php?flag=getAllTuan">通信汇报汇总</a>
					</li>
					
					<li>
						<a href="GbgbController.php?flag=getAllTuan">干部跟班信息</a>
					</li> 
					<!-- 
					<li>
						<a href="GbgbController.php?flag=getAllTuanfenye">干部跟班信息</a>
					</li>-->
					<li>
						<a href="TxzqController.php?flag=t_getHuizong">通信汇报汇总表</a>
					</li>
					<!--
					<li>
						<a href="GbgbController.php?flag=onedaytime">跟班时间</a>
					</li>-->
					<li>
						<a href="GbgbController.php?flag=oneweek">一周干部跟班汇总</a>
					</li>
					<li>
						<a href="GbgbController.php?flag=oneweek_get">干部跟班历史查询</a>
					</li>
				</ul>
			</div>
--{elseif $member.role == 6}--	<!-- 1团警勤连 -->
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>警勤连值班员</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="WorkController.php?flag=todaydata">行政汇报</a>
					</li>
					<li>
						<a href="WorkController.php?flag=y_getHuizong">行政汇报汇总表</a>
					</li>
				</ul>
			</div>	
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>查看连队信息</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="WorkController.php?flag=getLianAll">行政汇报</a>
					</li>
				</ul>
			</div>

--{elseif $member.role == 7}--	<!-- 1团教导队 -->
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>教导队值班员</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="WorkController.php?flag=todaydata">行政汇报</a>
					</li>
					<li>
						<a href="WorkController.php?flag=y_getHuizong">行政汇报汇总表</a>
					</li>
				</ul>
			</div>	
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>查看连队信息</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="WorkController.php?flag=getLianAll">行政汇报</a>
					</li>
				</ul>
			</div>

--{elseif $member.role == 99}--	<!-- 管理员 -->
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>管理员</span></a>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="MemberController.php?flag=getAllList">用户管理</a>
					</li>
					<li>
						<a href="UnitController.php?flag=getAllList">单位情况</a>
					</li>
					<li>
						<a href="ReviewerController.php?flag=getAllList">审核人管理</a>
					</li>
				</ul>
			</div>
--{/if}--