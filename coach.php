<?php
require_once("util-db.php");
require_once("model-coach.php");

$pageTitle = "NFL Head Coaches";
include "view-header.php";
$teams = selectCoach($_GET['id']);
include "view-coach.php";
include "view-footer.php";
?>
