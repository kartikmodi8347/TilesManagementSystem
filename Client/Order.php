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
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet'
    type='text/css'>
  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/validation.js"></script>
</head>

<body class="size-1140">
  <!-- PREMIUM FEATURES BUTTON -->
  <a target="_blank" class="hide-s" href="../template/prospera-premium-responsive-business-template/"
    style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
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
        include("Db_Connect.php");
        $uname = $_SESSION['uname'];
        $rs = mysqli_query($conn, $sql); // Assuming you have established a proper MySQLi connection in Db_Connect.php
        $cnt = 0;
        $sql = "select count(*) from Bill";
        $rs = mysqli_query($conn, $sql);
        $rs1 = mysqli_fetch_row($rs);
        $t = $rs1[0] + 1;
        $t = 'B00' . $t;
        $sql = "select * from Kart where UserName='$uname'";
        $rs = mysqli_query($conn, $sql);

        while ($rs1 = mysqli_fetch_row($rs)) {
          $sql = "insert into Bill values ('$t', '$rs1[1]', '$rs1[2]', $rs1[3], $rs1[4], 0)";
          mysqli_query($conn, $sql);
        }

        $sql = "delete from Kart where UserName='$uname'";
        mysqli_query($conn, $sql);

        echo "<h4 align='right'><font color='red'><b> BONI MODI <font color='blue'> 9409274296</font></b></font></h4>";
        echo "<center><h1 style='font-family:Gabriola'><font color='Red'size='3000'><b><u> GALAXY TILES  </u></b></h1></font></center>";
        echo "<h3><center><b> 46-47-48 GALAXY AVENUE,<br>OPP. P. P. COMPLEX, BUS STATION ROAD, PATAN <br>Email: galaxytiles46@gmail.com </b></center> <h3>";
        echo "<hr>";

        $sql = "SELECT * FROM  Bill  WHERE  UserName='$uname' and BillId='$t'";
        $rs = mysqli_query($conn, $sql);
        $rs1 = mysqli_fetch_row($rs);
        $uname = $_SESSION['uname'];
        $sql1 = "SELECT * FROM  User  WHERE  UserName='$uname'";
        $rs5 = mysqli_query($conn, $sql1);
        $rs6 = mysqli_fetch_row($rs5);

        echo "<table>";
        echo "<tr><td><b> Customer Name: <u>$uname</u></b></td><td><b> Customer Address: <u>";
        echo isset($rs6[6]) ? $rs6[6] : ""; // Check if $rs6[6] is set, if not, display an empty string
        echo "</u></b></td></tr>";
        echo "<tr><td><b> Bill Id: <u>";
        echo isset($rs1[0]) ? $rs1[0] : ""; // Check if $rs1[0] is set, if not, display an empty string
        echo "</u></b></td><td><b> City: <u>";
        echo isset($rs6[7]) ? $rs6[7] : ""; // Check if $rs6[7] is set, if not, display an empty string
        echo "</u> &nbsp; &nbsp; &nbsp; &nbsp; Postal Code: <u>";
        echo isset($rs6[9]) ? $rs6[9] : ""; // Check if $rs6[9] is set, if not, display an empty string
        echo "</u></b></td></tr>";
        $today = date("d/m/Y");
        echo "<tr><td><b> Bill Date: <u>$today</u></b></td><td><b> Email Id: <u>";
        echo isset($rs6[3]) ? $rs6[3] : ""; // Check if $rs6[3] is set, if not, display an empty string
        echo "</u></b></td></tr>";
        echo "</table>";


        $sql = "SELECT a . * , b . * FROM Product a, Bill b WHERE a.ProductId = b.ProductId and b.UserName='$uname' and b.BillId='$t'";
        $rs = mysqli_query($conn, $sql);
        $cnt = 0;
        echo "<table border=1><tr><th><h3><font color='Red'><b>Sr. No.</b> </font></h3></th> <th><h3><font color='Red'><b> Product Description </b></font></h3></th><th><h3><font color='Red'><b> Size </b></font></h3></th><th><h3><font color='Red'><b> Type </b></font></h3></th><th><h3><font color='Red'><b> Quantity </b></font></h3></th><th><h3><font color='Red'><b> Price </b></font></h3></th><th><h3><font color='Red'><b> Amount </b> </font></h3></th></tr>";
        $total = 0;

        while ($rs1 = mysqli_fetch_row($rs)) {
          $total += $rs1[10];
          $cnt++;
          echo "<tr> <th><h3> $cnt </h3></th> <th><h3> $rs1[3] </h3></th><th><h3> $rs1[1] </h3></th><th><h3> $rs1[2] </h3></th><th><h3> $rs1[9] </h3></th><th><h3> $rs1[5]</h3></th><th><h3> $rs1[10] </h3></th> </tr>";
        }

        $sgst = round($total * 0.09);
        echo "<tr> <th colspan=6 align='right'><h3> Total </h3></th> <th><h3> $total </h3></th> </tr>";
        echo "<tr> <th colspan=6 align='right'><h3> SGST </h3></th> <th><h3> $sgst </h3></th> </tr>";
        echo "<tr> <th colspan=6 align='right'><h3> CGST </h3></th> <th><h3> $sgst </h3></th> </tr>";
        $gtotal = $total + 2 * $sgst;
        echo "<tr> <th colspan=6 align='right'><h3> GRAND Total </th> <th><h3> $gtotal </h3> </th> </tr>";
        echo "</table>";
        echo "<br>";
        echo "<h1><font color='Red'><b> Note : </b></font></h1>";
        echo "<b><font color='blue'> When You Can Transfer Your Money In This Account Then Your Goods Will Delivered In Your Door Steps.</font></b>";
        echo "<br><br>";
        echo "<table border=1><tr><td><h3><font color='Red'><b> A/C NO :</b></font>&nbsp;22020489856</h3></td></tr>";
        echo "<tr><td><h3><font color='Red'><b> A/C Name :</b></font>&nbsp; MODI BONI DHARMENDRA BHAI</h3></td></tr>";
        echo "<tr><td><h3><font color='Red'><b> IFSC Code :</b></font>&nbsp;8874523 </h3></td></tr>";
        echo "<tr><td><h3><font color='Red'><b> MICR Code :</b></font>&nbsp;774586</h3></td></tr>";
        echo "</table>";
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

  <script type="text/javascript" src="js/responsee.js"></script>
  <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
  <script type="text/javascript" src="js/template-scripts.js"></script>
</body>

</html>