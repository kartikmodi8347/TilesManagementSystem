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
             $uname=$_SESSION['uname'];
             $sql="SELECT a.*, b.* FROM Product a, Kart b WHERE a.ProductId = b.ProductId AND b.UserName='$uname';";
              
              $result = $conn->query($sql);
              $cnt=0;
               echo "<table border=1><tr> <th> Sr. No. </th> <th> Product Description </th><th> Size </th><th> Type </th><th> Quantity </th><th> Price </th><th> Amount </th><th> Option </th></tr>";
               $total=0;
               $id2=$_POST['id2'];
              while($rs1 = $result->fetch_row())
              {
                  $total+=$rs1[10];
                  $cnt++;
                  if($rs1[0]==$id2)
                  {
                   echo "<tr> <th> $cnt </th> <th> $rs1[3] </th><th> $rs1[1] </th><th> $rs1[2] </th><th> <form action='upq.php' method='POST'> <input type='text' name='qty1'> <input type='hidden' name='id' value='$rs1[0]'><input type='hidden' name='id1' value='$rs1[5]'> </th><th> $rs1[5]</th><th> $rs1[10] </th> <th>  <input type='submit' name='submit' value='Update'> </form></th> </tr>";
                  }
                  else
                  {
                    echo "<tr> <th> $cnt </th> <th> $rs1[3] </th><th> $rs1[1] </th><th> $rs1[2] </th><th> $rs1[9] </th><th> $rs1[5]</th><th> $rs1[10] </th> <th>  <input type='submit' name='submit' value='Update'> </form></th> </tr>";
                  }

              }
              echo "<tr> <th colspan=6 align='right'> Total </th> <th> $total </th> </tr>";
              echo "</table>";
          ?>
          <div class="margin">

          
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
    include("Footer.php");
    ?>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>   
   </body>
</html>
