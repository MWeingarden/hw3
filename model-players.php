<?php
function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player_id, player_name, position, receptions, reception_targets, reception_yards, rushing_attempts, rushing_yards, rushing_yards_per_attempt, team_id FROM `Player` ORDER BY player_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectTeamsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT team_id, team_name FROM Team ORDER BY team_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPlayer($tID, $pName, $position, $receptions, $recepYards, $recepTargets, $rushAttempts, $rushYards, $rushYardsPerAttempt) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Player` (`team_id`, `player_name`, `position`, `receptions`, `reception_yards`, `reception_targets`, `rushing_attempts`, `rushing_yards`, `rushing_yards_per_attempt`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("issiiiiid", $tID, $pName, $position, $receptions, $recepYards, $recepTargets, $rushAttempts, $rushYards, $rushYardsPerAttempt);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updatePlayer($tID, $pName, $position, $receptions, $recepYards, $recepTargets, $rushAttempts, $rushYards, $rushYardsPerAttempt, $pID, $tName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE Player SET team_id = ?, player_name = ?, position = ?, receptions = ?, reception_yards = ?, reception_targets = ?, rushing_attempts = ?, rushing_yards = ?, rushing_yards_per_attempt = ? team_name = ? WHERE player_id = ?");
        $stmt->bind_param("issiiiiidis", $tID, $pName, $position, $receptions, $recepYards, $recepTargets, $rushAttempts, $rushYards, $rushYardsPerAttempt, $pID, $tName);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deletePlayer($pID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM Player WHERE player_id = ?");
        $stmt->bind_param("i", $pID);
        $success = $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
