<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Article extends CI_Controller
{
    public $table       = 'content';
    public $categories  = 'categories';
    public $sections    = 'sections';

    function __construct()
    {
        parent::__construct();
        
        $models = array(
            'administrator/M_Master'        => 'Master',
            'administrator/M_Categories'    => 'Kategori',
            );
        $this->load->model($models);
        $this->load->library('atemplates');
        
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
        $cat 	        = intval($this->input->get('cat'));
        $section 	    = intval($this->input->get('section'));
        $start 	        = intval($this->input->get('start'));
        $condition = [
            'title'         => $search_title,
            'alias'         => $alias,
        ];
        !empty($cat) ? $condition = ['catid' => $cat] : '';
        !empty($section) ? $condition = ['sectionid' => $section] : '';
        $config         = array();
        if ($search_title <> '' && $alias <> '' && $cat <> '' && $section <> '') {
            $config['base_url'] = base_url() . '/administrator/article/index.html?title='
                                    .urlencode('$search_title')
                                    .'&alias='.urlencode('$alias')
                                    .'&catid='.urlencode('$cat')
                                    .'&sectionid='.urlencode('$section');
            $config['first_url'] = base_url() . '/administrator/article/index.html?title='
                                    .urlencode('$search_title')
                                    .'&alias='.urlencode('$alias')
                                    .'&catid='.urlencode('$cat')
                                    .'&sectionid='.urlencode('$section');
        } else {
            $config['base_url'] = base_url() . '/administrator/article/index.html';
            $config['first_url'] = base_url() . '/administrator/article/index.html';
        }
        $config = array(
            'uri_segment'           => 3,
            'per_page'              => 10,
            'query_string_segment'  => 'start',
            'page_query_string'     => TRUE,
            'reuse_query_string'    => TRUE,
            'total_rows'            => $this->Master->total_rows($this->table,$condition)
        );
        $article = $this->Master->get_limit_data($config['per_page'],$start,$this->table,$condition);
        $section_select = $this->Master->get_all($this->sections);
        $categories_select = $this->Master->get_all($this->categories);        
         
        $this->pagination->initialize($config);
        $data = array(
            'start' 				=> $start,
            'categories'            => $categories_select,
            'search_title'          => $search_title,
            'alias'                 => $alias,
            'cat'                   => $cat,
            'section'               => $section,
            'sections'              => $section_select,
            'article_data' 		    => $article,
            'pagination' 			=> $this->pagination->create_links(),
            'total_rows' 			=> $config['total_rows'],
			'content'			    => 'administrator/articles/article_list',
			'title'					=> 'Manage Article',
        );
        $this->atemplates->admin($data);
        
    }

    public function details($id)
    {
        $row = $this->Master->get_where($this->table,array('id'=>$id));
        
        $data = array(
            'title'                 => 'Detil Artikel',
            'articles'              => $row,
            'content'               => 'administrator/articles/details');
        
        //load the view
        $this->atemplates->admin($data);
    }
    
    public function add(){
        
        $data = array();
        $postData = array();
        if($this->input->post('submitBtn')){
            $this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean|strip_tags');
            $this->form_validation->set_rules('content', 'Content', 'trim|required|xss_clean');
            $this->form_validation->set_rules('catid', 'Kategori', 'trim|required|xss_clean|strip_tags');
            $this->form_validation->set_rules('sectionid', 'Seksi', 'trim|required|xss_clean|strip_tags');

            $postData = array(
                'title'         => $this->input->post('title'),
                'completetext'  => $this->input->post('content'),
                'introtext'     => word_limiter($this->input->post('content'),10),
                'catid'         => $this->input->post('catid'),
                'sectionid'     => $this->input->post('sectionid'),
            );

            if($this->form_validation->run() == true) {
                /*
                 * Generate SEO friendly URL
                 */
                $title = strip_tags($this->input->post('title'));
                $titleURL = strtolower(url_title($title));
                if(isUrlExists('content',$titleURL)){
                   $titleURL = $titleURL.'-'.time(); 
                }
                $postData['alias'] = $titleURL;
                
                //Insert post data to database
                $insert = $this->Artikel->insert($postData);
                if($insert){
                    $postData = array();
                    $data['success_msg'] = 'Post data inserted successfully.';
                    redirect(site_url('artikel'));
                } else {
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }
        
        $data['post']       = $postData;
        $data['content']    = 'administrator/articles/add';
        $data['title']      = 'Tambah Artikel';
        
        //load the view
        $this->atemplates->site($data);
    }
    public function update($articleid)
    {
        $data = array();
        $row = $this->Master->get_by_id($this->table,$articleid);
        if($row){
            $data = array(
                'button'                => 'Update',
                'action'                => site_url('administrator/article/update_action'),
                'article_title'         => set_value('title', $row->title),
                'completetext'          => set_value('completetext', $row->completetext),
                'introtext'             => set_value('introtext', $row->introtext),
                'catid'                 => set_value('catid', $row->catid),
                'sectionid'             => set_value('sectionid', $row->sectionid),
                'images'                => set_value('images', $row->images),
                'catid_selected'        => $row->catid,
                'sectionid_selected'    => $row->sectionid,
                'content'               => 'administrator/articles/edit',
                'title'                 => 'Edit Artikel '.$row->title,
            );
        }
        $this->atemplates->site($data);
    }
    public function update_action()
    {
        $data = array();
        $postData = array();
        if($this->input->post('submitBtn')){
            $this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean|strip_tags');
            $this->form_validation->set_rules('introtext', 'Intro Text', 'trim|required|xss_clean|strip_tags');
            $this->form_validation->set_rules('completetext', 'Content', 'trim|required|xss_clean');
            $this->form_validation->set_rules('catid', 'Kategori', 'trim|required|xss_clean|strip_tags');
            $this->form_validation->set_rules('sectionid', 'Seksi', 'trim|required|xss_clean|strip_tags');

            $postData = array(
                'title'         => $this->input->post('title'),
                'completetext'  => $this->input->post('content'),
                'introtext'     => word_limiter($this->input->post('content'),10),
                'catid'         => $this->input->post('catid'),
                'sectionid'     => $this->input->post('sectionid'),
            );

            if($this->form_validation->run() == true) {
                /*
                 * Generate SEO friendly URL
                 */
                $title = strip_tags($this->input->post('title'));
                $titleURL = strtolower(url_title($title));
                if(isUrlExists('content',$titleURL)){
                   $titleURL = $titleURL.'-'.time(); 
                }
                $postData['alias'] = $titleURL;
                
                //Insert post data to database
                $insert = $this->Artikel->insert($postData);
                if($insert){
                    $postData = array();
                    $data['success_msg'] = 'Artikel berhasil ditambah';
                    redirect(site_url('administrator/article'));
                } else {
                    $data['error_msg'] = 'OOps ! Terjadi kesalahan, artikel gagal ditambah.';
                }
            }
        }
        
        $data['post']       = $postData;
        $data['content']    = 'administrator/articles/edit';
        $data['title']      = 'Edit Artikel';
        
        //load the view
        $this->atemplates->site($data);
    }
}
/* End of file Article */
/* Location: ./application/controllers/administrator/Article.php */
