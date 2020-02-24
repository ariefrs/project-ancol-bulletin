<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	public function index()
	{
		$data = array(
			'title'		=> 'Gallery',
		);
		$this->load->view('site/gallery', $data);
	}
}
