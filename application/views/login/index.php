<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    
    <title>Halaman Login admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('asset/css/lib/bootstrap/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('asset/css/helper.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/style.css')?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>Login Admin</h4>
                                <form method="post" action="<?php echo base_url('login/ceklogin')?>">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                  
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="<?php echo base_url().'asset/js/lib/jquery/jquery.min.js'?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url().'asset/js/lib/bootstrap/js/popper.min.js'?>"></script>
    <script src="<?php echo base_url().'/assetjs/lib/bootstrap/js/bootstrap.min.js'?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url().'asset/js/jquery.slimscroll.js'?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url().'asset/js/sidebarmenu.js'?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url().'asset/js/lib/sticky-kit-master/dist/sticky-kit.min.js'?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url().'asset/js/custom.min.js'?>"></script>

</body>

</html>