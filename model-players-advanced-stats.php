<?php
function selectPlayersAdvancedStats($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player_name, receptions, reception_targets, reception_yards, rushing_attempts, rushing_yards, rushing_yards_per_attempt FROM Player WHERE player_id=?");
        $stmt->bind_param("i", $pid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
