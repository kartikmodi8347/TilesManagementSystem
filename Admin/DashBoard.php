<?php
$host = "localhost";
$user_db = "root";
$con_password = "";
$database = "tilesmanagementsystem";
date_default_timezone_set('Asia/Kolkata');

$conn = mysqli_connect($host, $user_db, $con_password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

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
            <table>
                <tr>
                    <td>
                        <div class="header">
                            <h4 class="title">Gallery</h4>
                            <p class="category">Number of Records</p>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-clock-o"></i>
                                <font color='red'>
                                <?php
                                $sql = "SELECT COUNT(*) FROM Images";
                                $rs = mysqli_query($conn, $sql);
                                $rs1 = mysqli_fetch_row($rs);
                                echo $rs1[0];
                                ?>
                                </font>
                            </div>
                        </div>
                    </td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>
                        <div class="header">
                            <h4 class="title">Size</h4>
                            <p class="category">Number of Records</p>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-clock-o"></i>
                                <font color='red'>
                                <?php
                                    include("Db_Connect.php");
                                    $sql = "SELECT COUNT(*) FROM Size";
                                    $rs = mysqli_query($conn, $sql);
                                    $rs1 = mysqli_fetch_row($rs);
                                    echo $rs1[0];
                                ?>
                                </font>
                            </div>
                        </div>
                    </td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>
                        <div class="header">
                            <h4 class="title">Type</h4>
                            <p class="category">Number of Records</p>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-clock-o"></i>
                                <font color='red'>
                                <?php
                                    include("Db_Connect.php");
                                    $sql = "SELECT COUNT(*) FROM Type";
                                    $rs = mysqli_query($conn, $sql);
                                    $rs1 = mysqli_fetch_row($rs);
                                    echo $rs1[0];
                                ?>
                                </font>
                            </div>
                        </div>
                    </td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>
                        <div class="header">
                            <h4 class="title">Product</h4>
                            <p class="category">Number of Records</p>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-clock-o"></i>
                                <font color='red'>
                                <?php
                                    include("Db_Connect.php");
                                    $sql = "SELECT COUNT(*) FROM Product";
                                    $rs = mysqli_query($conn, $sql);
                                    $rs1 = mysqli_fetch_row($rs);
                                    echo $rs1[0];
                                ?>
                                </font>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="header">
                            <h4 class="title">User</h4>
                            <p class="category">Number of Records</p>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-clock-o"></i>
                                <font color='red'>
                                <?php
                                    include("Db_Connect.php");
                                    $sql = "SELECT COUNT(*) FROM User";
                                    $rs = mysqli_query($conn, $sql);
                                    $rs1 = mysqli_fetch_row($rs);
                                    echo $rs1[0];
                                ?>
                                </font>
                            </div>
                        </div>
                    </td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>
                        <div class="header">
                            <h4 class="title">Order</h4>
                            <p class="category">Number of Records</p>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-clock-o"></i>
                                <font color='red'>
                                <?php
                                    include("Db_Connect.php");
                                    $sql = "SELECT COUNT(*) FROM Bill";
                                    $rs = mysqli_query($conn, $sql);
                                    $rs1 = mysqli_fetch_row($rs);
                                    echo $rs1[0];
                                ?>
                                </font>
                            </div>
                        </div>
                    </td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>
                        <div class="header">
                            <h4 class="title">Cart</h4>
                            <p class="category">Number of Records</p>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-clock-o"></i>
                                <font color='red'>
                                <?php
                                    include("Db_Connect.php");
                                    $sql = "SELECT COUNT(*) FROM Kart";
                                    $rs = mysqli_query($conn, $sql);
                                    $rs1 = mysqli_fetch_row($rs);
                                    echo $rs1[0];
                                ?>
                                </font>
                            </div>
                        </div>
                    </td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>
                        <div class="header">
                            <h4 class="title">Feedback</h4>
                            <p class="category">Number of Records</p>
                        </div>
                        <div class="content">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-clock-o"></i>
                                <font color='red'>
                                <?php
                                    include("Db_Connect.php");
                                    $sql = "SELECT COUNT(*) FROM Feedback";
                                    $rs = mysqli_query($conn, $sql);
                                    $rs1 = mysqli_fetch_row($rs);
                                    echo $rs1[0];
                                ?>
                                </font>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
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
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        demo.initChartist();
        $.notify({
            icon: 'pe-7s-gift',
            message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."
        }, {
            type: 'info',
            timer: 4000
        });
    });
</script>

</html>
