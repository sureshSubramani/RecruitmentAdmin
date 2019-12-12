<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
    }

	public function index(){
        $data['title'] = 'Mahendra College Institions';
        $this->load->view('login', $data);
    }
    
    function auth(){
        $email    = $this->input->post('email',TRUE);
        $password = md5($this->input->post('pwd',TRUE));
        $validate = $this->admin_model->validate($email,$password);
            // echo '<pre>';
            // print_r($validate->row()); die();
            // echo '</pre>';
        if($validate->num_rows() > 0){
            $data  = $validate->row_array();
            
            $username  = $data['username'];
            $email = $data['email'];
            $level = $data['roll_type_id'];
            $logindata = array(
                'username' => $username,
                'email' => $email,
                'roll_type_id' => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($logindata);
            // access login for admin
            if($level === '0'){
                redirect(base_url('dashboard'));
     
            // access login for staff
            }elseif($level === '1'){
                redirect(base_url('dashboard'));
     
            // access login for author
            }elseif($level === '2'){
                redirect(base_url('dashboard'));
     
            // access login for author
            }else{
                redirect(base_url('dashboard'));
            }
        }else{
            $this->session->set_flashdata('msg','Username or Password is Wrong');
            redirect(base_url());
        }
      }
     
      function logout(){
          //$this->session->sess_destroy(); 
          // or
          session_destroy();
          redirect(base_url(), 'refresh');
      }
     
}