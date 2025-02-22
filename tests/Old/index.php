<?php

$host = "localhost"; // Use "localhost" if the database is on the same machine
$port = "1521"; // Default Oracle port
$service_name = "orcl"; // Your Oracle service name
$username = "FactNewsAdmin";
$password = "123";

// Create the connection string
$tns = "
(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = $host)(PORT = $port))
    (CONNECT_DATA =
        (SERVER = DEDICATED)
        (SERVICE_NAME = $service_name)
    )
)";

// Try to connect
$conn = oci_connect($username, $password, $tns);

if (!$conn) {
    $e = oci_error();
    die("Connection failed: " . $e['message']);
}

echo "Connected successfully!";

$query = "SELECT UserID, Username FROM User_Tbl";
$stid = oci_parse($conn, $query);
oci_execute($stid);

// Fetch and display data
echo "<table border='1'>
<tr>
<th>UserID</th>
<th>Username</th>
</tr>";

while ($row = oci_fetch_assoc($stid)) {
    echo "<tr>
        <td>{$row['USERID']}</td>
        <td>{$row['USERNAME']}</td>
    </tr>";
}

echo "</table>";

// Free resources and close connection
oci_free_statement($stid);
oci_close($conn);

?>
