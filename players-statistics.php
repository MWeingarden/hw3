<?php
require_once("util-db.php");
require_once("model-players-statistics.php");

$pageTitle = "Player Statistics";
include "view-header.php";
$players = selectPlayersStatistics($_GET['player_id');
include "view-players-statistics.php";
include "view-footer.php";
?>
