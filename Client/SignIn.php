<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tiles Management System</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="js/validation.js"></script> 
  </head>  
  
  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->
  	<a target="_blank" class="hide-s" href="../template/prospera-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
    <!-- HEADER -->
    <?php
		include("Header.php");
		
		?>
    <!-- MAIN -->

<main role="main">
      <!-- Content -->
      <article>
        <header class="section background-primary text-center">
          <h1 class="text-white margin-bottom-0 text-size-40 text-thin text-line-height-1">Sign In</h1>
        </header>
        <div class="section background-white"> 
          <div class="line">
            <div class="margin">
<form action="" method="POST">
					
		
		
			
					<table>
					<tr><td><center><font size="4" color="red"> User Name</td><td><input type="text" name="uname"></center></td></tr>
					
					<tr><td><center><font size="4" color="red"> Password</td> <td> <input type="password" name="pass"></center></td></tr>
					
					<tr> <td><center> <font size="20" color="blue"> <input type="submit" name="submit" value="login"></center></td></tr>
					</table>
					</form>


    <br><br>
    </div>  

  
          </div>
        </div> 
      </article>
    </main>
      <?php
  if(isset($_POST['submit']))
  {
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $rt="Client";
  include("Db_Connect.php");
  $sql="select * from Login";
  $rs=mysql_query($sql);
  while($rs1=mysql_fetch_row($rs))
  {
    if($uname==$rs1[0] && $pass==$rs1[1] && $rt==$rs1[2])
    {
      $_SESSION['uname']=$uname;
      
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

    <!-- FOOTER -->
    <?php
	
	include ("Footer.php");
	?>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>   
   </body>
</html>