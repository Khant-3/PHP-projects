<?php
include("header.php");
include("connection.php");

if (isset($_GET['prod_id'])) {
    $prod_id = $_GET['prod_id'];

    $check_sql = "SELECT * FROM products WHERE prod_id = $prod_id";
    $check_res = mysqli_query($con, $check_sql);

    if (mysqli_num_rows($check_res) == 1) {
        $del_sql = "DELETE FROM products WHERE prod_id = $prod_id";
        $del_res = mysqli_query($con, $del_sql);

        if ($del_res) {
            $prod_info = mysqli_fetch_assoc($check_res);
            $del_img = $prod_info['prod_img'];
            $img_path = "image/" . $del_img;
            
            if (file_exists($img_path)) {
                unlink($img_path);
            }
            echo '<div class="alert alert-success" role="alert">Product deleted successfully!</div>';
            header('Location: product.php');
            exit;
        }
    } 
} 
?>
