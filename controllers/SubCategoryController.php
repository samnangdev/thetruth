<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../connection/db.php';
require_once __DIR__ . '/../config/config.php';

if (isset($_POST['btnSave'])) {
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $SubCategoryController = new SubCategoryController();
    if (!empty($id)) {
        $SubCategoryController->update();
    } else {
        $SubCategoryController->create();
    }
}

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];                                                                                        
    $SubCategoryController = new SubCategoryController();
    $SubCategoryController->delete($id);
}

if (isset($_GET['update_id']) && isset($_GET['status'])) {
    $id = $_GET['update_id'];  
    $status = $_GET['status'];  
    $MainCategoryController = new SubCategoryController();
    $MainCategoryController->status($id, $status);
}

class SubCategoryController {
    public function list() {
        global $conn;  

        $query = "
            SELECT sc.ID, sc.NAME_KH, sc.NAME_EN, sc.DESCRIPTION, sc.SLUG, sc.STATUS, 
            mc.NAME_KH AS MAIN_CATEGORY_NAME
            FROM sub_category_tbl sc
            LEFT JOIN main_category_tbl mc ON sc.main_category_id = mc.ID
            ORDER BY sc.ID ASC";
    
        $stid = oci_parse($conn, $query);
        oci_execute($stid);
    
        $rows = [];
        while ($row = oci_fetch_assoc($stid)) {
            $rows[] = $row;
        }
    
        oci_free_statement($stid);
    
        return $rows;
    }
    public function create() {
        global $conn;
        $name_kh = $_POST['TxtNameKH'];
        $name_en = $_POST['TxtNameEN'];
        $status = $_POST['TxtStatus'];
        $desc = $_POST['TxtDesc'];
        $main_category_id = $_POST['TxtMainCategoryID'];
    
        // Generate Slug from English name
        $slug = strtolower($name_en);
        $slug = preg_replace('/[^a-z0-9]+/i', '_', $slug);
        $slug = trim($slug, '_');
    
        $sql = "INSERT INTO sub_category_tbl (name_kh, name_en, slug, description, status, main_category_id) 
                VALUES (:name_kh, :name_en, :slug, :description, :status, :main_category_id)";
        
        $stid = oci_parse($conn, $sql);
        
        oci_bind_by_name($stid, ":name_kh", $name_kh);
        oci_bind_by_name($stid, ":name_en", $name_en);
        oci_bind_by_name($stid, ":slug", $slug);
        oci_bind_by_name($stid, ":description", $desc);
        oci_bind_by_name($stid, ":status", $status);
        oci_bind_by_name($stid, ":main_category_id", $main_category_id);
        
        $result = oci_execute($stid, OCI_COMMIT_ON_SUCCESS);
        
        if ($result) {
            oci_commit($conn);
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
            header('location:' . BASE_URL . 'views/admin/sub_category/index.php');
            exit();
        } else {
            $e = oci_error($stid);
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
            echo "Error inserting record: " . $e['message'];
        }
    }
    
    public function update() {
        global $conn;
    
        $id = $_POST['id'];
        $name_kh = $_POST['TxtNameKH'];
        $name_en = $_POST['TxtNameEN'];
        $desc = $_POST['TxtDesc'];
        $status = $_POST['TxtStatus'];
        $main_category_id = $_POST['TxtMainCategoryID'];
    
        // Generate Slug from English name
        $slug = strtolower($name_en);
        $slug = preg_replace('/[^a-z0-9]+/i', '_', $slug);
        $slug = trim($slug, '_');
    
        $sql = "UPDATE sub_category_tbl 
                SET name_kh = :name_kh, 
                    name_en = :name_en, 
                    slug = :slug,
                    description = :description, 
                    status = :status,
                    main_category_id = :main_category_id
                WHERE id = :id";
    
        $stid = oci_parse($conn, $sql);
    
        oci_bind_by_name($stid, ":id", $id);
        oci_bind_by_name($stid, ":name_kh", $name_kh);
        oci_bind_by_name($stid, ":name_en", $name_en);
        oci_bind_by_name($stid, ":slug", $slug);
        oci_bind_by_name($stid, ":description", $desc);
        oci_bind_by_name($stid, ":status", $status);
        oci_bind_by_name($stid, ":main_category_id", $main_category_id);
    
        $result = oci_execute($stid);
    
        if ($result) {
            oci_commit($conn);
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
            header('Location: ' . BASE_URL . 'views/admin/sub_category/index.php');
            exit();
        } else {
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
            header('Location: ' . BASE_URL . 'views/admin/sub_category/index.php');
        }
    
        oci_free_statement($stid);
    }
    public function edit($id) {
        
        global $conn;
        $query = "
            SELECT * FROM sub_category_tbl WHERE id = :id
        ";
    
        $stid = oci_parse($conn, $query);
        oci_bind_by_name($stid, ":id", $id);
    
        oci_execute($stid);
    
        $rows = oci_fetch_assoc($stid);
        
        oci_free_statement($stid);
    
        return $rows;
    }
    public function delete($id) {
        global $conn; 

        $sql = "DELETE FROM sub_category_tbl WHERE id = :id";
    
        $stid = oci_parse($conn, $sql);
        oci_bind_by_name($stid, ":id", $id);
    
        $result = oci_execute($stid);
    
        if ($result) {
            oci_commit($conn);
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
            header('Location: ' . BASE_URL . 'views/admin/sub_category/index.php');
            exit();
        } else {
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
            header('Location: ' . BASE_URL . 'views/admin/sub_category/index.php');
            // $e = oci_error($stid);
            // echo "Error updating record: " . $e['message'];
        }
    
        oci_free_statement($stid);
    }
    public function status($id, $status) {
        global $conn; // Use global database connection
    
        // Ensure status is either 0 or 1
        $status = ($status == 1) ? 1 : 0;
    
        // Prepare SQL update query
        $sql = "UPDATE sub_category_tbl SET status = :status WHERE id = :id";
    
        $stid = oci_parse($conn, $sql);
        oci_bind_by_name($stid, ":status", $status);
        oci_bind_by_name($stid, ":id", $id);
    
        // Execute the query
        $result = oci_execute($stid, OCI_COMMIT_ON_SUCCESS);
    
        if ($result) {
            oci_commit($conn); // Commit transaction
            $_SESSION['snackbar'] = ['message' => 'Status updated successfully!', 'type' => 'success'];
        } else {
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
            $e = oci_error($stid);
            echo "Error updating record: " . $e['message'];
        }
    
        oci_free_statement($stid);
    
        // Redirect back
        header('Location: ' . BASE_URL . 'views/admin/sub_category/index.php');
        exit();
    }
}
