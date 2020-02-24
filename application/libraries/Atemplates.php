<?php 
class Atemplates 
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function admin($data = null)
    {
        $this->ci->load->view('administrator/template/default', $data);
    }

    function site($data = null)
    {
        $this->ci->load->view('site/template/default', $data);
    }

    function frontpage($data = null)
    {
        $this->ci->load->view('site/template/frontpage', $data);
    }
    
}
