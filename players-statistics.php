<?php
require_once("util-db.php");
require_once("model-players-statistics.php");

$pageTitle = "Player Statistics";
include "view-header.php";
$players = selectPlayersStatistics($_GET['id);
include "view-players.php";
include "view-footer.php";
?>
