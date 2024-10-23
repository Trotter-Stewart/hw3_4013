<?php
require_once("util-db.php");
require_once("model-breeds-by-dog.php");
$pageTitle = "Breeds by Dog";
include "view-header.php";

$breeds = selectBreedsByDog($_GET['iddog']);
include "view-breeds-by-dog.php";

include "view-footer.php";
?>
