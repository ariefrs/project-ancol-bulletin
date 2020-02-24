<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_Categories extends CI_Model
{

    public $table = 'categories';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('parent_id', $q);
	$this->db->or_like('title', $q);
	$this->db->or_like('name', $q);
	$this->db->or_like('alias', $q);
	$this->db->or_like('image', $q);
	$this->db->or_like('section', $q);
	$this->db->or_like('image_position', $q);
	$this->db->or_like('description', $q);
	$this->db->or_like('published', $q);
	$this->db->or_like('checked_out', $q);
	$this->db->or_like('checked_out_time', $q);
	$this->db->or_like('editor', $q);
	$this->db->or_like('ordering', $q);
	$this->db->or_like('access', $q);
	$this->db->or_like('count', $q);
	$this->db->or_like('params', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('parent_id', $q);
	$this->db->or_like('title', $q);
	$this->db->or_like('name', $q);
	$this->db->or_like('alias', $q);
	$this->db->or_like('image', $q);
	$this->db->or_like('section', $q);
	$this->db->or_like('image_position', $q);
	$this->db->or_like('description', $q);
	$this->db->or_like('published', $q);
	$this->db->or_like('checked_out', $q);
	$this->db->or_like('checked_out_time', $q);
	$this->db->or_like('editor', $q);
	$this->db->or_like('ordering', $q);
	$this->db->or_like('access', $q);
	$this->db->or_like('count', $q);
	$this->db->or_like('params', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file M_Categories.php */
/* Location: ./application/models/M_Categories.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-03-07 19:15:36 */
/* http://harviacode.com */