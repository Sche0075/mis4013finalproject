<select class="form-select" id="rid" name="rid">
<?php
while ($recordsItem = $recordsList->fetch_assoc()) {
?>
  <option value="<?php echo $recordsItem[`record_id`]">Three</option>
<?php
}
?>
</select>

