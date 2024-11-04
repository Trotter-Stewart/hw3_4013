<?php

function selectColors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select idcolor, colorname from color");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertColors($nameColor) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO color (colorname) VALUES (?)");
        $stmt->bind_param("s", $nameColor);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateColors($nameColor, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update color set colorname = ? where (idcolor = ?)");
        $stmt->bind_param("si", $nameColor, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteColors($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from color where idcolor = ?");
        $stmt->bind_param("i", $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}



?>
