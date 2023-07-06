<?php
	session_start();
	ob_start();
	ob_flush();

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Tiles Management System</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="red" data-image="assets/img/sidebar-7.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<?php
		include("Sidebar.php");
		
		?>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="collapse navbar-collapse">
                    

                   <?php
						include("Header.php");
				   ?>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
				<?php
					$id1=$_GET['id1'];
					include("Db_Connect.php");
					$sql="select * from Type where TypeId='$id1'";
					$rs=mysql_query($sql);
					$rs1=mysql_fetch_row($rs);
				
				?>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
					
                                <h3 class="title">Type</h4>
								<td> &nbsp;</td>
                                <form action="" method="POST"enctype="multipart/form-data">
							
                                    <div class="row">
                
				<div class="col-md-5">
                                            <div class="form-group">
                                                <label>Type Id</label>
                                                <input type="text" name="TypeId" value="<?php echo $rs1[0]; ?>" class="form-control" placeholder="TypeId" >
                                            </div>
                                        </div>
								</div>
                                <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Type Name</label>
									
                                                <input type="text" name="TypeName" value="<?php echo $rs1[1]; ?>" class="form-control" placeholder="TypeName" >
                                            </div>
                                        </div>
								</div>
								<div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" value="<?php echo $rs1[2]; ?>" name="image" class="form-control" placeholder="image" >
                                            </div>
                                        </div>
								</div>
				<td>     &nbsp;  </td>
					<td> &nbsp;  </td> <td> &nbsp;  </td> 
					<td> &nbsp;  </td> <td> &nbsp;  </td> <td> &nbsp;  </td> <td> &nbsp;  </td> 
					<td> &nbsp;  </td> <td> &nbsp;  </td> <td> &nbsp;  </td> <td> &nbsp;  </td> 
					<div class="row">
                                      <div class="col-md-3">
                                            <div class="form-group">
					<input type="submit" name="submit" class="form-control" value="Update">
					
					</form>
					
					</div>
					</div>
					
					</div>
					 
                            </div>
                        </div>
                    </div>
                </div>
	<?php
	if(isset($_POST['submit']))
	{
		
		include ("db_Connect.php");
		
		
		$typeid=$_POST['TypeId'];
		$typename=$_POST['TypeName'];
		$timage=$_FILES['image']['name'];
				$ttimage=$_FILES['image']['tmp_name'];
				move_uploaded_file($ttimage,"Image/$timage");
		
		$sql="update Type set TypeName='$typename', Image='$timage' where TypeId='$typeid'";
			
			mysql_query($sql);
		
		header("location:type.php");		
		
	}	
		
		
		
	?>

                

                    
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
				include("Footer.php");
		?>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
