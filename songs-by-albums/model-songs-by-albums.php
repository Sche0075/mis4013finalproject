<?php

function selectSongsByAlbums($sbalid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT s.song_id, s.song_name, s.song_length, al.album_name FROM album al JOIN song s ON s.album_id = al.album_id WHERE al.album_id = ?");
        $stmt->bind_param("i",$abalid);
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
