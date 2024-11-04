<?php

function selectSize() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select idsize, sizename from size");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertSizes($nameSize) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO size (sizename) VALUES (?)");
        $stmt->bind_param("s", $nameSize);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateSizes($nameSize, $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update size set sizename = ? where (idsize = ?)");
        $stmt->bind_param("si", $nameSize, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteColors($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from size where idsize = ?");
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
