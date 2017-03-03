<?php /* Smarty version 2.6.18, created on 2014-11-08 09:32:50
         compiled from header.tpl */ ?>
	<div class="container-fluid">
		<a id="brand">第三通信团网上交班系统</a>
		<a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="左边缩进"><i class="icon-reorder"></i></a>
		
		<div class="user">
			
			<div class="dropdown">
				<a href="#" class='dropdown-toggle' data-toggle="dropdown"><?php echo $this->_tpl_vars['member']['username']; ?>
<img src="img/demo/user-avatar.jpg" alt=""></a>
				<ul class="dropdown-menu pull-right">
					<li>
						<a href="updatepwd.php">修改密码</a>
					</li>
					<li>
						<a href="logout.php">退出登录</a>
					</li>
				</ul>
			</div>
		</div>
	</div>