<?php
require_once("util-db.php");
require_once("albums/model-albums.php");

$pageTitle = "Albums";
include "headfoot/view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
     if (insertAlbums($_POST['aid'] ,$_POST['gid'], $_POST['alName'], $_POST['alYear'])) {
       echo '<div class="alert alert-success" role="alert">Album added.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    

    case "Edit":
     if (updateAlbums($_POST['aid'] ,$_POST['gid'], $_POST['alName'], $_POST['alYear'], $_POST['alid'])) {
       echo '<div class="alert alert-success" role="alert">Album edited.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    
   
    case "Delete":
     if (deleteAlbums($_POST['alid'])) {
       echo '<div class="alert alert-success" role="alert">Album deleted.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    
    
  }  
}

$albums = selectAlbums();
include "albums/view-albums.php";
include "headfoot/view-footer.php";
?>
