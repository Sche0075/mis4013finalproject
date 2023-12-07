<?php
require_once("b1-util-db.php");
require_once("artist-by-records/model-artist-by-records.php");

$pageTitle = "Record Label Artist";
include "headfoot/view-header.php";

$artistbyrecords = selectArtistsByRecords($_POST['abrid']);
include "artist-by-records/view-artist-by-records.php";
include "headfoot/view-footer.php";
?>
