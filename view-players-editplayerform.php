<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editPlayerModal<?php echo $player['player_id']; ?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editPlayerModal<?php echo $player['player_id']; ?>" tabindex="-1" aria-labelledby="editPlayerModalLabel<?php echo $player['player_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editPlayerModalLabel<?php echo $player['player_id']; ?>">Edit Player</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="tNumber<?php echo $player['player_id']; ?>" class="form-label">Team</label>
            <input type="number" class="form-control" id="tNumber<?php echo $player['player_id']; ?>" name="tNumber" value="<?php echo $player['team_id']; ?>">
          </div>
          <div class="mb-3">
            <label for="pName<?php echo $player['player_id']; ?>" class="form-label">Player Name</label>
            <label for="tNumber" class="form-label">Team</label>
            <?php
            $teamList = selectTeamsForInput();
            include "view-team-input-list.php";
            ?>
          </div>
          <div class="mb-3">
            <label for="pPosition<?php echo $player['player_id']; ?>" class="form-label">Position (Abbreviated)</label>
            <input type="text" class="form-control" id="pPosition<?php echo $player['player_id']; ?>" name="pPosition" value="<?php echo $player['position']; ?>">
          </div>
          <div class="mb-3">
            <label for="pReceptions<?php echo $player['player_id']; ?>" class="form-label">Receptions</label>
            <input type="number" class="form-control" id="pReceptions<?php echo $player['player_id']; ?>" name="pReceptions" value="<?php echo $player['receptions']; ?>">
          </div>
          <div class="mb-3">
            <label for="pReceptionYards<?php echo $player['player_id']; ?>" class="form-label">Reception Yards</label>
            <input type="number" class="form-control" id="pReceptionYards<?php echo $player['player_id']; ?>" name="pReceptionYards" value="<?php echo $player['reception_yards']; ?>">
          </div>
          <div class="mb-3">
            <label for="pReceptionTargets<?php echo $player['player_id']; ?>" class="form-label">Reception Targets</label>
            <input type="number" class="form-control" id="pReceptionTargets<?php echo $player['player_id']; ?>" name="pReceptionTargets" value="<?php echo $player['reception_targets']; ?>">
          </div>
          <div class="mb-3">
            <label for="pRushingAttempts<?php echo $player['player_id']; ?>" class="form-label">Rushing Attempts</label>
            <input type="number" class="form-control" id="pRushingAttempts<?php echo $player['player_id']; ?>" name="pRushingAttempts" value="<?php echo $player['rushing_attempts']; ?>">
          </div>
          <div class="mb-3">
            <label for="pRushingYards<?php echo $player['player_id']; ?>" class="form-label">Rushing Yards</label>
            <input type="number" class="form-control" id="pRushingYards<?php echo $player['player_id']; ?>" name="pRushingYards" value="<?php echo $player['rushing_yards']; ?>">
          </div>
          <div class="mb-3">
            <label for="pRushingYardsPerAttempt<?php echo $player['player_id']; ?>" class="form-label">Rushing Yards Per Attempt</label>
            <input type="number" class="form-control" id="pRushingYardsPerAttempt<?php echo $player['player_id']; ?>" name="pRushingYardsPerAttempt" value="<?php echo $player['rushing_yards_per_attempt']; ?>">
          </div>
            <input type="hidden" name="pID" value="<?php echo $player['player_id']; ?>">
            <input type="hidden" name="actionType" value ="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
