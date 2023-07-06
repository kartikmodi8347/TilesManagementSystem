<?php
	session_start();
   
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'tilesmanagementsystem');


    // include("Db_Connect.php");

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
                    
<form action="" method="POST">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                            <h4 class="title">Orders By Bill No <?php $id=$_GET['id']; echo $id; ?></h4>

                                <br><br>
								<?php
								include("Db_Connect.php");
                                
                                $cusername = $_SESSION['CUserName'];
                                
                                // Create a MySQLi connection
                                $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                                
                                // Check the connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                
                                $sql = "SELECT a.*, b.* FROM Product a, Bill b WHERE a.ProductId = b.ProductId and b.UserName='$cusername' and b.BillId='$id' and b.Status=0";
                                $result = $conn->query($sql);
                                
                                $cnt = 0;
                                echo "<table border=2><tr><th><h3> Sr. No. </h3></th> <th><h3> Product Description </h3></th><th><h3><center> Size </center></h3></th><th><h3> Type </h3></th><th><h3> Quantity <h3></th><th><h3> Price </h3></th><th><h3> Amount </h3></th></tr>";
                                $total = 0;
                                
                                while ($rs1 = $result->fetch_row()) {
                                    $total += $rs1[10];
                                    $cnt++;
                                    echo "<tr><th><h5><center> $cnt </center> </h4> </th> <th><h5><center> $rs1[3]</center> </h5></th><th><h5><center> $rs1[1]</center> </h5></th><th><h5><center> $rs1[2]</center> </h5></th><th><h5> <center>$rs1[9] </center></h5></th><th><h5><center> $rs1[5]</center></h5></th><th><h5><center> $rs1[10]</center> </h5></th </tr>";
                                }
                                
                                $sgst = round($total * 0.09);
                                echo "<tr> <th colspan=6 align='right'><h5><b>Total </b></h5></th> <th><h5><center> $total </center></h5></th> </tr>";
                                echo "<tr> <th colspan=6 align='right'><h5><b> SGST </b></h5></th> <th><h5><center> $sgst</center> </h5></th> </tr>";
                                echo "<tr> <th colspan=6 align='right'><h5><b> CGST </b></h5></th> <th><h5><center> $sgst</center> </h5></th> </tr>";
                                $gtotal = $total + 2 * $sgst;
                                echo "<tr> <th colspan=6 align='right'> <h4><b>GRAND Total </b></h4></th> <th><h4><center> $gtotal</center> </h4></th> </tr>";
                                
                                $cusername = $_SESSION['CUserName'];
                                echo "<tr> <th colspan=7><center> <a href='apOrder.php?id=$cusername&id1=$id'> Approve Order </a></center></th></tr>";
                                
                                echo "</table>";
                                
                                // Close the connection
                                $conn->close();
                                
								
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
