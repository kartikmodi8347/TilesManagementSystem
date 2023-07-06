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
    <header class="section background-primary text-center">
          <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Silk Sattin</h1>
        </header>
    <!-- MAIN -->
    <main role="main">
      <!-- Main Carousel -->
      
      
      <!-- Section 1 -->
      <section class="section background-white"> 
        <div class="line">
          <div class="margin">

            <?php
                include("Db_Connect.php");
                $sql="select * from Product where Type='Silk Sattin'";
                $rs=mysql_query($sql);
                while($rs1=mysql_fetch_row($rs))
                {
            ?>


            <div class="s-12 m-12 l-3 margin-m-bottom">
              <img class="margin-bottom" src="images/<?php echo $rs1[4]; ?>" alt="">
              <h2 class="text-thin"><?php echo $rs1[3]; ?></h2>
              <p><font color="Red"><b> Price : </b> </font><?php echo $rs1[5]; ?> &nbsp;<font color="Red"><b> Size : </b> </font><?php echo $rs1[1]; ?> &nbsp; <font color="Red"><b> Type : </b> </font><?php echo $rs1[2]; ?>  </p> 
               <form action="AK1.php" method="POST"><input type="text" name="qty" placeholder="Number of Quantity"> <input type="hidden" name="id" value="<?php echo $rs1[0]; ?>"> <input type="submit" name="submit" value="Add To Kart" > </form>          
            </div>
           
	           <?php
                }
            ?>
			
          </div>
        </div>
      </section>
      
      <!-- Section 2 -->
      
      
      <!-- Section 3 -->
      
      <hr class="break margin-top-bottom-0">
      
      <!-- Section 4 --> 
      
    </main>
    
    <!-- FOOTER -->
    <?php
	
	include ("Footer.php");
	?>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>   
   </body>
</html>