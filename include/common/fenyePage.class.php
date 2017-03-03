<?php

class fenyePage{

		public $pageSize = 6;  // 每页显示的条数
		public $res_array;	// 要显示的数据
		public $rowCount; // 从数据库中获取
		public $pageNow = 1;	// 用户指定的
		public $pageCount; // 这个事计算得到的
		public $navigate; // 分页导航

}