<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_Artikel extends CI_Model{
    /*
     * get rows from the posts table
     */
    public $table = 'content';
    
    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from($this->table);

        //set start and limit
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }
        
        if(array_key_exists("alias", $params)){
            $this->db->where('alias', $params['alias']);
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }

        //return fetched data
        return $result;
    }
    
    /*
     * Insert post data to table
     */
    public function insert($data = array()) {
        if(!array_key_exists("created", $data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists("modified", $data)){
            $data['modified'] = date("Y-m-d H:i:s");
        }
        
        //insert data
        $insert = $this->db->insert($this->table, $data);
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
    }

}
