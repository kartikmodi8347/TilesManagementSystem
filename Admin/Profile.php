<?php
	session_start();

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
						include("Db_Connect.php");
						$uname=$_SESSION['uname'];
						$sql="select * from User where UserName='$uname'";
						$rs=mysql_query($sql);
						$rs1=mysql_fetch_row($rs);
					
					
					?>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Company (disabled)</label>
                                                <input type="text"name="cmpny" class="form-control"  placeholder="Company" value="<?php echo $rs1[1]; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text"name="uname" class="form-control" placeholder="Username" value="<?php echo $rs1[2];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email"name="eadd" class="form-control" placeholder="Email" value="<?php echo $rs1[3]; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text"name="fname" class="form-control" placeholder="Company" value="<?php echo $rs1[4]; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text"name="lname" class="form-control" placeholder="Last Name" value="<?php echo $rs1[5]; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text"name="add" class="form-control" placeholder="Home Address" value="<?php echo $rs1[6]; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text"name="city" class="form-control" placeholder="City" value="<?php echo $rs1[7]; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text"name="con" class="form-control" placeholder="Country" value="<?php echo $rs1[8]; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="number" name="zcode" class="form-control" placeholder="ZIP Code" value="<?php echo $rs1[9]; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" name="ame" class="form-control" placeholder="Here can be your description"> <?php echo $rs1[10]; ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" name="upd" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
					
					
					
							<?php
							if(isset($_POST['upd']))
                            
						
						{
							include("Db_Connect.php");
							$Pcmpny=$_POST['cmpny'];
							$Puname=$_POST['uname'];
							$Peadd=$_POST['eadd'];
							$Pfname=$_POST['fname'];
							$Plname=$_POST['lname'];
							$Padd=$_POST['add'];
							$Pcity=$_POST['city'];
							$Pcon=$_POST['con'];
							$Pzcode=$_POST['zcode'];
							$Pame=$_POST['ame'];
							
							$sql="update User set Company='$Pcmpny', EmailAddress='$Peadd', FirstName='$Pfname', LastName='$Plname', Address='$Padd', City='$Pcity', Country='$Pcon', PostalCode='$Pzcode', AboutMe='$Pame' where UserName='$Puname'";
				            
							mysql_query($sql);
						
							?>
							<script language="javascript">
						alert("record is updated");
						</script>
<?php
						}
						?>						
					<?php
						include("Db_Connect.php");
						$uname=$_SESSION['uname'];
						$sql="select * from User where UserName='$uname'";
						$rs=mysql_query($sql);
						$rs1=mysql_fetch_row($rs);
					
					
					?>	
				   <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="" fit=crop fm=jpg h=300 q=75 w=400 alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="Image/<?php echo $rs1[11];?>" alt=..."/>

                                      <h4 class="title"><?php echo "$rs1[4] $rs1[5]"; ?><br />
                                         <small><?php echo "$rs1[2]"; ?></small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> <?php echo "$rs1[3]"; ?><br>
                                                    <?php echo "$rs1[6]"; ?> <br>
                                                    <?php echo "$rs1[10]"; ?>
                                </p>
                            </div>
                    
                    </div>
                </div>



                

                    
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<br><br><br><br><br><br><br><br><br>


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
