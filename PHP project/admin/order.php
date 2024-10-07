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
        color:white;
    }

    tr:nth-child(odd) {
        background-color: darkgrey;
        color:black;
    }
</style>

<div id="odr-body">
    <h2 align="center"><b><i>View Orders </br></br></b></i></h2>
    <table>
        <tr>
            <th>No.</th>
            <th>Prod_Name</th>
            <th>Price</th>
            <th>Username</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php
        error_reporting(1);
        include("connection.php");

        $sel = $con->query("SELECT * FROM orders");

        while ($row = $sel->fetch_assoc()) {
            $no = $row['order_no'];
            $pname = $row['prod_name'];
            $prc = $row['prices'];
            $user = $row['user'];
            $phone= $row['ph_num'];
            $addr = $row['addr']
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $pname; ?></td>
            <td><?php echo $prc; ?></td>
            <td><?php echo $user; ?></td>
            <td><?php echo $phone; ?></td>
            <td><?php echo $addr; ?></td>
            <td>
                <a href="order_delete.php?order_no=<?php echo $no; ?>" class="btn btn-warning">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>

<?php include("footer.php"); ?>
