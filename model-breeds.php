<?php

function selectBreeds() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select idbreed, breedname from breed");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertBreeds($nameBreed) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO breed (breedname) VALUES (?)");
        $stmt->bind_param("s", $nameBreed);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateBreeds($nameBreed, $bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update breed set breedname = ?, where idbreed = ?");
        $stmt->bind_param("si", $nameBreed, $bid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteBreeds($bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from breed where idbreed = ?");
        $stmt->bind_param("i", $bid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}



?>
