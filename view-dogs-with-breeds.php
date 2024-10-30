<h1>Dogs with breeds</h1>

<div class="card-group">
      <?php
    while ($dog = $dogs->fetch_assoc()) {
        ?>
    <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $dog['dogname']; ?></h5>
      <p class="card-text"> 
      <ul class="list-group">
      <?php
      $breeds = selectBreedsByDog($dog['iddog']);
      while ($breed = $breeds->fetch_assoc()){
        ?>
            <li class="list-group-item"><?php echo $breed['idbreed']; ?> - <?php echo $breed['breedname']; ?></li>
        <?php
      }
      ?>
      </ul>    
      </p>
      <p class="card-text"><small class="text-body-secondary">Size: <?php echo $dog['dogsize']; ?></small></p>
    </div>
  </div>
     
      <?php
      }
      ?>
</div>
