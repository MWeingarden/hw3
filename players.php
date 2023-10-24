<?php
require_once("util-db.php");
require_once("model-players.php");

$pageTitle = "Players";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertPlayer($_POST['tNumber'], $_POST['pName'], $_POST['pPosition'], $_POST['pReceptions'], $_POST['pReceptionYards'], $_POST['pReceptionTargets'], $_POST['pRushingAttempts'], $_POST['pRushingYards'], $_POST['pRushingYardsPerAttempt']);
      break;
  }
}
  
$players = selectPlayers();
include "view-players.php";
include "view-footer.php";
?>
