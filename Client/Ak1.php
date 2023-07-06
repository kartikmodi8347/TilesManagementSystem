<?php
session_start();
$id = $_POST['id'];

if (isset($_POST['submit'])) {
    include("DB_Connect.php");

    $sql = "select count(*) from Kart";
    $result = $conn->query($sql);
    $rs1 = $result->fetch_row();
    $t = $rs1[0];
    $t = $t + 1;
    $kid = 'K00' . $t;
    $qty = $_POST['qty'];

    $sql = "select ProductPrice from Product where ProductId='$id'";
    
    // Replace 'your_username_here' with the actual username value
    $_SESSION['uname'] = 'root';
    $uname = $_SESSION['uname'];

    $result = $conn->query($sql);
    $rs1 = $result->fetch_row();
    $price = $rs1[0];
    $amt = $qty * $price;

    $sql = "insert into Kart values ('$kid', '$id', '$uname', $qty, $amt)";
    $conn->query($sql);

    header("location: AK.php");
}
?>
