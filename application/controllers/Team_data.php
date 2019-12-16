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

    public function emp_settings(){        

        $personal_id = $_POST['personal_id'];

        $data = array( 'emp_id' => $_POST['emp_id'], 'biometric_id' => $_POST['biometric_id']);
        $this->db->where('personal_id', $personal_id);
        $q = $this->db->update(TEAMDATA,$data);

        print_r($_POST['personal_id']);
    }

    public function disable_enable(){

        $personal_id = $this->input->get('personal_id');
        $this->db->where('personal_id', $personal_id);
        $this->db->select('status');
        $status = $this->db->get(TEAMDATA)->row_array();
        
        //print_r(json_encode($status)); die();
        
        if($status['status'] == 0) $status = 1; else $status = 0;
       
        $this->db->where('personal_id', $personal_id);
        $q = $this->db->update(TEAMDATA,array('status' => $status));       
        
    }

    public function no_due(){

        //echo $this->input->post('personal_id'); die();
        $personal_id = $this->input->post('personal_id');
        $this->db->where('personal_id', $personal_id);
        $this->db->select('no_due');
        $status = $this->db->get(TEAMDATA)->row_array(); 

        if($status['no_due'] == 0) $status = 1; else $status = 0;
       
        $this->db->where('personal_id', $personal_id);
        $q = $this->db->update(TEAMDATA,array('no_due' => $status));       
        
    }

    public function offer_download(){ 
        //load mPDF library
        $this->load->library('m_pdf');         

        //echo $_GET['personal_id']; die();
        
        $this->data['personal_id'] = $_GET['personal_id'];         

        $this->db->where('personal_id', $_GET['personal_id']);
        $this->db->select('offer_letter');
        $count = $this->db->get(TEAMDATA)->row_array();

        //echo $count['offer_letter']; die();

        $count = $count['offer_letter'] + 1;

        $this->db->where('personal_id', $_GET['personal_id']);
        $this->db->update(TEAMDATA,array('offer_letter' => $count));
        //now pass the data//
        //$this->data['title']="Download PDF";
        //$this->data['description'] = "";
        $stylesheet = file_get_contents('assets/build/css/pdf.css'); // Get css content
        //now pass the data //  
        
        $html_profile = $this->load->view('offer_pdf',$this->data, true); //load the pdf_output.php by passing our data and get all data in $html varriable.
        
        //this the the PDF filename that user will get to download
        $pdfFilePath ="profile_".time()."_mnw.pdf";
        
        //actually, you can pass mPDF parameter on this load() function
        $pdf = $this->m_pdf->load();

        $pdf->setAutoTopMargin = 'stretch'; // Set pdf top margin to stretch to avoid content overlapping
        $pdf->setAutoBottomMargin = 'stretch'; // Set pdf bottom margin to stretch to avoid content overlapping
        
        $pdf->WriteHTML($stylesheet,1); // Writing style to pdf
        //echo $html_profile;
        $pdf->WriteHTML($html_profile,2);
        //offer it to user via browser download! (The PDF won't be saved on your server HDD)
        $pdf->Output($pdfFilePath, "D");
    }

    public function nodue_download(){ 
        //load mPDF library
        $this->load->library('m_pdf');         

        //echo $_GET['personal_id']; die();
        
        $this->data['personal_id'] = $_GET['personal_id'];         

        //now pass the data//
        //$this->data['title']="Download PDF";
        //$this->data['description'] = "";
        $stylesheet = file_get_contents('assets/build/css/pdf.css'); // Get css content
        //now pass the data //  
        
        $html_profile = $this->load->view('nodues_pdf',$this->data, true); //load the pdf_output.php by passing our data and get all data in $html varriable.
        
        //this the the PDF filename that user will get to download
        $pdfFilePath ="profile_".time()."_mnw.pdf";
        
        //actually, you can pass mPDF parameter on this load() function
        $pdf = $this->m_pdf->load();

        $pdf->setAutoTopMargin = 'stretch'; // Set pdf top margin to stretch to avoid content overlapping
        $pdf->setAutoBottomMargin = 'stretch'; // Set pdf bottom margin to stretch to avoid content overlapping
        
        $pdf->WriteHTML($stylesheet,1); // Writing style to pdf
        //echo $html_profile;
        $pdf->WriteHTML($html_profile,2);
        //offer it to user via browser download! (The PDF won't be saved on your server HDD)
        $pdf->Output($pdfFilePath, "D");
    }
}