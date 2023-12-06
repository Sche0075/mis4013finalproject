<?php

function selectRecords() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT record_id, record_name, record_ceo FROM `record`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertRecords($rName, $rCeo) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `record` (`record_name`, `record_ceo`) VALUES (?, ?, ?)");
        $stmt->bind_param("ss", $rName, $rCeo);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateRecords($rName, $rCeo, $rid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `record` set `record_name` = ?, `record_ceo` = ? where record_id = ?");
        $stmt->bind_param("ssi", $rName, $rCeo, $rid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteRecords($rid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from record where record_id = ?");
        $stmt->bind_param("i", $rid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
