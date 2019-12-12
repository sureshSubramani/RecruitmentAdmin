<link rel='stylesheet' href='assets/build/css/pdf.css' />
<body>
<div class='container'>
              <div class="row">
                <div class="column_logo">
                <img src='assets/build/images/logo.jpg' alt='logo' class='img-fluid' style='width:200px;' />
                </div>                
                <div class="column">
                    <h3 class='title'>MAHENDRA ARTS & SCIENCE COLLEGE, KALIPPATTI</h3>
                    <p class="modal-title">(NAAC Accredited with "A" Grade | Autonomous |<br />
                                            Recognized under section 2(F) & 12(B) of the UGC Act 1986)</p>
                    <h4 style='margin-top:5px; font-weight:bold'><u>TEACHING FACULTY INFORMATION SHEET</u></h4>
                </div>                
                </div>
    
                <?php 
                 $this->db->where('personal_id', $personal_id);
                 $this->db->from(PERSONAL.' as p');
                 $this->db->join(DEPARTMENTS.' as d', 'p.department = d.id', 'left');
                 $personal = $this->db->get()->result();                                                                  
                 foreach($personal as $value){ ?> 

                <div class='row'>
                <div class="col-group-1">
                  <h4 class='text-left'>Post Appied for Assistant Professor in</h4>  
                </div>
                <div class="col-colon"><h4>:</h4></div>
                <div class="col-group-2">
                <h4><?php echo $value->dept_name.' Department';?></h4>
                </div>
                </div> 
                <div class='stick-photo'>
                    <span>Stick Recent Passport Size photo<span>
                </div>           
                <table style='width:80%'>
                                <tbody>
                                    <tr>
                                        <td style='width:350px;'>
                                            <h5 class='text-left'></h5>
                                        </td>
                                        <td><h5>:</h5></td>
                                        <td style='width:300px;'>
                                            <h5></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class='text-left'>1. Full Name (in Block Letters)</h5>
                                        </td>
                                        <td><h5>:</h5></td>
                                        <td>
                                            <h5><?php echo $value->first_name." ".$value->last_name;?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <h5 class='text-left'>2. Age & D.O.B</h5>
                                        </td>
                                        <td><h5>:</h5></td>
                                        <td >
                                            <h5><?php echo $value->dob;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <h5 class='text-left'>3. Gender</h5>
                                        </td>
                                        <td ><h5>:</h5></td>
                                        <td >
                                            <h5><?php echo $value->gender;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <h5 class='text-left'>4. Father's / Husband Name</h5>
                                        </td>
                                        <td ><h5>:</h5></td>
                                        <td style='width:30%; text-align:left;'>
                                            <h5><?php echo $value->father_name;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <h5 class='text-left'>5. Father's / Husband Occupation</h5>
                                        </td>
                                        <td ><h5>:</h5></td>
                                        <td >
                                            <h5 class='text-left'><?php echo $value->father_occupation;?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <h5 class='text-left'>6. Married / Unmarried</h5>
                                        </td>
                                        <td ><h5>:</h5></td>
                                        <td >
                                            <h5 class='text-left'><?php echo $value->married_status;?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <h5 class='text-left'>7. Nationality</h5>
                                        </td>
                                        <td ><h5>:</h5></td>
                                        <td >
                                            <h5 class='text-left'><?php echo $value->nationality;?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <h5 class='text-left'>8. Religion</h5>
                                        </td>
                                        <td ><h5>:</h5></td>
                                        <td >
                                            <h5 class='text-left'><?php echo $value->religion;?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <h5 class='text-left'>9. Community</h5>
                                        </td>
                                        <td ><h5>:</h5></td>
                                        <td >
                                            <h5 class='text-left'><?php echo $value->community;?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <h5 class='text-left'>10. Caste</h5>
                                        </td>
                                        <td ><h5>:</h5></td>
                                        <td >
                                            <h5 class='text-left'><?php echo $value->caste;?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <h5 class='text-left'>11. Mother Tonque</h5>
                                        </td>
                                        <td ><h5>:</h5></td>
                                        <td >
                                            <h5 class='text-left'><?php echo $value->mother_tongue;?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <h5 class='text-left'>12. Name of the Native Place</h5>
                                        </td>
                                        <td ><h5>:</h5></td>
                                        <td >
                                            <h5 class='text-left'><?php echo $value->native_place;?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <h5 class='text-left'>13. Email</h5>
                                        </td>
                                        <td ><h5>:</h5></td>
                                        <td >
                                            <h5 class='text-left'><?php echo $value->email_id;?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <h5 class='text-left'>14. Mobile</h5>
                                        </td>
                                        <td ><h5>:</h5></td>
                                        <td >
                                            <h5 class='text-left'><?php echo $value->phone_no;?></h5>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>

                            <div class='row' style='margin-top:2vh;'>
                                <div class=''>
                                    <h5 class='text-left'><u>15. Education Details</u></h5>
                                </div>
                            </div>

                            <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Degree</th>
                                                    <th>Spcialization</th>
                                                    <th>College/University/Board</th>
                                                    <th>Mode of Study (Regular/Correspondence)</th>
                                                    <th>Affiliated University</th>
                                                    <th>Year of Passing</th>
                                                    <th>Percentage</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                        $exp_no = 1;
                                                        $this->db->where('personal_id', $personal_id);                                                                                    
                                                        $education = $this->db->get(EDUCATION)->result_array();                                                                                
                                                         //echo $value->personal_id;                              
                                                        foreach ($education as $key => $edu) { ?>
                                                <tr>
                                                    <td><?php echo $exp_no++; ?></td>
                                                    <td><?php echo $edu['degree']; ?></td>
                                                    <td><?php echo $edu['specialization']; ?></td>
                                                    <td><?php echo $edu['college']; ?></td>
                                                    <td><?php echo $edu['mos']; ?></td>
                                                    <td><?php echo $edu['aff_university']; ?></td>
                                                    <td><?php echo $edu['yop']; ?></td>
                                                    <td><?php echo $edu['percentage']; ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>

                                        <div class='row' style='margin-top:2vh;'>
                                            <div class='col-lg-6'>
                                                <h5 class='text-left'><u>16. Communication Details</u></h5>
                                            </div>
                                        </div>
                                        <?php                                                                        
                                            $this->db->where('personal_id', $personal_id);                                                                                    
                                            $communication = $this->db->get(COMMUNICATION)->result_array();                                                                                                                  
                                           foreach ($communication as $key => $com) { ?>
                                            <div class='row'>
                                                <div class="col-address">
                                                <h5 class='text-left'><u><?php echo $com['type_of_address'].' Address'; ?></u></h5>  
                                                </div>                                                
                                            </div> 
                                           <?php }?>
                                            </div>                 

                    
                    
                    
                            

               
                                <div class='t-row'>
                                    
                                </div>
                                
                            
                            <div class='row' style='margin-top:2vh;'>
                                <div class='col-lg-6'>
                                    <h5 class='text-left'><u>15. Education Details</u></h5>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-lg-12'>
                                    <div class="table-responsive1">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Degree</th>
                                                    <th>Spcialization</th>
                                                    <th>College/University/Board</th>
                                                    <th>Mode of Study (Regular/Correspondence)</th>
                                                    <th>Affiliated University</th>
                                                    <th>Year of Passing</th>
                                                    <th>Percentage</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                        $exp_no = 1;
                                                        $this->db->where('personal_id', $personal_id);                                                                                    
                                                        $education = $this->db->get(EDUCATION)->result_array();                                                                                
                                                         //echo $value->personal_id;                              
                                                        foreach ($education as $key => $edu) { ?>
                                                <tr>
                                                    <td><?php echo $exp_no++; ?></td>
                                                    <td><?php echo $edu['degree']; ?></td>
                                                    <td><?php echo $edu['specialization']; ?></td>
                                                    <td><?php echo $edu['college']; ?></td>
                                                    <td><?php echo $edu['mos']; ?></td>
                                                    <td><?php echo $edu['aff_university']; ?></td>
                                                    <td><?php echo $edu['yop']; ?></td>
                                                    <td><?php echo $edu['percentage']; ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class='row' style='margin-top:2vh;'>
                                <div class='col-lg-6'>
                                    <h5 class='text-left'><u>16. Communication Details</u></h5>
                                </div>
                            </div>
                            <div class='row'>
                                <?php                                                                        
                                            $this->db->where('personal_id', $personal_id);                                                                                    
                                            $communication = $this->db->get(COMMUNICATION)->result_array();                                                                                                                  
                                        ?>
                                <div class='col-lg-12'>
                                    <?php foreach ($communication as $key => $com) { //echo count($key->type_of_address); ?>
                                    <div class='col-sm-6 col-md-6 col-lg-6'>
                                        <div id='t-body'>
                                            <div class='t-row'>
                                                <div class='t-cell'>
                                                    <u><?php echo $com['type_of_address'].' Address'; ?></u>
                                                </div>
                                            </div>
                                            <div class='t-row'>
                                                <div class='t-cell'>
                                                    <h5 class='text-left'>Alternate Mobile</h5>
                                                </div>
                                                <div class='t-cell'>
                                                    <h5>:</h5>
                                                </div>
                                                <div class='t-cell'>
                                                    <h5><?php echo $com['phone_no']; ?></h5>
                                                </div>
                                            </div>
                                            <div class='t-row'>
                                                <div class='t-cell'>
                                                    <h5 class='text-left'>Street/Landmark</h5>
                                                </div>
                                                <div class='t-cell'>
                                                    <h5>:</h5>
                                                </div>
                                                <div class='t-cell'>
                                                    <h5><?php echo $com['street_address']; ?></h5>
                                                </div>
                                            </div>
                                            <div class='t-row'>
                                                <div class='t-cell'>
                                                    <h5 class='text-left'>City</h5>
                                                </div>
                                                <div class='t-cell'>
                                                    <h5>:</h5>
                                                </div>
                                                <div class='t-cell'>
                                                    <h5><?php echo $com['city']; ?></h5>
                                                </div>
                                            </div>
                                            <div class='t-row'>
                                                <div class='t-cell'>
                                                    <h5 class='text-left'>State</h5>
                                                </div>
                                                <div class='t-cell'>
                                                    <h5>:</h5>
                                                </div>
                                                <div class='t-cell'>
                                                    <h5><?php echo $com['state']; ?></h5>
                                                </div>
                                            </div>
                                            <div class='t-row'>
                                                <div class='t-cell'>
                                                    <h5 class='text-left'>Country</h5>
                                                </div>
                                                <div class='t-cell'>
                                                    <h5>:</h5>
                                                </div>
                                                <div class='t-cell'>
                                                    <h5><?php echo $com['country']; ?></h5>
                                                </div>
                                            </div>
                                            <div class='t-row'>
                                                <div class='t-cell'>
                                                    <h5 class='text-left'>Pin No</h5>
                                                </div>
                                                <div class='t-cell'>
                                                    <h5>:</h5>
                                                </div>
                                                <div class='t-cell'>
                                                    <h5><?php echo $com['pin_no']; ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                            <p style="page-break-before: always">
                                <div class='row'>
                                    <div class='col-lg-6'>
                                        <h5 class='text-left'>17. Experience Details</h5>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-lg-12'>
                                        <div class="table-responsive1">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>College Name</th>
                                                        <th>Affiliated University</th>
                                                        <th>Designation</th>
                                                        <th>Date of Joined</th>
                                                        <th>Data of Leaving</th>
                                                        <th>Total Experience</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                            $exp_no = 1;
                                                            $this->db->where('personal_id', $personal_id);                                                                                    
                                                            $education = $this->db->get(EXPERIENCE)->result_array();                                                                                
                                                            //echo $value->personal_id;                              
                                                            foreach ($education as $key => $exp) { ?>
                                                    <tr>
                                                        <td><?php echo $exp_no++; ?></td>
                                                        <td><?php echo $exp['exp_college']; ?></td>
                                                        <td><?php echo $exp['university']; ?></td>
                                                        <td><?php echo $exp['designation']; ?></td>
                                                        <td><?php echo $exp['doj']; ?></td>
                                                        <td><?php echo $exp['dol']; ?></td>
                                                        <td><?php echo $exp['doe']; ?></td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div style='margin-top:2vh;'>
                                    <?php 
                                            $this->db->where('personal_id', $personal_id);                                                                                                                                         
                                            $achievement = $this->db->get(ACHIEVEMENT)->result();                                                                                                                                
                                            foreach($achievement as $achive){ ?>
                                    <div id='t-body'>
                                        <div class='t-row'>
                                            <div class='t-cell-0'>
                                                <h5 class='text-left'>18. Whether SET/NET passed</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5>:</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5><?php echo $achive->set_net; ?></h5>
                                            </div>
                                        </div>
                                        <div class='t-row'>
                                            <div class='t-cell-0'>
                                                <h5 class='text-left'>19. No. of Articles published in National
                                                    Journals
                                                </h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5>:</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5><?php echo $achive->nat_journals; ?></h5>
                                            </div>
                                        </div>
                                        <div class='t-row'>
                                            <div class='t-cell-0'>
                                                <h5 class='text-left'>20. No. of Articles published in
                                                    International
                                                    Journals</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5>:</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5><?php echo $achive->int_journals; ?></h5>
                                            </div>
                                        </div>
                                        <div class='t-row'>
                                            <div class='t-cell-0'>
                                                <h5 class='text-left'>21. No. of Confrences / Seminner
                                                    Presentation</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5>:</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5><?php echo $achive->sem_journals; ?></h5>
                                            </div>
                                        </div>
                                        <div class='t-row'>
                                            <div class='t-cell-0'>
                                                <h5 class='text-left'>22. No. of Books / Chapter - Published
                                                </h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5>:</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5><?php echo $achive->published_book; ?></h5>
                                            </div>
                                        </div>
                                        <div class='t-row'>
                                            <div class='t-cell-0'>
                                                <h5 class='text-left'>23. Known Languages - specify</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5>:</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5><?php echo $achive->known_languages; ?></h5>
                                            </div>
                                        </div>
                                        <div class='t-row'>
                                            <div class='t-cell-0'>
                                                <h5 class='text-left'>24. Proficiency in English</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5>:</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5><?php echo $achive->eng_read.'/'.$achive->eng_speak.'/'.$achive->eng_write; ?>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class='t-row'>
                                            <div class='t-cell-0'>
                                                <h5 class='text-left'>25. Typing Lower / Higher in Tamil</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5>:</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5><?php echo $achive->typing_tamil; ?></h5>
                                            </div>
                                        </div>
                                        <div class='t-row'>
                                            <div class='t-cell-0'>
                                                <h5 class='text-left'>26. Typing Lower / Higher in English</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5>:</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5><?php echo $achive->typing_english; ?></h5>
                                            </div>
                                        </div>
                                        <div class='t-row'>
                                            <div class='t-cell-0'>
                                                <h5 class='text-left'>27. Computer Knowledge</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5>:</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5><?php echo $achive->comp_knowledge; ?></h5>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php 
                                                $this->db->where('personal_id',$personal_id);
                                                $joining = $this->db->get(JOINING)->result();
                                                //print_r($joining); 
                                                foreach($joining as $joining){ ?>
                                        <div class='t-row'>
                                            <div class='t-cell-0'>
                                                <h5 class='text-left'>28. If selected your date of joining</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5>:</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5><?php echo $joining->date_of_joining; ?></h5>
                                            </div>
                                        </div>
                                        <div class='t-row'>
                                            <div class='t-cell-0'>
                                                <h5 class='text-left'>29. Salary</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <h5>:</h5>
                                            </div>
                                            <div class='t-cell-0'>
                                                <ul class='t-row'>
                                                    <li class='li-cell'>Last Drawn Salary</li>
                                                    <li class='li-cell'>Expected Salary</li>
                                                </ul>
                                                <ul class='t-row'>
                                                    <li class='li-cell'>
                                                        <?php echo 'Rs. '.$joining->current_salary; ?></li>
                                                    <li class='li-cell'>
                                                        <?php echo 'Rs. '.$joining->expected_salary; ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class='t-body'>
                                        <div class='t-row'>
                                            <div class='t-cell-1'>
                                                <h5 class='text-left'>Date :</h5>
                                            </div>
                                            <div class='t-cell-1'>
                                                <h5 class='text-left'></h5>
                                            </div>
                                        </div>
                                        <div class='t-row'>
                                            <div class='t-cell-1'>
                                                <h5 class='text-left'>Place :</h5>
                                            </div>
                                            <div class='t-cell-1'>
                                                <h5 class='text-left'></h5>
                                            </div>
                                        </div>
                                        <div class='signature'>
                                            <h4 class='text-center'>Name & Signature of the Candidate</h4>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                        </div>
                    </div>
                    <div style='margin-top:20px;'>
                        <hr />
                        <div>
                            <h5 style='text-align:center;'>For Office Use Only</h5>
                        </div>
                        <table>
                            <tbody>
                                <tr style='border:2px solid #000;'>
                                    <td><span style='padding:10px; height:50px;'>Present Salary</span> </td>
                                </tr>
                                <tr style='border:2px solid #000;'>
                                    <td><span style='padding:10px; height:50px;'></span></td>
                                </tr>
                                <tr align='center'>
                                    <span
                                        style='padding:10px; font-size:16px; font-weight:600; height:50px; text-align:center'>Selected
                                        / Not Selected</span>
                                </tr>
                            </tbody>
                        </table>
                        <div style='float:right;'>
                            <h5 style='text-align:right;'>CHAIRMAN</h5>
                            <h5 style='text-align:right;'>MAHENDRA EDUCATIONAL TRUST</h5>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"
                        onclick='printProfile("<?php echo $value->personal_id; ?>")'><i class='fa fa-print'></i>
                        Pdf</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>
