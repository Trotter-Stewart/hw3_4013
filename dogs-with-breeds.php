<?php
require_once("util-db.php");
require_once("model-dogs-with-breeds.php");

$pageTitle = "Dogs with Breeds";
include "view-header.php";
$dogs = selectDogs();
include "view-dogs-with-breeds.php";
include "view-footer.php";
?>
