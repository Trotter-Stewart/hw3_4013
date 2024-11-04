<?php
require_once("util-db.php");
require_once("model-colors.php");
$pageTitle = "Colors";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
  case "Add":
    if (insertColors($_POST['colorName']))
    {
        echo '<div class="alert alert-success" role="alert">Color added.</div>';
    }else{
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
      case "Delete":
    if (deleteColors($_POST['cid']))
    {
        echo '<div class="alert alert-success" role="alert">Color deleted.</div>';
    }else{
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
    case "Edit":
    if (updateBreeds($_POST['colorName'], $_POST['cid']))
    {
        echo '<div class="alert alert-success" role="alert">Color edited.</div>';
    }else{
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
  }
}


$colors = selectColors();
include "view-colors.php";

include "view-footer.php";
?>
