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
<body background="1.jpg">

<div class="wrapper">
    

    

        <div class="content">
            <div class="container-fluid">
                
                            


 <div class="row">
 
                    <form action="" method="POST">
					
					<center>
				
				<br><br><br><br><br><br><br><br><br><br><br><br>
				<h1> Change Password	</h1> 
					<br>
					<br>
					<table>
					<tr> <td><font size="5" color="red"> User Name</td><td> &nbsp;</td><td><input type="text" name="uname"></td></tr>
					<tr> <td coslpan=3> &nbsp; </td> </tr>
					<tr> <td><font size="5" color="red"> Existing Password</td><td> &nbsp;</td><td><input type="Password" name="epass"></td></tr>
					<tr> <td coslpan=3> &nbsp; </td> </tr>
					
					<tr> <td><font size="5" color="red"> New Password</td> <td> &nbsp;</td><td> <input type="password" name="npass"></td></tr>
					<tr> <td coslpan=3> &nbsp; </td> </tr>
					<tr> <td><font size="5" color="red"> Confirm Password</td><td> &nbsp;</td><td><input type="Password" name="cpass"></td></tr>
					<tr> <td coslpan=3> &nbsp; </td> </tr>
					<tr><td><center><font size="5" color="blue"> <input type="submit" name="submit" value="Change"></center></td></tr>
					</table></center>
					</form>

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
		$Uname=$_POST['uname'];
		$Epass=$_POST['epass'];
		$Npass=$_POST['npass'];
		$Cpass=$_POST['cpass'];
	include("Db_Connect.php");
	$rs=mysql_query("select ExistingPassword from ChangePassword where UserName='$Uname'");
	while($rs1=mysql_fetch_row($rs))
	{
		if(!$rs)
		{
			echo"The UserName Does not Exist";
		}
			
		elseif($Epass!=mysql_result($rs,0))
		{
			echo"You Entered Incorrect Password";
			
		}
			if($Npass=$Cpass)
				$sql=mysql_query("update ChangePassword set NewPassword='$Npass' where UserName='$Uname'");
		if($sql)
		{
			echo "You Have Successful Change Password";
		}
		else{
			echo"Password Does Not Match";
		}
		
		
		}
		
		
		
	
	
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
