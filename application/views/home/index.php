<?php
$this->load->view('config/function');
?>
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

    <title>Halaman Cek Plagiarisme</title>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/lib/html5-editor/bootstrap-wysihtml5.css')?>" />
    <link href="<?php echo base_url('asset/css/lib/chartist/chartist.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/lib/owl.carousel.min.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('asset/css/lib/owl.theme.default.min.css')?>" rel="stylesheet" />
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

    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <!-- End header header -->
        <!-- Left Sidebar  -->

        <div>
            <!-- Bread crumb -->

            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->

                <div class="card card-outline-success">
                    <div class="card-header">
                        <h2 class="m-b-0 text-white text-center">Masukkan Judul dan Abstraksi Skripsi</h2>
                    </div>
                    <div class="card-body">


                        <form action="<?php echo site_url('home/proses')?>" method="post" class="form-horizontal">
                            <div class="form-body">

                                <hr class="m-t-0 m-b-40">


                                <div class="form-group row">
                                    <label class="control-label text-left col-md-2">Judul skripsi</label>
                                    <div class="col-md-10">
                                        <input type="text" name="judul" class="form-control" placeholder="Judul">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label text-left col-md-2">Abstraksi skripsi</label>
                                    <div class="col-md-10">
                                        <textarea name="abstrak" class="textarea_editor form-control" rows="15" placeholder="abstraksi skripsi" style="height:300px"></textarea>
                                    </div>
                                </div>





                            </div>
                            <hr>
                            <?php
                            $digits = 4;
                            $value =  str_pad(rand(0, pow(10, $digits) - 1), $digits, '0', STR_PAD_LEFT);
                            ?>
                            <input type="hidden" name="randomid" value="<?= $value ?>">
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn btn-info">Proses</button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> </div>
                                </div>
                            </div>
                        </form>





                    </div>
                </div>

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->

            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="<?php echo base_url('asset/js/lib/jquery/jquery.min.js')?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('asset/js/lib/bootstrap/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/lib/bootstrap/js/bootstrap.min.js')?>"></script>




    <script src="<?php echo base_url('asset/js/custom.min.js')?>"></script>




    <script src="<?php echo base_url('asset/js/lib/html5-editor/wysihtml5-0.3.0.js')?>"></script>
    <script src="<?php echo base_url('asset/js/lib/html5-editor/bootstrap-wysihtml5.js')?>"></script>
    <script src="<?php echo base_url('asset/js/lib/html5-editor/wysihtml5-init.js')?>"></script>
    <!--Custom JavaScript -->

</body>

</html>