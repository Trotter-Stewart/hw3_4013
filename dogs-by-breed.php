<?php
require_once("util-db.php");
require_once("model-dogs-by-breed.php");
$pageTitle = "Dogs by Breed";
include "view-header.php";

$dogs = selectDogsByBreed($_POST['bid']);
include "view-dogs-by-breed.php";

include "view-footer.php";
?>
