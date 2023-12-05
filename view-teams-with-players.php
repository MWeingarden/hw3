<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Popper.js (required for Bootstrap) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function() {
    // Toggle player list visibility on card click
    $('.card').click(function() {
      $(this).find('.list-group').toggle();
    });

    // Enable Bootstrap Popovers for player names
    $('.player-name').popover({
      trigger: 'hover', // Show on hover
      placement: 'top', // Show on top of the player name
      <?php
      content: 'Additional information goes here', // You can customize this content dynamically based on player data
      ?>
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
              <li class="list-group-item">
                <!-- Add the 'player-name' class to enable the Popover -->
                <span class="player-name" data-toggle="popover" data-content="Additional information about <?php echo $player['player_name']; ?>">
                  <?php echo $player['player_name']; ?>
                </span> - <?php echo $player['position']; ?>
              </li>
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
