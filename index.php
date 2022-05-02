<?php 
require '../services/connection.php';
//$qry="select COUNT(*) from user_master where idRole_id=5";
//echo $qry;
//die;
                                                           $qry="select COUNT(*) from user_master where role_idRole=5";
                                                           $res = $conn->query($qry); 
                                                           $row = $res->fetch_array();
                                                           $tx="select COUNT(*) from user_master where role_idRole=2";
                                                           $rest = $conn->query($tx); 
                                                           $rowt = $rest->fetch_array();
                                                           $rx="select COUNT(*) from user_master where role_idRole=3";
                                                           $resx = $conn->query($rx); 
                                                           $rowr = $resx->fetch_array();
                                                           $nx="select COUNT(*) from user_master where role_idRole=4";
                                                           $resn = $conn->query($nx); 
                                                           $rown = $resn->fetch_array();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.lorvent.com/fitness/admin_userlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>Fitness Hub Admin Template</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" rel="stylesheet" href="css/custom_css/panel.css" />
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="vendors/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link type="text/css" href="css/custom_css/users_list.css" rel="stylesheet" />
    <!--end of page level css-->
</head>

<body>
<?php include('admin_masterpage.php');?>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
   
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
       
        <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
           
            <!--section ends-->
            <div class="container-fluid">
                
                <!--main content-->
                <div class="col-md-12">
                                <div class="box-model" style="width:500px">
                                    <h4>Users</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered trainer">
                                            <thead>
                                                <tr class="bg-primary">
                                                    <th>Role</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <tr> 
                                                        <td>Customer</td>
                                                        <td><?php echo $row['COUNT(*)'];?></td>
                                                    </tr>
                                                    <tr> 
                                                        <td>Trainer</td>
                                                        <td><?php echo $rowt['COUNT(*)'];?></td>
                                                    </tr>
                                                    <tr> 
                                                        <td>Receptionist</td>
                                                        <td><?php echo $rowr['COUNT(*)'];?></td>
                                                    </tr>
                                                    <tr> 
                                                        <td>Nutritionist</td>
                                                        <td><?php echo $rown['COUNT(*)'];?></td>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="box-model">
                            <div class="row">
                                <div class=" col-lg-12 col-xs-12">
                                    <div class="registered bg-primary">
                                        <div class="row">
                                            <div class="col-lg-8 col-xs-8">
                                                <h5>REGISTERED USERS</h5>
                                            </div>
                                            <div class="col-lg-4 col-xs-4">
                                                <?php 
                                                    $qryto="select COUNT(*) from user_master where role_idRole!=1";
                                                    $resto = $conn->query($qryto); 
                                                    $rowto = $resto->fetch_array();
                                                ?>
                                                <h3 id="userscount"><?php echo $rowto['COUNT(*)'];?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="registered bg-success">
                                        <div class="row">
                                            <div class="col-lg-8 col-xs-8">
                                                <h5>THIS MONTH</h5>
                                            </div>
                                            <div class="col-lg-4 col-xs-4">
                                            <?php 
                                                    $qth= "SELECT COUNT(*) FROM user_master WHERE DOJ = MONTH(CURDATE()) AND DOJ = YEAR(CURDATE()) AND  role_idRole!=1";
                                                    $resth = $conn->query($qth); 
                                                    $rowth = $resth->fetch_array();
                                                ?>
                                                <h3 id="myTargetElement4.2">10<?php //echo $rowth['COUNT(*)'];?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="registered bg-warning">
                                        <div class="row">
                                            <div class="col-lg-8 col-xs-8">
                                                <h5>LAST MONTH</h5>
                                            </div>
                                            <div class="col-lg-4 col-xs-4">
                                            <?php 
                                                    $qtth= "SELECT COUNT(*) FROM user_master WHERE DOJ >= MONTH(CURDATE() - INTERVAL 1 MONTH ) AND DOJ = YEAR(CURDATE()) AND  role_idRole!=1";
                                                    $restth = $conn->query($qtth); 
                                                    $rowtth = $restth->fetch_array();
                                                ?>
                                                <h3 id="myTargetElement4.1"><?php echo $rowtth['COUNT(*)'];?></h3>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                <!-- col-md-6 -->
                <!--row -->
            </div>
            <!--row ends-->
            <!-- /.content -->
        </aside>
        <!-- /.right-side -->
    </div>
    <!-- /.right-side -->
    <!-- ./wrapper -->
    <!-- global js -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/custom_js/app.js" type="text/javascript"></script>
    <script src="js/custom_js/metisMenu.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="vendors/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="vendors/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="vendors/jasny-bootstrap/js/jasny-bootstrap.min.js" type="text/javascript"></script>
    
    <script src="vendors/sweetalert/dist/sweetalert2.js" type="text/javascript"></script>
    
    <!-- end of page level js -->
</body>
<!-- Mirrored from demo.lorvent.com/fitness/admin_userlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Dec 2019 04:03:13 GMT -->
</html>
<script type="text/javascript">
	$(document).ready( function () {
	    $('#fitness-table').DataTable();
	    $( ".delete-user" ).click(function() {
		  if(confirm("Are you sure you want to delete this record?"))
		  {
		  	var idUser_master = $(this).attr('idUser_master');
		  	window.location.href = "../services/delete_user.php?idUser_master="+idUser_master;
		  }
		});
	} );
</script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/custom_js/app.js" type="text/javascript"></script>
    <script src="js/custom_js/metisMenu.js" type="text/javascript"></script>    
    <script src="js/custom_js/backstretch.js"></script>
    <script src="vendors/jquery-circliful/js/jquery.circliful.min.js" type="text/javascript"></script>
    <script src="vendors/progressbar/bootstrap-progressbar.min.js" type="text/javascript"></script>
    <script src="vendors/countUp/countUp.js" type="text/javascript"></script>    
    <script src="vendors/moment/min/moment.min.js" type="text/javascript"></script>
