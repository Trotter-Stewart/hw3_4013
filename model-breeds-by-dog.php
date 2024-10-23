<?php

function selectBreedsByDog($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select idbreed, breedname from breed b join dog d on b.idbreed = d.dogbreed where iddog = ?");
        $stmt->bind_param("i", $did);
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
