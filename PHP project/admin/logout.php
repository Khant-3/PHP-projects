<?php
session_start();
unset($_SESSION['snm']);
header('location:index.php');
?>