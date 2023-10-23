<h1>Player Team</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Player Name</th>
      <th>Position</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($team = $teams->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $team['player_id']; ?></td>
    <td><?php echo $team['player_name']; ?></td>
    <td><?php echo $team['position']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
