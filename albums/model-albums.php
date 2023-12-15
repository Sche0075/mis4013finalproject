<?php

function selectAlbums() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT a.artist_id, a.artist_name, a.artist_hometown, r.record_name, g.genre_name FROM record r JOIN artist a ON a.record_id = r.record_id JOIN genre g ON g.genre_id = a.genre_id");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertAlbums($aName, $aHometown) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `artist` (`artist_name`, `artist_hometown`) VALUES (?, ?)");
        $stmt->bind_param("ss", $aName, $aHometown);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateAlbums($aName, $aHometown, $aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `artist` set `artist_name` = ?, `artist_hometown` = ? where artist_id = ?");
        $stmt->bind_param("ssi", $aName, $aHometown, $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteAlbums($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from artist where artist_id = ?");
        $stmt->bind_param("i", $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
