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
      <!-- Main Carousel -->
      <section class="section background-dark">
        <div class="line">
          <div class="carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-wide-arrows">
            
            
			<?php
				include("Db_Connect.php");
				$sql="select * from Images where status = 0";
				$rs=mysql_query($sql);
				while($rs1=mysql_fetch_row($rs))
				{
			?>
			<div class="item">
              <div class="s-12 center">
                <img src="images/<?php echo $rs1[2]; ?>" alt="<?php echo $rs1[1]; ?>">
                <div class="carousel-content">
                  <div class="padding-2x">
                    <div class="s-12 m-12 l-8">
                      <p class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1"><?php echo $rs1[1]; ?></p>
                          
                    </div>                  
                  </div>
                </div>
              </div>
            </div>
			
			<?php
				}
			?>
			
			
			
			
          </div>  
        </div>
      </section>
      
      <!-- Section 1 -->
      <section class="section background-white"> 
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <img class="margin-bottom" src="img/1_7.png" alt="">
              <h2 class="text-thin">Kitchen Tiles</h2>
                              
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <img class="margin-bottom" src="img/1_12.png" alt="">
              <h2 class="text-thin">Floor Tiles</h2>
                             
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <img class="margin-bottom" src="img/1_16.png" alt="">
              <h2 class="text-thin">Bathroom Tiles</h2>
              
            </div>
	
			
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