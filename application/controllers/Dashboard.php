<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('admin_model');
      }

	public function index(){

        $data['title'] = "Admin | Dashboard";

        $this->load->view('common/header', $data); 
        $this->load->view('dashboard',$data);
        $this->load->view('common/footer');
    }
}