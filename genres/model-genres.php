<?php

function selectGenres() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT genre_id, genre_name, genre_description FROM `genre`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertGenres($gName, $gDescription) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `genre` (`genre_name`, `genre_description`) VALUES (?, ?)");
        $stmt->bind_param("ss", $gName, $gDescription);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateGenres($gName, $gDescription, $gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `genre` set `genre_name` = ?, `genre_description` = ? where genre_id = ?");
        $stmt->bind_param("ssi", $gName, $gDescription, $gid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteGenres($gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from genre where genre_id = ?");
        $stmt->bind_param("i", $gid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
