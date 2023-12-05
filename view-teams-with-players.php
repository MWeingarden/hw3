<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  $(document).ready(function() {
    // Toggle player list visibility on card click
    $('.card').click(function() {
      $(this).find('.list-group').toggle();
    });
  });
</script>

<h1>Teams With Players</h1>
<div class="row row-cols-1 row-cols-md-3 g-4">
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
            while ($player = $players->fetch_assoc()) {
            ?>
              <li class="list-group-item"><?php echo $player['player_name']; ?> - <?php echo $player['position']; ?></li>
            <?php
            }
            ?>
          </ul>
        </p>
        <p class="card-text"><small class="text-body-secondary">Add more players under the player tab!</small></p>
      </div>
    </div>
  <?php
  }
  ?>
</div>
  </div>
<?php
?>
</div>
