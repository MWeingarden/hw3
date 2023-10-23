<?php
require_once("util-db.php");
require_once("model-players-team.php");

$pageTitle = "Player Team";
include "view-header.php";
$players = selectPlayersTeam($_GET['team_id']);
include "view-players-team.php";
include "view-footer.php";
?>
