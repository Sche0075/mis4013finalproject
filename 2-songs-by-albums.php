<?php
require_once("util-db.php");
require_once("songs-by-albums/model-songs-by-albums.php");

$pageTitle = "Songs in Album";
include "headfoot/view-header.php";

$songsbyalbums = selectSongsByAlbums($_POST['sbalid']);
include "songs-by-albums/view-songs-by-albums.php";
include "headfoot/view-footer.php";
?>
