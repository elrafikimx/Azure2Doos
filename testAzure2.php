<?php
$serverName = "tcp:rafcmuexperience.database.windows.net,1433";
$connectionOptions = array(
    "database" => "rafcmuexperience",
    "uid" => "rafcmuexperience",
    "pwd" => "Njsm_9161"
);

function exception_handler($exception) {
    echo "<h1>Failure</h1>";
    echo "Uncaught exception: " , $exception->getMessage();
    echo "<h1>PHP Info for troubleshooting</h1>";
    phpinfo();
}

set_exception_handler('exception_handler');

// Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    die(formatErrors(sqlsrv_errors()));
}

// Select Query
$tsql = "SELECT CustomerID,FirstName FROM [SalesLT].[Customer] WHERE Title='Mr.'";

// Executes the query
$stmt = sqlsrv_query($conn, $tsql);

// Error handling
if ($stmt === false) {
    die(formatErrors(sqlsrv_errors()));
}
?>

<h1> Success Results : </h1>

<?php
while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    echo $row['FirstName'] . PHP_EOL;
}

sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);

echo "All good!";

?>
