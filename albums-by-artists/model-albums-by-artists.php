<?php

function selectAlbumsByArtists($abaid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT al.album_id, al.artist_name, al.genre_name, al.album_name, al.album_year FROM artist a JOIN album al ON al.artist_id = a.artist_id JOIN genre g ON g.genre_id = al.genre_id WHERE a.artist_id = ?");
        $stmt->bind_param("i",$abaid);
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
