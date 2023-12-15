<?php
require_once("util-db.php");
require_once("charts/model-songs-charts.php");

$pageTitle = "Songs Chart by Genre";
include "headfoot/view-header.php"

$songs = selectSongs();
include "charts/view-songs-charts.php";
include "headfoot/view-footer.php";
?>
