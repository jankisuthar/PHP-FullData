<?php

// https://codeigniter.com/userguide3/database/query_builder.html for all codeigniter queries


class model extends Ci_Model // pre defined class of ci
{
		function insert($tbl,$data)
		{
			$res=$this->db->insert($tbl,$data); // query & query run
			return $res;
		}
		function select($tbl)
		{
			$res=$this->db->get($tbl); // query & query run
			$arr=$res->result_array();
			return $arr;
		}
		// login// data fetch 
		function select_where($tbl,$where)
		{
			$res=$this->db->get_where($tbl,$where); // query & query run
			return $res;
		}
		
		function delete($tbl,$where)
		{
			$res=$this->db->delete($tbl,$where); // query & query run
			return $res;	
		}
		function update($tbl,$data,$where)
		{
			$res=$this->db->update($tbl,$data,$where); // query & query run
			return $res;
		}
	
		function select_join($tbl1,$tbl2,$on)
		{
			$this->db->select('*');
			$this->db->from($tbl1);
			$this->db->join($tbl2,$on);
			$res=$this->db->get(); // query & query run
			$arr=$res->result_array();
			return $arr;
		}
		
		function select_join_like($tbl1,$tbl2,$on,$col,$value)
		{
			$this->db->select('*');
			$this->db->from($tbl1);
			$this->db->join($tbl2,$on);
			$this->db->like($col, $value, 'after');
			$res=$this->db->get(); // query & query run
			$arr=$res->result_array();
			return $arr;
		}
		
		function select_join_multi($tbl1,$tbl2,$tbl3,$on,$on1)
		{
			$this->db->select('*');
			$this->db->from($tbl1);
			$this->db->join($tbl2,$on);
			$this->db->join($tbl3,$on1);
			$res=$this->db->get(); // query & query run
			$arr=$res->result_array();
			return $arr;
		}
		
		
		function select_join_where($tbl1,$tbl2,$on,$where)
		{
			$this->db->select('*');
			$this->db->from($tbl1);
			$this->db->join($tbl2,$on);
			$this->db->where($where);
			$res=$this->db->get(); // query & query run
			$arr=$res->result_array();
			return $arr;
		}
}
?>