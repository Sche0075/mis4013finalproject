<?php
require_once("util-db.php");
require_once("albums-by-artists/model-albums-by-artists.php");

$pageTitle = "Artist's Albums";
include "headfoot/view-header.php";

$albumsbyartists = selectAlbumsByArtists($_POST['abaid']);
include "albums-by-artists/view-albums-by-artists.php";
include "headfoot/view-footer.php";
?>
