<select class="form-select" id="did" name="did">
<?php
while ($dogItem = $dogList->fetch_assoc()){
?>
   <option value="<?php echo $dogItem['dogid']; ?>"><?php echo $dogItem['dogname']; ?></option>
<?php  
}
?>
</select>
