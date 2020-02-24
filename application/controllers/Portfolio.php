<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {
	public function index()
	{
		$data = array(
			'title'		=> 'Portfolio',
		);
		$this->load->view('site/portfolio', $data);
	}
}
