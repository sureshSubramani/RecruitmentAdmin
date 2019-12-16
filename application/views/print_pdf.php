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
        <table style='width:100%'>
			<tbody>
				<tr>
                <td><h4 class='text-left'>Post Appied for Assistant Professor in</h4> </td>
                <td style='width:70px;'><h4>:</h4></td>
                <td style='text-align:left;'><h4><u><?php echo $value->dept_name.' Department';?></u></h4></td>
                </tr>
        </tbody>
        </table>
			
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
					<td>
						<h5>:</h5>
					</td>
					<td style='width:300px;'>
						<h5></h5>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class='text-left'>1. Full Name (in Block Letters)</h5>
					</td>
					<td>
						<h5>:</h5>
					</td>
					<td>
						<h5><?php echo $value->first_name." ".$value->last_name;?></h5>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class='text-left'>2. Age & D.O.B</h5>
					</td>
					<td>
						<h5>:</h5>
					</td>
					<td>
						<h5><?php echo $value->dob;?>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class='text-left'>3. Gender</h5>
					</td>
					<td>
						<h5>:</h5>
					</td>
					<td>
						<h5><?php echo $value->gender;?>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class='text-left'>4. Father's / Husband Name</h5>
					</td>
					<td>
						<h5>:</h5>
					</td>
					<td style='width:30%; text-align:left;'>
						<h5><?php echo $value->father_name;?>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class='text-left'>5. Father's / Husband Occupation</h5>
					</td>
					<td>
						<h5>:</h5>
					</td>
					<td>
						<h5 class='text-left'><?php echo $value->father_occupation;?></h5>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class='text-left'>6. Married / Unmarried</h5>
					</td>
					<td>
						<h5>:</h5>
					</td>
					<td>
						<h5 class='text-left'><?php echo $value->married_status;?></h5>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class='text-left'>7. Nationality</h5>
					</td>
					<td>
						<h5>:</h5>
					</td>
					<td>
						<h5 class='text-left'><?php echo $value->nationality;?></h5>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class='text-left'>8. Religion</h5>
					</td>
					<td>
						<h5>:</h5>
					</td>
					<td>
						<h5 class='text-left'><?php echo $value->religion;?></h5>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class='text-left'>9. Community</h5>
					</td>
					<td>
						<h5>:</h5>
					</td>
					<td>
						<h5 class='text-left'><?php echo $value->community;?></h5>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class='text-left'>10. Caste</h5>
					</td>
					<td>
						<h5>:</h5>
					</td>
					<td>
						<h5 class='text-left'><?php echo $value->caste;?></h5>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class='text-left'>11. Mother Tonque</h5>
					</td>
					<td>
						<h5>:</h5>
					</td>
					<td>
						<h5 class='text-left'><?php echo $value->mother_tongue;?></h5>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class='text-left'>12. Name of the Native Place</h5>
					</td>
					<td>
						<h5>:</h5>
					</td>
					<td>
						<h5 class='text-left'><?php echo $value->native_place;?></h5>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class='text-left'>13. Email</h5>
					</td>
					<td>
						<h5>:</h5>
					</td>
					<td>
						<h5 class='text-left'><?php echo $value->email_id;?></h5>
					</td>
				</tr>
				<tr>
					<td>
						<h5 class='text-left'>14. Mobile</h5>
					</td>
					<td>
						<h5>:</h5>
					</td>
					<td>
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

		<table class="table table-font">
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
        ?>                                    
		<div class='row'>
			<?php foreach ($communication as $key => $com) { ?>
			<div class="col-address">
				<u><?php echo $com['type_of_address'].' Address'; ?></u>
				<table class='table-font'>
					<tbody>
						<tr>
							<td>Alternate Mobile</td>
							<td>:</td>
							<td><?php echo $com['phone_no']; ?></td>
						</tr>
						<tr>
							<td>Street/Landmark</td>
							<td><span>:</td>
							<td><span><?php echo $com['street_address']; ?></td>
						</tr>
						<tr>
							<td>City</td>
							<td><span>:</td>
							<td><span><?php echo $com['city']; ?></td>
						</tr>
						<tr>
							<td>State</td>
							<td><span>:</td>
							<td><span><?php echo $com['state']; ?></td>
						</tr>
						<tr>
							<td>Country</td>
							<td><span>:</td>
							<td><span><?php echo $com['country']; ?></td>
						</tr>
						<tr>
							<td>Pin</td>
							<td><span>:</td>
							<td><span><?php echo $com['pin_no']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php }?>
		</div>
	</div>

	<p style="page-break-before: always">

		<div class='container'>
			<div class='row' style='margin-top:2vh;'>
				<div class='col-lg-6'>
					<h5 class='text-left'>17. Experience Details</h5>
				</div>
			</div>
			<div class='row'>
				<table class="table table-font">
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

			<div>
				<?php 
				$this->db->where('personal_id', $personal_id);                                                                                                                                         
				$achievement = $this->db->get(ACHIEVEMENT)->result();                                                                                                                                
				?>                                           
				<table class='table-font' style='margin-top:30px'>
					<tbody>
						<?php foreach($achievement as $achive){ ?>
						<tr>
							<td>18. Whether SET/NET passed</td>
							<td style='width:50px;'><span>:</td>
							<td><span><?php echo $achive->set_net; ?></td>
						</tr>
						<tr>
							<td>19. No. of Articles published in National Journals</td>
							<td><span>:</td>
							<td><span><?php echo $achive->nat_journals; ?></td>
						</tr>
						<tr>
							<td>20. No. of Articles published in International Journals</td>
							<td><span>:</td>
							<td><span><?php echo $achive->int_journals; ?></td>
						</tr>
						<tr>
							<td>21. No. of Confrences / Seminner Presentation</td>
							<td><span>:</td>
							<td><span><?php echo $achive->sem_journals; ?></td>
						</tr>
						<tr>
							<td>22. No. of Books / Chapter - Published</td>
							<td><span>:</td>
							<td><span><?php echo $achive->published_book; ?></td>
						</tr>
						<tr>
							<td>23. Known Languages - specify</td>
							<td><span>:</td>
							<td><span><?php echo $achive->known_languages; ?></td>
						</tr>
						<tr>
							<td>24. Proficiency in English</td>
							<td><span>:</td>
							<td><span><?php echo $achive->eng_read.'/'.$achive->eng_speak.'/'.$achive->eng_write; ?>
							</td>
						</tr>
						<tr>
							<td>25. Typing Lower / Higher in Tamil</td>
							<td><span>:</td>
							<td><span><?php echo $achive->typing_tamil; ?></td>
						</tr>
						<tr>
							<td>26. Typing Lower / Higher in Engilsh</td>
							<td><span>:</td>
							<td><span><?php echo $achive->typing_english; ?></td>
						</tr>
						<tr>
							<td>27. Computer Knowledge</td>
							<td><span>:</td>
							<td><span><?php echo $achive->comp_knowledge; ?></td>
						</tr>
						<?php } ?>
						<?php  $this->db->where('personal_id',$personal_id);
                            $joining = $this->db->get(JOINING)->result();
                            //print_r($joining); 
                            foreach($joining as $joining){ ?>
						<tr>
							<td>28. If selected your date of joining</td>
							<td style='width:50px'><span>:</td>
							<td><span><?php echo $joining->date_of_joining; ?></td>
						</tr>
						<tr>
							<td>29. Salary</td>
							<td style='width:50px'><span>:</td>
							<td style='width:300px;'>
								<table class='table'>
									<tbody>
										<tr>
											<td><span>Last Drawn Salary</td>
											<td><span>Expected Salary</td>
										</tr>
										<tr>
											<td><?php echo 'Rs. '.$joining->current_salary; ?></td>
											<td><?php echo 'Rs. '.$joining->expected_salary; ?></td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
						<?php } ?>

					</tbody>
				</table>

				<div class='row'>
					<div class="col" style="padding-top:30px;">
						<table class='table-font' style='margin-top:30px'>
							<tbody>
								<tr>
									<td>Date :</td>
								</tr>
								<tr>
									<td>Place :</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col">
						<h4 class='signature'>Name & Signature of the Candidate</h4>
					</div>
				</div>
				
				<hr />
				<div style='text-align:center;'>
					<span style='text-align:center;'>For Office Use Only</span>
                </div>
                <div class='row'>
					<div class="col-office">
						<table class='table table-font table-height' style='margin-top:30px'>
							<tbody>
								<tr>
									<td>Present Salary</td>
								</tr>
								<tr>
									<td style='color:#fff;'>Present Salary</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-office">
						<h4 class='marTop'>Selected / Not Selected</h4>
					</div>
				</div>
				<div class='col-right'>
					<h5 style='text-align:right;'>CHAIRMAN</h5>
					<h5 style='text-align:right;'>MAHENDRA EDUCATIONAL TRUST</h5>
                </div>
                
			</div>
        </div>
        <p style="page-break-before: always">
        <div class='container'>
            <div class="row">
                <div class="column_logo">
                    <img src='assets/build/images/logo.jpg' alt='logo' class='img-fluid' style='width:200px;' />
                </div>
                <div class="column">
                    <h3 class='title'>MAHENDRA ARTS & SCIENCE COLLEGE, KALIPPATTI</h3>
                    <p class="modal-title">(NAAC Accredited with "A" Grade | Autonomous |<br />
                        Recognized under section 2(F) & 12(B) of the UGC Act 1986)</p>
                    <h4 style='margin-top:5px; font-weight:bold'><u>SCORE CARD SHEET</u></h4>
                </div>
            </div>
            <div class="row">
                <div class='divCard'>
				<table class='table' style='margin-bottom:20px;'>
                        <tr>
							<td>Full Name</td><td>:</td><td><?php echo $value->first_name." ".$value->last_name;?></td>			
                            
						</tr>  
						<tr>
							
							<td>Mobile/ E-mail</td><td>:</td><td><?php echo $value->email_id." / ".$value->phone_no;?></td>
                            
						</tr> 
						<tr>
							
                            <td>Department</td><td>:</td><td><?php echo $value->dept_name; ?></td>
                        </tr>               
                    </table>
                    <table class='table scroeCard'>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
			<?php } ?>
        </div>

</body>