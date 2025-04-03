<?php
// session_start();
require_once __DIR__ . '/../connection/db.php';
require_once __DIR__ . '/../config/config.php';

class ContentController {

    
    public function listArticle($id) {
        global $conn;
        
        // Fetch the article with the given ID
        $query = "SELECT a.ID, a.TITLE, a.IMAGE_URL, a.CONTENT, a.AUTHOR_ID, a.REFERENCE,
                         a.PUBLISHED_DATE, c.NAME_KH AS CATEGORY_NAME, u.NAME_IN_KH AS NAME_IN_KH
                  FROM article_tbl a
                  INNER JOIN main_category_tbl c ON a.MAIN_CATEGORY_ID = c.ID
                                    INNER JOIN user_tbl u ON a.AUTHOR_ID = u.USERID

                  WHERE a.ID = :id"; // Fetch the article with the given ID
        
        $stid = oci_parse($conn, $query);
        oci_bind_by_name($stid, ':id', $id);
        oci_execute($stid);
        
        $article = oci_fetch_assoc($stid); // Fetch the article
        
        oci_free_statement($stid);
        
        return $article; // Return the article with the specific ID
    }
    
}