<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookHaven</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <span class="text-light">Admin</span>
    <span class="logo-txt">Panel</span>
  </a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-warning" href="insert.php">
        <b><i>Insert Books</i></b>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-warning" href="product.php"><b><i>Books</i></b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-warning" href="order.php"><b><i>Orders</i></b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-warning" href="feedback.php"><b><i>Feedbacks</i></b></a>
      </li>
      <?php
      if (isset($_SESSION['snm'])) {
      echo '<li class="nav-item"><a class="nav-link text-danger" href="logout.php"><b><i>Log out</i></b></a></li>';
      } else {
      echo '<li class="nav-item"><a class="nav-link text-success" href="index.php"><b><i>Login</i></b></a></li>';
      }
      ?>
    </ul>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>