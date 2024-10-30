<?php
require_once("util-db.php");
require_once("model-breeds.php");
$pageTitle = "Breeds";
include "view-header.php";

if isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
  case "Add":
    insertBreeds($_POST['breedName']);
    break;
  }
}

$breeds = selectBreeds();
include "view-breeds.php";

include "view-footer.php";
?>
