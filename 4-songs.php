<?php
require_once("util-db.php");
require_once("songs/model-songs.php");

$pageTitle = "Songs";
include "headfoot/view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
     if (insertSongs($_POST['aid'] ,$_POST['alid'] , $_POST['gid'], $_POST['sName'], $_POST['sLength'])) {
       echo '<div class="alert alert-success" role="alert">Song added.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    

    case "Edit":
     if (updateSongs($_POST['aid'] , $_POST['alid'] , $_POST['gid'], $_POST['sName'], $_POST['sLength'], $_POST['sid'])) {
       echo '<div class="alert alert-success" role="alert">Song edited.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    
   
    case "Delete":
     if (deleteSongs($_POST['sid'])) {
       echo '<div class="alert alert-success" role="alert">Song deleted.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    
    
  }  
}

$songs = selectSongs();
include "songs/view-songs.php";
include "headfoot/view-footer.php";
?>
