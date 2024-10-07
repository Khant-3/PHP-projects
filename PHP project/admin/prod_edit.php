<?php
include("header.php");
include("connection.php");

$prod_name = "";
$prod_auth = "";
$prod_prc = "";
$prod_img = "";

if (isset($_GET['prod_id'])) {
    $prod_id = $_GET['prod_id'];

    $sql = "SELECT * FROM products WHERE prod_id = $prod_id";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $prod_name = $row['prod_name'];
        $prod_auth = $row['author'];
        $prod_prc = $row['prices'];
        $prod_img = $row['prod_img'];
    } else {
        echo '<div class="alert alert-danger" role="alert">Product not found!</div>';
    }
} else {
    echo '<div class="alert alert-danger" role="alert">Invalid request!</div>';
}
?>

<style>
    body {
        background: linear-gradient(90deg, rgba(247, 109, 2, 1) 60%, rgba(6, 6, 6, 1) 100%);
        color: #000;
    }

    .edit-form {
        background-color: black;
        width: 600px;
        color: #f60;
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        margin: 20px auto;
    }

    .form-group {
        margin: 10px;
    }

    label {
        color: #f60;
    }

    .btn-container {
        text-align: right;
    }

    .btn {
        background-color: black;
        color: #f60;
        border: 1px solid white;
    }

    .btn:hover {
        background-color: #f60;
        color: black;
        border: 1px solid white;
    }
</style>

<div class="edit-form">
    <h2><b>Edit Product</b></h2>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nm">Name</label>
            <input type="text" name="nm" class="form-control" id="nm" required value="<?php echo $prod_name; ?>">
        </div>
        <div class="form-group">
            <label for="auth">Author</label>
            <input type="text" name="auth" class="form-control" id="auth" required value="<?php echo $prod_auth; ?>">
        </div>
        <div class="form-group">
            <label for="prc">Prices</label>
            <input type="text" name="prc" class="form-control" id="prc" required value="<?php echo $prod_prc; ?>">
        </div>
        <div class="form-group">
            <label for="img"><b>Product Photo</b></label><br>
            <input type="file" name="img" class="form-control-file" id="img" accept="image/*">
        </div>
        <div class="btn-container">
            <button type="submit" name="update" class="btn">Update</button>
        </div>
    </form>
</div>

<?php
if (isset($_POST['update'])) {
    $new_prod_name = mysqli_real_escape_string($con, $_POST['nm']);
    $new_prod_auth = mysqli_real_escape_string($con, $_POST['auth']);
    $new_prod_prc = mysqli_real_escape_string($con, $_POST['prc']);
    $new_prod_img = $_FILES['img']['name'];

    $upload_dir = "image/";

    $update_sql = "UPDATE products SET prod_name = '$new_prod_name', author = '$new_prod_auth', prices = '$new_prod_prc', prod_img = '$new_prod_img' WHERE prod_id = $prod_id";

    if ($_FILES['img']['name'] != "") {
        if (!empty($prod_img) && file_exists($upload_dir . $prod_img)) {
            unlink($upload_dir . $prod_img);
        }

        move_uploaded_file($_FILES['img']['tmp_name'], $upload_dir . $_FILES['img']['name']);
    }

    if (mysqli_query($con, $update_sql)) {
        echo '<div class="alert alert-success" role="alert">Product updated successfully!</div>';
        header('Location: product.php');
        exit;
    } else {
        echo '<div class="alert alert-danger" role="alert">Product update failed!</div>';
    }
}
?>
