<?php include("header.php"); ?>

<style>
    body {
        background: linear-gradient(90deg, rgba(247, 109, 2, 1) 60%, rgba(6, 6, 6, 1) 100%);
        color: #000;
    }

    #odr-body {
        padding: 20px;
        margin: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid #fff;
    }

    th, td {
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #f60;
    }

    tr:nth-child(even) {
        background-color: black;
        color: white;
    }

    tr:nth-child(odd) {
        background-color: darkgrey;
        color: black;
    }

    .product-image {
        max-width: 100px;
        max-height: 100px;
    }

</style>

<div id="odr-body">
    <h2 align="center"><b><i>View Products</b></i></h2></br>
    <table>
        <tr>
            <th>No.</th>
            <th>Product Name</th>
            <th>Author</th>
            <th>Price</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        <?php
        error_reporting(1);
        include("connection.php");

        $sel = $con->query("SELECT * FROM products");

        while ($row = $sel->fetch_assoc()) {
            $no = $row['prod_id'];
            $pname = $row['prod_name'];
            $author = $row['author'];
            $price = $row['prices'];
            $image = $row['prod_img'];
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $pname; ?></td>
            <td><?php echo $author; ?></td>
            <td><?php echo $price; ?>Ks</td>
            <td><img src="image/<?php echo $image; ?>" alt="Product Image" class="product-image"></td>
            <td>
                <a href="prod_edit.php?prod_id=<?php echo $no; ?>" class="btn btn-success">Edit</a>
                <a href="prod_delete.php?prod_id=<?php echo $no; ?>" class="btn btn-warning">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>
<?php include('footer.php');?>