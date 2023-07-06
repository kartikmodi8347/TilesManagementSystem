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

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->

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
				
                    

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">

                                <h2 class="title">Change Password</h2>
								<td> &nbsp;</td>
                                <form action="" method="POST">
								
                                    <div class="row">
									

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Existing Password</label>
                                                <input type="Password" class="form-control" name="epass" placeholder="ExistingPassword" >
                                            </div>
                                        </div>
								</div>
                                <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>New Password</label>
									
                                                <input type="Password" class="form-control" name="npass" placeholder="NewPassword" >
                                            </div>
                                        </div>
								</div>
                     <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Confirm Password</label>
									
                                                <input type="Password" class="form-control" name="cpass" placeholder="ConfirmPassword" >
					                        </div>
				                 	</div>
				         	</div>
					
				<td>     &nbsp;  </td>
				<td>     &nbsp;  </td>
					<td> &nbsp;  </td> <td> &nbsp;  </td> 
					<td> &nbsp;  </td> <td> &nbsp;  </td> <td> &nbsp;  </td> <td> &nbsp;  </td> 
					<td> &nbsp;  </td> <td> &nbsp;  </td> <td> &nbsp;  </td> <td> &nbsp;  </td> 
					

				<div class="row">
                                      <div class="col-md-3">
                                            <div class="form-group">
					 <input type="submit" class="form-control" name="submit" value="Change" >
					 
				
					</form>
					 </div>
					 </div>
					 </div>
					 
		 
					 
		<?php
include("db_connect.php");
if(!(isset($_SESSION['uname']) && $_SESSION['uname'] !=''))
{
	header("location:index.php");
	
}
$pass1=$_POST['npass'];
$pass2=$_POST['cpass'];
$epass=$_POST['epass'];
$pass1=mysql_real_escape_string($pass1);
$pass2=mysql_real_escape_string($pass2);
$uname=$_SESSION['uname'];
$sql="select Password from Login where UserId='$uname'";
$rs=mysql_query($sql);
$rs1=mysql_fetch_row($rs);
if($pass1<>$pass2)
{
	echo"your password do not match.";
}

else if($rs1[0]!=$epass)
{
	
	echo "Your Old Password does not match";
}
else
{
	$uname=$_SESSION['uname'];
$sql="update Login set Password='$pass1' where UserId='$uname'";
			
			mysql_query($sql);
}

?>

                </div>
            </div>
        </div>
		  </div>    
			
                   </div>
                </div>
            </div>
        </div>
		</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br>
        
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
