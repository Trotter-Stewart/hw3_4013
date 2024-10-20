<?php
require_once("util-db.php");
require_once("model-size.php");
$pageTitle = "Sizes";
include "view-header.php";

$sizes = selectSize();
include "view-size.php";

include "view-footer.php";
?>
