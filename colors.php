<?php
require_once("util-db.php");
require_once("model-colors.php");
$pageTitle = "Colors";
include "view-header.php";

$colors = selectColors();
include "view-colors.php";

include "view-footer.php";
?>
