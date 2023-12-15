<?php

function selectSongs() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT s.song_id, al.album_name, a.artist_name, g.genre_name, s.song_name, s.song_length FROM genre g JOIN artist a On a.genre_id = g.genre_id JOIN album al ON al.artist_id = a.artist_id JOIN song s ON s.album_id = al.album_id");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectArtistsforInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT artist_id, artist_name FROM `artist` order by artist_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectAlbumsforInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT album_id, album_name FROM `album` order by album_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectGenresforInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT genre_id, genre_name FROM `genre` order by genre_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertSongs($aid, $alid, $gid, $sName, $sLength) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `song` (`artist_id`, `album_id`, `genre_id`, `song_name`, `song_length`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iiiss", $aid, $alid, $gid, $sName, $sLength);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateSongs($aid, $alid, $gid, $sName, $sLength, $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `song` set `artist_id` = ?, `album_id` = ?, `genre_id` = ?, `song_name` = ?, `song_length` = ? where song_id = ?");
        $stmt->bind_param("iiissi", $aid, $alid, $gid, $sName, $sLength, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteSongs($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from song where song_id = ?");
        $stmt->bind_param("i", $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
