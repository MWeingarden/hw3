<h1>Advanced Stats</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Player Name</th>
      <th>Receptions</th>
      <th>Reception Targets</th>
      <th>Reception Yards</th>
      <th>Rushing Attempts</th>
      <th>Rushing Yards</th>
      <th>Rushing Yards Per Attempt</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($player = $players->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $player['player_name']; ?></td>
    <td><?php echo $player['receptions']; ?></td>
    <td><?php echo $player['reception_targets']; ?></td>
    <td><?php echo $player['reception_yards']; ?></td>
    <td><?php echo $player['rushing_attempts']; ?></td>
    <td><?php echo $player['rushing_yards']; ?></td>
    <td><?php echo $player['rushing_yards_per_attempt']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
