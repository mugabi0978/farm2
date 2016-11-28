<!DOCTYPE html>
<html>
 <?php include "includes/header.php";
 include('database/db_conection.php');
 ?>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 --><script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <!-- Styles -->
    <link href="jQuery.filer/css/jquery.filer.css" rel="stylesheet">

    <!-- Jvascript -->
    <script src="http://code.jquery.com/jquery-3.1.0.min.js" crossorigin="anonymous"></script>
    <script src="jQuery.filer/js/jquery.filer.js" type="text/javascript"></script>
    <script src="jQuery.filer/js/custom.js" type="text/javascript"></script>




    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
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
        </div>

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
                <script type="text/javascript">
            $(document).ready(function(){

                    $('#filer_input21').filer({
                        showThumbs: true,
                        addMore: true,
                        allowDuplicates: false
                    });

                });
                </script>
                <div class="content">
                     <input type="file" name="files[]" id="filer_input21" multiple="multiple">
            

                    <div class="container">
                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
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

                        <div class="row text-center">

                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Animal Statistics</p>
                                        <?php
                                                            $select="SELECT * FROM `Animal`";
                                                            $sel_query=mysqli_query($dbcon,$select);
                                                            
                                                            ?>
                                        <h2 class="text-danger"><span data-plugin="counterup"><?php echo mysqli_num_rows($sel_query); ?></span></h2>
                                        <p class="text-muted m-0"><b>Last:</b> 30.4k</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Number Of Stys</p>
                                        <?php
                                                            $select1="SELECT * FROM `Animal_Location`";
                                                            $sel_query1=mysqli_query($dbcon,$select1);
                                                            
                                                            ?>
                                        <h2 class="text-dark"><span data-plugin="counterup"><?php echo mysqli_num_rows($sel_query1); ?></span> </h2>
                                        <p class="text-muted m-0"><b>Last:</b> 1250</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow">No Of Workers</p>
                                        <?php
                                                            $select2="SELECT * FROM `Attendant`";
                                                            $sel_query2=mysqli_query($dbcon,$select2);
                                                            
                                                            ?>
                                        <h2 class="text-dark"><span data-plugin="counterup"><?php echo mysqli_num_rows($sel_query2); ?></span> </h2>
                                        <p class="text-muted m-0"><b>Last:</b> 40.33k</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow">No Of Pig Sales</p>
                                        <?php
                                                            $select3="SELECT * FROM `Pig_Sales`";
                                                            $sel_query3=mysqli_query($dbcon,$select3);
                                                            
                                                            ?>
                                        <h2 class="text-warning"><span data-plugin="counterup"><?php echo mysqli_num_rows($sel_query3); ?></span> </h2>
                                        <p class="text-muted m-0"><b>Last:</b> 956</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Total Users</p>
                                        <h2 class="text-primary"><span data-plugin="counterup">3245</span> </h2>
                                        <p class="text-muted m-0"><b>Last:</b> 20k</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow">New Downloads</p>
                                        <h2 class="text-danger"><span data-plugin="counterup">78541</span> </h2>
                                        <p class="text-muted m-0"><b>Last:</b> 50k</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-4">
                        		<div class="card-box">

                        			<h4 class="header-title m-t-0 ">Daily Sales</h4>

                                    <div class="widget-chart text-center">
                                        <div id="morris-donut-example"style="height: 245px;"></div>
                                        <ul class="list-inline chart-detail-list m-b-0">
                                            <li>
                                                <h5 class=""><i class="fa fa-circle m-r-5"></i>Series A</h5>
                                            </li>
                                            <li>
                                                <h5 class=""><i class="fa fa-circle m-r-5"></i>Series B</h5>
                                            </li>
                                        </ul>
                                	</div>
                        		</div>
                            </div><!-- end col -->
                            <?php
                            $rows1 = '';
                            $rows2= '';
                                                            $selectatt1="SELECT * FROM `attendant`";
                                                            #//SELECT * FROM `attendant`
                                                            $sel_att1=mysqli_query($dbcon,$selectatt1);
                                                            $total_rows = $sel_att1->num_rows;

                                                            if($sel_att1){

                                                                $rows1 = mysqli_fetch_all($sel_att1, MYSQLI_ASSOC);

                                                            }



                                                            
                                                             
                                                 while ( $rw_att1= mysqli_fetch_array($sel_att1)) {

                                                                //<?php echo $rw_att['Attendant_ID']; 
                                                    //$w1 = 

                                                     # code...
                                                 }

                                                   $selectatt2="SELECT * FROM `pig_sales`";
                                                            #//SELECT * FROM `attendant`
                                                            $sel_att2=mysqli_query($dbcon,$selectatt2);
                                                            $total_rows1 = $sel_att2->num_rows;

                                                            if($sel_att2){

                                                                $rows2 = mysqli_fetch_all($sel_att2, MYSQLI_ASSOC);

                                                            }


                                                 

                                                
                                                            ?>
                                                   

                            <div class="col-lg-4">
                                <div class="card-box ">

                                    <h4 class="header-title m-t-0 ">Workers Stats</h4>
                                    <!--<div id="morris-bar-example" style="height: 280px;"></div>-->

                                    <div id="myfirstchart" style="height: 280px;"></div>
                                </div>
                            </div><!-- end col -->


                            <div class="col-lg-4">
                                <div class="card-box ">

                                    <h4 class="header-title m-t-0 ">Total Revenue (sales per day)</h4>
                                    <div id="myfirstchart1" style="height: 280px;"></div>
                                </div>
                            </div><!-- end col -->

                           
                                                        
                        
                            <script type="text/javascript">
                                new Morris.Bar({

                                               // ID of the element in which to draw the chart.
                                              element: 'myfirstchart',

                                               // Chart data records -- each entry in this array corresponds to a point
    // on the chart.
                                                data: <?php echo json_encode($rows1);?>,
                                              // Chart data records -- each entry in this array corresponds to a point on
                                              // the chart.
                                             
                                             /*data: [

                                               //http://www.codediesel.com/visualization/display-line-and-area-charts-in-php-and-mysql/

                                           

                                                  
                                                    //{ date: '2010', NoOfWorkers: 100},
                                                    
                                                    { 
                                                        date: '', NoOfWorkers: 

                                                         },

                                                        



                                                    
                                            

                                          

                                          
                                              ],*/

                                              // The name of the data record attribute that contains x-values.
                                              xkey: 'Date_Joined',
                                              xLabels: 'date',
                                              // A list of names of data record attributes that contain y-values.
                                              ykeys: ['Attendant_ID'],
                                              // Labels for the ykeys -- will be displayed when you hover over the
                                              // chart.
                                              labels: ['Attendant']
                                            });

                                new Morris.Line({

                                               // ID of the element in which to draw the chart.
                                              element: 'myfirstchart1',

                                               // Chart data records -- each entry in this array corresponds to a point
    // on the chart.
                                                data: <?php echo json_encode($rows2);?>,
                                              // Chart data records -- each entry in this array corresponds to a point on
                                              // the chart.
                                             
                                             /*data: [

                                               //http://www.codediesel.com/visualization/display-line-and-area-charts-in-php-and-mysql/

                                           

                                                  
                                                    //{ date: '2010', NoOfWorkers: 100},
                                                    
                                                    { 
                                                        date: '', NoOfWorkers: 

                                                         },

                                                        



                                                    
                                            

                                          

                                          
                                              ],*/

                                              // The name of the data record attribute that contains x-values.
                                              xkey: 'Date_Of_Sale',
                                              xLabels: 'date',
                                              // A list of names of data record attributes that contain y-values.
                                              ykeys: ['Price_Of_Animal'],
                                              // Labels for the ykeys -- will be displayed when you hover over the
                                              // chart.
                                              labels: ['Pig_Sold']
                                            });





                            </script>

                          

                                                                
                                               

                            

                            


                                                 

                        </div>
                        <!-- end row -->


<!--
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="panel panel-color panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Recent Users</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table table-hover m-0">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>User Name</th>
                                                        <th>Phone</th>
                                                        <th>Location</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <img src="assets/images/users/avatar-1.jpg" alt="user" class="thumb-sm img-circle" />
                                                        </th>
                                                        <td>
                                                            <h5 class="m-0">Louis Hansen</h5>
                                                            <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                                                        </td>
                                                        <td>+12 3456 789</td>
                                                        <td>USA</td>
                                                        <td>07/08/2016</td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            <img src="assets/images/users/avatar-2.jpg" alt="user" class="thumb-sm img-circle" />
                                                        </th>
                                                        <td>
                                                            <h5 class="m-0">Craig Hause</h5>
                                                            <p class="m-0 text-muted font-13"><small>Programmer</small></p>
                                                        </td>
                                                        <td>+89 345 6789</td>
                                                        <td>Canada</td>
                                                        <td>29/07/2016</td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            <img src="assets/images/users/avatar-3.jpg" alt="user" class="thumb-sm img-circle" />
                                                        </th>
                                                        <td>
                                                            <h5 class="m-0">Edward Grimes</h5>
                                                            <p class="m-0 text-muted font-13"><small>Founder</small></p>
                                                        </td>
                                                        <td>+12 29856 256</td>
                                                        <td>Brazil</td>
                                                        <td>22/07/2016</td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            <img src="assets/images/users/avatar-4.jpg" alt="user" class="thumb-sm img-circle" />
                                                        </th>
                                                        <td>
                                                            <h5 class="m-0">Bret Weaver</h5>
                                                            <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                                                        </td>
                                                        <td>+00 567 890</td>
                                                        <td>USA</td>
                                                        <td>20/07/2016</td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            <img src="assets/images/users/avatar-5.jpg" alt="user" class="thumb-sm img-circle" />
                                                        </th>
                                                        <td>
                                                            <h5 class="m-0">Mark</h5>
                                                            <p class="m-0 text-muted font-13"><small>Web design</small></p>
                                                        </td>
                                                        <td>+91 123 456</td>
                                                        <td>India</td>
                                                        <td>07/07/2016</td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>  table-responsive 
                                    </div>
                                </div>

                            </div> -->
                            <!-- end col -->
                                    <div class="col-lg-6">
                                <div class="panel panel-color panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Pig Daily Farm Activities</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table table-hover m-0">
                                            <?php
                                                            $selectatt="SELECT * FROM `attendant_activity_log`";
                                                            $sel_att=mysqli_query($dbcon,$selectatt);
                                                            
                                                            ?>
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Attendant Name</th>
                                                        <th>Activty ID</th>

                                                        <th>Date of Activity</th>
                                                        <th>Time</th>
                                                        <!--<th>Description of Activity</th>-->
                                                        <th>Verified By</th>

                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php  
                                                 while ( $rw_att= mysqli_fetch_array($sel_att)) {
                                                     # code...
                                                 

                                                 ?>
                                                    <tr>
                                                        <th>
                                                            <span class="avatar-sm-box bg-success"><?php echo substr($rw_att['Attendant_Name'],0,1);?></span>
                                                        </th>
                                                        <!--<th>
                                                                <img src="assets/images/users/avatar-1.jpg" alt="user" class="thumb-sm img-circle">

                                                        </th>-->
                                                        <td>
                                                            <a href="#"><h5 class="m-0"> <?php echo $rw_att['Attendant_Name']; ?></h5>
                                                            <p class="m-0 text-muted font-13"><small><?php echo $rw_att['Description_Of_Activity']; ?></small></p></a>
                                                        </td>
                                                        <td><?php echo $rw_att['attendant_activity_log_id']; ?></td>
                                                        <td><?php echo $rw_att['Date_Of_Activity']; ?></td>
                                                        <td><?php echo $rw_att['Time_of_Activity']; ?></td>
                                                        <td><?php echo $rw_att['Verified_By']; ?></td>

                                                        <?php
                                                        $loc1 = $rw_att['attendant_activity_log_id'];

                                                        ?>




                                                          <td><button style="width:100px;" class="btn btn-danger" onclick="doyou() ">Delete</button></td>

                                                        <script type="text/javascript">   
                                                        function doyou(){
                                                            swal({
                                                              title: "Are you sure?",
                                                              text: "This Activity will be Deleted from Today!",
                                                              type: "warning",
                                                              showCancelButton: true,
                                                              confirmButtonColor: "#DD6B55",
                                                              confirmButtonText: "Yes, Delete it!",
                                                              cancelButtonText: "No, Leave it!",
                                                              closeOnConfirm: false,
                                                              closeOnCancel: false
                                                            },
                                                            function(isConfirm){
                                                              if (isConfirm) {

                                                                
                                                                swal("Deleted!", "The Activity has been deleted.", "success");

                                                                <?php

         $query2 = "DELETE FROM `attendant_activity_log` WHERE `attendant_activity_log`.`attendant_activity_log_id`   = '$loc1'";
             $result2 = mysqli_query($dbcon , $query2);


         
       if  ( !$result2 ) {
          die ('QUERY FAILED' . mysqli_error($dbcon));
       }else{
          ?>

           setTimeout(function(){ window.location.href = 'index.php' }, 5000);

          
          <?php



        }

                                                                ?>


                                                              } else {
                                                                swal("Cancelled", "The Activity is safe :)", "error");
                                                              }
                                                                });
                                                        }
                                                        

                                                        </script>
                                                    </tr>
                                                    <?php } ?>
                                                    
                                                </tbody>
                                            </table>

                                        </div> <!-- table-responsive -->
                                    </div>
                                </div> <!-- end panel -->

                            </div>

                            <div class="col-lg-6">
                                <div class="panel panel-color panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Farm Staff</h3>
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
                                                        <th>Full Name</th>
                                                        <th>Phone Number</th>
                                                        <th>Residence</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php  
                                                 while ( $rw_att= mysqli_fetch_array($sel_att)) {
                                                     # code...
                                                 

                                                 ?>
                                                    <tr>
                                                        <th>
                                                            <span class="avatar-sm-box bg-success"><?php echo substr($rw_att['Full_Names'],0,1);?></span>
                                                        </th>
                                                        <td>
                                                            <a href="#"><h5 class="m-0"> <?php echo $rw_att['Full_Names']; ?></h5>
                                                            <p class="m-0 text-muted font-13"><small><?php echo $rw_att['Primary_Role']; ?></small></p></a>
                                                        </td>
                                                        <td><?php echo $rw_att['Contact']; ?></td>
                                                        <td><?php echo $rw_att['Residence']; ?></td>
                                                        <td><?php echo $rw_att['Date_Joined']; ?></td>
                                                    </tr>
                                                    <?php } ?>
                                                    
                                                </tbody>
                                            </table>

                                        </div> <!-- table-responsive -->
                                    </div>
                                </div> <!-- end panel -->

                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->




                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © built By Russel Calvin
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


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

        <!-- Counter js  -->
        <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
		<script src="plugins/morris/morris.min.js"></script>
		<script src="plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>