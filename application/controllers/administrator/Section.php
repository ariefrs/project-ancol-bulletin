<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Section extends CI_Controller
{
    public $table = 'sections';

    function __construct()
    {
        parent::__construct();
        $this->load->library('atemplates');
        /*
        $models = array(
            'administrator/M_Master'      => 'Master',
            );
        $this->load->model($models);
        /*
        if ($this->session->userdata('username')=="") 
			{
			redirect('administrator/auth');
			}
		*/
    }
    public function index()
    {
		$search_title   = urldecode($this->input->get('search_title', TRUE));
        $alias          = urldecode($this->input->get('alias',TRUE));
        $description    = urldecode($this->input->get('description',TRUE));
        $start 	        = intval($this->input->get('start'));
        $condition = [
            'title'         => $search_title,
            'alias'         => $alias,
            'description'   => $description
        ];
        $config         = array();
        if ($search_title<>'' && $alias<>'' && $description<>'') {
            $config['base_url'] = base_url() . '/administrator/section/index.html?title='.urlencode('$search_title')
                                    .'&alias='.urlencode('$alias')
                                    .'&description='.urlencode('$description');
            $config['first_url'] = base_url() . '/administrator/section/index.html?title='.urlencode('$search_title')
                                    .'&alias='.urlencode('$alias')
                                    .'&description='.urlencode('$description');
        } else {
            $config['base_url'] = base_url() . '/administrator/section/index.html';
            $config['first_url'] = base_url() . '/administrator/section/index.html';
        }
        $config = array(
            'uri_segment'           => 3,
            'per_page'              => 10,
            'query_string_segment'  => 'start',
            'page_query_string'     => TRUE,
            'reuse_query_string'    => TRUE,
            'total_rows'            => $this->Master->total_rows($this->table,$condition));
        $section = $this->Master->get_limit_data($config['per_page'],$start,$this->table,$condition);       
        
        $this->pagination->initialize($config);
        $data = array(
            'start' 				=> $start,
            'search_title'          => $search_title,
            'alias'                 => $alias,
            'description'           => $description,
            'section_data' 		    => $section,
            'pagination' 			=> $this->pagination->create_links(),
            'total_rows' 			=> $config['total_rows'],
			'content'			    => 'administrator/articles/section_list',
			'title'					=> 'Manage Sections',
        );
		$this->atemplates->admin($data);
    }

    public function create()
    {
        echo 'Function Tambah Seksi Belum dibuat';
    }
}
/* End of file Section */
/* Location: ./application/controllers/Section.php */
