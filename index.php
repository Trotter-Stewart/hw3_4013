<?php
$pageTitle = "Home";
include "view-header.php";
?>
    <h1>Dawg Haus</h1>
    </br>
<div style="display: flex; gap: 16px; flex-wrap: wrap;">
    <div class="card" style="width: 18rem;">
        <img src="https://www.fifty-five-plus.com/wp-content/uploads/2024/04/various-dog-breeds.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Breeds</h5>
            <p class="card-text">Edit and see breed information</p>
            <a href="breeds.php" class="btn btn-primary">To Breeds</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="https://images.articlesfactory.com/750x0/6aa89ecc-acf5-4008-b489-0d22762e226c.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Colors</h5>
            <p class="card-text">Edit and see color information</p>
            <a href="colors.php" class="btn btn-primary">To Colors</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="https://cdn.shopify.com/s/files/1/0505/9284/1924/files/sizingweight_480x480.jpg?v=1635711563" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Size</h5>
            <p class="card-text">Edit and see size information</p>
            <a href="size.php" class="btn btn-primary">To Size</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="https://i.pinimg.com/originals/00/a3/4e/00a34e111574291422d03c95642f69e0.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Dogs</h5>
            <p class="card-text">Edit and see dog information</p>
            <a href="dogs.php" class="btn btn-primary">To Dogs</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="https://www.pedigreefoundation.org/media/uploads/2024/03/Secondary-Image-v2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Dog Data</h5>
            <p class="card-text">See Dog Data</p>
            <a href="dogs-with-breeds.php" class="btn btn-primary">To Dog Data</a>
        </div>
    </div>
</div>
<?php
include "view-footer.php";
?>
