<?php
require_once("util-db.php");
require_once("model-dogs.php");
$pageTitle = "Dogs";
include "view-header.php";

$dogs = selectDogs();
include "view-dogs.php";

include "view-footer.php";
?>
