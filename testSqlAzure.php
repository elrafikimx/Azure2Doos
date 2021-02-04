<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:rafcmuexperience.database.windows.net,1433; Database = rafcmuexperience", "rafcmuexperience", "Njsm_9161");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "rafcmuexperience", "pwd" => "Njsm_9161", "Database" => "rafcmuexperience", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:rafcmuexperience.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

echo "Connection OK!";
?>
