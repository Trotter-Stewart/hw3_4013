<select class="form-select" id="did" name="did">
<?php
while ($dogItem = $dogList->fetch_assoc()){
   $selText = "";
   if ($selectedDog == $dogItem['iddog'])
   {
      $selText = " selected";
   }
?>
   <option value="<?php echo $dogItem['dogid']; ?>"<?=$selText?>><?php echo $dogItem['dogname']; ?></option>
<?php  
}
?>
</select>
