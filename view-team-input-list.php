<select class="form-select" id="tNumber" name="tNumber">
<?php
while ($teamItem = $teamList->fetch_assoc()) {
?>
  <option value="<?php echo &teamItem['team_id']; ?>"><?php echo &teamItem['team_name']; ?></option>
<?php
}
?>
</select>
