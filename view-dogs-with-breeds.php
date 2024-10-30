<h1>Dogs with breeds</h1>

<div class="card-group">
      <?php
    while ($dog = $dogs->fetch_assoc()) {
        ?>
    <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $dog['dogname']; ?></h5>
      <p class="card-text"> 
      <?php
      $breeds = selectBreedsByDog($dog['iddog']);
      while ($breed = $breeds->fetch_assoc()){
        ?>
        
        <?php
      }
      ?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Size: <?php echo $dog['dogsize']; ?></small></p>
    </div>
  </div>
     
      <?php
      }
      ?>
</div>
