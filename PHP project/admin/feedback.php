<?php include("header.php"); ?>

<style>
    body {
        background: linear-gradient(90deg, rgba(247, 109, 2, 1) 60%, rgba(6, 6, 6, 1) 100%);
        color: #000;
    }

    #fb-body {
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

<div id="fb-body">
    <h2 align="center"><b><i>View Feedbacks</br></br></b></i></h2>
    <table>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
        </tr>
        <?php
        error_reporting(1);
        include("connection.php");

        $sel = $con->query("SELECT * FROM feedback");

        while ($row = $sel->fetch_assoc()) {
            $id = $row['no'];
            $name = $row['username'];
            $email = $row['email'];
            $phone = $row['phone'];
            $mesg = $row['messages'];
        ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $phone; ?></td>
            <td><?php echo $mesg; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>

<?php include("footer.php"); ?>
