<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruitment extends CI_Controller {
    
    function __construct(){
        parent::__construct();
		$this->load->model('recruitment_model','rm');
		$this->load->model('admin_model');
    }

	public function index(){

        $data['title'] = "Register Staff";
        $data['getDepartments'] = $this->rm->getDepartments();
        //$this->load->view('common/header', $data);
        $this->load->view('recruitment', $data);
        //$this->load->view('common/footer');
	}
	
	public function check_user_exist(){ 

		// $recaptcha_secret = GOOGLE_SECRET;
		// $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".GOOGLE_SECRET."&response=".$_POST['g-recaptcha-response']);
		// $response = json_decode($response, true);

		// if($response["success"] === true){
				//receives ajax requests
				$isEmail = $this->input->post('email_id');
				$isPhone = $this->input->post('phone_no');
				$result = $this->rm->checkExist($isEmail, $isPhone); //sending ajax data to model	
			// }else{
			// 	//echo '<pre>';
			// 	//print_r($response); die();
			// 	$this->session->set_flashdata('captcha','You are a robot, Please try again?');
			// }	
	}

	public function personal_insert(){

		if($_GET){
		  	$this->rm->Insert_Update_personal($_GET); 
		}	
	}

	public function communication_insert(){
		$insert_array = array();
				  
		if($_GET){
			
			for($i=0; $i<count($_GET['type_of_address']); $i++){

				$insert_array[] = array('personal_id'=>$_GET['personal_id'],'type_of_address'=>$_GET['type_of_address'][$i],'phone_no'=>$_GET['addr_phone_no'][$i],'street_address'=>$_GET['street_address'][$i],'city'=>$_GET['city'][$i],'state'=>$_GET['state'][$i],'country'=>$_GET['country'][$i],'pin_no'=>$_GET['pin_no'][$i]);					
			}				
		}

		//print_r($_GET); die();	 

		$this->rm->Insert_communication($insert_array,$_GET['personal_id']); 
	}

	public function education_insert(){
		$insert_array = array();
		//print_r($_GET); die();  
		if($_GET){
		
			for($i=0; $i<count($_GET['degree']); $i++){

				$insert_array[] = array('personal_id'=>$_GET['personal_id'],'degree'=>$_GET['degree'][$i],'specialization'=>$_GET['subject'][$i],'college'=>$_GET['college'][$i],'mos'=>$_GET['mos'][$i], 'aff_university'=>$_GET['aff_university'][$i],'yop'=>$_GET['yop'][$i],'percentage'=>$_GET['percentage'][$i]);					
			}				
		}
		 
		$this->rm->Insert_education($insert_array,$_GET['personal_id']); 
	}

	public function experience_insert(){
		$insert_array = array();

		//print_r($_GET); die();
		if($_GET){
			
			for($i=0; $i<count($_GET['exp_college']); $i++){
				$insert_array[] = array('personal_id'=>$_GET['personal_id'],'exp_college'=>$_GET['exp_college'][$i],'university'=>$_GET['university'][$i],'designation'=>$_GET['designation'][$i],'doj'=>$_GET['doj'][$i], 'dol'=>$_GET['dol'][$i],'doe'=>$_GET['doe'][$i]);					
			}			
		  $this->rm->Insert_experience($insert_array,$_GET['personal_id']); 
		}
	}

	public function achievement_insert(){
		$insert_array = array();

		if($_GET){
			
			for($i=0; $i<count($_GET['personal_id']); $i++){
				$insert_array[] = array('personal_id'=>$_GET['personal_id'],'set_net'=>$_GET['set_net'][$i],'nat_journals'=>$_GET['nat_journals'][$i],'int_journals'=>$_GET['int_journals'][$i],'sem_journals'=>$_GET['sem_journals'][$i], 'published_book'=>$_GET['published_book'][$i],'known_languages'=>$_GET['known_languages'][$i]
				,'eng_read'=>$_GET['eng_read'][$i],'eng_speak'=>$_GET['eng_speak'][$i],'eng_write'=>$_GET['eng_write'][$i],'typing_tamil'=>$_GET['typing_tamil'][$i],'typing_english'=>$_GET['typing_english'][$i],'comp_knowledge'=>$_GET['comp_knowledge'][$i]);					
			}		
			
			//print_r($insert_array); die();
		  $this->rm->Insert_achievement($insert_array,$_GET['personal_id']); 
		}
	}

	public function joining_insert(){
		$insert_array = array();

		if($_GET){
			
			for($i=0; $i<count($_GET['date_of_joining']); $i++){
				$insert_array[] = array('personal_id'=>$_GET['personal_id'],'date_of_joining'=>$_GET['date_of_joining'][$i],'current_salary'=>$_GET['current_salary'][$i],'expected_salary'=>$_GET['expected_salary'][$i]);					
			}

		  $this->rm->Insert_joining($insert_array,$_GET['personal_id']); 
		}
	}

	public function check_exist(){ //receives ajax requests

		$isEmail = $this->input->post('email_id');
		//$isphone = $this->input->post('phone_no');
		$result = $this->rm->check_Exist($isEmail); //sending ajax data to model
		if($result)
		  echo "1";
		else
		  echo "0";
	}

    public function checkUser(){

		if($_SERVER["REQUEST_METHOD"] === "POST"){

			// $recaptcha_secret = GOOGLE_SECRET;
			// $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".GOOGLE_SECRET."&response=".$_POST['g-recaptcha-response']);
			// $response = json_decode($response, true);

			//print_r($response); die();

			//if($response["success"] === true){
				// $data = array(
				// 	'email'         => $this->input->post('email'),
				// 	'mobile'        => $this->input->post('phone'),
				// 	'status'        => $this->input->post('status')
				// 	);
				  $result = $this->rm->insert_data($data);					
				  $this->session->set_flashdata('added','Staff information updated successfully.');
			//}else{
				 //echo '<pre>';
				 //print_r($response); die();
				 //$this->session->set_flashdata('added','You are a robot, Please try again?');
				 //$this->load->view('welcome_staff');
				//}		
		}
	}

	

}