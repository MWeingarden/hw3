<h1>Teams With Players</h1>
<div class="card-group">
<?php
while ($team = $teams->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $team['team_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
<?php
  $players = selectTeamsByPlayer($team['team_id']);
  while($player = $players->fetch_assoc()) {
?>
    <li class="list-group-item"><?php echo $player['player_name']; ?> - <?php echo $player['position']; ?></li>
<?php
  }
?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Sponsored by the NFL</small></p>
    </div>
  </div>
<?php
}
?>
</div>
