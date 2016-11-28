<!DOCTYPE html>
<html>
<?php include "includes/header.php";
include('database/db_conection.php');

?>

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
                                    <h4 class="page-title">Pig Feed Consumption Monitoring Form </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Zircos</a>
                                        </li>
                                        <li>
                                            <a href="#">Pages </a>
                                        </li>
                                        <li class="active">
                                            Blank Page
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
								 <div class="p-20">
                                                <form action="" method="post" data-parsley-validate novalidate >

                                                	
                                                    <div class="form-group">
                                                        <label for="dobe">Date <span class="text-danger">*</span></label>
                                                        <input type="date" name="date" parsley-trigger="change" required
                                                               placeholder="Enter date of birth" class="form-control" id="=dob">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="dobe">Feed Composition <span class="text-danger">*</span></label>
                                                        <input type="Text" name="feed" parsley-trigger="change" required
                                                               placeholder="What does the food contain" class="form-control" id="dob">
                                                    </div>

                                                    
													 <div class="form-group">
                                                        <label for="emailAddress">Meal Weight<span class="text-danger">*</span></label>
                                                        <input type="number" name="meal" parsley-trigger="change" required
                                                               placeholder="Weight of the food" class="form-control" id="emailAddress">
                                                    </div>
                                           	       <div class="form-group">
                                                        <label for="emailAddress">Water Consumed <span class="text-danger">*</span></label>
                                                        <input type="number" name="water" parsley-trigger="change" required
                                                               placeholder="Litres of water" class="form-control" id="emailAddress">
                                                        
                                                    </div>
												    
                                                    <div class="form-group">
                                                        <label for="emailAddress">Animal ID<span class="text-danger">*</span></label>
                                                        
                                                        <select name="animalID" class="form-control" placeholder="Litres of water">
                                                        <option></option>
                                                            <?php
                                                            $select="SELECT * FROM `Animal`";
                                                            $sel_query=mysqli_query($dbcon,$select);
                                                            while ($rw=mysqli_fetch_array($sel_query)) {
                                                                ?>
                                                                <option value="<?php echo $rw[0]; ?>" parsley-trigger="change" required><?php echo $rw[0]; ?></option>

                                                        <?php
                                                            }
                                                            ?>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Attendant<span class="text-danger">*</span></label>
                                                        
                                                        <select name="attendant" class="form-control">
                                                        <option></option>
                                                            <?php
                                                            $select1="SELECT * FROM `Attendant`";
                                                            $sel_query1=mysqli_query($dbcon,$select1);
                                                            while ($rw1=mysqli_fetch_array($sel_query1)) {
                                                                ?>
                                                                <option value="<?php echo $rw1[0]; ?>" parsley-trigger="change" required><?php echo $rw1[1]; ?></option>

                                                        <?php
                                                            }
                                                            ?>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Pig Location<span class="text-danger">*</span></label>
                                                        
                                                        <select name="location" class="form-control">
                                                        <option></option>
                                                            <?php
                                                            $select2="SELECT * FROM `Animal_Location`";
                                                            $sel_query2=mysqli_query($dbcon,$select2);
                                                            while ($rw2=mysqli_fetch_array($sel_query2)) {
                                                                ?>
                                                                <option value="<?php echo $rw2[0]; ?>" parsley-trigger="change" required><?php echo $rw2[1]; ?></option>

                                                        <?php
                                                            }
                                                            ?>

                                                        </select>
                                                    </div>

                                                    

                                                    <div class="form-group text-right m-b-0">
                                                        <button name="submit" class="btn btn-primary waves-effect waves-light" type="submit">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>

                                                </form>
                                            </div>
							</div>
						</div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2016 © Zircos.
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
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
<?php
  
    
    if(isset($_POST['submit']))
    {
       $message = "Data Save In Database";
       

         $date  = $_POST['date'];
        $feed = $_POST['feed'];
        $meal = $_POST['meal'];
        $water = $_POST['water'];
        $animalID = $_POST['animalID'];
        $attendant = $_POST['attendant'];
        $location = $_POST['location'];
       
    
       
         $query = "INSERT INTO `Animal_Feed_Consumption`( `Date_Of_Consumption`, `Feed_Composition`, `Meal_Weight`, `Water_Consumed`, `Animal_ID`, `Location_ID`, `Attendant_ID`) VALUES ('$date','$feed','$meal','$water','$animalID','$attendant','$location')" or die(mysqli_error($dbcon));
        // $query .= "";
         
         $result = mysqli_query($dbcon , $query);
       if  (!$result){
          die ('QUERY FAILED' . mysqli_error($dbcon));
       }else{
          ?>

          <script>window.open('index.php?message=entered','_self')</script>

          <?php



        }


       }


    
  ?>

    </body>
</html>