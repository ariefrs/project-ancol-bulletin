<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Posts Management class created by CodexWorld
 */
class Artikel extends CI_Controller {
    
    public $table = 'content';
    public $section = 'sections';

    function __construct() {
        parent::__construct();
        $this->load->library('atemplates');
    }
    
    public function index(){
        $data = array();
        
        //get the posts data
        $data['posts']      = $this->Artikel->getRows(array('limit'=>10));
        $data['content']    = 'site/posts/index' ;
        //load the view
        $this->atemplates->frontpage($data);
    }
    
    public function details($alias){
        $data = array();
        
        //get the article data
        $rows = $this->Master->get_where($this->table,array('alias'=>$alias));
        
        //Update hits counter
        $hits = array(
            'hits' => $rows[0]->hits+1
            );
        $this->Master->update($this->table,$rows[0]->id,$hits);
        $data = array(
            'title'         => $rows[0]->title,
            'completetext'  => $rows[0]->completetext,
            'hits'          => $rows[0]->hits,
            'created'       => $rows[0]->created,
            'content'       => 'site/posts/details',
        );
        
        //load the view
        
        $this->atemplates->site($data);
    }
    
    public function add(){
        $data = array();
        $postData = array();
        if($this->input->post('submitBtn')){
            $this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean|strip_tags');
            $this->form_validation->set_rules('intro', 'Intro Text', 'trim|required|xss_clean|strip_tags');
            $this->form_validation->set_rules('content', 'Content', 'trim|required|xss_clean');
            $this->form_validation->set_rules('catid', 'Kategori', 'trim|required|xss_clean|strip_tags');
            $this->form_validation->set_rules('sectionid', 'Seksi', 'trim|required|xss_clean|strip_tags');

            $postData = array(
                'title'         => $this->input->post('title'),
                'completetext'  => $this->input->post('content'),
                'introtext'     => $this->input->post('intro'),
                //'introtext'     => cutText($this->input->post('content'),150).'...',
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
        $data['content']    = 'site/posts/add';
        $data['title']      = 'Tambah Artikel';
        
        //load the view
        $this->atemplates->site($data);
    }
    public function edisi($sectionid)
    {
        $data = array();
        $section = $this->Master->get_by_id($this->table,$sectionid);
        //get the posts data
        $data['section']      = $section;
        $data['content']    = 'site/section/edisi' ;
        //load the view
        $this->atemplates->site($data);
    }
    public function edit($articleid)
    {
        $data = array();
        $row = $this->Master->get_by_id($this->table,$articleid);
        if($row){
            $data = array(
                'button'                => 'Update',
                'action'                => site_url('artikel/edit_action'),
                'article_title'         => set_value('title', $row->title),
                'completetext'          => set_value('completetext', $row->completetext),
                'introtext'             => set_value('introtext', $row->introtext),
                'catid'                 => set_value('catid', $row->catid),
                'sectionid'             => set_value('sectionid', $row->sectionid),
                'images'                 => set_value('images', $row->images),
                'catid_selected'        => $row->catid,
                'sectionid_selected'    => $row->sectionid,
                'content'               => 'site/posts/edit',
                'title'                 => 'Edit Artikel '.$row->title,
            );
        }
        $this->atemplates->site($data);
    }
    public function edit_action()
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
                'introtext'     => $this->input->post('intro'),
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
        $data['content']    = 'site/posts/edit';
        $data['title']      = 'Edit Artikel';
        
        //load the view
        $this->atemplates->site($data);
    }
}
