<?php

function selectBreeds() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select idbreed, breedname from 'breed'");
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
