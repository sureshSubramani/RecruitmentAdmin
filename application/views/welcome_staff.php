<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo $title; ?> </title>
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <!-- Bootstrap -->
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
    <link href="assets/build/css/style.css" rel="stylesheet">
</head>
  <!-- page content -->
  <div class="container-fluid">
          <div class="page-title">
              <div class="text_center">
                  <h3>Teaching Staff Recuritment</h3>
              </div>             
          </div>
          <div class="clearfix"></div>
          <div class="row">
              <div class="col-md-12 col-sm-12">
                  <div class="x_panel">
                      <div class="x_title">
                          <h2>Personal Info <small></small></h2>
                          <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                              </li>                             
                              <li><a class="close-link"><i class="fa fa-close"></i></a>
                              </li>
                          </ul>
                          <div class="clearfix"></div>
                      </div>
                      <?php if($this->session->flashdata('added')){ ?>
                        <div class="alert alert-danger alert-dismissible col-lg-3 offset-md-4">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Error!</strong> <?php echo $this->session->flashdata('added'); ?>
                        </div>
                          <?php } ?>
                      <div class="x_content">
                        
                          <form action="" method="post" class="form-horizontal form-label-left offset-md-2" novalidate>                                                            
                              <div class="item form-group">
                                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required">*</span>
                                  </label>
                                  <div class="col-lg-3 col-md-3 col-sm-3">
                                      <input type="email" id="email" name="email" required="required" placeholder='' class="form-control" />
                                  </div>
                              </div>
                              <!-- <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Confirm Email <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="email" id="email2" name="confirm_email" data-validate-linked="email" required="required" class="form-control">
                                </div>
                              </div> -->
                              <div class="item form-group">
                                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="telephone">Mobile <span class="required">*</span></label>
                                  <div class="col-lg-2 col-md-2 col-sm-2">
                                      <input type="tel" id="telephone" name="phone" id='phone' required="required" placeholder='+91' data-validate-length-range="10" class="form-control">
                                  </div>
                              </div>
                              
                              <div class="item form-group" style="display:none;">
                                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="telephone">Status <span class="required">*</span></label>
                                  <div class="col-lg-2 col-md-2 col-sm-2">
                                      <select name='status' id='status'>
                                          <option value='1' selected>Active</option>
                                          <option value='0'>Deactive</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="item form-group">
                                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="captcha">Captcha <span class="required">*</span></label>                                  
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                        <div class="g-recaptcha" data-sitekey="6LeYqMQUAAAAAN5ESVDHgxWRzZwT3UsbLlmWfVhc"></div>
                                    </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-md-6 offset-md-3">                                      
                                      <button id="send" type="submit" class="btn btn-sm btn-primary">Submit</button>
                                      <!-- <button type="submit" class="btn btn-primary">Cancel</button> -->
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
  </div>
  <!-- /page content -->
  <!-- jQuery -->
  <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="assets/vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="assets/build/js/custom.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script>
        $('form').submit(function(e){
            var captcha = $('.g-recaptcha-response').val();
            //alert(captcha);
            var form = $(this);
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('welcome/update_info'); ?>",
                data: form.serialize(), // <--- THIS IS THE CHANGE
                dataType: "html",
                success: function(data){
                    //alert(data);
                    //console.log(data);
                    //$('#feed-container').prepend(data); 
                    if(captcha)
                     window.location = "http://localhost/admin_staff/register_staff";  
                    else
                     window.location = "http://localhost/admin_staff/welcome";                
                },
                error: function() { alert("Error posting feed."); }
            });

        });
        
    </script>
</body>
</html>
    

