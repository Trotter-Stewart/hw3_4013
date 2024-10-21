<h1>Dogs</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>DogID</th>
         <th>DogName</th>
         <th>DogColor</th>
         <th>DogBreed</th>
         <th>DogSize</th>
        <th></th>
     
      </tr>
     
    </thead>
    <tbody>
      <?php
    while ($dog = $dogs->fetch_assoc()) {
        ?>
        <tr>
      <td><?php echo $dog['iddog']; ?></td>
      <td><?php echo $dog['dogname']; ?></td>
      <td><?php echo $dog['dogcol']; ?></td>
      <td><?php echo $dog['dogbreed']; ?></td>
      <td><?php echo $dog['dogsize']; ?></td>
      <td><a href="breeds-by-dog.php?id=<?php echo $dog['dogbreed']; ?>">Breeds</a></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
