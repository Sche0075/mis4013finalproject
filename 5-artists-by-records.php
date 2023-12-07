<?php
require_once("util-db.php");
require_once("artists-by-records/model-artists-by-records.php");

$pageTitle = "Record Label Artists";
<head>
  <h2>To edit these you must be on the artist tab</h2>
</head>
include "headfoot/view-header.php";

$artistsbyrecords = selectArtistsByRecords($_POST['abrid']);
include "artists-by-records/view-artists-by-records.php";
include "headfoot/view-footer.php";
?>
