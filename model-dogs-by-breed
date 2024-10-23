<?php

function selectDogsByBreed($bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select idbreed, breedname from breed b join dog d on b.idbreed = d.dogbreed where idbreed = ?");
        $stmt->bind_param("i", $bid);
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
