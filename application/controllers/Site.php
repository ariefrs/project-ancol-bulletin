<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('atemplates');
    }

	public function index()
	{
		$data = array();
        //get the posts data
        $data['posts']      = $this->Artikel->getRows(array('limit'=>10));
        $data['content']    = 'site/posts/index' ;
        //load the view
        $this->atemplates->frontpage($data);
	}
}
