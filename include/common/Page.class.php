<?php

class Page{
	private $rows;	//��¼��
	private $page_num;	//ҳ��
	
	private $page_size;	//ÿҳ������
	private $page;	//��ǰҳ��
	private $table;	//Ҫ��ҳ��ѯ�ı���
	private $where;
	
	public function __construct($page=1, $table='book' ,$page_size=4, $where=""){
		$this->page = $page;
		$this->table = $table;
		$this->page_size = $page_size;
		$this->where = $where;
		
		$this->rows = $this->getRows();		
		$this->page_num = ceil($this->rows / $this->page_size);
	}
	
	//��ҳ��ѯ����
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
	
	//�ṩ��ҳ��Ϣ�ķ���
	public function getPageInfo()
	{		
		$info["rows"] = $this->rows;
		$info["page_size"] = $this->page_size;
		$info["page_num"] = $this->page_num;
		$info["page"] = $this->page;
		
		return $info;
	}
	
	//�ṩ��ҳҳ��ķ���
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
			return "<a href='?page=".($this->page-1)."'>��һҳ</a>";
		}
	}
	
	public function getNext(){
		if($this->page < $this->page_num)
		{
			return "<a href='?page=".($this->page+1)."'>��һҳ</a>";
		}
	}
	
	public function getFirst(){
		return "<a href='?page=1'>��һҳ</a>";
	}
	
	public function getLast(){
		return "<a href='?page=".$this->page_num."'>��һҳ</a>";
	}
	
	private function getRows(){
		$sql = "select * from ". $this->table ."  " .$this->where;
		//echo $sql;
		new MySql();
		
		$result = mysql_query($sql);
		return mysql_num_rows($result);
	}
	
}
