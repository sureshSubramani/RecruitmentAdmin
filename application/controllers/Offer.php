<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offer extends CI_Controller {

	public function __construct(){
            /*call CodeIgniter's default Constructor*/
            parent::__construct();	
            /*load Model*/
            $this->load->model('recruitment_model','rm');            
    }
        
	public function index(){

        $data['personal_id'] = 1;

        $data['title'] = 'Offer Letter';

        //$this->load->view('common/header', $data);
        $this->load->view('offer_pdf', $data);
        //$this->load->view('common/footer');                                 
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
               
}
?>