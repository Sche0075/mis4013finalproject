<select class="form-select" id="sid" name="sid">
<?php
while ($albumsItem = $albumsList->fetch_assoc()) {
  $selText = "";
  if($selectedAlbum == $albumsItem['album_id']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $albumsItem['album_id']; ?>"<?=$selText?>><?php echo $albumsItem['album_name']; ?></option>
<?php
}
?>
</select>
