<?php
$host = "localhost"; // Change if the database is remote
$port = "1521"; // Default Oracle port
$service_name = "orcl"; // Your Oracle service name
$username = "FactNewsAdmin";
$password = "123";

// Create TNS connection string
$tns = "
(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = $host)(PORT = $port))
    (CONNECT_DATA =
        (SERVER = DEDICATED)
        (SERVICE_NAME = $service_name)
    )
)";

// Connect to Oracle
$conn = oci_connect($username, $password, $tns);
if (!$conn) {
    $e = oci_error();
    die("Connection failed: " . $e['message']);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userID = $_POST['userid'];
    $username = $_POST['username'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $UserTypeID = 1;

    // Prepare SQL statement
    $sql = "INSERT INTO User_Tbl (UserID, Username, Email, Password, UserTypeID) VALUES (:userID, :username, :Email, :Password, :usertypeid)";

    $stid = oci_parse($conn, $sql);

    // Bind parameters
    oci_bind_by_name($stid, ":userID", $userID);
    oci_bind_by_name($stid, ":username", $username);
    oci_bind_by_name($stid, ":password", $Password);
    oci_bind_by_name($stid, ":email", $Email);
    oci_bind_by_name($stid, ":usertypeid", $UserTypeID);

    // Execute statement
    $result = oci_execute($stid);

    if ($result) {
        echo "Record inserted successfully!";
        oci_commit($conn); // Commit the transaction
    } else {
        $e = oci_error($stid);
        echo "Error inserting record: " . $e['message'];
    }

    // Free resources and close connection
    oci_free_statement($stid);
    oci_close($conn);
}
?>
