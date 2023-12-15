<?php

function selectAlbums() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT al.album_id, a.artist_name, g.genre_name, al.album_name, al.album_year FROM artist a JOIN album al ON al.artist_id = a.artist_id JOIN genre g ON g.genre_id = al.genre_id WHERE a.artist_id = ?");
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

function insertAlbums($aid, $gid, $alName, $alYear) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `album` (`artist_id`, `genre_id`, `album_name`, `album_year`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iiss", $aid, $gid, $alName, $alYear);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateAlbums($aid, $gid, $alName, $alYear, $alid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `album` set `artist_id` = ?, `genre_id` = ?, `album_name` = ?, `album_year` = ? where album_id = ?");
        $stmt->bind_param("iissi", $aid, $gid, $alName, $alYear, $alid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteAlbums($alid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from album where album_id = ?");
        $stmt->bind_param("i", $laid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
