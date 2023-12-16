<?php
require_once("util-db.php");
require_once("charts2/model-charts2.php");

$pageTitle = "Charts";
include "headfoot/view-header.php";

$genres = selectchartGenres();
include "charts/view-charts2.php";
include "headfoot/view-footer.php";
?>
