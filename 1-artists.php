<?php
require_once("util-db.php");
require_once("artists/model-artists.php");

$pageTitle = "Artists";
include "headfoot/view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
     if (insertGenres($_POST['aName'], $_POST['aHometown'])) {
       echo '<div class="alert alert-success" role="alert">Artist added.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    

    case "Edit":
     if (updateGenres($_POST['aName'], $_POST['gHometown'], $_POST['aid'])) {
       echo '<div class="alert alert-success" role="alert">Artist edited.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    
   
    case "Delete":
     if (deleteGenres($_POST['aid'])) {
       echo '<div class="alert alert-success" role="alert">Artist deleted.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    
    
  }  
}

$artists = selectArtists();
include "genres/view-genres.php";
include "headfoot/view-footer.php";
?>
