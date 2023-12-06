<?php
require_once("util-db.php");
require_once("model-records.php");

$pageTitle = "Records";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
     if (insertRecords($_POST['rName'], $_POST['rCeo'])) {
       echo '<div class="alert alert-success" role="alert">Record Label added.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    

    case "Edit":
     if (updateRecords($_POST['rName'], $_POST['rCeo'], $_POST['rid'])) {
       echo '<div class="alert alert-success" role="alert">Record Label edited.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    
   
    case "Delete":
     if (deleteRecords($_POST['rid'])) {
       echo '<div class="alert alert-success" role="alert">Record Label deleted.</div>';
     } else {
       echo '<div class="alert alert-danger" role="alert">Error.</div>';
     }
        break;    
    
  }  
}

$records = selectRecords();
include "view-records.php";
include "view-footer.php";
?>
