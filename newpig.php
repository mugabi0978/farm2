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
                                    <h4 class="page-title">Edit Pigs </h4>
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
                                                <form action="" method="post" data-parsley-validate novalidate>

                                                	<div class="form-group">
                                                        <label for="dobe">Animal ID<span class="text-danger">*</span></label>
                                                        <input type="Text" name="animalId" data-parsley-type="alphanum" required
                                                               placeholder="Enter Animal ID e.g. LILLY001" class="form-control" id="dob">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="dobe">Date of Birth<span class="text-danger">*</span></label>
                                                        <!--<input type="date" name="birth" parsley-trigger="change" required
                                                               placeholder="Enter date of birth" class="form-control" id="=dob">-->

                                                    <div>
                                                        <div class="input-group">
                                                        
                                                        <input type="text" name="birth" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                        <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                        </div>

                                                    </div><!-- input-group -->

                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Date of Weaning<span class="text-danger">*</span></label>
                                                        <!--<input type="date" name="weaning" parsley-trigger="change" required
                                                               placeholder="Enter email" class="form-control" id="emailAddress">-->


                                                    <div>
                                                        <div class="input-group">
                                                        
                                                        <input type="text" name="weaning" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                        <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                        </div>

                                                    </div><!-- input-group -->

                                                    </div>



													 <div class="form-group">
                                                        <label for="emailAddress">Breed<span class="text-danger">*</span></label>
                                                        <input type="text" name="breed" data-parsley-pattern="^[A-Za-z. ]*$" required
                                                               placeholder="Animal breed e.g. xxxxxx" class="form-control" id="emailAddress">
                                                    </div>
                                           	       <div class="form-group">
                                                        <label for="emailAddress">Location<span class="text-danger">*</span></label>
                                                        <select name="location" class="form-control">
                                                        	<?php
                                                        	$select="SELECT * FROM `Animal_Location`";
                                                        	$sel_query=mysqli_query($dbcon,$select);
                                                        	while ($rw=mysqli_fetch_array($sel_query)) {
                                                        		?>
                                                        		<option value="<?php echo $rw[0]; ?>" parsley-trigger="change" required><?php echo "Sty" .$rw[1], " Pen" .$rw[2]; ?></option>

                                                        <?php
                                                        	}
                                                        	?>

                                                        </select>
                                                        
                                                    </div>
												
												   <div class="form-group m-b-20">
                                                        <label class="m-b-10">Gender</label>
                                                        <br/>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio1" value="male"
                                                                   name="gender" checked>
                                                            <label for="inlineRadio1"> Male </label>
                                                        </div>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio2" value="female"
                                                                   name="gender">
                                                            <label for="inlineRadio2"> Female </label>
                                                        </div>
                                                    </div>
													
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <input id="remember-1" type="checkbox">
                                                            <label for="remember-1"> Remember me </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group text-right m-b-0">
                                                    <br >
                                                    <br >

                                                    <div style="text-align: center; ">
                                                         <!--   <button name="submit" class="btn btn-primary" type="submit">
                                                            Submit
                                                        </button> -->

                                                        <button style="margin: auto; width: 120px;" name="submit" class="btn btn-primary" type="submit" id="tooltip-animation" title="Submit/insert Data to Database!" >
                                                            Submit
                                                        </button>

                                                        <button type="reset" class="btn btn-default" style="margin: auto; width: 120px;">
                                                            Cancel
                                                        </button>


                                                    </div>
                                                     
                                                    </div>

                                                </form>
                                            </div>
							</div>
						</div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->
<!-- 
                <footer class="footer text-right">
                    2016 © Zircos.
                </footer> -->

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


<!-- 
        <script>
            var resizefunc = [];
        </script>

         jQuery  --><!-- 
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="plugins/switchery/switchery.min.js"></script>

        <script src="assets/js/datetimepicker.js"></script>
        <script src="plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

        <script type="text/javascript" src="plugins/parsleyjs/parsley.min.js"></script> -->

      <!--   <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script> -->
      <!--   <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script> -->

        <!-- Init js --><!-- 
        <script src="assets/pages/jquery.form-pickers.init.js"></script> -->

        <!-- App js --><!-- 
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>  -->
<?php
  
    
    if(isset($_POST['submit']))
    {
       $message = "Data Save In Database";
       $animalId = $_POST['animalId'];
         $birth=   $_POST['birth'];
         $weaning = $_POST['weaning'];
         $breed= $_POST['breed'];
         $location = $_POST['location'];
         $gender = $_POST['gender'];
         
    
       
         $query = "INSERT INTO `Animal`(`Animal_ID`, `Date_Of_Birth`, `Date_Of_Weaning`, `Breed_Of_Animal`, `Location_ID`,`Gender`) VALUES ('$animalId','$birth','$weaning','$breed','$location','$gender') " or die(mysqli_error($dbcon));


        // $query .= "";
         
         $result = mysqli_query($dbcon , $query);
       if  (!$result){
          die ('QUERY FAILED' . mysqli_error($dbcon));
       }else{
          
           ?>

            <script type="text/javascript">   
                                                        function doyou2(){
                                                            

                                                                swal({
                                                                      title: "New Pig inserted Succcessfully!",
                                                                      text: "Thanks for Updating Pigs Menu.",
                                                                      timer: 5000,
                                                                      showConfirmButton: false
                                                                    });
                                                                         
                                                                        // window.open('index.php?message=entered','_self');                                                        
                                                                
                                                        }

                                                        

        </script>


          <script>

          //window.open('index.php?message=entered','_self')






          doyou2();
 
          //setTimeout(function(){ window.location.href = 'index.php' }, 5000);


          setTimeout(function(){ window.location.href = 'viewallpigs.php' }, 5000);

          </script>



          <?php
      

          



        }


       }


    
  ?>
  <?php include "includes/footer.php";
 
 ?>

    </body>
</html>