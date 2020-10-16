
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Halaman Admin</title>
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
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')?>"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')?>"></script>
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
            <!-- header header  -->
            <div class="header">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <!-- Logo -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html">
                            <h3>Admin</h3>
                        </a>
                    </div>
                    <!-- End Logo -->
                    <div class="navbar-collapse">
                        <!-- toggle and nav items -->
                        <ul class="navbar-nav mr-auto mt-md-0">
                            <!-- This is  -->
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                            <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                            <!-- Messages -->
                            <!-- End Messages -->
                        </ul>

                        <ul class="navbar-nav my-lg-0">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url('asset/images/users/9.png')?>" alt="user" class="profile-pic" /></a>
                                <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                    <ul class="dropdown-user">
                                        <li><a href="?app=admin"><i class="ti-user"></i> <?php echo $this->session->userdata('username') ?></a></li>

                                        <li><a href="<?php echo site_url('login/logout')?>"><i class="fa fa-power-off"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- End header header -->
            <!-- Left Sidebar  -->
           <?php
           $this->load->view('admin/menu');
           ?>
            <!-- End Left Sidebar  -->
            <!-- Page wrapper  -->
            <div class="page-wrapper">
                <!-- Bread crumb -->

                <!-- End Bread crumb -->
                <!-- Container fluid  -->
                <div class="container-fluid">
                    <!-- Start Page Content -->
        <div class="card">
                            <div class="card-body">
                              <h2 class="text-center">Hasil Uji Cek Plagiarisme</h2>
                                
                                <div class="table-responsive m-t-10">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>no</th>
        <th style="text-align:center">judul skripsi Uji</th>
        <th style="text-align:center">Judul skripsi Asli</th>
        <th style="text-align:center">Tingkat Plagiarisme</th>
      

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
    $no=1;
        foreach ($dataabstrakhasil as $value) 
            {
               // echo var_dump($value);
            ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td style="text-align:left"><?php echo $value['judulbr'] ?></td>
                                                <td style="text-align:left"><?= $value['judul'] ?></td>
                                              <td style="text-align:center"><?= round($value['hasil'],2) ?> %</td>
                                               
                                            </tr>
                                           
                                            
                                            <?php
            $no++;
    
        }
                                            ?>
                                            
                                        <tbody>
                                    </table>
                                </div>
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
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="<?php echo base_url('asset/js/jquery.slimscroll.js')?>"></script>
        <!--Menu sidebar -->
        <script src="<?php echo base_url('asset/js/sidebarmenu.js')?>"></script>
        <!--stickey kit -->
        <script src="<?php echo base_url('asset/js/lib/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>


        <script src="<?php echo base_url('asset/js/lib/datamap/d3.min.js')?>"></script>
        <script src="<?php echo base_url('asset/js/lib/datamap/topojson.js')?>"></script>
        <script src="<?php echo base_url('asset/js/lib/datamap/datamaps.world.min.js')?>"></script>
        <script src="<?php echo base_url('asset/js/lib/datamap/datamap-init.js')?>"></script>

        <script src="<?php echo base_url('asset/js/lib/weather/jquery.simpleWeather.min.js')?>"></script>
        <script src="<?php echo base_url('asset/js/lib/weather/weather-init.js')?>"></script>
        <script src="<?php echo base_url('asset/js/lib/owl-carousel/owl.carousel.min.js')?>"></script>
        <script src="<?php echo base_url('asset/js/lib/owl-carousel/owl.carousel-init.js')?>"></script>


        <script src="<?php echo base_url('asset/js/lib/chartist/chartist.min.js')?>"></script>
        <script src="<?php echo base_url('asset/js/lib/chartist/chartist-plugin-tooltip.min.js')?>"></script>
        <script src="<?php echo base_url('asset/js/lib/chartist/chartist-init.js')?>"></script>
        <!--Custom JavaScript -->
        <script src="<?php echo base_url('asset/js/custom.min.js')?>"></script>

        <script src="<?php echo base_url('asset/js/lib/datatables/datatables.min.js')?>"></script>
        <script src="<?php echo base_url('asset/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js')?>"></script>
        <script src="<?php echo base_url('asset/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js')?>"></script>
        <script src="<?php echo base_url('asset/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')?>"></script>
        <script src="<?php echo base_url('asset/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')?>"></script>
        <script src="<?php echo base_url('asset/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')?>"></script>
        <script src="<?php echo base_url('asset/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js')?>"></script>
        <script src="<?php echo base_url('asset/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js')?>"></script>
        <script src="<?php echo base_url('asset/js/lib/datatables/datatables-init.js')?>"></script>


        <script src="<?php echo base_url('asset/js/lib/html5-editor/wysihtml5-0.3.0.js')?>"></script>
        <script src="<?php echo base_url('asset/js/lib/html5-editor/bootstrap-wysihtml5.js')?>"></script>
        <script src="<?php echo base_url('asset/js/lib/html5-editor/wysihtml5-init.js')?>"></script>
        <!--Custom JavaScript -->

    </body>

    </html>
