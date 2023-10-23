<?php
function selectPlayers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT player_id, player_name, position, receptions, rushing_attempts FROM `Player`");
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

function updatePlayer($tID, $pName, $position, $receptions, $recepYards, $recepTargets, $rushAttempts, $rushYards, $rushYardsPerAttempt) {
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

function deletePlayer($tID, $pName, $position, $receptions, $recepYards, $recepTargets, $rushAttempts, $rushYards, $rushYardsPerAttempt) {
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
?>
