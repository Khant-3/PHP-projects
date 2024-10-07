<?php include('header.php'); ?>
<style>
    body {
        background: rgb(251,166,7);
        background: linear-gradient(105deg, rgba(251,166,7,1) 50%, rgba(240,79,4,1) 80%);
    }

    .card {
        border: 2px solid;
        border-radius: 10px;
        font-family: cursive;
    }
</style>
<?php
error_reporting(1);
include("dbconnection.php");

$sel = mysql_query("SELECT * FROM products");

if (!$sel) {
    die("Query failed: " . mysql_error());
}

$checklg = isset($_SESSION['snm']);;
?>

<div class="container">
    <div class="row">
        <?php
        $count = 0;

        while ($arr = mysql_fetch_array($sel)) {
            $i = $arr['prod_img'];
        ?>
            <div class="col-md-3 mb-4"></br>
                <div class="card">
                    <img src="admin/image/<?php echo $i; ?>" class="card-img-top" alt="Product Image" style="height:230px;">
                    <div class="card-body bg-dark text-light">
                        <h5 class="card-title"><?php echo $arr['prod_name']; ?></h5>
                        <p class="text-secondary">by <?php echo $arr['author']; ?></p>
                        <p class="card-text">Price: <?php echo $arr['prices']; ?>ks</p>
                        <?php
                        if ($checklg) {
                            echo '<a href="order.php?prod_id=' . $arr['prod_id'] . '" class="btn btn-warning">Order</a>';
                        } else {
                            echo '<a href="login.php" class="btn btn-danger">Login</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <?php
            $count++;
            if ($count % 4 == 0) {
                echo '</div><div class="row">';
            }
            ?>
        <?php
        }
        ?>
    </div>
</div>

<?php
mysql_close($con);
include('footer.php');
?>
