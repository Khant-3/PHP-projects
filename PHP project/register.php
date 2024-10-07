<?php include('header.php') ?>
<style>
    body{
        background-image: url(img/reg-bg.jpg);
    }
    form {
            background-color:black;
            color:orange;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 15px;
    }
    label {
            display: block;
            margin-bottom: 10px;
    }
    input[type="text"],
    input[type="email"],
    input[type="number"],
    input[type="password"],
    input[type="date"],
    input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
    }
    input[type="submit"] {
            background-color:orange;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
    }
    h4{
        text-align:center;
    }
</style>
<?php
error_reporting(1);
include('dbconnection.php');
if($_POST['reg']){
    $name = $_POST['r1'];
    $email = $_POST['r2'];
    $mob = $_POST['r3'];
    $pass = $_POST['r4'];
    $bd = $_POST['r5'];
if(mysql_query("insert into register(Name,Email,Mobile,Password,Birthday) values ('$name','$email','$mob','$pass','$bd')")){
    header("location:index.php");}
    else{
        $error = "User Already Exists!";
    }}
?>
<br/><div class='card reg-f'>
<form method='post'><br/>
    <h4><b>Register Form</b></h4><br/>
    <label><b>Name :</b></label>
    <input type='text' name='r1' required/><br/><br/>

    <label><b>Email :</b></label>
    <input type='email' name='r2' required/><br/><br/>

    <label><b>Mobile :</b></label>
    <input type='number' name='r3' required/><br/><br/>

    <label><b>Password :</b></label>
    <input type='password' name='r4' required/><br/><br/>

    <label><b>Birthday :</b></label>
    <input type='date' name='r5' required/><br/><br/>

    &nbsp;<input type='submit' name='reg' value='Register'/><br/><br/>
</form>
</div>
<?php include('footer.php') ?>