<?php
session_start();
error_reporting(1);
include("dbconnection.php");
if(isset($_POST['log']))
{ if($_POST['nm']=="" || $_POST['pwd']=="")
{ $err="fill your name and password first"; }
else 
{$d=mysql_query("select * from register where Name='{$_POST['nm']}' ");
$row=mysql_fetch_object($d);
$fnm=$row->Name;
$fpass=$row->Password; 
if($fnm==$_POST['nm'] && $fpass==$_POST['pwd'])
{$_SESSION['snm']=$_POST['nm'];
header("location:index.php"); 
}
else {$err=" your password is not correct!"; }}
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
        background-image: url(img/login-bg.jpg);
        }
        .login-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            background-color:orange;
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
            background-color:black;
            color:white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        a{
            color:black;
            text-decoration:none;
        }
    </style>
</head>
<body>
<div class="login-container">
    <div class='card login'>
        <form method="post" name="contact">
            <div>
                <label>Username</label>
                <input type="text" name="nm" required/>
            </div><br/>
            <div>
                <label>Password</label>
                <input type="password" name="pwd" required/>
            </div></br>
            <a href='index.php'><b><i>View As A Guest?</b></i></a></br>
            <span>or</span></br>
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
