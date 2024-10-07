<?php
session_start();
error_reporting(1);
include("connection.php");

if (isset($_POST['log'])) {
    if (empty($_POST['nm']) || empty($_POST['pwd'])) {
        $err = "Fill in your name and password first";
    } else {
        $username = mysqli_real_escape_string($con, $_POST['nm']);
        $password = $_POST['pwd'];

        $query = "SELECT * FROM admin WHERE name = '$username' AND password = '$password'";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) == 1) {
            $_SESSION['snm'] = $username;
            header("location: insert.php");
            exit;
        } else {
            $err = "Invalid username or password";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            background: rgb(251, 166, 7);
            background: linear-gradient(105deg, rgba(251, 166, 7, 1) 50%, rgba(240, 79, 4, 1) 80%);
        }
        .login-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            background-color:black;
            color:white;
            text-align: center;
            padding: 20px;
            max-width: 300px;
            border-radius:15px;
        }
        input[type="text"],
        input[type="password"] {
            border-radius:10px;
        }
        input[type="submit"] {
            background-color:darkorange;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="login-container">
    <div class='card login'>
        <form method="post" name="contact">
            <div>
                <label><i>Username</i></label>
                <input type="text" name="nm" required/>
            </div><br/>
            <div>
                <label><i>Password</i></label>
                <input type="password" name="pwd" required/>
            </div><br/>

            <input type="submit" name="log" value="Login"/>
        </form>
        <div>
            <p><?php echo $err; ?></p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
