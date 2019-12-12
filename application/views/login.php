<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo $title; ?> </title>
    <!-- Bootstrap -->
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="assets/vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/build/css/style.css" rel="stylesheet">
</head>

<body class="login grad center-pos1">
    <div class="login_wrapper">
        <div class="animate form login_form">
            <?php if($this->session->flashdata('msg')){ ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php echo $this->session->flashdata('msg'); ?>
            </div>
            <?php } ?>
            <section class="login_content login-background">
                <form action="<?php echo base_url() ?>admin/auth" method="post"> <!--autocomplete='off' -->
                    <h1>Admin Login</h1>
                    <div>
                        <input type="email" class="form-control" name='email' id='email' placeholder="Email"
                            required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" name='pwd' id='pwd' placeholder="Password"
                            required="" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-md btn-default">Login</button>
                        <a class="reset_pass" href="#">Forget your password?</a>
                    </div>
                    <div class="clearfix"></div>
                    <!-- <div class="separator"></div> -->
                </form>
            </section>
        </div>
    </div>
</body>

</html>