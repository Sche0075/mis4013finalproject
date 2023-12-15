<select class="form-select" id="rid" name="rid">
<?php
while ($recordsItem = $recordsList->fetch_assoc()) {
?>
  <option value="<?php echo $recordsItem['record_id']; ?>"><?php echo $recordsItem['record_name']; ?></option>
<?php
}
?>
</select>

