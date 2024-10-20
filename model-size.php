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



?>
