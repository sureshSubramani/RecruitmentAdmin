<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Import_excel extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('import_model');
		$this->load->library('excel');
	}

	public function index(){
        /*get all purchases from the database*/
        $get_all['data'] = $this->import_model->get_excel_data();

        $data['title'] = 'Excel Import';

        $this->load->view('common/header', $data);
        $this->load->view('import', $get_all);
        $this->load->view('common/footer');
	}	

	public function import(){

		if(isset($_FILES["file"]["name"])){
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			
			foreach($object->getWorksheetIterator() as $worksheet){

				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<=$highestRow; $row++){

					$data[] = array(

                        'o_id'              =>  $worksheet->getCellByColumnAndRow(0, $row)->getValue(),
                        'order_place_by'    =>  $worksheet->getCellByColumnAndRow(1, $row)->getValue(),
                        'cons_status'       =>  $worksheet->getCellByColumnAndRow(2, $row)->getValue(),
                        'bill_date'         =>  date($format="Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCellByColumnAndRow(3, $row)->getValue())),
                        'category'          =>  $worksheet->getCellByColumnAndRow(4, $row)->getValue(),
                        'agency'            =>  $worksheet->getCellByColumnAndRow(5, $row)->getValue(),
                        'pid'               =>  $worksheet->getCellByColumnAndRow(6, $row)->getValue(),
                        'product_name'      =>  $worksheet->getCellByColumnAndRow(7, $row)->getValue(),
                        'college_type'      =>  $worksheet->getCellByColumnAndRow(8, $row)->getValue(),
                        'unit'              =>  $worksheet->getCellByColumnAndRow(9, $row)->getValue(),
                        'unit_price'        =>  $worksheet->getCellByColumnAndRow(10, $row)->getValue(),
                        'unit_count'        =>  $worksheet->getCellByColumnAndRow(11, $row)->getValue(),
                        'total_amount'      =>  $worksheet->getCellByColumnAndRow(12, $row)->getValue(),
                        'month_year'        =>  $worksheet->getCellByColumnAndRow(14, $row)->getValue()."-".$worksheet->getCellByColumnAndRow(13, $row)->getValue(), //date($format="Y-m", PHPExcel_Shared_Date::ExcelToPHP($col_line_14."-".$col_line_13)), 
                        'type'              =>  $worksheet->getCellByColumnAndRow(15, $row)->getValue(),   						
					);
                }
                
            }
            $this->excel_import_model->insert_excel($data);
            $this->session->set_flashdata('success', 'Excel Data Imported successfully');        
           
        }	       
        redirect(base_url('import_excel'), 'refresh');        
    }
    
}

?>