<?php
require_once("util-db.php");
require_once("model-size.php");
$pageTitle = "Sizes";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
  case "Add":
    if (insertSizes($_POST['sizeName']))
    {
        echo '<div class="alert alert-success" role="alert">Size added.</div>';
    }else{
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
      case "Delete":
    if (deleteSizes($_POST['sid']))
    {
        echo '<div class="alert alert-success" role="alert">Size deleted.</div>';
    }else{
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
    case "Edit":
    if (updateSizes($_POST['sizeName'], $_POST['sid']))
    {
        echo '<div class="alert alert-success" role="alert">Size edited.</div>';
    }else{
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
  }
}

$sizes = selectSize();
include "view-size.php";

include "view-footer.php";
?>
