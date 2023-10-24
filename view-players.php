<div class="row">
  <div class="col">
    <h1>NFL Players</h1>    
  </div>
  <div class="col-auto">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
      <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
      <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
    </svg>
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
