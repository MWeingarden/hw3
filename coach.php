<?php
require_once("util-db.php");
require_once("model-coach.php");

$pageTitle = "Head Coaches";
include "view-header.php";
$team = selectCoach();
include "view-coach.php";
include "view-footer.php";
?>
