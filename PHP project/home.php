<?php 
include('header.php');
$checklg = isset($_SESSION['snm']);
?>
<style>
    body {
        background: rgb(251, 166, 7);
        background: linear-gradient(105deg, rgba(251, 166, 7, 1) 50%, rgba(240, 79, 4, 1) 80%);
        background-size:cover;
        overflow-x:hidden;
    }
    h3{
        border:3px solid black;
        border-radius:10px;
        background-color:darkorange;
        width:350px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    h3:hover{
        border:groove;
        color:white;
    }
    .text-dark{
        text-align:center;
    }
    p[class="text-dark"]{
        font-size:20px;
    }
    .card {
        border: 2px solid;
        border-radius: 5px;
        font-family: cursive;
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
    }
</style>
</br>
<h2 class='text-dark'><b><i>Welcome To The Book <span class='logo-txt'>Haven</span></b></i></h2></br>
<p class='text-dark'><b><i>Discover the World of Words! Step into our book haven, where the magic of literature comes to life. Dive into captivating stories, embark on thrilling adventures, and gain knowledge from our vast collection. Explore bestsellers, hidden gems, and curated booklists that cater to all ages and interests. Unleash your inner bookworm with our exclusive offers and events. Join our reading community, share your thoughts, and connect with fellow book lovers. From classics to the latest releases, our book store is your literary sanctuary. Start your next reading journey with us, and let the pages transport you to new worlds.</i></b></p></br>
<h3><b><i>Our Bestsellers This Month</b></i></h3></br>
<div class="row">
    <div class="col-md-3 mb-4">
        <div class="card">
            <img src="img/b9.jpg" class="card-img-top" alt="Product Image" style='height:250px'>
            <div class="card-body bg-dark text-light">
                <h5 class="card-title">A Man Called OVE</h5>
                <p class="card-text text-secondary">by Fredrik Backman</p>
                <p class="card-text">Price: 16000 Ks</p>
                <a href="product.php" class="btn btn-warning">Buy Now</a>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card">
            <img src="img/b8.jpg" class="card-img-top" alt="Product Image" style='height:250px'>
            <div class="card-body bg-dark text-light">
                <h5 class="card-title">Elon Musk</h5>
                <p class="card-text text-secondary">by Walter Issacton</p>
                <p class="card-text">Price: 82000ks</p>
                <a href="product.php" class="btn btn-warning">Buy Now</a>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card">
            <img src="img/b7.jpg" class="card-img-top" alt="Product Image" style='height:250px'>
            <div class="card-body bg-dark text-light">
                <h5 class="card-title">The Women</h5>
                <p class="card-text text-secondary">by Kristin Hannah</p>
                <p class="card-text">Price: 46000 ks</p>
                <a href="product.php" class="btn btn-warning">Buy Now</a>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card">
            <img src="img/b6.jpg" class="card-img-top" alt="Product Image" style='height:250px'>
            <div class="card-body bg-dark text-light">
                <h5 class="card-title">Resurrection Walk</h5>
                <p class="card-text text-secondary">by Michael Connelly</p>
                <p class="card-text">Price: 54000 ks</p>
                <a href="product.php" class="btn btn-warning">Buy Now</a>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
