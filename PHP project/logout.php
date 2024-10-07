<?php
session_start();
unset($_SESSION['snm']);
header('location:login.php');
?>