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
    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />


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
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#navigation-example-2">
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
                                        <h4 class="title">Product</h4>
                                        <td> &nbsp;</td>
                                        <form action="" method="POST" enctype="multipart/form-data">

                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Product Id</label>
                                                        <input type="text" name="ProductId" class="form-control"
                                                            placeholder="ProductId">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label> Size </label>
                                                        <br>
                                                        <?php
                                                        include("Db_Connect.php");
                                                        $sql = "SELECT * FROM Size";
                                                        $result = $conn->query($sql);
                                                        echo "<select name='Psize'>";
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo "<option value='" . $row['column_name'] . "'>" . $row['column_name'] . "</option>";
                                                        }
                                                        echo "</select>";
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Type</label>
                                                        <br>

                                                        <?php
                                                        include("Db_Connect.php");
                                                        $sql = "SELECT * FROM Type";
                                                        $result = $conn->query($sql);
                                                        echo "<select name='Ptype'>";
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo "<option value='" . $row['column_name'] . "'>" . $row['column_name'] . "</option>";
                                                        }
                                                        echo "</select>";
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label> Product Description </label>

                                                        <input type="text" name="Desc" class="form-control"
                                                            placeholder="Description">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Product Image</label>

                                                        <input type="file" class="form-control" name="image"
                                                            placeholder="Image">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Product Price </label>

                                                        <input type="text" name="ProductPrice" class="form-control"
                                                            placeholder="Price">
                                                    </div>
                                                </div>
                                            </div>
                                            <td> &nbsp; </td>
                                            <td> &nbsp; </td>
                                            <td> &nbsp; </td>
                                            <td> &nbsp; </td>
                                            <td> &nbsp; </td>
                                            <td> &nbsp; </td>
                                            <td> &nbsp; </td>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="submit" name="submit" class="form-control"
                                                            value="Add">

                                        </form>

                                    </div>
                                </div>
                            </div>
                            <?php
include("db_Connect.php");
$sql = "SELECT * FROM Product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' width='100%'>";
    echo "<tr> <th> ProductId </th> <th> Size </th><th> Type </th><th> ProductDesc </th><th> Image </th> <th> ProductPrice </th> <th> Option </th></tr>";

    while ($row = $result->fetch_assoc()) {
        $productId = isset($row['ProductId']) ? $row['ProductId'] : "";
        $size = isset($row['Size']) ? $row['Size'] : "";
        $type = isset($row['Type']) ? $row['Type'] : "";
        $productDesc = isset($row['ProductDesc']) ? $row['ProductDesc'] : "";
        $image = isset($row['Image']) ? $row['Image'] : "";
        $productPrice = isset($row['ProductPrice']) ? $row['ProductPrice'] : "";

        echo "<tr>";
        echo "<td>".$productId."</td>";
        echo "<td>".$size."</td>";
        echo "<td>".$type."</td>";
        echo "<td>".$productDesc."</td>";
        echo "<td><img src='Image/".$image."' height='75' width='75'></td>";
        echo "<td>".$productPrice."</td>";
        echo "<td><a href='DelProduct.php?id=".$productId."'><img src='del.jpg' height='30' width='30'></a> <a href='UpdProduct.php?id1=".$productId."'><img src='update.png' height='30' width='30'></a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No products found.";
}

$conn->close();
?>





<?php
if (isset($_POST['submit'])) {
    include("Db_Connect.php");
    
    $pid = $_POST['ProductId'];
    $psize = $_POST['Psize'];
    $Ptype = $_POST['Ptype'];
    $Pdesc = $_POST['ProductDesc']; // Corrected column name
    $Pimage = $_FILES['image']['name'];
    $Ptimage = $_FILES['image']['tmp_name'];
    move_uploaded_file($Ptimage, "Image/$Pimage");
    $Pprice = $_POST['ProductPrice'];

    // Prepare the SQL statement with placeholders
    $stmt = $conn->prepare("INSERT INTO Product (ProductId, Size, Type, ProductDesc, Image, ProductPrice) VALUES (?, ?, ?, ?, ?, ?)");

    // Bind the parameter values to the placeholders
    $stmt->bind_param("ssssss", $pid, $psize, $Ptype, $Pdesc, $Pimage, $Pprice);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Record is inserted');</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
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
    <br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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