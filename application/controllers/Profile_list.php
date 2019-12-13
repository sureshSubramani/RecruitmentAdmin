<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_list extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('recruitment_model','rm');
    }

	public function index(){

        $q1 = $this->rm->getStaff_List();
        //$q2 = $this->rm->getPersonal();
        //$q3 = $this->rm->getEducation();

        $data['title'] = "Recruitment Register";

        if($q1){
            $data['STAFF'] =  $q1;
        }

        /*if($q2){
            $data['PERSONAL_DATA'] =  $q2;
        }

        if($q3){
            $data['EDUCATION_DATA'] =  $q3;
        }*/

        $this->load->view('common/header', $data);
        $this->load->view('profile_list', $data);
        $this->load->view('common/footer');
    }

    public function getSelect(){

        print_r($_POST); die();
        //$this->load->view('staff_list', $data);

        if(isset($_POST)){
            //$data = array('personal_id' => $this->input->post(), 'staff_status' => $this->input->post('staff_stauts'));

            print_r($_POST); die();
        } 
        $this->rm->select_staff($data);
    }
   
    public function getShortlist(){

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
}