<?php
$pageTitle = "Home";
include "view-header.php";
?>
    <h1>Home</h1>
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{"C:\Users\trott\Downloads\DigiCertGlobalRootCA.crt.pem"}", NULL, NULL);
mysqli_real_connect($conn, "hw3database.mysql.database.azure.com", "tstew22", "{database_4013}", "{DBHW3}", 3306, MYSQLI_CLIENT_SSL);
<?php
include "view-footer.php";
?>
