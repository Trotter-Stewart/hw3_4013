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

function selectDogsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select iddog, dogname from dog order by dogname");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectColorsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select idcolor, colorname from color order by colorname");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectBreedsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select idbreed, breedname from breed order by breedname");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectSizesForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select idsize, sizename from size order by sizename");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function insertDogs($nameDog, $nameCol, $dogBreed, $dogSize) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO dog (dogname, dogcol, dogbreed, dogsize) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siii", $nameDog, $nameCol, $dogBreed, $dogSize);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateDogs($nameDog, $nameCol, $dogBreed, $dogSize, $did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update dog set dogname = ?, dogcol = ?, dogbreed = ?, dogsize = ? where iddog = ?");
        $stmt->bind_param("siiii", $nameDog, $nameCol, $dogBreed, $dogSize, $did);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteDogs($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from dog where iddog = ?");
        $stmt->bind_param("i", $did);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
