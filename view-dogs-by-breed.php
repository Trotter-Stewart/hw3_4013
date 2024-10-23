<h1>Breed by Dog</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>BreedID</th>
         <th>BreedName</th>
      </tr>
     
    </thead>
    <tbody>
      <?php
      while ($dog = $dogs->fetch_assoc()) {
        ?>
        <tr>
          <td><?php echo $dog['idbreed']; ?></td>
          <td><?php echo $dog['breedname']; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
