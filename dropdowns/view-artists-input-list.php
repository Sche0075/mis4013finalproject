<select class="form-select" id="aid" name="aid">
<?php
while ($artistsItem = $artistsList->fetch_assoc()) {
  $selText = "";
  if($selectedArtist == $artistsItem['artist_id']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $artistsItem['artist_id']; ?>"<?=$selText?>><?php echo $artistsItem['artist_name']; ?></option>
<?php
}
?>
</select>
