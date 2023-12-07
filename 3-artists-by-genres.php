<?php
require_once("util-db.php");
require_once("artists-by-genres/model-artists-by-genres.php");

$pageTitle = "Genre Artists";
include "headfoot/view-header.php";

$artistsbygenres = selectArtistsByGenres($_POST['abgid']);
include "artists-by-genres/view-artists-by-genres.php";
include "headfoot/view-footer.php";
?>
