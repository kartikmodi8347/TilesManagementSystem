<?php
session_start();
include("Db_Connect.php");
$uname = $_GET['id'];
$_SESSION['suname'] = $uname;
$billid = $_GET['id1'];
$sql = "UPDATE Bill SET Status = 1 WHERE UserName = '$uname' AND BillId = '$billid'";
echo $sql;
$result = $conn->query($sql);
if ($result) {
    header("location: summary.php");
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
