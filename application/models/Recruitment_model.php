<?php

class Recruitment_model extends CI_Model{
    
    public function checkExist($email,$phone){ 
        //checks ajax requests
         $this->db->where("status",1);
         $this->db->where("phone_no",$phone);
         $this->db->where("email_id",$email);
         $query=$this->db->get(PERSONAL);
         
         $count = $query->num_rows(); 

         if($count == 1){
          print_r(json_encode($query->row_array()));
         }else{
          echo 0;
         }
    }

    public function check_Exist($email){
        $this->db->where("status",1);        
        $this->db->where("email_id",$email);
        //$this->db->where("phone_no",$phone);
        $q = $this->db->get(PERSONAL);
        return $q->num_rows();
    }

    /*Insert row*/
    public function Insert_Update_personal($insert_up_personal){
       
        if($insert_up_personal['personal_id'] == 0){

            $this->db->insert(PERSONAL,$insert_up_personal);
           
            $personal_id = $this->db->insert_id();           
        }
        else{
          
            $this->db->where('personal_id',$insert_up_personal['personal_id']);
            $this->db->update(PERSONAL,$insert_up_personal);
            
            $personal_id = $insert_up_personal['personal_id']; 
        }

        $this->db->select('*');
        $this->db->where('personal_id', $personal_id);
        
        $getExist = $this->db->get(COMMUNICATION)->result();

        $common_array = array('personal_id'=>$personal_id, 'communication'=>$getExist);

        print_r(json_encode($common_array));
    }

    public function Insert_communication($getData,$personal_id){
 
        $this->db->where('personal_id',$personal_id );
        $this->db->delete(COMMUNICATION);

        $this->db->insert_batch(COMMUNICATION,$getData);

        // $personal_id = $this->db->insert_id();
        /*if($getData['per_com_id'] == 0){

            $this->db->insert(COMMUNICATION,$getData);
           
            $personal_id = $this->db->insert_id();           
        }
        else{
            for($i=0; $i<count($getData['type_of_address']); $i++){

                $update_array = array('personal_id'=>$getData['per_com_id'],'type_of_address'=>$getData['type_of_address'][$i],'phone_no'=>$getData['phone_no'][$i],
                'street_address'=>$getData['street_address'][$i],'city'=>$getData['city'][$i],'state'=>$getData['state'][$i],'country'=>$getData['country'][$i],'pin_no'=>$getData['pin_no'][$i]);          

                $this->db->where('personal_id', $getData['per_com_id']);
                $this->db->update(COMMUNICATION,$update_array);
            }                  
            
            $personal_id =  $getData['per_com_id']; 
        }*/

        $this->db->select('*');
        $this->db->where('personal_id', $personal_id);        
        $getExist = $this->db->get(EDUCATION)->result();
 
        $common_array = array('personal_id'=>$personal_id, 'education'=>$getExist);

        print_r(json_encode($common_array));
    }

    public function Insert_education($getData,$personal_id){
 
        $this->db->where('personal_id',$personal_id );
        $this->db->delete(EDUCATION);


        $this->db->order_by('ASC');
        $this->db->insert_batch(EDUCATION,$getData);

        $this->db->select('*');
        $this->db->where('personal_id', $personal_id);        
        $getExist = $this->db->get(EXPERIENCE)->result();
 
        $common_array = array('personal_id'=>$personal_id, 'experience'=>$getExist);

        print_r(json_encode($common_array));
    }

    public function Insert_experience($getData,$personal_id){
 
        $this->db->where('personal_id',$personal_id );
        $this->db->delete(EXPERIENCE);


        $this->db->order_by('ASC');
        $this->db->insert_batch(EXPERIENCE,$getData);

        $this->db->select('*');
        $this->db->where('personal_id', $personal_id);        
        $getExist = $this->db->get(ACHIEVEMENT)->result();
 
        $common_array = array('personal_id'=>$personal_id, 'achievement'=>$getExist);

        print_r(json_encode($common_array));
    }

    public function Insert_achievement($getData,$personal_id){
 
        $this->db->where('personal_id',$personal_id );
        $this->db->delete(ACHIEVEMENT);

        $this->db->order_by('ASC');
        $this->db->insert_batch(ACHIEVEMENT,$getData);
        
        $this->db->select('*');
        $this->db->where('personal_id', $personal_id);        
        $getExist = $this->db->get(JOINING)->result();
 
        $common_array = array('personal_id'=>$personal_id, 'joining'=>$getExist);

        print_r(json_encode($common_array));
    }

    public function Insert_joining($getData,$personal_id){
 
        $this->db->where('personal_id',$personal_id );
        $this->db->delete(JOINING);

        $this->db->order_by('ASC');
        $this->db->insert_batch(JOINING,$getData);
        
        // $this->db->select('*');
        // $this->db->where('personal_id', $personal_id);        
        // $getExist = $this->db->get(ACHIEVEMENT)->result();
 
        // $common_array = array('personal_id'=>$personal_id, ''=>$getExist);

        // print_r(json_encode($common_array));
    }

    public function insert_personal(){ 
         //checks ajax requests
         $this->db->where("status",1);
         $this->db->where("phone_no",$phone);
         $query=$this->db->get(COMMUICATION);
         
         $count = $query->num_rows(); 

         if($count == 1){
          print_r(json_encode($query->row_array()));
         }else{
          echo 0;
         }
    }

    public function check_PhoneExist1($phone){ 
        //checks ajax requests
         $this->db->where("status",1);
         $this->db->where("phone",$phone);
         $query=$this->db->get(PERSONAL);
         if($query->num_rows() == 1){
          return $query->row_array()['personal_id'];
         }else{
          return 0;
         }
    }

    public function getStaff_List(){

        //$this->db->where("status",1);
    
        $this->db->from(PERSONAL.' as p');
        $this->db->join(DEPARTMENTS.' as d', 'p.department = d.id', 'left');
        $this->db->join(EXPERIENCE.' as e', 'p.personal_id = e.personal_id', 'LEFT');
        //$this->db->select('p.*, d.dept_name, e.*');
              
        $query = $this->db->get();

        if($query->num_rows() > 0){
          return $query->result();
          }
        return false;        
    }

    public function select_staff($data){
        for($i=0; $i<count($data); $i++){
        $this->db->where('personal_id',$data['personal_id'][$i] );
        $this->db->insert(JOINING,$getData['staff_status'][$i]);
        }
    }
    
    public function getDepartments(){
        $this->db->where("status",1);
        $q = $this->db->get(DEPARTMENTS)->result();
        return $q;
    }

    public function getEducation(){    
        $this->db->where('status',1);
        $q = $this->db->get(EDUCATION)->result();
        return $q;
    }
	
}

?>