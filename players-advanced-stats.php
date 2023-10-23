<?php
require_once("util-db.php");
require_once("model-players-advanced-stats.php");

$pageTitle = "Advanced Stats";
include "view-header.php";
$players = selectPlayersAdvancedStats($_GET['id']);
include "view-players-advanced-stats.php";
include "view-footer.php";
?>
