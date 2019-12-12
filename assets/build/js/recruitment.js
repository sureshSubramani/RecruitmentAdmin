
// var base_url = window.location.origin;

// if (res == "true") {
//     $("#email_verify").text("");
//     //Add Class Active
//     $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
//     //show the next fieldset
//     next_fs.show();
//     //hide the current fieldset with style
//     current_fs.animate({ opacity: 0 }, {
//         step: function (now) {
//         // for making fielset appear animation
//         opacity = 1 - now;

//         current_fs.css({
//             'display': 'none',
//             'position': 'relative'
//         });
//             next_fs.css({ 'opacity': opacity });
//             },
//             duration: 600
//     });
// } else {
//     $("#email_verify").text("Already user taken, Please enter phone number then click next to do update..");
//     $('.error').text("");
//     //show the next fieldset
//     next_fs.show();
// }     

$(document).ready(function () {

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;

    $("#checkUser").click(function () {

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        var captcha = $('.g-recaptcha-response').val();
        var email = $("#email_id").val();
        var phone = $("#phone").val();
        //var base_url = $("#base_url"); 

        if (email == '') {
            $('.error').text("Please fill the email?");
            current_fs.show();
        } else if (phone == '') {
            $('.error').text("Please fill the phone?");
            current_fs.show();
        } else {
            //alert($("#email_id").val()+' '+$("#phone").val().length+' '+base_url);
            if ($("#email_id").val().length >= 4) {
                $.ajax({
                    type: "POST",
                    url: "recruitment/check_user_exist",
                    data: { "email_id": email, "phone_no": phone },
                    success: function (res) {                               

                        //console.log(res);
                        if(captcha){
                        if (res == 0 || res == '0') {
                            $('#personal_id').val(res);

                        } else {

                            var json_personal = JSON.parse(res);
                            //console.log(json_personal);

                            $('#personal_id').val(json_personal['personal_id']);
                            $("#department option[value='" + json_personal['department'] + "']").attr('selected', true);
                            $('#first_name').val(json_personal['first_name']);
                            $('#last_name').val(json_personal['last_name']);
                            $('#dob').val(json_personal['dob']);
                            //console.log("#gender value["+json_personal['gender']+"']");
                            $("input[value=" + json_personal['gender'] + "]").attr('checked', true);
                            $("input[value=" + json_personal['married_status'] + "]").attr('checked', true);
                            $('#email_id').val(json_personal['#email_id']);
                            $('#father_name').val(json_personal['father_name']);
                            $('#father_occupation').val(json_personal['father_occupation']);
                            $("#nationality").val(json_personal['nationality']);
                            //console.log("#cummunity value['"+json_personal['cummunity']+"']");
                            $("select option[value='" + json_personal['community'] + "']").attr('selected', true);
                            $('#religion').val(json_personal['religion']);
                            $('#caste').val(json_personal['caste']);
                            $('#mother_tongue').val(json_personal['mother_tongue']);
                            $('#personal_email_id').val(json_personal['email_id']);
                            $('#phone_no').val(json_personal['phone_no']);
                            $('#native_place').val(json_personal['native_place']);

                        }

                        //Add Class Active
                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                        //show the next fieldset
                        next_fs.show();
                        //hide the current fieldset with style
                        current_fs.animate({ opacity: 0 }, {
                            step: function (now) {
                                // for making fielset appear animation
                                opacity = 1 - now;

                                current_fs.css({
                                    'display': 'none',
                                    'position': 'relative'
                                });
                                next_fs.css({ 'opacity': opacity });
                            },
                            duration: 600
                        });
                    }else{
                        alert("'captcha','You are a robot, Please try again?");
                        current_fs = $(this).parent();
                        next_fs = $(this).parent().next();
                    }

                    }
                });

            } else {

                $("#email_verify").text(""); /*css({ "background-image" "none" })*/
                $('.error').text("");
            }
        }

    });

    $("#personalInfo").click(function (){
    //function insert_personal() {
         
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        var personal_form = $('.personalInfo').serialize();

        $.ajax({
            type: "GET",
            url: "recruitment/personal_insert?" + personal_form,
            //data: form.serialize(), // <--- THIS IS THE CHANGE        
            success: function (data) {
                //console.log(data);
                var JsonData = JSON.parse(data);

                    if (JsonData['personal_id'] == 0 || JsonData['personal_id'] == '0') {
                        $('#personal_id').val(data);
                    } else {
                        //alert(data + " Suresh LS");
                        //console.log(JsonData);                    
    
                        if(!($.isEmptyObject(JsonData['communication'][0]))){                  
                            
                            $('#type_of_address_1').val(JsonData['communication'][0]['type_of_address']);                    
                            $('#phone_no_1').val(JsonData['communication'][0]['phone_no']);
                            $('#street_address_1').val(JsonData['communication'][0]['street_address']);
                            $("select option[value='" + JsonData['communication'][0]['city'] + "']").attr('selected', true);
                            $("select option[value='" + JsonData['communication'][0]['state'] + "']").attr('selected', true);
                            $('#pin_no_1').val(JsonData['communication'][0]['pin_no']);                           
                        }
    
                        if(!($.isEmptyObject(JsonData['communication'][1]))){
                            
                            $('#type_of_address_2').val(JsonData['communication'][1]['type_of_address']);  
                            $('#phone_no_2').val(JsonData['communication'][1]['phone_no']);
                            $('#street_address_2').val(JsonData['communication'][1]['street_address']);
                            $("select option[value='" + JsonData['communication'][1]['city'] + "']").attr('selected', true);
                            $("select option[value='" + JsonData['communication'][1]['state'] + "']").attr('selected', true);
                            $('#pin_no_2').val(JsonData['communication'][1]['pin_no']);                 
                        }
                    }

                    //Add Class Active
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({ opacity: 0 }, {
                        step: function (now) {
                            // for making fielset appear animation
                            opacity = 1 - now;

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            next_fs.css({ 'opacity': opacity });
                        },
                        duration: 600
                    });           
                
            },
            error: function () { alert("Error posting feed."); }
        });
    
        //return false;
    });

    $("#communicationInfo").click(function (){
        //function insert_personal() {
    
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
            var personal_id = $('#personal_id').val();

            var communication_form = $('.communicationInfo').serialize();

            $.ajax({
                type: "GET",
                url: "recruitment/communication_insert?" + communication_form + '&personal_id='+personal_id,
                //data: form.serialize(), // <--- THIS IS THE CHANGE        
                success: function (data) {

                    var JsonData = JSON.parse(data);
        
                    if (JsonData['personal_id'] == 0 || JsonData['personal_id'] == '0') {
                        $('#personal_id').val(data);
                    } else {
                         //console.log(JsonData['education'].length);                        

                        if(!($.isEmptyObject(JsonData['education']))){

                            for(i=0; i<JsonData['education'].length; i++){
                                if(i == 0){
                                $('#degree').val(JsonData['education'][i]['degree']);
                                $('#subject').val(JsonData['education'][i]['specialization']);
                                $('#college').val(JsonData['education'][i]['college']);
                                $('#mos').val(JsonData['education'][i]['mos']);
                                $('#aff_university').val(JsonData['education'][i]['aff_university']);
                                $('#yoj').val(JsonData['education'][i]['yoj']);
                                $('#yop').val(JsonData['education'][i]['yop']);
                                $('#percentage').val(JsonData['education'][i]['percentage']);
                                }else{
                                    var SNo = i + 1;
                                    var row = $("<tr class='removeClassEdu_"+SNo+"'>");
                                    $("#edu_fields").append(row); //this will append tr element to table.
                                    row.append($('<td>' + SNo + '</td>'));
                                    row.append($("<td><input type='text' name='degree[]' class='form-control' id='degree' value='"+ JsonData['education'][i]['degree'] +"' placeholder='Enter Degree'></td>"));
                                    row.append($("<td><input type='text' name='subject[]' class='form-control' id='subject' value='"+ JsonData['education'][i]['specialization'] +"' placeholder='Enter Specialization'></td>"));
                                    row.append($("<td><input type='text' name='college[]' class='form-control' id='college' value='"+ JsonData['education'][i]['college'] +"' placeholder='Enter Subject'></td>"));
                                    row.append($("<td><input type='text' name='mos[]' class='form-control' id='mos' value='"+ JsonData['education'][i]['mos'] +"' placeholder='Enter Mode of Study'></td>"));
                                    row.append($("<td><input type='text' name='aff_university[]' class='form-control' id='aff_university' value='"+ JsonData['education'][i]['aff_university'] +"' placeholder='Enter University'></td>"));
                                    row.append($("<td><input type='text' name='yoj[]' class='form-control' id='yoj' value='"+ JsonData['education'][i]['yoj'] +"' placeholder='YYYY-MM-DD'></td>"));
                                    row.append($("<td><input type='text' name='yop[]' class='form-control' id='yop' value='"+ JsonData['education'][i]['yop'] +"' placeholder='YYYY-MM-DD'></td>"));
                                    row.append($("<td><input type='text' name='percentage[]' class='form-control' id='percentage' value='"+ JsonData['education'][i]['percentage'] +"' placeholder='Enter Percentage'></td>"));
                                    row.append($("<td><button class='btn btn-sm btn-danger' type='button' onclick='remove_edu_fields("+SNo+");'> <span class='fa fa-trash' aria-hidden='true'></span> </button></td>"));
                                    row.append($('</tr>'));
                                }
                            } 
                            
                            eduId = parseInt(JsonData['education'].length);

                        }                       
                    }    
        
                    //Add Class Active
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({ opacity: 0 }, {
                        step: function (now) {
                            // for making fielset appear animation
                            opacity = 1 - now;
        
                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            next_fs.css({ 'opacity': opacity });
                        },
                        duration: 600
                    });
                },
                error: function () { alert("Error posting feed."); }
            });
        
            //return false;
        });

        $("#educationInfo").click(function (){
            //function insert_personal() {
        
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                var personal_id = $('#personal_id').val();
    
                var education_form = $('.educationInfo').serialize();
    
                $.ajax({
                    type: "GET",
                    url: "recruitment/education_insert?" + education_form + '&personal_id='+personal_id,
                    //data: form.serialize(), // <--- THIS IS THE CHANGE        
                    success: function (data) {    
                        //console.log(data);
                        var JsonData = JSON.parse(data);
            
                        if (JsonData['personal_id'] == 0 || JsonData['personal_id'] == '0') {
                            $('#personal_id').val(data);
                        } else {
                            //console.log(JsonData);                   
                            if(!($.isEmptyObject(JsonData['experience']))){                                                    
    
                                for(i=0; i<JsonData['experience'].length; i++){
                                    if(i == 0){
                                    $('#exp_college').val(JsonData['experience'][i]['exp_college']);
                                    $('#university').val(JsonData['experience'][i]['university']);
                                    $('#designation').val(JsonData['experience'][i]['designation']);
                                    $('#doj').val(JsonData['experience'][i]['doj']);
                                    $('#dol').val(JsonData['experience'][i]['dol']);
                                    $('#doe').val(JsonData['experience'][i]['doe']);
                                    }else{
                                        var SNo = i + 1;
                                        var row = $("<tr class='removeClassExp_"+SNo+"'>");
                                        $("#exp_fields").append(row); //this will append tr element to table.
                                        row.append($('<td>' + SNo + '</td>'));
                                        row.append($("<td><input type='text' name='exp_college[]' class='form-control' id='exp_college' value='"+ JsonData['experience'][i]['exp_college'] +"' placeholder='Enter Exp. College'></td>"));
                                        row.append($("<td><input type='text' name='university[]' class='form-control' id='university' value='"+ JsonData['experience'][i]['university'] +"' placeholder='Enter University'></td>"));
                                        row.append($("<td><input type='text' name='designation[]' class='form-control' id='designation' value='"+ JsonData['experience'][i]['designation'] +"' placeholder='Enter Designation'></td>"));
                                        row.append($("<td><input type='text' name='doj[]' class='form-control' id='doj' value='"+ JsonData['experience'][i]['dol'] +"' placeholder='Date of Joining'></td>"));
                                        row.append($("<td><input type='text' name='dol[]' class='form-control' id='dol' value='"+ JsonData['experience'][i]['dol'] +"' placeholder='Date of Leaving'></td>"));
                                        row.append($("<td><input type='text' name='doe[]' class='form-control' id='doe' value='"+ JsonData['experience'][i]['doe'] +"' placeholder='Date of Experience'></td>"));                                        
                                        row.append($("<td><button class='btn btn-sm btn-danger' type='button' onclick='remove_exp_fields("+SNo+");'> <span class='fa fa-trash' aria-hidden='true'></span> </button></td>"));
                                        row.append($('</tr>'));
                                    }
                                } 
          
                                expId = parseInt(JsonData['experience'].length);
                            }                       
                        }    
            
                        //Add Class Active
                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                        //show the next fieldset
                        next_fs.show();
                        //hide the current fieldset with style
                        current_fs.animate({ opacity: 0 }, {
                            step: function (now) {
                                // for making fielset appear animation
                                opacity = 1 - now;
            
                                current_fs.css({
                                    'display': 'none',
                                    'position': 'relative'
                                });
                                next_fs.css({ 'opacity': opacity });
                            },
                            duration: 600
                        });
                    },
                    error: function () { alert("Error posting feed."); }
                });
            
            //return false;
        });
    
        $("#experienceInfo").click(function (){
            //function insert_personal() {
        
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                var personal_id = $('#personal_id').val();
    
                var experienceInfo = $('.experienceInfo').serialize();
    
                $.ajax({
                    type: "GET",
                    url: "recruitment/experience_insert?" + experienceInfo + '&personal_id='+personal_id,
                    //data: form.serialize(), // <--- THIS IS THE CHANGE        
                    success: function (data) {

                        var JsonData = JSON.parse(data);                         
            
                        if (JsonData['personal_id'] == 0 || JsonData['personal_id'] == '0') {
                            $('#personal_id').val(data);
                        } else {                          

                            for(i=0; i<JsonData['achievement'].length; i++){

                                //console.log(JsonData['achievement'][i]['eng_speak']);
                            
                                $(".set_net[value=" + JsonData['achievement'][i]['set_net'] + "]").attr('checked', true);
                                $(".nat_journals option[value='" + JsonData['achievement'][i]['nat_journals'] + "']").attr('selected', true);
                                $(".int_journals option[value='" + JsonData['achievement'][i]['int_journals'] + "']").attr('selected', true);
                                $(".sem_journals option[value='" + JsonData['achievement'][i]['sem_journals'] + "']").attr('selected', true);
                                $(".published_book option[value='" + JsonData['achievement'][i]['published_book'] + "']").attr('selected', true);
                                $('.known_languages').val(JsonData['achievement'][i]['known_languages']);             
                                $(".eng_read[value=" + JsonData['achievement'][i]['eng_read'] + "]").attr('checked', true);
                                $(".eng_speak[value=" + JsonData['achievement'][i]['eng_speak'] + "]").attr('checked', true);
                                $(".eng_write[value=" + JsonData['achievement'][i]['eng_write'] + "]").attr('checked', true);
                                $(".typing_tamil option[value='" + JsonData['achievement'][i]['typing_tamil'] + "']").attr('selected', true); 
                                $(".typing_english option[value='" + JsonData['achievement'][i]['typing_english'] + "']").attr('selected', true);
                                $(".comp_knowledge[value=" + JsonData['achievement'][i]['comp_knowledge'] + "]").attr('checked', true); 

                            }
                        }    
            
                        //Add Class Active
                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                        //show the next fieldset
                        next_fs.show();
                        //hide the current fieldset with style
                        current_fs.animate({ opacity: 0 }, {
                            step: function (now) {
                                // for making fielset appear animation
                                opacity = 1 - now;
            
                                current_fs.css({
                                    'display': 'none',
                                    'position': 'relative'
                                });
                                next_fs.css({ 'opacity': opacity });
                            },
                            duration: 600
                        });
                    },
                    error: function () { alert("Error posting feed."); }
                });
            
            //return false;
        });

        $("#achievementInfo").click(function (){
            //function insert_personal() {
        
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                var personal_id = $('#personal_id').val();
    
                var achievementInfo = $('.achievementInfo').serialize();
    
                $.ajax({
                    type: "GET",
                    url: "recruitment/achievement_insert?" + achievementInfo + '&personal_id='+personal_id,
                    //data: form.serialize(), // <--- THIS IS THE CHANGE        
                    success: function (data) {                      

                        var JsonData = JSON.parse(data);                         
            
                        if (JsonData['personal_id'] == 0 || JsonData['personal_id'] == '0') {
                            $('#personal_id').val(data);
                        } else {
                            for(i=0; i<JsonData['joining'].length; i++){                          
                                $('#date_of_joining').val(JsonData['joining'][i]['date_of_joining']);
                                $('#current_salary').val(JsonData['joining'][i]['current_salary']);             
                                $('#expected_salary').val(JsonData['joining'][i]['expected_salary']); 
                            }       
                        }    
            
                        //Add Class Active
                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                        //show the next fieldset
                        next_fs.show();
                        //hide the current fieldset with style
                        current_fs.animate({ opacity: 0 }, {
                            step: function (now) {
                                // for making fielset appear animation
                                opacity = 1 - now;
            
                                current_fs.css({
                                    'display': 'none',
                                    'position': 'relative'
                                });
                                next_fs.css({ 'opacity': opacity });
                            },
                            duration: 600
                        });
                    },
                    error: function () { alert("Error posting feed."); }
                });
            
            //return false;
        });

        $("#joiningInfo").click(function (){
              //function insert_personal() {
        
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                var personal_id = $('#personal_id').val();
    
                var joiningInfo = $('.joiningInfo').serialize();
    
                $.ajax({
                    type: "GET",
                    url: "recruitment/joining_insert?" + joiningInfo + '&personal_id='+personal_id,
                    //data: form.serialize(), // <--- THIS IS THE CHANGE        
                    success: function (data) {
    
                        console.log("Success..");
                        //var JsonData = JSON.parse(data);               
            
                        //Add Class Active
                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                        //show the next fieldset
                        next_fs.show();
                        //hide the current fieldset with style
                        current_fs.animate({ opacity: 0 }, {
                            step: function (now) {
                                // for making fielset appear animation
                                opacity = 1 - now;
            
                                current_fs.css({
                                    'display': 'none',
                                    'position': 'relative'
                                });
                                next_fs.css({ 'opacity': opacity });
                            },
                            duration: 600
                        });
                    },
                    error: function () { alert("Error posting feed."); }
                });
            
            //return false;
        });

    $(".previous").click(function () {

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({ opacity: 0 }, {
            step: function (now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({ 'opacity': opacity });
            },
            duration: 600
        });
    });

    $('.radio-group .radio').click(function () {
        $(this).parent().find('.radio').removeClass('selected');
        $(this).addClass('selected');
    });

    function setAddress() {
        if ($('#phone_no_1').val() != '') {
            $('.success').html('Sucessfully copied..');
            if ($("#copy_address").is(":checked")) {
                $('#phone_no_2').val($('#phone_no_1').val());
                $('#street_address_2').val($('#street_address_1').val());
                $('#city_2').val($('#city_1').val());
                $('#state_2').val($('#state_1').val());
                $('#pin_no_2').val($('#pin_no_1').val());
                $('#phone_no_2').addClass("focus");
                $('#street_address_2').addClass("focus");
                $('#city_2').addClass("focus");
                $('#state_2').addClass("focus");
                $('#pin_no_2').addClass("focus");
                $('.error').remove();
            } else {
                $('#phone_no_2').removeClass("focus")
                $('#street_address_2').removeClass("focus")
                $('#city_2').removeClass("focus")
                $('#state_2').removeClass("focus")
                $('#pin_no_2').removeClass("focus")
            }
        } else {
            $('.error').html('Please fill the address first..??');
            $("#copy_address").prop("checked", false);
        }
    }

    $('#copy_address').click(function () {
        setAddress();
    });

});

//     //Custom method to validate username
//     $.validator.addMethod("usernameRegex", function(value, element) {
//         return this.optional(element) || /^[a-zA-Z0-9]*$/i.test(value);
//     }, "Username must contain only letters, numbers");

//     $(".next").click(function(){
//         var form = $("#checkUse1");
//         form.validate({
//             errorElement: 'span',
//             errorClass: 'help-block',
//             highlight: function(element, errorClass, validClass) {
//                 $(element).closest('.form-group').addClass("has-error");
//             },
//             unhighlight: function(element, errorClass, validClass) {
//                 $(element).closest('.form-group').removeClass("has-error");
//             },
//             rules: {
//                 email: {
//                     required: true,
//                     minlength: 3,
//                 },

//             },
//             messages: {
//                 email: {
//                     required: "Email required",
//                 },
//             }
//         });
//         if (form.valid() === true){
//             if ($('#user1').is(":visible")){
//                 current_fs = $('#personal');
//                 next_fs = $('#communication');
//             }else if($('#communication').is(":visible")){
//                 current_fs = $('#education');
//                 next_fs = $('#education');
//             }

//             next_fs.show(); 
//             current_fs.css({ 'opacity': opacity });;
//         }
//     });

//     $('#previous').click(function(){
//         if($('#company_information').is(":visible")){
//             current_fs = $('#company_information');
//             next_fs = $('#account_information');
//         }else if ($('#personal_information').is(":visible")){
//             current_fs = $('#personal_information');
//             next_fs = $('#company_information');
//         }
//         next_fs.show(); 
//         current_fs.hide();
//     });
// });


// $(document).ready(function(){

//     // Custom method to validate username
//     $.validator.addMethod("usernameRegex", function(value, element) {
//         return this.optional(element) || /^[a-zA-Z0-9]*$/i.test(value);
//     }, "Username must contain only letters, numbers");
//     $(".next").click(function(){
//         var form = $("#checkUser");
//         form.validate({
//             errorElement: 'span',
//             errorClass: 'help-block',
//             highlight: function(element, errorClass, validClass) {
//                 $(element).closest('.form-group').addClass("has-error");
//             },
//             unhighlight: function(element, errorClass, validClass) {
//                 $(element).closest('.form-group').removeClass("has-error");
//             },
//             rules: {
//                 email: {
//                     required: true,
//                     minlength: 3,
//                 },

//             },
//             messages: {
//                 email: {
//                     required: "Email required",
//                 },
//             }
//         });
//         if (form.valid() === true){
//             if ($('#user').is(":visible")){
//                 current_fs = $('#communication1');
//                 next_fs = $('#company_information');
//             }else if($('#company_information').is(":visible")){
//                 current_fs = $('#company_information');
//                 next_fs = $('#personal_information');
//             }

//             next_fs.show(); 
//             current_fs.hide();
//         }
//     });

//     $('#previous').click(function(){
//         if($('#company_information').is(":visible")){
//             current_fs = $('#company_information');
//             next_fs = $('#account_information');
//         }else if ($('#personal_information').is(":visible")){
//             current_fs = $('#personal_information');
//             next_fs = $('#company_information');
//         }
//         next_fs.show(); 
//         current_fs.hide();
//     });





