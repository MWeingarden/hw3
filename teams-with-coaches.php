<?php
require_once("util-db.php");
require_once("model-teams-with-coaches.php");

$pageTitle = "Teams With Coaches";
include "view-header.php";
$teams = selectTeams();
include "view-teams-with-coaches.php";
include "view-footer.php";
?>
