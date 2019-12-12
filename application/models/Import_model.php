<?php
class Import_model extends CI_Model{
    
    // insert multiple purchase rows
    public function insert_purchase($data){
        $this->db->insert_batch('mei_purchase', $data);
    }

    // insert multiple consumption rows
    public function insert_consumption($data){
        $this->db->insert_batch('mei_consumption', $data);
    }

    // insert multiple headcount rows
    public function insert_headcount($data){
        $this->db->insert_batch('mei_headcount', $data);
    }

    // display regars on row
   /*public function get_excel_data(){
        $this->db->limit(100);         
        $data = $this->db->get('mei_excel')->result();
        return $data;
    }*/
	
}