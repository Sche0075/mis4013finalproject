<?php

function selectArtistByPlayer($abrid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT p.player_id, player_name, player_position, player_age, level, practice_time FROM `player` p join team t on t.player_id = p.player_id where t.player_id = ?");
        $stmt->bind_param("i",$abrid);
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
