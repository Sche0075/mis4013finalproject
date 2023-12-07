<?php
require_once("util-db.php");
require_once("artist-by-records/model-artist-by-records.php");

$pageTitle = "Artist";
include "headfoot/view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
     if (insertGenres($_POST['gName'], $_POST['gDescription'])) {
       echo '<div class="alert alert-success" role="alert">Genre added.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    

    case "Edit":
     if (updateGenres($_POST['gName'], $_POST['gDescription'], $_POST['gid'])) {
       echo '<div class="alert alert-success" role="alert">Genre edited.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    
   
    case "Delete":
     if (deleteGenres($_POST['gid'])) {
       echo '<div class="alert alert-success" role="alert">Genre deleted.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    
    
  }  
}

$genres = selectGenres();
include "genres/view-genres.php";
include "headfoot/view-footer.php";
?>
