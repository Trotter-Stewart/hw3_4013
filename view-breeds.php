<div class = "row">
  <div class='col'>
    <h1>Breeds</h1>
  </div>
  <div class='col-auto'>
  <?php
include "view-breeds-newform.php";
?>
  </div>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>BreedID</th>
         <th>BreedName</th>
        <th></th>
      </tr>
     
    </thead>
    <tbody>
      <?php
      while ($breed = $breeds->fetch_assoc()) {
        ?>
        <tr>
          <td><?php echo $breed['idbreed']; ?></td>
          <td><?php echo $breed['breedname']; ?></td>
          <td>
            <form method="post" action="dogs-by-breed.php">
              <input type="hidden" name="bid" value="<?php echo $breed['idbreed']; ?>">
              <button type="submit" class="btn btn-primary">Dogs</button>
            </form>
          </td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
