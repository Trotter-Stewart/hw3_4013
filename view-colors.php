<div class = "row">
  <div class='col'>
    <h1>Colors</h1>
  </div>
  <div class='col-auto'>
  <?php
include "view-colors-newform.php";
?>
  </div>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ColorID</th>
         <th>ColorName</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>     
    </thead>
    <tbody>
      <?php
    while ($color = $colors->fetch_assoc()) {
        ?>
        <tr>
      <td><?php echo $color['idcolor']; ?></td>
      <td><?php echo $color['colorname']; ?></td>
       <td>
              <?php
                    include "view-colors-editform.php";
              ?>
          </td>
      
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
