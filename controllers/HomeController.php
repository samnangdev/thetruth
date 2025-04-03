<?php
session_start();
require_once __DIR__ . '/../connection/db.php';
require_once __DIR__ . '/../config/config.php';

class HomeController
{
    public function listMenu()
    {
        global $conn;

        $sql = "SELECT 
                mc.ID AS main_category_id, 
                mc.NAME_KH AS main_category_name, 
                sc.ID AS sub_category_id,
                sc.NAME_KH AS sub_category_name,
                sc.SLUG AS sub_category_slug  -- Added slug here
            FROM main_category_tbl mc 
            LEFT JOIN sub_category_tbl sc ON mc.ID = sc.MAIN_CATEGORY_ID 
            WHERE mc.STATUS = 1";

        $stmt = oci_parse($conn, $sql);
        oci_execute($stmt);

        $menuList = [];
        while ($row = oci_fetch_assoc($stmt)) {
            $mainCategoryId = $row['MAIN_CATEGORY_ID'];

            if (!isset($menuList[$mainCategoryId])) {
                $menuList[$mainCategoryId] = [
                    'main_category_name' => $row['MAIN_CATEGORY_NAME'],
                    'main_category_id' => $row['MAIN_CATEGORY_ID'],
                    'sub_categories' => []
                ];
            }

            if (!empty($row['SUB_CATEGORY_NAME'])) {
                $menuList[$mainCategoryId]['sub_categories'][] = [
                    'sub_category_id' => $row['SUB_CATEGORY_ID'],
                    'sub_category_name' => $row['SUB_CATEGORY_NAME'],
                    'sub_category_slug' => $row['SUB_CATEGORY_SLUG']
                ];
            }
        }

        oci_free_statement($stmt);
        return $menuList;
    }

    public function listBlog()
    {
        global $conn;

        $query = "SELECT a.ID, a.TITLE, a.IMAGE_URL, a.CONTENT, a.AUTHOR_ID, 
                     a.PUBLISHED_DATE, c.NAME_KH AS CATEGORY_NAME
              FROM article_tbl a
              INNER JOIN main_category_tbl c ON a.MAIN_CATEGORY_ID = c.ID
              WHERE a.MAIN_CATEGORY_ID != 61  -- Exclude category ID 61
              ORDER BY a.PUBLISHED_DATE DESC
              FETCH FIRST 4 ROWS ONLY";  // Get latest 4 articles

        $stid = oci_parse($conn, $query);
        oci_execute($stid);

        $row = [];
        while ($article = oci_fetch_assoc($stid)) {
            $row[] = $article;
        }

        oci_free_statement($stid);
        return $row;
    }
    public function slideShow()
    {
        global $conn;

        $query = "SELECT a.ID, a.TITLE, a.IMAGE_URL, a.CONTENT, a.AUTHOR_ID, 
                         a.PUBLISHED_DATE, a.MAIN_CATEGORY_ID, c.NAME_KH AS CATEGORY_NAME
                  FROM article_tbl a
                  INNER JOIN main_category_tbl c ON a.MAIN_CATEGORY_ID = c.ID
                  WHERE a.STATUS = 'Slide'
                  ORDER BY a.PUBLISHED_DATE DESC
                  FETCH FIRST 3 ROWS ONLY"; // Fetch only the latest 3 articles

        $stid = oci_parse($conn, $query);
        oci_execute($stid);

        $row = [];
        while ($article = oci_fetch_assoc($stid)) {
            $row[] = $article;
        }

        oci_free_statement($stid);
        return $row; // Return the latest 3 articles
    }
    public function listArticle()
    {
        global $conn;

        $query = "SELECT a.ID, a.TITLE, a.IMAGE_URL, a.CONTENT, a.AUTHOR_ID, 
                         a.PUBLISHED_DATE, c.NAME_KH AS CATEGORY_NAME, a.main_category_id AS MAIN_CATEGORY_ID
                  FROM article_tbl a
                  INNER JOIN main_category_tbl c ON a.MAIN_CATEGORY_ID = c.ID
                  WHERE a.MAIN_CATEGORY_ID != 64 AND a.MAIN_CATEGORY_ID != 65 AND a.STATUS = 'Published'
                  ORDER BY a.PUBLISHED_DATE DESC
                  FETCH FIRST 8 ROWS ONLY"; // Fetch only the latest 3 articles

        $stid = oci_parse($conn, $query);
        oci_execute($stid);

        $row = [];
        while ($article = oci_fetch_assoc($stid)) {
            $row[] = $article;
        }

        oci_free_statement($stid);
        return $row; // Return the latest 3 articles
    }

    public function blog1()
    {
        global $conn;

        $query = "SELECT a.ID, a.TITLE, a.IMAGE_URL, a.CONTENT, a.AUTHOR_ID, 
                         a.PUBLISHED_DATE, a.MAIN_CATEGORY_ID, c.NAME_KH AS CATEGORY_NAME
                  FROM article_tbl a
                  INNER JOIN main_category_tbl c ON a.MAIN_CATEGORY_ID = c.ID
                  WHERE a.MAIN_CATEGORY_ID = 64 AND a.STATUS = 'Published'
                  ORDER BY a.PUBLISHED_DATE DESC
                  FETCH FIRST 4 ROWS ONLY"; // Fetch only the latest 3 articles

        // $query = "SELECT ID, TITLE, IMAGE_URL, CONTENT, AUTHOR_ID, PUBLISHED_DATE 
        //         FROM article_tbl 
        //         WHERE MAIN_CATEGORY_ID = 64
        //         ORDER BY PUBLISHED_DATE DESC
        //         FETCH FIRST 4 ROWS ONLY"; // Fetch only 4 rows

        $stid = oci_parse($conn, $query);
        oci_execute($stid);

        $row = [];
        while ($article = oci_fetch_assoc($stid)) {
            $row[] = $article;
        }

        oci_free_statement($stid);
        return $row;
    }

    public function blog2()
    {
        global $conn;

        $query = "SELECT a.ID, a.TITLE, a.IMAGE_URL, a.CONTENT, a.AUTHOR_ID, 
        a.PUBLISHED_DATE, a.MAIN_CATEGORY_ID, c.NAME_KH AS CATEGORY_NAME
        FROM article_tbl a
        INNER JOIN main_category_tbl c ON a.MAIN_CATEGORY_ID = c.ID
        WHERE a.MAIN_CATEGORY_ID = 65 AND a.STATUS = 'Published'
        ORDER BY a.PUBLISHED_DATE DESC
        FETCH FIRST 4 ROWS ONLY"; // Fetch only the latest 3 articles

        $stid = oci_parse($conn, $query);
        oci_execute($stid);

        $row = [];
        while ($article = oci_fetch_assoc($stid)) {
            $row[] = $article;
        }

        oci_free_statement($stid);
        return $row;
    }
}
