<?php
$host = "localhost"; // Change if remote
$port = "1521"; // Default Oracle port
$service_name = "orcl"; // Change to your service name
$username = "FactNewsAdmin";
$password = "123";

$dsn = "
(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = $host)(PORT = $port))
    (CONNECT_DATA =
        (SERVER = DEDICATED)
        (SERVICE_NAME = $service_name)
    )
)";

// Create connection
$conn = oci_connect($username, $password, $dsn);

if (!$conn) {
    $error = oci_error();
    die("Database connection failed: " . $error['message']);
}
?>
