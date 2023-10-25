<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newPlayerModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
      <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
      <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newPlayerModal" tabindex="-1" aria-labelledby="newPlayerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="#newPlayerModalLabel">New Player</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="tNumber" class="form-label">Team</label>
            <?php
            $teamList = selectTeamsForInput();
            include "view-team-input-list.php";
            ?>
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
