<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php echo $title; ?>
    </title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <!-- <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='assets/build/css/recruitment.css' rel='stylesheet'>
    <link href='assets/build/css/float-label.css' rel='stylesheet'>
    <!-- DataTable -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
    <script src='assets/build/js/recruitment.js'></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
    <!-- MultiStep Form -->
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <h1 class='mr-top'><strong>Teaching Staff Recruitment</strong></h1>
            <div class="col-11 col-sm-9 col-md-7 col-lg-10 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <div id="msform">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="user"><strong>Check User</strong></li>
                                    <li id="personal"><strong>Personal Information</strong></li>
                                    <li id="communication"><strong>Communication Information</strong></li>
                                    <li id="education"><strong>Education Information</strong></li>
                                    <li id="experience"><strong>Experience Information</strong></li>
                                    <li id="achivement"><strong>Achievements Information</strong></li>
                                    <li id="joining"><strong>Joining Information</strong></li>
                                    <li id="confirm"><strong>Finish</strong></li>
                                </ul>
                                <!-- fieldsets -->
                                <?php if($this->session->flashdata('captcha')){ ?>
                                    <div class="alert alert-danger alert-dismissible col-lg-3 offset-md-4">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>Error!</strong>
                                        <?php echo $this->session->flashdata('captcha'); ?>
                                    </div>
                                    <?php } ?>
                                        <fieldset>
                                            <form name='checkUser' action='' method='GET'>
                                                <div class="form-card">
                                                    <div class='offset-4'>
                                                        <h2 class="fs-title">Check User</h2>
                                                        <div class="row">
                                                            <div class="col-12">
                                                              <label class="has-float-label  col-md-6">
                                                                <span id='email_verify'></span>
                                                                <input type="email" id='email_id' name="email_id" class='form-control' value='sureshsubramani1986@gmail.com' placeholder="Enter your e-mail" required />
                                                                <span  for="email">Email</span>
                                                              </label>
                                                              <label class="has-float-label  col-md-6">
                                                                <span id='mobile'></span>
                                                                <span id='mobileValid'></span>
                                                                <span id='phone_verify'></span>
                                                                <input type="text" id='phone' name="phone_no" class='form-control' value='8884074278' maxlength='10' placeholder="Enter your mobile no" required/>
                                                                <span class='float-text' for="mobile">Mobile</span>
                                                              </label>            
                                                            </div>                                                           
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class="col-3" for="captcha">Captcha <span class="required">*</span></label>
                                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                                   <div class="g-recaptcha" data-sitekey="6LeYqMQUAAAAAN5ESVDHgxWRzZwT3UsbLlmWfVhc"></div>
                                                                </div> 
                                                            </div>
                                                        </div>
                                                        <span class='col-md-4 error text-right'><span class='error'></span></span>
                                                    </div>
                                                </div>
                                            </form>
                                            <input type="button" name="next" id='checkUser' class="next action-button" value="NEXT" />
                                        </fieldset>
                                        <fieldset>
                                            <form name='personalInfo' class='personalInfo' action='' method='GET'>
                                                <div class="form-card">
                                                    <h2 class="fs-title">Personal Information</h2>
                                                    <div class='row'>
                                                            <input type="hidden" class='col-sm-5 col-md-5' id='personal_id' value="0" name="personal_id" />
                                                            <div class="col-lg-12">
                                                            <label class="has-float-label">                                                           
                                                            <select class='list-dt col-lg-8' id='department' name='department' required>
                                                                <option>---Select---</option>
                                                                <?php foreach($getDepartments as $value){ ?>
                                                                <option value="<?php echo $value->id; ?>"><?php echo $value->dept_name; ?></option>  
                                                                <?php } ?>                                                              
                                                            </select>
                                                            <span class='float-text' for="dept">Post Applied for Assistant Professor in</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">                                                            
                                                            <label class="has-float-label col-sm-5 col-md-5">
                                                              <input type="text" class='form-control' id='first_name' name="first_name" placeholder="First Name" required/>
                                                              <span class='float-text' for="fname">First Name</span>
                                                            </label>
                                                            <label class="has-float-label col-sm-5 col-md-5">
                                                                <input type="text" class='form-control' id='last_name' name="last_name" placeholder="Last Name" required/>
                                                                <span class='float-text' for="lname">Last Name</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <input type="text" class='col-sm-5 col-md-5' id='dob' name="dob" value='' placeholder="DOB" required/>
                                                            <label>Gender*</label>
                                                            <input type="radio" class='col-sm-1 col-md-1' id='gender' name="gender" value='Male' required/> Male
                                                            <input type="radio" class='col-sm-1 col-md-1' id='gender' name="gender" value='Femail' required/> Female
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <input type="text" class='col-sm-5 col-md-5' id='father_name' name="father_name" placeholder="Father/Husband Name" required/>
                                                            <label>Married Status* :</label>
                                                            <input type="radio" class='col-sm-1 col-md-1' id='married_status' name="married_status" value='Married' required/> Married
                                                            <input type="radio" class='col-sm-1 col-md-1' id='married_status' name="married_status" value='Un-Married' required/> Un-Married
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <input type="text" class='col-sm-5 col-md-5' id='father_occupation' name="father_occupation" placeholder="Father/Husband Occupation" required/>
                                                            <label>Nationality*</label>
                                                            <input type="text" class='col-sm-1 col-md-1' id='nationality' name="nationality" value='' required/>
                                                            <!-- <select class="list-dt" class='form-control' id='nationality' name='nationality' required>
                                                <option>Indian</option>
                                                <option value='Indian'>Indian</option>
                                            </select> -->
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <input type="text" class='col-sm-5 col-md-5' name='religion' id='religion' placeholder="Religion" required/>
                                                            <label>Community*</label>
                                                            <select class='list-dt' id='community' name='community' required>
                                                                <option>---Select---</option>
                                                                <option value="OC">OC</option>
                                                                <option value="BC">BC</option>
                                                                <option value="MBC">MBC</option>
                                                                <option value="SC">SC</option>
                                                                <option value="ST">ST</option>
                                                                <option value="PH">PH</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <input type="test" class='col-sm-5 col-md-5' name="caste" id='caste' placeholder="Caste" required/>
                                                            <input type="text" class='col-sm-5 col-md-5' name="mother_tongue" id='mother_tongue' maxlength='10' placeholder="Mother Tonque" required/>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <input type="email" class='col-sm-5 col-md-5' name="email_id" id='personal_email_id' placeholder="Email Id" required/>
                                                            <input type="text" class='col-sm-5 col-md-5' name="phone_no" id='phone_no' maxlength='10' placeholder="Phone" required/>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <input type="text" class='col-sm-5 col-md-5' id='native_place' name="native_place" placeholder="Native Place" required/>
                                                        </div>
                                                    </div>
                                                    <div class="row" style='display:none;'>
                                                        <div class="col-12">
                                                            <label>Status</label>
                                                            <select class="list-dt" class='form-control' id='status' name='status' required>
                                                                <option>---Select---</option>
                                                                <option value='1' selected>Active</option>
                                                                <option value='0'>Deactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- <input type="button" name="previous" class="previous action-button-previous" value="PREVIOUS" />  -->
                                            <input type="submit" name="next" id='personalInfo' class="next action-button" value="NEXT" />

                                        </fieldset>
                                        <fieldset>
                                            <form name='communicationInfo' class='communicationInfo' action='' method='GET' enctype="multipart/form-data">
                                                <div class="form-card">
                                                    <h2 class="fs-title">Communication Information</h2>
                                                    <div class='row'>
                                                        <div class="col-lg-6">
                                                            <h6><u>Present Address:</u></h6>
                                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                                <input type="hidden" class='col-sm-5 col-md-5' id='type_of_address_1' value='1.Present' name="type_of_address[]" />
                                                                <input type="text" class="form-control" name="addr_phone_no[]" id="phone_no_1" maxlength="10" placeholder="Mobile Number">
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                                <input type="text" class="form-control has-feedback-left" id="street_address_1" name="street_address[]" placeholder="Street address">
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                                <select class="form-control" id="city_1" name="city[]">
                                                                    <option>----- Select City -----</option>
                                                                    <option value="Erode">Erode</option>
                                                                    <option value="Salem">Salem</option>
                                                                    <option value="Dharmapuri">Dharmapuri</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                                <select class="form-control" id="state_1" name="state[]">
                                                                    <option>----- Select State -----</option>
                                                                    <option value="Tamilnadu">Tamilnadu</option>
                                                                    <option value="Kerala">Kerala</option>
                                                                    <option value="Karnataka">Karnataka</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                                <select class="form-control" id="country_1" name="country[]">
                                                                    <option>----- Select Country -----</option>
                                                                    <option value="India" selected>India</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 form-group has-feedback">
                                                                <input type="text" class="form-control" id="pin_no_1" name="pin_no[]" maxlength="6" placeholder="Pin Code">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <label>Same present address as permanent address?*</label>
                                                                    <span class='error'></span>
                                                                    <input type="checkbox" class='col-1 form-control' id="copy_address">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <h6><u>Permanent Address:</u></h6>
                                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                                <input type="hidden" class='col-sm-5 col-md-5' id='type_of_address_2' value='2.Permanent' name="type_of_address[]" />
                                                                <input type="text" class="form-control" id="phone_no_2" name="addr_phone_no[]" maxlength="10" placeholder="Alternate Mobile Number">
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                                <input type="text" class="form-control has-feedback-left" id="street_address_2" name="street_address[]" placeholder="Street address">
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                                <select class="form-control" id='city_2' name="city[]">
                                                                    <option>----- Select City -----</option>
                                                                    <option value="Erode">Erode</option>
                                                                    <option value="Salem">Salem</option>
                                                                    <option value="Dharmapuri">Dharmapuri</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                                <select class="form-control" id='state_2' name="state[]">
                                                                    <option>----- Select State -----</option>
                                                                    <option value="Tamilnadu">Tamilnadu</option>
                                                                    <option value="Kerala">Kerala</option>
                                                                    <option value="Karnataka">Karnataka</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 form-group has-feedback">
                                                                <select class="form-control" id='country_2' name="country[]">
                                                                    <option>----- Select Country -----</option>
                                                                    <option value="India" selected>India</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 form-group has-feedback">
                                                                <input type="text" class="form-control" id="pin_no_2" name="pin_no[]" maxlength="6" placeholder="Pin Code">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- <input type="button" name="previous" class="previous action-button-previous" value="PREVIOUS" />  -->
                                            <input type="button" name="next" id='communicationInfo' class="next action-button" value="NEXT" />
                                        </fieldset>
                                        <fieldset>
                                            <form name='educationInfo' class='educationInfo' action='' method='GET' enctype="multipart/form-data">
                                                <div class="form-card">
                                                  <h2 class="fs-title">Education Information</h2>
                                                    <div class='row'>
                                                        <div class="col-lg-12">
                                                            <table class="table table-bordered table-striped" id="add_row1">
                                                                <thead>
                                                                    <th>S.No</th>
                                                                    <th>Degree</th>
                                                                    <th>Subject</th>
                                                                    <th>College/University/Board</th>
                                                                    <th>Mode of Study (Regular/Correspondence)</th>
                                                                    <th>Affiliated University</th>
                                                                    <th>Year of Joining</th>
                                                                    <th>Year of Passing</th>
                                                                    <th> % </th>
                                                                    <thead>
                                                                    <form class="form-inline" role="form" id="educationFrm" action="" method="POST">
                                                                        <tbody id='edu_fields'>                                                                            
                                                                                <tr>
                                                                                    <td><span>1</span></td>
                                                                                    <td>
                                                                                        <input type="text" name="degree[]" id="degree" class="form-control" placeholder="Enter Degree">
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="subject[]" id="subject" class="form-control" placeholder="Enter Specialization" />
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="college[]" id="college" class="form-control" placeholder="Enter College/University" />
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="mos[]" id='mos' class="form-control" placeholder="Enter Mode of Study" />
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="aff_university[]" id="aff_university" class="form-control" placeholder="Affiliated University" />
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="yoj[]" id="yoj" class="form-control" placeholder="YYY-MM-DD" />
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="yop[]" id="yop" class="form-control" placeholder="YYY-MM-DD" />
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="percentage[]" id="percentage" class="form-control" placeholder=" % " style="width:50px;" />
                                                                                    </td>
                                                                                </tr>
                                                                             </tbody>                                                                             
                                                                         </table>
                                                                         </form>                                                                    
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </form>
                                            <div class='text-center add-row'>
                                                <button class="btn btn-sm btn-info float-right" type="" onclick="edu_fields();">Add Row</button>
                                            </div>
                                            <!-- <input type="button" name="previous" class="previous action-button-previous" value="PREVIOUS" />  -->
                                            <input type="button" name="next" id='educationInfo' class="next action-button" value="NEXT" />
                                        </fieldset>
                                        <fieldset>
                                            <form name='experienceInfo' class='experienceInfo' action='' method='GET' enctype="multipart/form-data">
                                                <div class="form-card">
                                                    <h2 class="fs-title">Experience Information</h2>
                                                    <div class='row'>
                                                        <div class="col-lg-12">
                                                            <table class="table table-bordered table-striped">
                                                                <thead>
                                                                    <th>S.No</th>
                                                                    <th>Exp. College</th>
                                                                    <th>Affiliated University</th>
                                                                    <th>Designation</th>
                                                                    <th>Date of Joining</th>
                                                                    <th>Date of Leaving</th>
                                                                    <th>Total Experience</th>
                                                                    <thead>
                                                                        <form class="form-inline" role="form" id="experienceFrm" action="" method="POST">
                                                                            <tbody id='exp_fields'>
                                                                                <tr>
                                                                                    <td>1.</td>
                                                                                    <td>
                                                                                        <input type="text" name="exp_college[]" class="form-control" id="exp_college" placeholder="Enter College">
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="university[]" id="university" class="form-control" placeholder="Enter University" />
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="designation[]" id="designation" class="form-control" placeholder="Enter Designation" />
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="doj[]" id='doj' class="form-control" placeholder="YYYY/MM/DD" />
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="dol[]" id="dol" class="form-control" placeholder="YYYY/MM/DD" />
                                                                                    </td>
                                                                                    <td>
                                                                                        <input type="text" name="doe[]" id="doe" class="form-control" placeholder="YYYY/MM/DD" />
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>                                                                       
                                                                        </table>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                <div class='text-center add-row'>
                                                    <button class="btn btn-sm btn-info float-right" type="" onclick="exp_fields();">Add Row</button>
                                                </div>
                                            <!-- <input type="button" name="previous" class="previous action-button-previous" value="PREVIOUS" /> -->
                                            <input type="button" name="next" id='experienceInfo' class="next action-button" value="NEXT" />
                                        </fieldset>
                                         <fieldset>
                                         <form name='achievementInfo' class='achievementInfo' action='' method='GET'>
                                            <div class="form-card">
                                                <h2 class="fs-title">Achievements Information</h2>
                                                <div class='row'>
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class='col-2'>Whether SET/NET passed?</label>
                                                                <input type="radio" class='col-sm-1 col-md-1 set_net' id='set_net' name="set_net[]" value='Yes' required/> Yes
                                                                <input type="radio" class='col-sm-1 col-md-1 set_net' id='set_net' name="set_net[]" value='No' required/> No                                                                
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class="col-3">No. of Articles published in National Journals :</label>
                                                                <select class="list-dt nat_journals" id='nat_journals' name='nat_journals[]'>
                                                                    <option>----- Select -----</option>
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class="col-3">No. of Articles published in International Journals :</label>
                                                                <select class="list-dt int_journals" id='int_journals' name='int_journals[]'>
                                                                    <option>----- Select -----</option>
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class="col-3">No. of Confrences / Seminner Presentation :</label>
                                                                <select class="list-dt sem_journals" id='sem_journals' name='sem_journals[]'>
                                                                    <option>----- Select -----</option>
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class="col-3">No. of Books / Chapter - Published :</label>
                                                                <select class="list-dt published_book" id='published_book' name='published_book[]'>
                                                                    <option>----- Select -----</option>
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class="col-2">Known Languages - specify :</label>
                                                                <input type="text" class="col-2 known_lan" id="known_languages" name='known_languages[]' placeholder="Eg:- Tamil, English">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class="col-2">Proficiency in English :</label>
                                                                <input type="checkbox" value="Read" id="eng_read" name="eng_read[]" class='col-1 eng_read'> Read
                                                                <input type="checkbox" value="Speak" id="eng_speak" name="eng_speak[]" class='col-1 eng_speak'> Speak
                                                                <input type="checkbox" value="Write" id="eng_write" name="eng_write[]" class='col-1 eng_write'> Write
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class="col-3">Typing Lower / Higher in Tamil :</label>
                                                                <select class="list-dt typing_tamil" id='typing_tamil' name='typing_tamil[]'>
                                                                    <option>----- Select -----</option>
                                                                    <option value="Lower">Lower</option>
                                                                    <option value="Higher">Higher</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class="col-3">Typing Lower / Higher in English :</label>
                                                                <select class="list-dt typing_english" id='typing_english' name='typing_english[]'>
                                                                    <option>----- Select -----</option>
                                                                    <option value="Lower">Lower</option>
                                                                    <option value="Higher">Higher</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class="col-2">Computer Knowledge :</label>
                                                                <input type="radio" class='col-sm-1 col-md-1 comp_knowledge' id='comp_knowledge' name="comp_knowledge[]" value='Yes' required/> Yes
                                                                <input type="radio" class='col-sm-1 col-md-1 comp_knowledge' id='comp_knowledge' name="comp_knowledge[]" value='No' required/> No                                                                                                                                 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                            <!-- <input type="button" name="previous" class="previous action-button-previous" value="PREVIOUS" /> -->
                                            <input type="button" name="next" id='achievementInfo' class="next action-button" value="NEXT" />
                                        </fieldset>
                                        <fieldset>
                                        <form name='joiningInfo' class='joiningInfo' action='' method='GET'>
                                            <div class="form-card">
                                                <h2 class="fs-title">Joining Infromation</h2>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label class="col-2">Date of Joining :</label>
                                                        <input type="text" class="col-2" id="date_of_joining" name='date_of_joining[]' placeholder="eg:- 15 Days">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label class="col-2">Current Salary in Month :</label>
                                                        <input type="text" class="col-2" id="current_salary" name='current_salary[]' placeholder="Enter current salary">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label class="col-2">Expected Salary in Month :</label>
                                                        <input type="text" class="col-2" id="expected_salary" name='expected_salary[]' placeholder="Enter expected salary">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                            <!-- <input type="button" name="previous" class="previous action-button-previous" value="PREVIOUS" /> -->
                                            <input type="button" name="next" id='joiningInfo' class="next action-button" value="NEXT" />
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card">
                                                <h2 class="fs-title text-center">Success !</h2>
                                                <br>
                                                <br>
                                                <div class="row justify-content-center">
                                                    <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="row justify-content-center">
                                                    <div class="col-7 text-center">
                                                        <h5>You Have Successfully registered with us..</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#email_id").keyup(function() {
            var email_id = $("#email_id").val();
            //var phone = $("#phone").val();
            if ($("#email_id").val().length >= 4 && $("#phone").val().length == 10 ) {
                $.ajax({
                    type: "POST",
                    url: "recruitment/check_exist",
                    data: {
                        "email_id": email_id
                    },
                    success: function(res) {
                        // console.log(res);
                        if (res == "0") {
                            $("#email_verify").text("");
                        } else {                            
                            $("#email_verify").text("Already user taken, Please enter phone number then click next.");
                        }
                    }
                });
            } else {
                $("#email_verify").text(""); /*css({ "background-image" "none" })*/
            }
        });

        $("#phone").keyup(function() {
            if ($("#phone").val().length >= 1) {
                if (validatePhone('txtphone')) {
                    if ($("#phone").val().length < 10 || $("#phone").val().length > 10) {
                        $("#mobile").text("Enter a 10 digit number");
                        $("#mobileValid").text("");
                    } else {
                        $("#mobileValid").text("Valid");
                        $("#mobile").text("");
                    }
                } else {
                    $("#mobile").text("Enter the digits");
                    $("#mobileValid").text("");
                }
            } else {
                $("#mobile").text("");
                $("#mobileValid").text("");
            }

            function validatePhone(txtPhone) {
                var filter = /^[0-9-+]+$/;
                if (filter.test($("#phone").val())) {
                    return true;
                } else {
                    return false;
                }
            }
        });

        var eduId = 1;

        function edu_fields() {
            eduId++;
            var objTo = document.getElementById('edu_fields')
            var tableRow = document.createElement("tr");
            tableRow.setAttribute("class", "removeClassEdu_" + eduId);
            var rdiv = 'removeClassEdu_' + eduId;
            tableRow.innerHTML = '<td>' + eduId + '</td>' +
                '<td><input type="text" name="degree[]" class="form-control" id="degree" placeholder="Enter College"></td>' +
                '<td><input type="text" name="subject[]" id="subject" class="form-control" placeholder="Enter Subject"/></td>' +
                '<td><input type="text" name="college[]" id="designation" class="form-control" placeholder="Enetr College/University" /></td>' +
                '<td><input type="text" name="mos[]" id="mos" class="form-control" placeholder="Mode of Stydy"/></td>' +
                '<td><input type="text" name="aff_university[]" id="aff_university" class="form-control" placeholder="Mode of Stydy"/></td>' +
                '<td><input type="text" name="yoj[]" id="yoj" class="form-control" placeholder="YYYY-MM-DD"/></td>' +
                '<td><input type="text" name="yop[]" id="yop" class="form-control" placeholder="YYYY-MM-DD"/></td>' +                
                '<td><input type="text" name="percentage[]" id="percentage" class="form-control" placeholder="%" style="width:50px;"/></td>' +
                '<td><button class="btn btn-sm btn-danger" type="button" onclick="remove_edu_fields(' + eduId + ');"> <span class="fa fa-trash" aria-hidden="true"></span> </button></td>';

            objTo.appendChild(tableRow)
        }

        function remove_edu_fields(eduId) {
            $('.removeClassEdu_' + eduId).remove();
        }

        var expId = 1;

        function exp_fields() {
            expId++;
            var objTo = document.getElementById('exp_fields')
            var tableRow = document.createElement("tr");
            tableRow.setAttribute("class", "removeClassExp_" + expId);
            var rdiv = 'removeClassExp_' + expId;
            tableRow.innerHTML = '<td>' + expId + '</td>' +
                '<td><input type="text" name="exp_college[]" class="form-control" id="exp_college" placeholder="Enter College"></td>' +
                '<td><input type="text" name="university[]" id="university" class="form-control" placeholder="Enter University"/></td>' +
                '<td><input type="text" name="designation[]" id="designation" class="form-control" placeholder="Enter Designation" /></td>' +
                '<td><input type="text" name="doj[]" id="doj" class="form-control" placeholder="YYYY/MM/DD"/></td>' +
                '<td><input type="text" name="dol[]" id="dol" class="form-control" placeholder="YYYY/MM/DD"/></td>' +
                '<td><input type="text"name="doe[]" id="doe" class="form-control" placeholder="YYYY/MM/DD"/></td>' +
                '<td><button class="btn btn-sm btn-danger" type="button" onclick="remove_exp_fields(' + expId + ');"> <span class="fa fa-trash" aria-hidden="true"></span> </button></td>';

            objTo.appendChild(tableRow)
        }

        function remove_exp_fields(rid) {
            $('.removeClassExp_' + rid).remove();
        }

        //add rows
        /*$("#insert-more_1").click(function () {
     $("#add_row1").each(function () {
         var tds = '<tr class="txtMult1">';
         jQuery.each($('tr:last td', this), function () {
             tds += '<td>' + $(this).html() + '</td>';
         });
         tds += '</tr>';
         if ($('tbody', this).length > 0) {
             $('tbody', this).append(tds);
         } else {
             $(this).append(tds);
         }
     });
});

$("#education_table").on("keyup", ".txtMult input", multInputs); */
</script>

</body>

</html>