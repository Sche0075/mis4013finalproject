<select class="form-select" id="rid" name="rid">
<?php
while ($recordsItem = $recordsList->fetch_assoc()) {
  $selText = "";
  if($selectedRecord == $recordsItem['record_id']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $recordsItem['record_id']; ?>"<?=$selText?>><?php echo $recordsItem['record_name']; ?></option>
<?php
}
?>
</select>

