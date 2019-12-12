<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('Staff_model');
		$this->load->library('session');
	}
	
	public function index(){

		$data['success'] = '';
		$data['title'] = "Welcome Staff";

		$this->load->view('welcome_staff', $data);
		
	}

	public function update_info(){

		if($_SERVER["REQUEST_METHOD"] === "POST"){

			//$recaptcha_secret = GOOGLE_SECRET;
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".GOOGLE_SECRET."&response=".$_POST['g-recaptcha-response']);
			$response = json_decode($response, true);

			//print_r($response); die();

			if($response["success"] === true){
				$data = array(
					'email'         => $this->input->post('email'),
					'mobile'        => $this->input->post('phone'),
					'status'        => $this->input->post('status')
					);

				  $result = $this->Staff_model->insert_data($data);
					
				  $this->session->set_flashdata('added','Staff information updated successfully.');
			}else{
				  //echo '<pre>';
				  //print_r($response); die();
				  $this->session->set_flashdata('added','You are a robot, Please try again?');
				  $this->load->view('welcome_staff');
				}
		
		}
	}
}
