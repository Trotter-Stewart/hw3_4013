<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('hw3database.mysql.database.azure.com', 'tstew22', 'database_4013', 'dogs');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
