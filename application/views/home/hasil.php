

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

    <title>Halaman Hasil Cek Plagiarisme</title>
<link rel="stylesheet" href="admin/css/lib/html5-editor/bootstrap-wysihtml5.css" />
    <link href="admin/css/lib/chartist/chartist.min.css" rel="stylesheet">
	<link href="admin/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="admin/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="admin/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="admin/css/helper.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
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
  
        <!-- End header header -->
        <!-- Left Sidebar  -->
    
        <div >
            <!-- Bread crumb -->
           
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
 
<div class="card card-outline-success">
                            <div class="card-header">
                            <h2 class="m-b-0 text-white text-center">Hasil Cek Tingkat Plagiarisme</h2>
                            </div>
                            <div class="card-body">
                                
   
                                
                                          <div class="table-responsive m-t-10">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>no</th>
        <th style="text-align:center">judul skripsi</th>
        
        <th style="text-align:center">Abstraksi</th>
        <th style="text-align:center">Tingkat Plarigarisme</th>
      

                                            </tr>
                                        </thead>
                                        <tbody>
   
        <?php
        $execution_time = ($time_end - $time_start)/60;
        $sa = $conn->query("SELECT abstrak_uji.judul,hasil_uji.hasil,abstrak_asli.abstrak FROM abstrak_uji RIGHT JOIN hasil_uji ON abstrak_uji.id=hasil_uji.id_asli JOIN abstrak_asli ON abstrak_asli.id=abstrak_uji.id WHERE hasil_uji.id_uji='$randomid' ORDER BY hasil_uji.hasil DESC LIMIT 5");
        $no=1;
        foreach ($sa as $value) 
			{
            ?>
  <tr> <td><?= $no++;?> </td><td style="text-align:left"><?= $value["judul"]; ?></td>
     <td style="text-align:left"><?= substr($value["abstrak"], 0,200) . '...'; ?></td>
    
<td style="text-align:center"><?= round($value["hasil"],2); ?> %</td></tr>
        <?php
        }
                                            ?>
                                            
                                            
                                            

                                        
                                            
                                        </tbody>
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
    <script src="admin/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="admin/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="admin/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="admin/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="admin/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>


    <script src="admin/js/lib/datamap/d3.min.js"></script>
    <script src="admin/js/lib/datamap/topojson.js"></script>
    <script src="admin/js/lib/datamap/datamaps.world.min.js"></script>
    <script src="admin/js/lib/datamap/datamap-init.js"></script>

    <script src="admin/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="admin/js/lib/weather/weather-init.js"></script>
    <script src="admin/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="admin/js/lib/owl-carousel/owl.carousel-init.js"></script>


    <script src="admin/js/lib/chartist/chartist.min.js"></script>
    <script src="admin/js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
    <script src="admin/js/lib/chartist/chartist-init.js"></script>
    <!--Custom JavaScript -->
    <script src="admin/js/custom.min.js"></script>
    
      <script src="admin/js/lib/datatables/datatables.min.js"></script>
    <script src="admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="admin/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="admin/js/lib/datatables/datatables-init.js"></script>
    
    
     <script src="admin/js/lib/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="admin/js/lib/html5-editor/bootstrap-wysihtml5.js"></script>
    <script src="admin/js/lib/html5-editor/wysihtml5-init.js"></script>
    <!--Custom JavaScript -->

</body>

</html>