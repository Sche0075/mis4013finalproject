<?php
require_once("util-db.php");
require_once("charts/model-charts.php");

$pageTitle = "Charts";
include "headfoot/view-header.php";

$genres = selectchartGenres();
include "charts/view-charts.php";
include "headfoot/view-footer.php";
?>
