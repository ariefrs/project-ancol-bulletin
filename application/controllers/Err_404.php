<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Err_404 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
	

    public function index()
    {
		$this->output->set_status_header('404');
		$this->load->view('error_404');
	}
}
/* End of file Err_404 */
/* Location: ./application/controllers/Err_404.php */
