<?php
require_once("util-db.php");
require_once("model-players.php");

$pageTitle = "Players";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertPlayer($_POST[tID], $_POST['pName'], $_POST['position'], $_POST['receptions'], $_POST['recepYards'], $_POST['recepTargets'], $_POST['rushAttempts'], $_POST['rushYards'], $_POST['rushYardsPerAttempt']);
      break;
  }
}
  
$players = selectPlayers();
include "view-players.php";
include "view-footer.php";
?>
