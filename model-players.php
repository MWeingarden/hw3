<?php
function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player_id, player_name, position FROM `Player`");
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
