<?php

function selectSongs() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT song_id, song_name, song_length FROM `song`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertSongs($sName, $sLength) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `song` (`song_name`, `song_length`) VALUES (?, ?)");
        $stmt->bind_param("ss", $sName, $sLength);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateSongs($sName, $sLength, $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `song` set `song_name` = ?, `song_length` = ? where song_id = ?");
        $stmt->bind_param("ssi", $sName, $sLength, $sid);
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
