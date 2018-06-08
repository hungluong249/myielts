<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Benefit_model extends MY_Model {

	public $table = 'benefit';
	
	public function __construct(){
		parent::__construct();
		//Do your magic here
	}

	public function get_by_id_with_benefit($id = null) {
        $this->db->select('*');
        
        $this->db->from($this->table);
        $this->db->where('is_deleted', 0);
        if($id != null){
        	$this->db->where('id', $id);
        }else{
        	$this->db->order_by("id", "desc");
        }
        $this->db->limit(1);
        
        return $this->db->get()->row_array();
    }

}

/* End of file Benefit_model.php */
/* Location: ./application/models/Benefit_model.php */