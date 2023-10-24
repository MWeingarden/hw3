<div class="row">
  <div class="col">
    <h1>NFL Players</h1>    
  </div>
  <div class="col-auto">
<?php
include "view-players-newplayerform.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Player Name</th>
      <th>Position</th>
      <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($player = $players->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $player['player_id']; ?></td>
    <td><?php echo $player['player_name']; ?></td>
    <td><?php echo $player['position']; ?></td>
    <td><a href="players-advanced-stats.php?id=<?php echo $player['player_id']; ?>">Advanced Stats</a></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
