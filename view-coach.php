<h1>NFL Head Coach</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Coach Name</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($team = $teams->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $team['coach_id']; ?></td>
    <td><?php echo $team['coach_name']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
