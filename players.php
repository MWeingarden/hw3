<?php
require_once("util-db.php");
require_once("model-players.php");

$pageTitle = "Players";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertPlayer($_POST['pNumber'], $_POST
  }
}
  
$players = selectPlayers();
include "view-players.php";
include "view-footer.php";
?>
