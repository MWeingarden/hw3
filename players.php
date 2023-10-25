<?php
require_once("util-db.php");
require_once("model-players.php");

$pageTitle = "Players";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertPlayer($_POST['tName'], $_POST['pName'], $_POST['pPosition'], $_POST['pReceptions'], $_POST['pReceptionYards'], $_POST['pReceptionTargets'], $_POST['pRushingAttempts'], $_POST['pRushingYards'], $_POST['pRushingYardsPerAttempt'])) {
        echo '<div class="alert alert-success" role="alert">Player Added!</div>';
      }
      else {
        echo '<div class="alert alert-danger" role="alert">Error!</div>';
      }
      break;
     case "Edit":
      if (updatePlayer($_POST['tName'], $_POST['pName'], $_POST['pPosition'], $_POST['pReceptions'], $_POST['pReceptionYards'], $_POST['pReceptionTargets'], $_POST['pRushingAttempts'], $_POST['pRushingYards'], $_POST['pRushingYardsPerAttempt'], $_POST['pID'], $_POST['tId'])) {
        echo '<div class="alert alert-success" role="alert">Player Edited!</div>';
      }
      else {
        echo '<div class="alert alert-danger" role="alert">Error!</div>';
      }
      break;
    case "Delete":
      if (deletePlayer($_POST['pID'])) {
        echo '<div class="alert alert-success" role="alert">Player Deleted!</div>';
      }
      else {
        echo '<div class="alert alert-danger" role="alert">Error!</div>';
      }
      break;
  }
}
  
$players = selectPlayers();
include "view-players.php";
include "view-footer.php";
?>
