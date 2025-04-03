<?php
session_start();
require_once __DIR__ . '/../connection/db.php';
require_once __DIR__ . '/../config/config.php';

if (isset($_POST['btnSave'])) {
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $MainCategoryController = new MainCategoryController();
    if (!empty($id)) {
        $MainCategoryController->update();
    } else {
        $MainCategoryController->create();
    }
}

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];                                                                                        
    $MainCategoryController = new MainCategoryController();
    $MainCategoryController->delete($id);
}

if (isset($_GET['update_id']) && isset($_GET['status'])) {
    $id = $_GET['update_id'];  
    $status = $_GET['status'];  
    $MainCategoryController = new MainCategoryController();
    $MainCategoryController->status($id, $status);
}

class MainCategoryController {
    public function listForSelect() {
        global $conn;  // Use the global connection variable

        // Query to fetch users
        $query = "
            SELECT * FROM main_category_tbl WHERE status = 1";
        $stid = oci_parse($conn, $query);
        oci_execute($stid);

        // Store results in the $users array
        $rows = [];
        while ($row = oci_fetch_assoc($stid)) {
            $rows[] = $row;
        }

        // Free the statement
        oci_free_statement($stid);

        return $rows;
    }
    public function list() {
        global $conn;  // Use the global connection variable

        // Query to fetch users
        $query = "
            SELECT * FROM main_category_tbl";
        $stid = oci_parse($conn, $query);
        oci_execute($stid);

        // Store results in the $users array
        $rows = [];
        while ($row = oci_fetch_assoc($stid)) {
            $rows[] = $row;
        }

        // Free the statement
        oci_free_statement($stid);

        return $rows;
    }
    public function create() {
        global $conn;
        $name_kh = $_POST['TxtNameKH'];
        $name_en = $_POST['TxtNameEN'];
        $status = $_POST['TxtStatus'];
        $desc = $_POST['TxtDesc'];
    
        // Generate Slug
        $slug = strtolower($name);           // Convert to lowercase
        $slug = preg_replace('/[^a-z0-9]+/i', '_', $slug); // Replace spaces & special chars with "_"
        $slug = trim($slug, '_');             // Remove trailing "_"
    
        // Prepare SQL query (no quotes around column names)
        $sql = "INSERT INTO main_category_tbl (name_kh, name_en, slug, description, status) 
                VALUES (:name_kh, :name_en, :slug, :description, :status)";
        
        // Parse the SQL query
        $stid = oci_parse($conn, $sql);
        
        // Bind parameters
        oci_bind_by_name($stid, ":name_kh", $name_kh);
        oci_bind_by_name($stid, ":name_en", $name_en);
        oci_bind_by_name($stid, ":slug", $slug);
        oci_bind_by_name($stid, ":description", $desc);
        oci_bind_by_name($stid, ":status", $status);
        
        // Execute the query
        $result = oci_execute($stid, OCI_COMMIT_ON_SUCCESS);
        
        // Check if the query was successful
        if ($result) {
            oci_commit($conn);
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
            header('location:' . BASE_URL . 'views/admin/main_category/index.php');
            exit();
        } else {
            $e = oci_error($stid);
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
            echo "Error inserting record: " . $e['message'];
        }
    }
    public function update() {
        global $conn;
    
        // Retrieve form data
        $id = $_POST['id'];  // Hidden input field from the form
        $name_kh = $_POST['TxtNameKH'];
        $name_en = $_POST['TxtNameEN'];
        $desc = $_POST['TxtDesc'];
        $status = $_POST['TxtStatus'];

        // Generate Slug
        $slug = strtolower($name_en);           // Convert to lowercase
        $slug = preg_replace('/[^a-z0-9]+/i', '_', $slug); // Replace spaces & special chars with "_"
        $slug = trim($slug, '_');             // Remove trailing "_"
    
        // Prepare SQL update query
        $sql = "UPDATE Main_Category_Tbl 
                SET name_kh = :name_kh, 
                    name_en = :name_en, 
                    description = :description, 
                    status = :status,
                    slug = :slug
                WHERE id = :id";
    
        $stid = oci_parse($conn, $sql);
    
        // Bind parameters
        oci_bind_by_name($stid, ":id", $id);
        oci_bind_by_name($stid, ":name_kh", $name_kh);
        oci_bind_by_name($stid, ":name_en", $name_en);
        oci_bind_by_name($stid, ":description", $desc);
        oci_bind_by_name($stid, ":status", $status);
        oci_bind_by_name($stid, ":slug", $slug);
    
        $result = oci_execute($stid);
    
        if ($result) {
            oci_commit($conn);
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
            header('Location: ' . BASE_URL . 'views/admin/main_category/index.php');
            exit();
        } else {
            $e = oci_error($stid);
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
            echo "Error updating record: " . $e['message'];
        }
    
        oci_free_statement($stid);
    }
    public function edit($id) {
        
        global $conn;
        $query = "
            SELECT * FROM main_category_tbl WHERE id = :id
        ";
    
        $stid = oci_parse($conn, $query);
        oci_bind_by_name($stid, ":id", $id);
    
        oci_execute($stid);
    
        // Fetch the user data
        $rows = oci_fetch_assoc($stid);
        
        oci_free_statement($stid);
    
        return $rows;
    }
    public function delete($id) {
        global $conn; // Use global database connection
    
        // Prepare update query to set STATUS = 0
        $sql = "DELETE FROM Main_Category_Tbl WHERE id = :id";
    
        $stid = oci_parse($conn, $sql);
        oci_bind_by_name($stid, ":id", $id);
    
        // Execute the query
        $result = oci_execute($stid);
    
        if ($result) {
            oci_commit($conn); // Commit transaction
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
            header('Location: ' . BASE_URL . 'views/admin/main_category/index.php');
            exit();
        } else {
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
            $e = oci_error($stid);
            echo "Error updating record: " . $e['message'];
        }
    
        oci_free_statement($stid);
    }
    public function status($id, $status) {
        global $conn; // Use global database connection
    
        // Ensure status is either 0 or 1
        $status = ($status == 1) ? 1 : 0;
    
        // Prepare SQL update query
        $sql = "UPDATE main_category_tbl SET status = :status WHERE id = :id";
    
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
        header('Location: ' . BASE_URL . 'views/admin/main_category/index.php');
        exit();
    }
    
    
}
