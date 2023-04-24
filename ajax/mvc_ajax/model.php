<?php
include('conn.php');
class model
	{
		public function sel_country($con,$tbl)
			{
			$sel_country="select * from $tbl";
		 	$sel_res=$con->query($sel_country);
			while($co=$sel_res->fetch_object())
				{
					$arr[]=$co;       
				} 					 					
				return $arr;
			}
		
		public function ins_all($con,$tbl,$data)
			{
			$key=array_keys($data);
			$dkey=implode(',',$key);
			$value=array_values($data);
			$dvalue=implode("','",$value);
		
			$in="insert into $tbl ($dkey) values('$dvalue')";
			$res=$con->query($in);
			return $res;
			}
		
		public function sel_all($con,$tbl1,$tbl2,$tbl3,$tbl4,$where1,$where2,$where3)
			{
			$sel_all="select * from $tbl1 join $tbl2 on $where1 join $tbl3 on $where2 join $tbl4 on $where3";
			$sel_res=$con->query($sel_all);
			while($reg_all=$sel_res->fetch_object())
				{
				$arr[]=$reg_all;	
				}
				return $arr;
			}
		
		public function sel_where($con,$tbl,$where)     
			{
			$key=array_keys($where);                       
			$value=array_values($where);
			$sel="select * from $tbl where 1=1 "; 
			$i=0;
			foreach($where as $w);
				{
				$sel.= " AND $key[$i]='$value[$i]'";
				$i++;
				}
			$res=$con->query($sel);
			return $res;	
			}	
}
?>	