<?php
$pageTitle = "Home";
include "view-header.php";
?>
    <h1>Dawg Haus</h1>
    </br>
    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.pinimg.com/originals/00/a3/4e/00a34e111574291422d03c95642f69e0.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://static.wikia.nocookie.net/thebluescluesencyclopedia/images/0/09/Blue-2D.jpeg/revision/latest/scale-to-width/360?cb=20220818013650" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://lwlies.com/wp-content/uploads/2017/08/air-bud-1997-1108x0-c-default.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php
include "view-footer.php";
?>
