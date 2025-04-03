<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../connection/db.php';
require_once __DIR__ . '/../config/config.php';

$reportType = isset($_GET['TxtReport']) ? $_GET['TxtReport'] : null;
$dateFrom = isset($_GET['TxtDateFrom']) ? $_GET['TxtDateFrom'] : null;
$dateTo = isset($_GET['TxtDateTo']) ? $_GET['TxtDateTo'] : null;

$reportController = new ReportController();
$data = [];

if ($reportType == "1") {
    $data = $reportController->articleReport($dateFrom, $dateTo);
} elseif ($reportType == "2") {
    $data = $reportController->userReport($dateFrom, $dateTo);
} elseif ($reportType == "3") {
    $data = $reportController->viewerReport($dateFrom, $dateTo);
}

class ReportController {
    public function articleReport($dateFrom = null, $dateTo = null)
    {
        global $conn;

        $query = "SELECT 
                    article_tbl.id, 
                    article_tbl.title, 
                    article_tbl.content, 
                    main_category_tbl.name_kh, 
                    user_tbl.username, 
                    article_tbl.slug, 
                    article_tbl.author_id, 
                    article_tbl.published_date, 
                    article_tbl.status,
                    article_tbl.image_url
                  FROM article_tbl
                  INNER JOIN main_category_tbl ON article_tbl.main_category_id = main_category_tbl.id
                  INNER JOIN user_tbl ON article_tbl.author_id = user_tbl.userid
                  WHERE 1 = 1 AND article_tbl.status != 'Slide'";

        // Add date filtering
        if (!empty($dateFrom) && !empty($dateTo)) {
            $query .= " AND article_tbl.published_date BETWEEN TO_DATE(:dateFrom, 'YYYY-MM-DD') AND TO_DATE(:dateTo, 'YYYY-MM-DD')";
        }

        $stid = oci_parse($conn, $query);

        // Bind parameters if dates are provided
        if (!empty($dateFrom) && !empty($dateTo)) {
            oci_bind_by_name($stid, ":dateFrom", $dateFrom);
            oci_bind_by_name($stid, ":dateTo", $dateTo);
        }

        oci_execute($stid);

        $rows = [];
        while ($row = oci_fetch_assoc($stid)) {
            $rows[] = $row;
        }

        oci_free_statement($stid);

        return $rows;
    }

    public function userReport() {
        global $conn;  

        $query = "
            SELECT 
                u.USERID,
                u.USERNAME,
                u.EMAIL,
                u.USERTYPEID,
                ut.NAME_EN,
                u.STATUS
            FROM 
                User_Tbl u
            JOIN 
                User_Type_Tbl ut ON u.USERTYPEID = ut.id
        ";
        // $query = "
        //     SELECT 
        //         u.USERID,
        //         u.USERNAME,
        //         u.EMAIL,
        //         u.USERTYPEID,
        //         ut.NAME_EN,
        //         u.STATUS
        //     FROM 
        //         User_Tbl u
        //     JOIN 
        //         user_type_tbl ut ON u.id = ut.id
        // ";
        $stid = oci_parse($conn, $query);
        oci_execute($stid);

        $users = [];
        while ($row = oci_fetch_assoc($stid)) {
            $users[] = $row;
        }

        oci_free_statement($stid);

        return $users;
    }
    

    public function viewerReport($fromDate, $toDate) {
        global $conn;
        $query = "SELECT * FROM viewers WHERE VIEW_DATE BETWEEN ? AND ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $fromDate, $toDate);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}

// class ReportController
// {
//     public function articleReport($dateFrom = null, $dateTo = null)
//     {
//         global $conn;

//         $query = "SELECT 
//                     article_tbl.id, 
//                     article_tbl.title, 
//                     article_tbl.content, 
//                     main_category_tbl.name_kh, 
//                     article_tbl.slug, 
//                     article_tbl.author_id, 
//                     article_tbl.published_date, 
//                     article_tbl.status,
//                     article_tbl.image_url
//                   FROM article_tbl
//                   INNER JOIN main_category_tbl ON article_tbl.main_category_id = main_category_tbl.id
//                   WHERE 1 = 1";

//         // Add date filtering
//         if (!empty($dateFrom) && !empty($dateTo)) {
//             $query .= " AND article_tbl.published_date BETWEEN TO_DATE(:dateFrom, 'YYYY-MM-DD') AND TO_DATE(:dateTo, 'YYYY-MM-DD')";
//         }

//         $stid = oci_parse($conn, $query);

//         // Bind parameters if dates are provided
//         if (!empty($dateFrom) && !empty($dateTo)) {
//             oci_bind_by_name($stid, ":dateFrom", $dateFrom);
//             oci_bind_by_name($stid, ":dateTo", $dateTo);
//         }

//         oci_execute($stid);

//         $rows = [];
//         while ($row = oci_fetch_assoc($stid)) {
//             $rows[] = $row;
//         }

//         oci_free_statement($stid);

//         return $rows;
//     }
// }

