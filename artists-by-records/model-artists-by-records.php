<?php

function selectArtistByPlayer($abrid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT a.artist_id, a.artist_name, a.artist_hometown, r.record_name, g.genre_name FROM record r JOIN artist a ON a.record_id = r.record_id JOIN genre g ON g.genre_id = a.genre_id Where r.record_id = ?");
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
