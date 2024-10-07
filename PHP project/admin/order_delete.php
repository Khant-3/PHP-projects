<?php
include("connection.php");

if (isset($_GET['order_no'])) {
    $order_no = $_GET['order_no'];

    $del_sql = "DELETE FROM orders WHERE order_no = $order_no";
    $res = mysqli_query($con, $del_sql);
}
header('Location: order.php');
?>