<h1>Sizes</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>SizeID</th>
         <th>SizeName</th>
      </tr>
     
    </thead>
    <tbody>
      <?php
    while ($size = $sizes->fetch_assoc()) {
        ?>
        <tr>
      <td><?php echo $size['idsize']; ?></td>
      <td><?php echo $size['sizename']; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
