<?php

function selectchartGenres() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT genre_name, count(s.song_id) as count_song FROM `genre` join song s on s.genre_id=g.genre_id group by genre_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
};
?>
