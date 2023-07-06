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
      
      
      <!-- Section 1 -->
      <section class="section background-white"> 
        <div class="line">
          <?php
          $uname = $_SESSION['uname'];
          $sql = "SELECT a.*, b.* FROM Product a, Kart b WHERE a.ProductId = b.ProductId AND b.UserName='$uname';";
          
          $result = $conn->query($sql);
          $cnt = 0;
          echo "<table border=1><tr><th><h3><font color='Red'><b>Sr. No.</b></font></h3></th><th><h3><font color='Red'><b>Product Description</b></font></h3></th><th><h3><font color='Red'><b>Size</b></font></h3></th><th><h3><font color='Red'><b>Type</b></font></h3></th><th><h3><font color='Red'><b>Quantity</b></font></h3></th><th><h3><font color='Red'><b>Price</b></font></h3></th><th><h3><font color='Red'><b>Amount</b></font></h3></th><th><h3><font color='Red'><b>Option</b></font></h3></th></tr>";
          $total = 0;
          while ($rs1 = $result->fetch_row()) {
              $total += $rs1[10];
              $cnt++;
              echo "<tr><th><h3>$cnt</h3></th><th><h3>$rs1[3]</h3></th><th><h3>$rs1[1]</h3></th><th><h3>$rs1[2]</h3></th><th><h3>$rs1[9]</h3></th><th><h3>$rs1[5]</h3></th><th><h3>$rs1[10]</h3></th><th><h3><form action='AK2.php' method='post'><input type='hidden' name='id2' value='$rs1[0]'><input type='submit' name='submit' value='Edit Quantity'></form></h3></th></tr>";
          }
          echo "<tr><th colspan=6 align='right'><h3><b>Total</b></h3></th><th><h3>$total</h3></th></tr>";
          $sgst = round($total * 0.09);
          echo "<tr><th colspan=6 align='right'><h3><b>SGST</b></h3></th><th><h3>$sgst</h3></th></tr>";
          echo "<tr><th colspan=6 align='right'><h3><b>CGST</b></h3></th><th><h3>$sgst</h3></th></tr>";
          $gtotal = $total + 2 * $sgst;
          echo "<tr><th colspan=6 align='right'><h3><b>GRAND Total</b></h3></th><th><h3>$gtotal</h3></th></tr>";
          echo "</table>";
          ?>
          <br><br>
          <center><form action="Order.php" method="POST"><input type="submit" name="submit" value="Buy Now"></form></center>
          <div class="margin"></div>
        </div>
      </section>
      
      <!-- Section 2 -->
      
      
      <!-- Section 3 -->
      
      <hr class="break margin-top-bottom-0">
      
      <!-- Section 4 --> 
      
    </main>
    
    <!-- FOOTER -->
    <?php
    include("Footer.php");
    ?>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>   
   </body>
</html>
