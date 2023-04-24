<?php
class model
{
		public $conn="";
		function __construct()
		{
			$this->conn=new mysqli('localhost','root','','bookmyshow');
		}
		function insert($tbl,$data)
		{
			
			$col_arr=array_keys($data); //array("0"=>"unm","1"=>"pass")
			$col=implode(",",$col_arr); // unm,pass,gen,lag,cid 
			
			$value_arr=array_values($data); //array("0"=>"rajesh","1"=>"1234")
			$value=implode("','",$value_arr); // 'rajesh','1234' 
			
			$ins="insert into $tbl($col) values('$value')";
			$exe=$this->conn->query($ins); // run
			return $exe;
			
		}
		
		function select($tbl)
		{
			$sel="select * from $tbl"; // query
			$exe=$this->conn->query($sel); // run
			while($fetch=$exe->fetch_object())   // fetch data from mysql
			{
				$arr[]=$fetch;
			}
			return $arr;
		}
		
		// login// data fetch 
		function select_where($tbl,$where)
		{
			$sel="select * from $tbl where 1=1"; // query continue
			$i=0;
			
			$col_arr=array_keys($where); //array("0"=>"unm","1"=>"pass")
			$value_arr=array_values($where); //array("0"=>"rajesh","1"=>"1234")
			foreach($where as $w)
			{
				$sel.=" and $col_arr[$i]='$value_arr[$i]'";
				$i++;
			}
			$exe=$this->conn->query($sel); // run
			return $exe;
		}
		
		
		// login// data fetch 
		function select_join_where($tbl1,$tbl2,$on,$where)
		{
			$sel="select * from $tbl1 join $tbl2 on $on where 1=1"; // query continue
			$i=0;
			
			$col_arr=array_keys($where); //array("0"=>"unm","1"=>"pass")
			$value_arr=array_values($where); //array("0"=>"rajesh","1"=>"1234")
			foreach($where as $w)
			{
				$sel.=" and $col_arr[$i]='$value_arr[$i]'";
				$i++;
			}
			$exe=$this->conn->query($sel); // run
			return $exe;
		}
		
		
		
		function delete()
		{
				
		}
		function update($tbl,$data,$where)
		{
			$col_arr=array_keys($data);
			$value_arr=array_values($data); 
			$j=0;
			$upd="update $tbl set";
			$count=count($data);
			foreach($data as $d)
			{
				if($count==$j+1)
				{
				$upd.=" $col_arr[$j]='$value_arr[$j]'";
				}
				else
				{
				$upd.=" $col_arr[$j]='$value_arr[$j]',";
				$j++;
				}
			}
			$upd.=" where 1=1"; // query continue
			$i=0;
			
			$wcol_arr=array_keys($where); //array("0"=>"unm","1"=>"pass")
			$wvalue_arr=array_values($where); //array("0"=>"rajesh","1"=>"1234")
			foreach($where as $w)
			{
				$upd.=" and $wcol_arr[$i]='$wvalue_arr[$i]'";
				$i++;
			}
			$exe=$this->conn->query($upd); // run
			return $exe;
			
		}
}
$obj=new model;





?>