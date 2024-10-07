<?php include('header.php'); ?>
<style>
    body {
        background-image: url(img/order-bg.jpg);
    }

    .container {
        background-color: black;
        color: white;
        width:400px;
        height:630px;
        padding: 20px;
        border: 1px solid darkorange;
        border-radius: 15px;
    }
    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 10px;
        font:20px bold ;
        font-family:cursive;
    }

    button[type="submit"] {
        background-color: white;
        padding: 10px 20px;
        border: 2px solid darkorange;
        border-radius: 5px;    
        cursor: pointer;
    }
    button[type="submit"]:hover{
        background-color:orange;
    }
    h4 {
        text-align: center;
    }
</style>

<?php
error_reporting(1);
include("dbconnection.php");
if (isset($_GET['prod_id'])) {
    $selpid = $_GET['prod_id'];

    $sel = mysql_query("SELECT * FROM products WHERE prod_id = $selpid");

    if (!$sel) {
        die("Query failed: " . mysql_error());
    }

    while ($order = mysql_fetch_array($sel)) {
        echo '</br><div class="container">';
        echo '<form method="post">';
        echo '<h4><b><i>Check Your Order!</i></b></h4>';
        echo '<div class="form-group">';
        echo '<label for="prod_name"><b><i>Book Name:</i></b></label>';
        echo "<input type='text' name='prod_name' class='form-control' id='prod_name' value='" . $order['prod_name'] . "' readonly>";
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label for="prices"><b><i>Price:</i></b></label>';
        echo "<input type='text' name='prices' class='form-control' id='prices' value='" . $order['prices'] . " ks' readonly>";
        echo '</div>';
        echo '<div class="form-group">';
        echo '<label for="username"><b><i>Username:</i></b></label>';
        echo "<input type='text' name='username' class='form-control' id='username' placeholder='Enter your username' required>";
        echo '</div>';
        echo '<div class="form-group">';
        echo "<label for='ph_no'><b><i>Phone Number:</i></b></label>";
        echo "<input type='text' name='ph_no' class='form-control' id='ph_no' placeholder='Enter your phone number' required>";
        echo '</div>';
        echo '<div class="form-group">';
        echo "<label for='address'><b><i>Address:</i></b></label>";
        echo "<input type='text' name='address' class='form-control' id='address' placeholder='Enter your address' required>";
        echo '</div>';
        echo '<div class="form-group" style="text-align: center;">';
        echo '<button type="submit" name="submit"><b><i>Submit</i></b></button>';
        echo '</div>';
        echo '</form>';
        echo '</div>';
        if (isset($_POST['submit'])) {
            $prod_name = $order['prod_name'];
            $prices = $order['prices'];
            $username = $_POST['username'];
            $ph_no = $_POST['ph_no'];
            $address = $_POST['address'];

            $insert = "INSERT INTO orders (prod_name, prices, user, ph_num, addr) VALUES ('$prod_name', '$prices', '$username', '$ph_no', '$address')";
            $insert_ord = mysql_query($insert);

        }
        if($insert_ord){
            header('location: ordersent.php');
            exit;
        }
    }
} else {
    echo "No product ID provided.";
}
?>

<?php include('footer.php'); ?>
