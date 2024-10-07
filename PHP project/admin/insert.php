<?php
include('header.php');
include('connection.php');
error_reporting(1);

if (isset($_POST['add'])) {
    $nm = mysqli_real_escape_string($con, $_POST['nm']);
    $auth = mysqli_real_escape_string($con, $_POST['auth']);
    $prc = mysqli_real_escape_string($con, $_POST['prc']);
    $img = $_FILES['img']['name'];

    $upload_dir = "image/";

    $qry = "INSERT INTO products (prod_name, author,prices,prod_img) VALUES ('$nm', '$auth', '$prc', '$img')";
    $result = mysqli_query($con, $qry);

    if ($result) {
        move_uploaded_file($_FILES['img']['tmp_name'], $upload_dir . $_FILES['img']['name']);

        $err = '<div class="alert alert-success" role="alert">Item inserted successfully!</div>';
    } else {
        $err = '<div class="alert alert-danger" role="alert">Item is not inserted!</div>';
    }
}

mysqli_close($con);
?>

<style>
    body {
        background-color: #f60;
    }

    .mt-4 {
        text-align: center;
    }

    .container {
        background-color: black;
        width: 600px;
        color: #f60;
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
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

<div class="container">
    <h2 class="mt-4"><b><i>Add Books</i></b></h2>
    <form method="post" enctype="multipart/form-data" class="mt-3">
        <div class="form-group">
            <label for="nm"><b>Name</b></label>
            <input type="text" name="nm" class="form-control" id="nm" required>
        </div></br>
        <div class="form-group">
            <label for="auth"><b>Author</b></label>
            <input type="text" name="auth" class="form-control" id="auth" required>
        </div></br>
        <div class="form-group">
            <label for="img"><b>Product Photo</b></label></br>
            <input type="file" name="img" class="form-control-file" id="img" accept="image/*" required>
        </div></br>
        <div class="form-group">
            <label for="prc"><b>Prices</b></label>
            <input type="text" name="prc" class="form-control" id="prc" required>
        </div></br>
        <div class="btn-container">
            <button type="submit" name="add" class="btn">Insert</button>
        </div>
    </form></br>

    <?php echo isset($err) ? $err : ''; ?>
</div>

<?php include('footer.php'); ?>
