<?php
function selectCoach($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT coach_id, coach_name FROM Coach c JOIN Team t ON t.team_id = c.team_id WHERE t.team_id =?");
        $stmt->bind_param("i", $cid);
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
