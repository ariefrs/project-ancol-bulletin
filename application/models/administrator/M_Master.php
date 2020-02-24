<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_Master extends CI_Model
{

    public $sections = 'sections';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all($table)
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($table)->result();
    }

    // get data by id
    function get_by_id($table,$id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($table)->row();
    }
    
    // get total rows
    function total_rows($table,$condition) 
    {
        $this->db->like($condition);
        $this->db->from($table);
           return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit,$start = 0,$table,$condition = NULL) 
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like($condition);
        $this->db->limit($limit, $start);
            return $this->db->get($table)->result();
    }

    // get data with limit and search
    function get_limit_data2($limit,$start = 0,$title=NULL,$alias=NULL,$description=NULL) 
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('title',$title);
        $this->db->like('alias',$alias);
        $this->db->like('description',$description);
        $this->db->limit($limit, $start);
            return $this->db->get($this->table)->result();
    }

    // get data with condition like params
    function get_condition($table,$condition = NULL) 
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->like($condition);
            return $this->db->get($table)->result();
    }

    // get data with condition strict to params
    function get_where($table,$condition) 
    {
        $this->db->where($condition);
            return $this->db->get($table)->result();
    }

    // insert data
    function insert($table,$data)
    {
        $this->db->insert($table, $data);
    }

    // update data
    function update($table,$id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($table, $data);
    }

    // delete data
    function delete($table,$id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($table);
    }
    function get_client($search)
    {
    	$this->db->from('client');
        $this->db->or_like('Client',$search);
        $this->db->or_like('NPWP',$search);
        $this->db->or_like('Alamat',$search);
    	$this->db->order_by('Client','ASC');
    	$query =  $this->db->get();
        return $query->result_array();
    }
    public function get_username($search)
    {
        $this->db->from('j_users');
        $this->db->or_like('username',$search);
        $this->db->order_by('username','ASC');
        $query =  $this->db->get();
        return $query->result_array();
    }
	
}

/* End of file M_Master.php */
/* Location: ./application/models/administrator/M_Master.php */
/* Please DO NOT modify this information : */
/* 2019-03-05 21:09:23 */