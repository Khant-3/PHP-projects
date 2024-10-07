<?php
include('header.php')
?>
<style>
    body{
        background: rgb(251,166,7);
        background: linear-gradient(105deg, rgba(251,166,7,1) 50%, rgba(240,79,4,1) 80%);
    }
    .odr-sucs {
        height: 500px;
        text-align: center;
        font-family: cursive;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .btn{
        border:2px solid black;
        border-radius:5px;
    }
</style>
<div class="odr-sucs">
    <h1><b><i>Order Sent Successfully!</i></b></h1></br>
    <a href='product.php' class='btn btn-warning'>Go Back</a>
</div>
<?php
include('footer.php')
?>