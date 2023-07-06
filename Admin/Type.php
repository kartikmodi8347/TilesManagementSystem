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

                                <h2 class="title">Type</h2>
								<td> &nbsp;</td>
                                <form action="" method="POST" enctype="multipart/form-data">
								
                                    <div class="row">
									

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Type Id</label>
                                                <input type="text" class="form-control" name="typeid" placeholder="TypeId" >
                                            </div>
                                        </div>
								</div>
                                <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Type Name</label>
									
                                                <input type="text" class="form-control" name="typename" placeholder="TypeeName" >
                                            </div>
                                        </div>
								</div>
                     <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Image</label>
									
                                                <input type="file" class="form-control" name="image" placeholder="Image" >
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
					 <input type="submit" class="form-control" name="submit" value="Add" >
					 
				
					</form>
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
		</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
        
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
<?php
    include("Db_Connect.php");
    
    if (isset($_POST['submit'])) {
        $tid = $_POST['typeid'];
        $tname = $_POST['typename'];
        $timage = $_FILES['image']['name'];
        $ttimage = $_FILES['image']['tmp_name'];
        move_uploaded_file($ttimage, "Image/$timage");
        $sql = "INSERT INTO Type (typeid, typename, image) VALUES ('$tid', '$tname', '$timage')";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            echo "<script>alert('Record is Added');</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }
    }
    
    $sql = "SELECT * FROM Type";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<table border=1 width=100%>";
        echo "<tr> <th> Id </th> <th> Tiles Type </th> <th> Image </th><th> Option </th></tr>";
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr> <td>" . $row['typeid'] . "</td> <td>" . $row['typename'] . "</td> <td> <img src='Image/" . $row['image'] . "' height=75 width=75> </td><td> <a href='DelType.php?id=" . $row['typeid'] . "'><img src='del.jpg' height=30 width=30'></a> <a href='UpdType.php?id1=" . $row['typeid'] . "'><img src='update.png' height=30 width=30'></a> </td></tr>"; 
        }
        
        echo "</table>";
    }
?>








