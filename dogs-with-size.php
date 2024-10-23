<?php
require_once("util-db.php");
require_once("model-dogs-with-size.php");
$pageTitle = "Dogs with Size";
include "view-header.php";

$dogs = selectDogs();
include "view-dogs-with-size.php";

include "view-footer.php";
?>
