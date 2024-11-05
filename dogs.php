<?php
require_once("util-db.php");
require_once("model-dogs.php");
$pageTitle = "Dogs";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']) {
  case "Add":
    if (insertDogs($_POST['dogName'], $_POST['dogCol'], $_POST['dogBreed'], $_POST['dogSize']))
    {
        echo '<div class="alert alert-success" role="alert">Breed added.</div>';
    }else{
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
      case "Delete":
    if (deleteDogs($_POST['did']))
    {
        echo '<div class="alert alert-success" role="alert">Breed deleted.</div>';
    }else{
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
    case "Edit":
    if (updateDogs($_POST['dogName'], $_POST['dogCol'] $_POST['dogBreed'] $_POST['dogSize'] $_POST['did']))
    {
        echo '<div class="alert alert-success" role="alert">Breed edited.</div>';
    }else{
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
    break;
  }
}

$dogs = selectDogs();
include "view-dogs.php";

include "view-footer.php";
?>
