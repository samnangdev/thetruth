<?php
// session_start();
require_once __DIR__ . '/../connection/db.php';
require_once __DIR__ . '/../config/config.php';

class BlogController {

    public function listBlogStarter($categoryId) {
        global $conn;
    
        $query = "SELECT a.ID, a.TITLE, a.IMAGE_URL, a.CONTENT, a.AUTHOR_ID, 
                         a.PUBLISHED_DATE, c.NAME_KH AS CATEGORY_NAME
                  FROM article_tbl a
                  INNER JOIN main_category_tbl c ON a.MAIN_CATEGORY_ID = c.ID
                  WHERE a.MAIN_CATEGORY_ID = :categoryId
                --   AND a.STATUS = 'Published' 
                  ORDER BY a.PUBLISHED_DATE DESC
                  FETCH FIRST 2 ROWS ONLY";
    
        $stid = oci_parse($conn, $query);
        oci_bind_by_name($stid, ':categoryId', $categoryId);
        oci_execute($stid);
    
        $row = [];
        while ($article = oci_fetch_assoc($stid)) {
            $row[] = $article;
        }
    
        oci_free_statement($stid);
        return $row; // Return the 2 latest articles with category name
    }
    
    public function listBlogContent($categoryId) {
        global $conn;
    
        // Fetch the next 12 articles excluding the first 2
        $query = "SELECT a.ID, a.TITLE, a.IMAGE_URL, a.CONTENT, a.AUTHOR_ID, 
                         a.PUBLISHED_DATE, c.NAME_KH AS CATEGORY_NAME, u.NAME_IN_KH AS NAME_IN_KH
                  FROM article_tbl a
                  INNER JOIN main_category_tbl c ON a.MAIN_CATEGORY_ID = c.ID
                                    INNER JOIN user_tbl u ON a.AUTHOR_ID = u.USERID

                  WHERE a.MAIN_CATEGORY_ID = :categoryId
                  AND a.STATUS = 'Published' 
                  AND a.ID NOT IN (SELECT a.ID
                                   FROM article_tbl a
                                   WHERE a.MAIN_CATEGORY_ID = :categoryId
                                   ORDER BY a.PUBLISHED_DATE DESC
                                   FETCH FIRST 2 ROWS ONLY)
                  ORDER BY a.PUBLISHED_DATE DESC
                  FETCH FIRST 12 ROWS ONLY"; // Fetch the next 12 rows
    
        $stid = oci_parse($conn, $query);
        oci_bind_by_name($stid, ':categoryId', $categoryId);
        oci_execute($stid);
    
        $blogContent = [];
        while ($article = oci_fetch_assoc($stid)) {
            $blogContent[] = $article;
        }
    
        oci_free_statement($stid);
    
        return $blogContent; // Return the remaining 12 articles
    }
    
    
    // public function blog($categoryId) {
    //     global $conn;
    
    //     $query = "SELECT ID, TITLE, IMAGE_URL, CONTENT, AUTHOR_ID, PUBLISHED_DATE 
    //               FROM article_tbl 
    //               WHERE MAIN_CATEGORY_ID = :categoryId 
    //               ORDER BY PUBLISHED_DATE DESC";
    
    //     $stid = oci_parse($conn, $query);
    //     oci_bind_by_name($stid, ':categoryId', $categoryId);
    //     oci_execute($stid);
    
    //     $row = []; // Correctly initialized array
    //     while ($article = oci_fetch_assoc($stid)) {
    //         $row[] = $article; // Append fetched row to array
    //     }
    
    //     oci_free_statement($stid);
    //     return $row; // Return array of articles
    // }
    
    
    // public function list() {
    //     global $conn;  
    
    //     $query = "SELECT 
    //                 article_tbl.id, 
    //                 article_tbl.title, 
    //                 sub_category_tbl.name, 
    //                 article_tbl.slug, 
    //                 article_tbl.author_id, 
    //                 article_tbl.published_date, 
    //                 article_tbl.status,
    //                 article_tbl.image_url
    //               FROM article_tbl
    //               INNER JOIN sub_category_tbl ON article_tbl.sub_category_id = sub_category_tbl.id
    //               ORDER BY article_tbl.id DESC
    //               FETCH FIRST 1 ROW ONLY"; 
    
    //     $stid = oci_parse($conn, $query);
    //     oci_execute($stid);
    
    //     $row = oci_fetch_assoc($stid);
    
    //     oci_free_statement($stid);
    
    //     return $row ? [$row] : [];  // Return as an array for consistency
    // }

    public function listNational() {
        global $conn;  
    
        $query = "SELECT 
                    article_tbl.id, 
                    article_tbl.title, 
                    sub_category_tbl.name, 
                    article_tbl.slug, 
                    article_tbl.author_id, 
                    article_tbl.published_date, 
                    article_tbl.status,
                    article_tbl.image_url
                  FROM article_tbl
                  INNER JOIN sub_category_tbl ON article_tbl.sub_category_id = sub_category_tbl.id
                  ORDER BY article_tbl.id DESC
                  FETCH FIRST 4 ROWS ONLY";  // Fetch 4 rows (1 latest + 3 next)
    
        $stid = oci_parse($conn, $query);
        oci_execute($stid);
    
        $rows = [];
        while ($row = oci_fetch_assoc($stid)) {
            $rows[] = $row;
        }
    
        oci_free_statement($stid);
        
        return $rows;  
    }
    
    public function listCategory() {
        global $conn;
    
        // Fetch all main categories along with their IDs, including those without subcategories
        $query = "SELECT main_category_tbl.id AS main_category_id, main_category_tbl.Name AS main_category, 
                         sub_category_tbl.Name AS sub_category 
                  FROM main_category_tbl 
                  LEFT JOIN sub_category_tbl ON sub_category_tbl.main_category_id = main_category_tbl.id
                  WHERE main_category_tbl.status = 1
                  ORDER BY main_category_tbl.id, sub_category_tbl.id";
    
        $stid = oci_parse($conn, $query);
        oci_execute($stid);
    
        // Organizing categories into a structured array
        $categories = [];
        while ($row = oci_fetch_assoc($stid)) {
            $mainCategoryId = $row['MAIN_CATEGORY_ID'];
            $mainCategory = $row['MAIN_CATEGORY'];
            $subCategory = $row['SUB_CATEGORY'];
    
            // If subcategory is null, it means there are no subcategories for this main category
            if (!isset($categories[$mainCategoryId])) {
                $categories[$mainCategoryId] = [
                    'name' => $mainCategory,
                    'subcategories' => []
                ];
            }
    
            if ($subCategory) {
                $categories[$mainCategoryId]['subcategories'][] = $subCategory;
            }
        }
    
        oci_free_statement($stid);
        return $categories;
    }
    
    // public function listCategory() {
    //     global $conn;
    
    //     // Fetch all main categories, including those without subcategories
    //     $query = "SELECT main_category_tbl.Name AS main_category, sub_category_tbl.Name AS sub_category 
    //               FROM main_category_tbl 
    //               LEFT JOIN sub_category_tbl ON sub_category_tbl.main_category_id = main_category_tbl.id
    //               WHERE main_category_tbl.status = 1
    //               ORDER BY main_category_tbl.id, sub_category_tbl.id";
    
    //     $stid = oci_parse($conn, $query);
    //     oci_execute($stid);
    
    //     // Organizing categories into a structured array
    //     $categories = [];
    //     while ($row = oci_fetch_assoc($stid)) {
    //         $mainCategory = $row['MAIN_CATEGORY'];
    //         $subCategory = $row['SUB_CATEGORY'];
    
    //         // If subcategory is null, it means there are no subcategories for this main category
    //         if ($subCategory) {
    //             $categories[$mainCategory][] = $subCategory;
    //         } else {
    //             // If there are no subcategories, still add the main category to the list
    //             if (!isset($categories[$mainCategory])) {
    //                 $categories[$mainCategory] = [];  // Initialize an empty array
    //             }
    //         }
    //     }
    
    //     oci_free_statement($stid);
    //     return $categories;
    // }
    

    // public function listCategory() {
    //     global $conn;
    
    //     // Fetch all main categories, including those without subcategories
    //     $query = "SELECT main_category_tbl.Name AS main_category, sub_category_tbl.Name AS sub_category 
    //               FROM main_category_tbl 
    //               LEFT JOIN sub_category_tbl ON sub_category_tbl.main_category_id = main_category_tbl.id
    //               WHERE main_category_tbl.id = 1";  
    
    //     $stid = oci_parse($conn, $query);
    //     oci_execute($stid);
    
    //     // Organizing categories into a structured array
    //     $categories = [];
    //     while ($row = oci_fetch_assoc($stid)) {
    //         $mainCategory = $row['MAIN_CATEGORY'];  // Oracle returns uppercase column names
    //         $subCategory = $row['SUB_CATEGORY']; // Can be NULL if no subcategory exists
    
    //         // Initialize main category
    //         if (!isset($categories[$mainCategory])) {
    //             $categories[$mainCategory] = [];
    //         }
    
    //         // Add subcategory only if it exists
    //         if ($subCategory !== null) {
    //             $categories[$mainCategory][] = $subCategory;
    //         }
    //     }
    
    //     oci_free_statement($stid);
    //     return $categories;
    // }
    

    // public function listCategory() {
    //     global $conn;
    
    //     // Fetch main categories along with their respective subcategories
    //     $query = "SELECT main_category_tbl.Name AS main_category, sub_category_tbl.Name AS sub_category 
    //               FROM sub_category_tbl 
    //               INNER JOIN main_category_tbl ON sub_category_tbl.main_category_id = main_category_tbl.id 
    //               ORDER BY main_category_tbl.id, sub_category_tbl.id";  // Ensure ordered structure
    
    //     $stid = oci_parse($conn, $query);
    //     oci_execute($stid);
    
    //     // Organizing categories into a structured array
    //     $categories = [];
    //     while ($row = oci_fetch_assoc($stid)) {
    //         $mainCategory = $row['MAIN_CATEGORY'];
    //         $subCategory = $row['SUB_CATEGORY'];
    
    //         // Group subcategories under main categories
    //         if (!isset($categories[$mainCategory])) {
    //             $categories[$mainCategory] = [];  // Initialize array if main category doesn't exist
    //         }
    //         $categories[$mainCategory][] = $subCategory; // Append subcategory
    //     }
    
    //     oci_free_statement($stid);
    //     return $categories;
    // }
    
    
    // public function list() {
    //     global $conn;  
    
    //     // $query = "SELECT 
    //     //             article_tbl.id, 
    //     //             article_tbl.title, 
    //     //             -- main_category_tbl.name, 
    //     //             sub_category_tbl.name, 
    //     //             article_tbl.slug, 
    //     //             article_tbl.author_id, 
    //     //             article_tbl.published_date, 
    //     //             article_tbl.status,
    //     //             article_tbl.image_url
    //     //           FROM article_tbl
    //     //         --   INNER JOIN main_category_tbl ON article_tbl.main_category_id = main_category_tbl.id
    //     //           INNER JOIN sub_category_tbl ON article_tbl.sub_category_id = sub_category_tbl.id";
        
    
    //     $stid = oci_parse($conn, $query);
    //     oci_execute($stid);
    
    //     $rows = [];
    //     while ($row = oci_fetch_assoc($stid)) {
    //         $rows[] = $row;
    //     }
    
    //     oci_free_statement($stid);
    
    //     return $rows;
    // }
    public function create() {
        global $conn;

        $main_category_id = $_POST['TxtMainCategoryID'];
        $sub_category_id = $_POST['TxtSubCategoryID'];
        $status = $_POST['TxtStatus'];
        $title = $_POST['TxtTitle'];
        $author_id = $_POST['TxtAuthorID'];
        $reference = $_POST['TxtReference'];
        $content = $_POST['TxtContent'];
        $image_name = "";
        if (isset($_FILES['TxtImageURL']) && $_FILES['TxtImageURL']['error'] == 0) {
            $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/factnews/storage/uploads/article/";
            
            // Create folder if it doesn't exist
            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0777, true);
            }

            // Generate unique file name to avoid overwriting
            $image_name = time() . "_" . basename($_FILES['TxtImageURL']['name']);
            $target_file = $target_dir . $image_name;

            if (move_uploaded_file($_FILES['TxtImageURL']['tmp_name'], $target_file)) {
                // File moved successfully
            } else {
                // $_SESSION['snackbar'] = ['message' => 'Failed to upload image.', 'type' => 'error'];
                // header('location:' . BASE_URL . 'views/admin/article/index.php');
                // exit();
            }
        }

        // Handle file upload
        // $image_name = "";
        // if (isset($_FILES['TxtImageURL']) && $_FILES['TxtImageURL']['error'] == 0) {
        //     $target_dir = __DIR__ . "/storage/uploads/article/"; // Gets the correct full path
        //     $image_name = basename($_FILES['TxtImageURL']['name']);
        //     $target_file = $target_dir . $image_name;
        //     move_uploaded_file($_FILES['TxtImageURL']['tmp_name'], $target_file);
        // }

        // Generate Slug
        $slug = strtolower($title);           // Convert to lowercase
        $slug = preg_replace('/[^a-z0-9]+/i', '_', $slug); // Replace spaces & special chars with "_"
        $slug = trim($slug, '_');             // Remove trailing "_"
    
        $sql = "INSERT INTO article_tbl (Main_Category_ID, Sub_Category_ID, Status, Title, Author_ID, Reference, Content, Image_URL, Slug) 
                VALUES (:main_category_id, :sub_category_id, :status, :title, :author_id, :reference, :content, :image, :slug)";
    
        $stid = oci_parse($conn, $sql);
        oci_bind_by_name($stid, ":main_category_id", $main_category_id);
        oci_bind_by_name($stid, ":sub_category_id", $sub_category_id);
        oci_bind_by_name($stid, ":status", $status);
        oci_bind_by_name($stid, ":title", $title);
        oci_bind_by_name($stid, ":slug", $slug);
        oci_bind_by_name($stid, ":author_id", $author_id);
        oci_bind_by_name($stid, ":reference", $reference);
        oci_bind_by_name($stid, ":content", $content);
        oci_bind_by_name($stid, ":image", $image_name);
    
        $result = oci_execute($stid);
        if ($result) {
            oci_commit($conn);
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
            header('location:' . BASE_URL . 'views/admin/article/index.php');
            exit();
        } else {
            $e = oci_error($stid);
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
            echo "Error: " . $e['message'];
        }
    }
    public function update() {
        global $conn;
    
        $id = $_POST['id'];
        $main_category_id = $_POST['TxtMainCategoryID'];
        $sub_category_id = $_POST['TxtSubCategoryID'];
        $status = $_POST['TxtStatus'];
        $title = $_POST['TxtTitle'];
        $author_id = $_POST['TxtAuthorID'];
        $reference = $_POST['TxtReference'];
        $content = $_POST['TxtContent'];
        
        // Keep the existing image unless a new one is uploaded
        $image_name = $_POST['ExistingImage']; 
        // Generate Slug
        $slug = strtolower($title);           // Convert to lowercase
        $slug = preg_replace('/[^a-z0-9]+/i', '_', $slug); // Replace spaces & special chars with "_"
        $slug = trim($slug, '_');             // Remove trailing "_"
        
        // Handle new image upload
        if (isset($_FILES['TxtImageURL']) && $_FILES['TxtImageURL']['error'] == 0) {
            $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/factnews/storage/uploads/article/";
    
            // Create folder if it doesn't exist
            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
    
            // Generate unique file name
            $new_image_name = time() . "_" . basename($_FILES['TxtImageURL']['name']);
            $target_file = $target_dir . $new_image_name;
    
            if (move_uploaded_file($_FILES['TxtImageURL']['tmp_name'], $target_file)) {
                // Delete the old image if a new one is uploaded
                if (!empty($image_name) && file_exists($target_dir . $image_name)) {
                    unlink($target_dir . $image_name);
                }
                $image_name = $new_image_name; // Set the new image name
            } else {
                $_SESSION['snackbar'] = ['message' => 'Failed to upload image.', 'type' => 'error'];
                header('location:' . BASE_URL . 'views/admin/article/index.php');
                exit();
            }
        }
    
        // Generate new slug
        $slug = strtolower($title);
        $slug = preg_replace('/[^a-z0-9]+/i', '_', $slug);
        $slug = trim($slug, '_');
    
        $sql = "UPDATE article_tbl 
                SET Main_Category_ID = :main_category_id, 
                    Sub_Category_ID = :sub_category_id, 
                    Status = :status, 
                    Title = :title, 
                    Author_ID = :author_id, 
                    Reference = :reference, 
                    Content = :content, 
                    Image_URL = :image, 
                    Slug = :slug 
                WHERE ID = :id";
    
        $stid = oci_parse($conn, $sql);
    
        oci_bind_by_name($stid, ":id", $id);
        oci_bind_by_name($stid, ":main_category_id", $main_category_id);
        oci_bind_by_name($stid, ":sub_category_id", $sub_category_id);
        oci_bind_by_name($stid, ":status", $status);
        oci_bind_by_name($stid, ":title", $title);
        oci_bind_by_name($stid, ":author_id", $author_id);
        oci_bind_by_name($stid, ":reference", $reference);
        oci_bind_by_name($stid, ":content", $content);
        oci_bind_by_name($stid, ":image", $image_name); // Ensure the image is set properly
        oci_bind_by_name($stid, ":slug", $slug);
    
        $result = oci_execute($stid);
    
        if ($result) {
            oci_commit($conn);
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
            header('Location: ' . BASE_URL . 'views/admin/article/index.php');
            exit();
        } else {
            $e = oci_error($stid);
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
            echo "Error: " . $e['message'];
        }
    
        oci_free_statement($stid);
    }
    
    // public function update() {
    //     global $conn;
    
    //     $id = $_POST['id'];
    //     $main_category_id = $_POST['TxtMainCategoryID'];
    //     $sub_category_id = $_POST['TxtSubCategoryID'];
    //     $status = $_POST['TxtStatus'];
    //     $title = $_POST['TxtTitle'];
    //     $author_id = $_POST['TxtAuthorID'];
    //     $reference = $_POST['TxtReference'];
    //     $content = $_POST['TxtContent'];
    //     $image_name = $_POST['ExistingImage']; // Keep the existing image unless updated
    
    //     // Handle new image upload
    //     if (isset($_FILES['TxtImageURL']) && $_FILES['TxtImageURL']['error'] == 0) {
    //         $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/factnews/storage/uploads/article/";
    
    //         // Create folder if it doesn't exist
    //         if (!is_dir($target_dir)) {
    //             mkdir($target_dir, 0777, true);
    //         }
    
    //         // Generate unique file name
    //         $image_name = time() . "_" . basename($_FILES['TxtImageURL']['name']);
    //         $target_file = $target_dir . $image_name;
    
    //         if (move_uploaded_file($_FILES['TxtImageURL']['tmp_name'], $target_file)) {
    //             // Image uploaded successfully
    //         } else {
    //             $_SESSION['snackbar'] = ['message' => 'Failed to upload image.', 'type' => 'error'];
    //             header('location:' . BASE_URL . 'views/admin/article/index.php');
    //             exit();
    //         }
    //     }
    
    //     // Generate new slug
    //     $slug = strtolower($title);
    //     $slug = preg_replace('/[^a-z0-9]+/i', '_', $slug);
    //     $slug = trim($slug, '_');
    
    //     $sql = "UPDATE article_tbl 
    //             SET Main_Category_ID = :main_category_id, 
    //                 Sub_Category_ID = :sub_category_id, 
    //                 Status = :status, 
    //                 Title = :title, 
    //                 Author_ID = :author_id, 
    //                 Reference = :reference, 
    //                 Content = :content, 
    //                 Image_URL = :image, 
    //                 Slug = :slug 
    //             WHERE ID = :id";
    
    //     $stid = oci_parse($conn, $sql);
    
    //     oci_bind_by_name($stid, ":id", $id);
    //     oci_bind_by_name($stid, ":main_category_id", $main_category_id);
    //     oci_bind_by_name($stid, ":sub_category_id", $sub_category_id);
    //     oci_bind_by_name($stid, ":status", $status);
    //     oci_bind_by_name($stid, ":title", $title);
    //     oci_bind_by_name($stid, ":author_id", $author_id);
    //     oci_bind_by_name($stid, ":reference", $reference);
    //     oci_bind_by_name($stid, ":content", $content);
    //     oci_bind_by_name($stid, ":image", $image_name);
    //     oci_bind_by_name($stid, ":slug", $slug);
    
    //     $result = oci_execute($stid);
    
    //     if ($result) {
    //         oci_commit($conn);
    //         $_SESSION['snackbar'] = ['message' => 'Article updated successfully!', 'type' => 'success'];
    //         header('Location: ' . BASE_URL . 'views/admin/article/index.php');
    //         exit();
    //     } else {
    //         $e = oci_error($stid);
    //         $_SESSION['snackbar'] = ['message' => 'Error updating article.', 'type' => 'error'];
    //         echo "Error: " . $e['message'];
    //     }
    
    //     oci_free_statement($stid);
    // }
    
    public function edit($id) {
        
        global $conn;
        $query = "SELECT * FROM article_tbl
                --   INNER JOIN main_category_tbl ON article_tbl.main_category_id = main_category_tbl.id
                --   INNER JOIN sub_category_tbl ON article_tbl.sub_category_id = sub_category_tbl.id
            WHERE
                id = :id
        ";
    
        $stid = oci_parse($conn, $query);
        oci_bind_by_name($stid, ":id", $id);
    
        oci_execute($stid);
    
        $row = oci_fetch_assoc($stid);
    
        oci_free_statement($stid);
    
        return $row;
    }
    public function published($id) {
        global $conn;
    
        // Change status to 'archived' (assuming '0' means archived)
        $sql = "UPDATE article_tbl SET Status = 'Published' WHERE ID = :id";
    
        $stid = oci_parse($conn, $sql);
        oci_bind_by_name($stid, ":id", $id);
    
        $result = oci_execute($stid);
    
        if ($result) {
            oci_commit($conn);
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
        } else {
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
        }
    
        header('Location: ' . BASE_URL . 'views/admin/article/index.php');
        exit();
    
        oci_free_statement($stid);
    }
    public function archive($id) {
        global $conn;
    
        // Change status to 'archived' (assuming '0' means archived)
        $sql = "UPDATE article_tbl SET Status = 'Archived' WHERE ID = :id";
    
        $stid = oci_parse($conn, $sql);
        oci_bind_by_name($stid, ":id", $id);
    
        $result = oci_execute($stid);
    
        if ($result) {
            oci_commit($conn);
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
        } else {
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
        }
    
        header('Location: ' . BASE_URL . 'views/admin/article/index.php');
        exit();
    
        oci_free_statement($stid);
    }
    public function delete($id) {
        global $conn;
    
        // Change status to 'archived' (assuming '0' means archived)
        $sql = "UPDATE article_tbl SET Status = 'Archived' WHERE ID = :id";
    
        $stid = oci_parse($conn, $sql);
        oci_bind_by_name($stid, ":id", $id);
    
        $result = oci_execute($stid);
    
        if ($result) {
            oci_commit($conn);
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
        } else {
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
        }
    
        header('Location: ' . BASE_URL . 'views/admin/article/index.php');
        exit();
    
        oci_free_statement($stid);
    }
    // public function delete($id) {
    //     global $conn; 

    //     $sql = "UPDATE User_Tbl SET STATUS = 0 WHERE USERID = :userid";
    
    //     $stid = oci_parse($conn, $sql);
    //     oci_bind_by_name($stid, ":userid", $id);
    
    //     $result = oci_execute($stid);
    
    //     if ($result) {
    //         oci_commit($conn);
    //         $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
    //         header('Location: ' . BASE_URL . 'views/admin/user/index.php');
    //         exit();
    //     } else {
    //         $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
    //         header('Location: ' . BASE_URL . 'views/admin/user/index.php');
    //         // $e = oci_error($stid);
    //         // echo "Error updating record: " . $e['message'];
    //     }
    
    //     oci_free_statement($stid);
    // }
}