<?php
require_once("util-db.php");
require_once("model-records.php");

$pageTitle = "Records";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
     if (insertPlayers($_POST['pName'], $_POST['pPosition'], $_POST['pAge'])) {
       echo '<div class="alert alert-success" role="alert">Player added.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    

    case "Edit":
     if (updatePlayers($_POST['pName'], $_POST['pPosition'], $_POST['pAge'], $_POST['pid'])) {
       echo '<div class="alert alert-success" role="alert">Record edited.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    
   
    case "Delete":
     if (deletePlayers($_POST['pid'])) {
       echo '<div class="alert alert-success" role="alert">Player deleted.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    
    
  }  
}

$players = selectPlayers();
include "view-records.php";
include "view-footer.php";
?>
