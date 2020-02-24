<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property extends CI_Controller {
	public function index()
	{
		$data = array(
			'title'		=> 'Property',
		);
		$this->load->view('site/property', $data);
	}
}
