<h1>Breeds</h1>
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
      while ($breed = $breeds->fetch_assoc()) {
        ?>
        <tr>
          <td><?php echo $instructor['idbreed']; ?></td>
          <td><?php echo $instructor['breedname']; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
