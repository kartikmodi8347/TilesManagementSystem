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
      


















   <div class="content">
            <div class="container-fluid">
                <div class="row">
                    

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
					
                                <h3 class="title">Login</h4>
								<td> &nbsp;</td>
                                <form action="" method="POST">
							
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>User Name</label>
                       <input type="text" class="form-control" placeholder="UserName" name="uname" >
                                            </div>
                                        </div>
								</div>
                                <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Password</label>
									
                                                <input type="password" class="form-control" placeholder="password" name="pass" >
                                            </div>
                                        </div>
								</div>
								
				<td>     &nbsp;  </td>
					<input type="reset"> <td> &nbsp;</td> <input type="submit" name="submit" value="login">
					 
                            </div>
                        </div>
                    </div>
                </div>


                

                    
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>

            </div>
        </div>
		
		
        <footer class="footer">
            <div class="container-fluid">
               
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Mahima Modi & Vidhi Kanudawala</a>
                </p>
            </div>
        </footer>

    </div>
</div>
<?php
	if(isset($_POST['submit']))
	{
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
		$rt="Admin";
	include("Db_Connect.php");
	$sql="select * from Login";
	$rs=mysql_query($sql);
	while($rs1=mysql_fetch_row($rs))
	{
		if($uname==$rs1[0] && $pass==$rs1[1] && $rt==$rs1[2])
		{
			$_SESSION['uname']=$uname;
			header("location:DashBoard.php");
			exit(0);
		}
	}
	
	?>
	<script language="javascript">
		alert("Either User Name or Password Doesnot Match");
	</script>
	<?php
	}
?>

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
