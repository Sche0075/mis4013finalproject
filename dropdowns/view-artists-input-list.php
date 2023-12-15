<select class="form-select" id="aid" name="aid">
<?php
while ($albumsItem = $albumsList->fetch_assoc()) {
  $selText = "";
  if($selectedRecord == $genresItem['genre_id']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $genresItem['genre_id']; ?>"<?=$selText?>><?php echo $genresItem['genre_name']; ?></option>
<?php
}
?>
</select>
