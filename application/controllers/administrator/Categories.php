<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Categories extends CI_Controller
{
    public $table = 'categories';

    function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation','atemplates'));
    }

    public function index()
    {
        $search_title = urldecode($this->input->get('search_title', TRUE));
        $search_alias = urldecode($this->input->get('search_alias', TRUE));
        $search_publish = urldecode($this->input->get('search_publish', TRUE));
        $start = intval($this->input->get('start'));
        $condition = [
           'title'      => $search_title,
           'alias'      => $search_alias,
           'published'  => $search_publish 
        ];

        
        if (isset($search_title) && isset($alias) && isset($publish)) {
            $config['base_url'] = base_url() . 'administrator/categories/index.html?title=' 
                                . urlencode($search_title)
                                .'&alias='.urlencode('$search_alias')
                                .'&published='.urlencode('$search_publish');
            $config['first_url'] = base_url() . 'administrator/categories/index.html?title=' 
                                . urlencode($search_title)
                                .'&alias='.urlencode('$search_alias')
                                .'&published='.urlencode('$search_publish');
        } else {
            $config['base_url'] = base_url() . 'administrator/categories/index.html';
            $config['first_url'] = base_url() . 'administrator/categories/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Master->total_rows($this->table,$condition);
        $categories = $this->Master->get_limit_data($config['per_page'],$start,$this->table,$condition);
        //echo $this->db->last_query();  
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
			'categories_data' 	=> $categories,
            'search_title' 		=> $search_title,
            'search_alias'      => $search_alias,
            'search_publish'    => $search_publish,
			'title'				=> 'Categories',
			'pagination' 		=> $this->pagination->create_links(),
			'total_rows' 		=> $config['total_rows'],
			'start' 			=> $start,
			'content'			=> 'administrator/categories/ancol_categories_list'
        );
        $this->atemplates->admin($data);
    }

    public function read($id) 
    {
        $row = $this->Master->get_by_id($this->table,$id);
        if ($row) {
            $data = array(
				'id' 				=> $row->id,
				'parent_id' 		=> $row->parent_id,
				'title' 			=> $row->title,
				'name' 				=> $row->name,
				'alias' 			=> $row->alias,
				'image' 			=> $row->image,
				'section' 			=> $row->section,
				'image_position' 	=>$row->image_position,
				'description' 		=>$row->description,
				'published' 		=>$row->published,
				'checked_out' 		=>$row->checked_out,
				'checked_out_time' 	=>$row->checked_out_time,
				'editor' 			=>$row->editor,
				'ordering' 			=>$row->ordering,
				'access' 			=>$row->access,
				'count' 			=>$row->count,
				'params' 			=>$row->params,
				'content'			=>'administrator/categories/ancol_categories_read'
	    );
            $this->atemplates->admin($data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('administrator/categories'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('administrator/categories/create_action'),
            'id' => set_value('id'),
            'parent_id' => set_value('parent_id'),
            'title' => set_value('title'),
            'name' => set_value('name'),
            'alias' => set_value('alias'),
            'image' => set_value('image'),
            'section' => set_value('section'),
            'image_position' => set_value('image_position'),
            'description' => set_value('description'),
            'published' => set_value('published'),
            'checked_out' => set_value('checked_out'),
            'checked_out_time' => set_value('checked_out_time'),
            'editor' => set_value('editor'),
            'ordering' => set_value('ordering'),
            'access' => set_value('access'),
            'count' => set_value('count'),
            'params' => set_value('params'),
            'content' => 'administrator/categories/ancol_categories_form',
	);
        $this->atemplates->admin($data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'parent_id' => $this->input->post('parent_id',TRUE),
		'title' => $this->input->post('title',TRUE),
		'name' => $this->input->post('name',TRUE),
		'alias' => $this->input->post('alias',TRUE),
		'image' => $this->input->post('image',TRUE),
		'section' => $this->input->post('section',TRUE),
		'image_position' => $this->input->post('image_position',TRUE),
		'description' => $this->input->post('description',TRUE),
		'published' => $this->input->post('published',TRUE),
		'checked_out' => $this->input->post('checked_out',TRUE),
		'checked_out_time' => $this->input->post('checked_out_time',TRUE),
		'editor' => $this->input->post('editor',TRUE),
		'ordering' => $this->input->post('ordering',TRUE),
		'access' => $this->input->post('access',TRUE),
		'count' => $this->input->post('count',TRUE),
		'params' => $this->input->post('params',TRUE),
	    );

            $this->Master->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('administrator/categories'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Master->get_by_id($this->table,$id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('administrator/categories/update_action'),
		'id' => set_value('id', $row->id),
		'parent_id' => set_value('parent_id', $row->parent_id),
		'title' => set_value('title', $row->title),
		'name' => set_value('name', $row->name),
		'alias' => set_value('alias', $row->alias),
		'image' => set_value('image', $row->image),
		'section' => set_value('section', $row->section),
		'image_position' => set_value('image_position', $row->image_position),
		'description' => set_value('description', $row->description),
		'published' => set_value('published', $row->published),
		'checked_out' => set_value('checked_out', $row->checked_out),
		'checked_out_time' => set_value('checked_out_time', $row->checked_out_time),
		'editor' => set_value('editor', $row->editor),
		'ordering' => set_value('ordering', $row->ordering),
		'access' => set_value('access', $row->access),
		'count' => set_value('count', $row->count),
		'params' => set_value('params', $row->params),
	    );
            $this->load->view('administrator/categories/ancol_categories_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('categories'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'parent_id' => $this->input->post('parent_id',TRUE),
		'title' => $this->input->post('title',TRUE),
		'name' => $this->input->post('name',TRUE),
		'alias' => $this->input->post('alias',TRUE),
		'image' => $this->input->post('image',TRUE),
		'section' => $this->input->post('section',TRUE),
		'image_position' => $this->input->post('image_position',TRUE),
		'description' => $this->input->post('description',TRUE),
		'published' => $this->input->post('published',TRUE),
		'checked_out' => $this->input->post('checked_out',TRUE),
		'checked_out_time' => $this->input->post('checked_out_time',TRUE),
		'editor' => $this->input->post('editor',TRUE),
		'ordering' => $this->input->post('ordering',TRUE),
		'access' => $this->input->post('access',TRUE),
		'count' => $this->input->post('count',TRUE),
		'params' => $this->input->post('params',TRUE),
	    );

            $this->Master->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('categories'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Master->get_by_id($id);

        if ($row) {
            $this->Master->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('categories'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('categories'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('parent_id', 'parent id', 'trim|required');
	$this->form_validation->set_rules('title', 'title', 'trim|required');
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	$this->form_validation->set_rules('alias', 'alias', 'trim|required');
	$this->form_validation->set_rules('image', 'image', 'trim|required');
	$this->form_validation->set_rules('section', 'section', 'trim|required');
	$this->form_validation->set_rules('image_position', 'image position', 'trim|required');
	$this->form_validation->set_rules('description', 'description', 'trim|required');
	$this->form_validation->set_rules('published', 'published', 'trim|required');
	$this->form_validation->set_rules('checked_out', 'checked out', 'trim|required');
	$this->form_validation->set_rules('checked_out_time', 'checked out time', 'trim|required');
	$this->form_validation->set_rules('editor', 'editor', 'trim|required');
	$this->form_validation->set_rules('ordering', 'ordering', 'trim|required');
	$this->form_validation->set_rules('access', 'access', 'trim|required');
	$this->form_validation->set_rules('count', 'count', 'trim|required');
	$this->form_validation->set_rules('params', 'params', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Categories.php */
/* Location: ./application/controllers/Categories.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-03-07 19:15:36 */
/* http://harviacode.com */
