<?php
function selectDogs() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select iddog, dogname, dogcol, dogbreed, dogsize from dog");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectBreedsByDog($id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select idbreed, breedname from breed b join dog d on b.idbreed = d.dogbreed where iddog = ?");
        $stmt->bind_param("i", $id);
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
