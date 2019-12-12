<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
                /*call CodeIgniter's default Constructor*/
                parent::__construct();	
                /*load Model*/
                $this->load->model('Member_model');
        }
        
	public function index(){
                $get_all['data'] = $this->Member_model->get_members();

                $data['title'] = 'Members';
		$this->load->view('common/header', $data);
		$this->load->view('member', $get_all);
                $this->load->view('common/footer');                                 
        }

        public function getMembers(){
            $this->Member_model->get_members();
        }

        public function addMember(){         
	 		
                /*Check submit button */
                if($this->input->post('fname')){

                        $fname = $this->input->post('fname');
                        $dob = $this->input->post('dob');
                        $desg = $this->input->post('desg');

                        $data = array(
                                'full_name' => $fname,
                                'dob'=> $dob,
                                'designation'=> $desg
                        );

                        // echo '<pre>';
                        // print_r($data); die();
                        // echo '</pre>';
                        
                        $this->Member_model->insert_data($data);                                               
                        
                        $this->session->set_flashdata('success', 'Member Added Successfully'); 
                } 
               
             redirect(base_url('member'));                          
        }  
        
        public function import(){                    

                if(isset($_FILES['import_file'])){
                        
			if(isset($_FILES['import_file']['tmp_name']) && $_FILES['import_file']['tmp_name'] != ''){

				$get_allrec = array();

				$count=0;
                                $fp = fopen($_FILES['import_file']['tmp_name'],'r') or die("can't open file");
                                
			        while($col_line = fgetcsv($fp,1024)){

			        	$count++;
			        	if($count == 1){
			                continue;
			            }

			            for($i = 0, $j = count($col_line); $i < $j; $i++){
                                        
                                        $insert_csv = array(
                                                'full_name' => $col_line[0],
                                                'dob'=> $col_line[1],
                                                'designation'=> $col_line[2]
                                        );
			                
			            }

			            $get_all[] = $insert_csv;
                                } 
                                
                                // echo '<pre>';
                                // print_r($get_allrec); die();
                                // echo '</pre>';

                            $this->Member_model->insert_csv($get_all);
                            $this->session->set_flashdata('success', 'Members Added Successfully');			        
			}
 
			redirect(base_url('member'));
                }
                
        }
        
        public function export(){

                // file name 
		$filename = 'members_'.date('Ymd').'.csv'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
                header("Content-Type: application/csv; ");
                
	        // get data 
                $membersData = $this->Member_model->get_members_csv();
                
		// file creation 
		$file = fopen('php://output','w');
		$header = array("S.No","Full Name","DOB","Designation","Email","Password","Status","Created At","Created By","Modified By"); 
		fputcsv($file, $header);
		foreach ($membersData as $key=>$line){ 
		        fputcsv($file, $line); 
		}
                fclose($file); 
                exit;
        }
        
}