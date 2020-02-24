<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Auth extends CI_Controller {

    function __construct()
        {
            parent::__construct();
            //$this->load->model('auth_model');
        }   

 
    public function index($error = NULL) {
        $data = array(
            'title'         => 'Welcome',
            'action'        => site_url('login'),
            'error'         => $error,
            'content'       => 'administrator/login'
        );
        $this->atemplates->admin($data);
    }
    Public function get_username($search){
        $this->db->from('j_users');
        $this->db->where('username',$search);
        $this->db->order_by('username','ASC');
        $query =  $this->db->get();
        return $query->result_array();
    }
    public function get_image()
    {
        $username   = $this->input->post('username');
        $row        = $this->db->where('username',$username)->get('users')->row();
        if(isset($username))
        {
            if(count($row) > 0)
            {
                $image = $row->image; 
                echo $image;
            }

        }
    }
    public function get_userimage()
    {
        $term = $this->input->get('term');
        if (isset($term))
        {
            $q = strtolower($term);
            $query = $this->auth_model->get_username($q);
            if (count($query) > 0 )
            {
                foreach ($query as $row) 
                {
                    $new_row['label']       = htmlentities(stripcslashes($row['username']));
                    $new_row['value']       = htmlentities(stripcslashes($row['username']));
                    $new_row['image']       = htmlentities(stripcslashes($row['image']));
                    $row_set[] = $new_row;
                }
                echo json_encode($row_set);
            }
        }
    } 
    public function login() {
        //$this->load->model('auth_model');
        $login = $this->auth_model->login($this->input->post('username'), md5($this->input->post('password')));
 
        if ($login == 1) {
            $update_data = array(
                'lastvisitDate' => date("Y-m-d H:i:s"),
                'status'        => 'Online',
                );
            $username      = $this->input->post('username');
            $this->db->where('username',$username)->update('j_users', $update_data);

            //ambil detail data
            $row = $this->auth_model->data_login($this->input->post('username'), md5($this->input->post('password')));

            //Ambil Data Office
            $this->db->where('kantor_id',$row->user_officeid);
            $this->db->from('kantor');            
            $office = $this->db->get()->row();

            //daftarkan session
            $data = array(
                'officeid'      => $row->user_officeid,
                'officename'    => $office->kantor_alias,
                'status'        => $row->status,
                'username'      => $row->username,
                'id'            => $row->id,
                'name'          => $row->name,
                'email'         => $row->email,
                'usertype'      => $row->usertype,
                'block'         => $row->block,
                'module_id'     => $row->module_id,                                 
                'lastvisitDate' => $row->lastvisitDate,
                'image'         => $row->image,
                'karyawan_id'   => $row->karyawan_id,
                'login'         => TRUE,
                'time'          => time(),

            );
            $this->session->set_userdata($data);
            //update user status dan lastvisitDate
            

            //redirect ke halaman sukses
                // redirect(site_url('dashboard'));
            redirect(site_url('administrator/article'));
                } else {
            //tampilkan pesan error
            $error = 'Cek username / password ';
            $this->index($error);
        }
    }

    function logout() {
        $username            = $this->session->userdata('username');
        $data['status']      = "Offline";        
        $this->db->where('username',$username);
        $this->db->update('j_users',$data);
 
//        destroy session
        $this->session->sess_destroy();
        
//        redirect ke halaman login
        redirect(site_url('administrator/auth'));
    }

    public function lockscreen()
    {
        $this->load->view('lockscreen');
    }

}
 
/* End of file auth.php */
/* Location: ./application/controllers/administrator/auth.php */
