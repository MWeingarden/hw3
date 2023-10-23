<?php
require_once("util-db.php");
require_once("model-teams-by-player.php");

$pageTitle = "Teams by Player";
include "view-header.php";
$teams = selectTeamsByPlayer($_POST['pid']);
include "view-teams-by-player.php";
include "view-footer.php";
?>
