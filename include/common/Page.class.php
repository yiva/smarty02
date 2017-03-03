<?php

class Page{
	private $rows;	//记录数
	private $page_num;	//页数
	
	private $page_size;	//每页多少条
	private $page;	//当前页码
	private $table;	//要分页查询的表名
	private $where;
	
	public function __construct($page=1, $table='book' ,$page_size=4, $where=""){
		$this->page = $page;
		$this->table = $table;
		$this->page_size = $page_size;
		$this->where = $where;
		
		$this->rows = $this->getRows();		
		$this->page_num = ceil($this->rows / $this->page_size);
	}
	
	//分页查询方法
	public function query(){
		$sql = "select * from ".$this->table."  ".$this->where." limit ".(($this->page-1) * $this->page_size).",".$this->page_size;
		//echo $sql;
		new MySql();
		$result = mysql_query($sql);
		
		$array = array();
		
		while($arr = mysql_fetch_assoc($result)){
			array_push($array, $arr);
		}
		
		return $array;
		
	}
	
	//提供分页信息的方法
	public function getPageInfo()
	{		
		$info["rows"] = $this->rows;
		$info["page_size"] = $this->page_size;
		$info["page_num"] = $this->page_num;
		$info["page"] = $this->page;
		
		return $info;
	}
	
	//提供分页页码的方法
	public function getPageNo(){
		$pageNo = "";
		for($i=1;$i<=$this->page_num;$i++){
			if($this->page == $i)
			{
				$pageNo = $pageNo . "<font color='red'><b>[$i]</b></font>&nbsp;&nbsp;";
			}
			else 
			{
				$pageNo = $pageNo . "<a href='?page=$i'>[$i]</a>&nbsp;&nbsp;";
			}
		}
		
		return $pageNo;
	}
	
	public function getPre(){
		if($this->page > 1)
		{
			return "<a href='?page=".($this->page-1)."'>上一页</a>";
		}
	}
	
	public function getNext(){
		if($this->page < $this->page_num)
		{
			return "<a href='?page=".($this->page+1)."'>下一页</a>";
		}
	}
	
	public function getFirst(){
		return "<a href='?page=1'>下一页</a>";
	}
	
	public function getLast(){
		return "<a href='?page=".$this->page_num."'>下一页</a>";
	}
	
	private function getRows(){
		$sql = "select * from ". $this->table ."  " .$this->where;
		//echo $sql;
		new MySql();
		
		$result = mysql_query($sql);
		return mysql_num_rows($result);
	}
	
}
