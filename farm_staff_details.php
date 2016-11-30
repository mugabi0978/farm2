<!DOCTYPE html>
<html>
     <!-- Sweet Alert -->
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>


  
  <!-- This is what you need -->
  <script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/underscore1.png">
        <!-- App title -->
        <title>Zircos - Responsive Admin Dashboard Template</title>

        <!-- Sweet Alert -->
        <link href="plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="plugins/switchery/switchery.min.css">

        <!--<script src="plugins/bootstrap-sweetalert/sweetalert.min.js"></script>-->
        <link rel="stylesheet" type="text/css" href="plugins/bootstrap-sweetalert/sweetalert.css">
        <script src="plugins/bootstrap-sweetalert/sweetalert-dev.js"></script>



        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>
<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-83057131-1', 'auto');
          ga('send', 'pageview');

        </script>

    </head>
     

 <?php include "includes/header.php";
 include('database/db_conection.php');
 ?>

 


    <body class="fixed-left">

        <!-- Loader -->
        <!--<div id="preloader">
            <div id="status">
                <div class="spinner">
                  <div class="spinner-wrapper">
                    <div class="rotator">
                      <div class="inner-spin"></div>
                      <div class="inner-spin"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div> -->

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           <?php include "includes/navbar.php";?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
           <?php include "includes/leftsidemenu.php";?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Farm Staff Details</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Zircos</a>
                                        </li>
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Dashboard
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
                        <div class="row">
                        <div class="col-lg-6"><a href="newAttendant.php"><button class="btn btn-primary">Add New attendant</button></a></div>

                        <script type="text/javascript">
                            
                           //swal("Here's a message!")
                        </script>
                        
                        </div>

                        <br>

                        <div class="row text-center">
                            <div class="col-lg-12">
                                <div class="panel panel-color panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Current Farm Staff</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table table-hover m-0">
                                            <?php
                                                            $selectatt="SELECT * FROM `Attendant`";
                                                            $sel_att=mysqli_query($dbcon,$selectatt);
                                                            
                                                            ?>
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th><center>Full Name</center></th>
                                                        <th><center>Phone Number</center></th>
                                                        <th><center>Residence</center></th>
                                                        <th><center>Date</center></th>
                                                        <th><center></center></th>
                                                        <th><center></center></th>
                                                        <th><center></center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php  
                                                 while ( $rw_att= mysqli_fetch_array($sel_att)) {
                                                     # code...
                                                 

                                                 ?>
                                                    <tr>
                                                        <th>
                                                        <?php
                                                        if($rw_att['image_location']==null){
                                                            ?>

                                                            <span class="avatar-sm-box bg-success"><?php echo substr($rw_att['Full_Names'],0,1);?>
                                                            <?php
                                                        }else{
                                                            ?>

                                                            <img src=<?php echo ($rw_att['image_location']);?> alt="user" class="thumb-sm img-circle">
                                                            <?php
                                                        }



                                                        ?>
                                                            <!-- <span class="avatar-sm-box bg-success"><?php echo substr($rw_att['Full_Names'],0,1);?>
                                                                
                                                            </span>
                                                            <span class="avatar-sm-box bg-success"><?php echo substr($rw_att['image_location']);?>> </span> -->

                                                            
                                                        </th>
                                                        <td>
                                                            <a href="#"><h5 class="m-0"> <?php echo $rw_att['Full_Names']; ?></h5>
                                                            <p class="m-0 text-muted font-13"><small><?php echo $rw_att['Primary_Role']; ?></small></p></a>
                                                        </td>
                                                        <td><?php echo $rw_att['Contact']; ?></td>
                                                        <td><?php echo $rw_att['Residence']; ?></td>
                                                        <td><?php echo $rw_att['Date_Joined']; ?></td>
                                                        <td ><button style="width:50px;" class="btn btn-info">Edit </button></td>
                                                        <td><button style="width:100px;" class="btn btn-danger" onclick="doyou() ">Discontinue</button></td>

                                                        <script type="text/javascript">   
                                                        function doyou(){
                                                            swal({
                                                              title: "Are you sure?",
                                                              text: "This Attendant will be Discontinued from Today!",
                                                              type: "warning",
                                                              showCancelButton: true,
                                                              confirmButtonColor: "#DD6B55",
                                                              confirmButtonText: "Yes, Discontinue him!",
                                                              cancelButtonText: "No, Give him/her some time!",
                                                              closeOnConfirm: false,
                                                              closeOnCancel: false
                                                            },
                                                            function(isConfirm){
                                                              if (isConfirm) {
                                                               // swal("Fill Form!", "The Attendant will be deleted after Form Submission.", "success");

                                                                //swal("Deleted!", "The Activity has been deleted.", "success");


                                                                


                                                                 swal({
                                                                      title: "Attendant Discontinuation!",
                                                                      text: "The Attendant will be Discontinued after Form Submission.",
                                                                      timer: 5000,
                                                                      showConfirmButton: false
                                                                    });
                                                                         


                                                                 setTimeout(function(){ window.location.href = 'Discontinue.php' }, 5000);


                                                              } else {
                                                                swal("Cancelled", "The Attendant is safe :)", "error");
                                                              }
                                                                });
                                                        }
                                                        

                                                        </script>

                                                        <td><button style="width:100px;" class="btn btn-success">Full Details</button></td>
                                                       
                                                        
                                                    </tr>
                                                    <?php } ?>
                                                    
                                                </tbody>
                                            </table>

                                        </div> <!-- table-responsive -->
                                    </div>
                                </div> <!-- end panel -->

                            </div>
                        </div>





                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
     
     document.querySelector('.showcase.sweet button').onclick = function(){
 
};
 </script>



        <script>
            var resizefunc = [];

            
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="plugins/switchery/switchery.min.js"></script>

        <script src="plugins/moment/moment.js"></script>
        <script src="plugins/timepicker/bootstrap-timepicker.js"></script>
        <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <!-- Init js -->
        <script src="assets/pages/jquery.form-pickers.init.js"></script>

         <script src="plugins/bootstrap-sweetalert/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="plugins/bootstrap-sweetalert/sweetalert.css">


            <?php include "includes/footer.php";
 
 ?>

 

        </body>
    </html>