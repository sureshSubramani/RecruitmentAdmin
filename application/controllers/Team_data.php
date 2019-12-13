<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team_data extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('recruitment_model','rm');
    }

	public function index(){

        $qeury = $this->rm->getStaff_List();

        $data['title'] = "Team Data";

        if($qeury){
            $data['TEAM_DATA'] =  $qeury;
        }else{
            $data['TEAM_DATA'] = 0;
        }

        $this->load->view('common/header', $data);
        $this->load->view('team_data', $data);
        $this->load->view('common/footer');
    }

    public function setOffer_letter(){

        print_r($_POST); die();
        //$this->load->view('staff_list', $data);

        if(isset($_POST)){
            //$data = array('personal_id' => $this->input->post(), 'staff_status' => $this->input->post('staff_stauts'));

            print_r($_POST); die();
        } 
        $this->rm->select_staff($data);
    }

    public function setNo_due(){

        print_r($_POST); die();
        //$this->load->view('staff_list', $data);

        if(isset($_POST)){
            //$data = array('personal_id' => $this->input->post(), 'staff_status' => $this->input->post('staff_stauts'));

            print_r($_POST); die();
        } 
        $this->rm->select_staff($data);
    }
   
    public function setRelieve_letter(){

        $personal_id = $this->input->get('personal_id');
        $this->db->where('personal_id', $personal_id);
        $this->db->select('profile_status');
        $status = $this->db->get(PERSONAL)->row_array();

        
        if($status['profile_status'] == 0) $status = 1; else $status = 0;
       
        $this->db->where('personal_id', $personal_id);
        $q = $this->db->update(PERSONAL,array('profile_status' => $status));
        //print_r(json_encode($status['profile_status'])); die();
       
       if($q){ redicrect('profile_list',refresh);}
        
    }

    public function disable_enable(){

        $personal_id = $this->input->get('personal_id');
        $this->db->where('personal_id', $personal_id);
        $this->db->select('status');
        $status = $this->db->get(TEAMDATA)->row_array();
        
        print_r(json_encode($status)); die();
        
        if($status['status'] == 0) $status = 1; else $status = 0;
       
        $this->db->where('personal_id', $personal_id);
        $q = $this->db->update(PERSONAL,array('status' => $status));
        
       
       if($q){ redicrect('profile_list',refresh);}
        
    }
}