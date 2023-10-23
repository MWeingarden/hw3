<h1>NFL Players</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Player Name</th>
      <th>Position</th>
      <th>Player Statistics</th>
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
    <td><a href="players-statistics.php?id=<?php echo $player['player_id']; ?>">Statistics</a></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
