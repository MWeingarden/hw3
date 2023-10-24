<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editPlayerModal<?php echo $player['player_id']; ?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editPlayerModal" tabindex="-1" aria-labelledby="editPlayerModalLabel<?php echo $player['player_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="#editPlayerModalLabel<?php echo $player['player_id']; ?>">Edit Player</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="tNumber" class="form-label">Team Number</label>
            <input type="number" class="form-control" id="tNumber" name="tNumber">
          </div>
          <div class="mb-3">
            <label for="pName" class="form-label">Player Name</label>
            <input type="text" class="form-control" id="pName" name="pName">
          </div>
          <div class="mb-3">
            <label for="pPosition" class="form-label">Position (Abbreviated)</label>
            <input type="text" class="form-control" id="pPosition" name="pPosition">
          </div>
          <div class="mb-3">
            <label for="pReceptions" class="form-label">Receptions</label>
            <input type="number" class="form-control" id="pReceptions" name="pReceptions">
          </div>
          <div class="mb-3">
            <label for="pReceptionYards" class="form-label">Reception Yards</label>
            <input type="number" class="form-control" id="pReceptionYards" name="pReceptionYards">
          </div>
          <div class="mb-3">
            <label for="pReceptionTargets" class="form-label">Reception Targets</label>
            <input type="number" class="form-control" id="pReceptionTargets" name="pReceptionTargets">
          </div>
          <div class="mb-3">
            <label for="pRushingAttempts" class="form-label">Rushing Attempts</label>
            <input type="number" class="form-control" id="pRushingAttempts" name="pRushingAttempts">
          </div>
          <div class="mb-3">
            <label for="pRushingYards" class="form-label">Rushing Yards</label>
            <input type="number" class="form-control" id="pRushingYards" name="pRushingYards">
          </div>
          <div class="mb-3">
            <label for="pRushingYardsPerAttempt" class="form-label">Rushing Yards Per Attempt</label>
            <input type="number" class="form-control" id="pRushingYardsPerAttempt" name="pRushingYardsPerAttempt">
          </div>
            <input type="hidden" name="actionType" value ="Add">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
