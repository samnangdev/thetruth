<?php
session_start();
require_once __DIR__ . '/../connection/db.php';
require_once __DIR__ . '/../config/config.php';

class DashboardController
{
    public function userCount()
    {
        global $conn;

        // Correct SQL query to count users
        $sql = "SELECT COUNT(*) AS user_count FROM user_tbl";

        $stmt = oci_parse($conn, $sql);
        oci_execute($stmt);

        // Fetch the count result
        $row = oci_fetch_assoc($stmt);
        $userCount = $row['USER_COUNT']; // Oracle converts column names to uppercase

        oci_free_statement($stmt);

        return $userCount;
    }

    public function articleCount()
    {
        global $conn;

        // Correct SQL query to count users
        $sql = "SELECT COUNT(*) AS user_count FROM article_tbl";

        $stmt = oci_parse($conn, $sql);
        oci_execute($stmt);

        // Fetch the count result
        $row = oci_fetch_assoc($stmt);
        $articleCount = $row['USER_COUNT']; // Oracle converts column names to uppercase

        oci_free_statement($stmt);

        return $articleCount;
    }

    public function categoryCount()
    {
        global $conn;

        // Correct SQL query to count users
        $sql = "SELECT COUNT(*) AS user_count FROM main_category_tbl WHERE STATUS = 1";

        $stmt = oci_parse($conn, $sql);
        oci_execute($stmt);

        // Fetch the count result
        $row = oci_fetch_assoc($stmt);
        $categoryCount = $row['USER_COUNT']; // Oracle converts column names to uppercase

        oci_free_statement($stmt);

        return $categoryCount;
    }

    
}
