<?php
require_once("util-db.php");
require_once("model-dogs-with-sizes.php");

$pageTitle = "Dogs";
include "view-header.php";
$dogs = selectDogs();
include "view-dogs-with-sizes.php";
include "view-footer.php";
?>
