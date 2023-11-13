<?php
require_once("util-db.php");
require_once("model/teams-with-players.php");

$pageTitle = "Teams With Players";
include "view-header.php";
$teams = selectTeams();
include "view-teams-with-players.php";
include "view-footer.php";
?>
