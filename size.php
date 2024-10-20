<?php
require_once("util-db.php");
require_once("model-size.php");
$pageTitle = "Sizes";
include "view-header.php";

$colors = selectSize();
include "view-size.php";

include "view-footer.php";
?>
