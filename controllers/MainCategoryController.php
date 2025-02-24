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
        $MainCategoryController->createMainCategory();
    }
}

if (isset($_GET['delet_id'])) {
    $id = $_GET['delet_id'];                                                                                        
    $MainCategoryController = new MainCategoryController();
    $MainCategoryController->deleteMainCategory($id);
}

class MainCategoryController {
    public function listMainCategory() {
        global $conn;  // Use the global connection variable

        // Query to fetch users
        $query = "
            SELECT * FROM main_category_tbl WHERE Status = 1";
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
    public function createMainCategory() {
        global $conn;
        $name = $_POST['TxtName'];
        $status = $_POST['TxtStatus'];
        $desc = $_POST['TxtDesc'];
    
        // Generate Slug
        $slug = strtolower($name);           // Convert to lowercase
        $slug = preg_replace('/[^a-z0-9]+/i', '_', $slug); // Replace spaces & special chars with "_"
        $slug = trim($slug, '_');             // Remove trailing "_"
    
        // Prepare SQL query (no quotes around column names)
        $sql = "INSERT INTO main_category_tbl (name, slug, description, status) 
                VALUES (:name, :slug, :description, :status)";
        
        // Parse the SQL query
        $stid = oci_parse($conn, $sql);
        
        // Bind parameters
        oci_bind_by_name($stid, ":name", $name);
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
        $name = $_POST['TxtName'];
        $desc = $_POST['TxtDesc'];
        $status = $_POST['TxtStatus'];
    
        // Prepare SQL update query
        $sql = "UPDATE Main_Category_Tbl 
                SET name = :name, 
                    description = :description, 
                    status = :status
                WHERE id = :id";
    
        $stid = oci_parse($conn, $sql);
    
        // Bind parameters
        oci_bind_by_name($stid, ":id", $id);
        oci_bind_by_name($stid, ":name", $name);
        oci_bind_by_name($stid, ":description", $desc);
        oci_bind_by_name($stid, ":status", $status);
    
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
    public function editMainCategory($id) {
        
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
    public function deleteMainCategory($id) {
        global $conn; // Use global database connection
    
        // Prepare update query to set STATUS = 0
        $sql = "UPDATE Main_Category_Tbl SET STATUS = 0 WHERE id = :id";
    
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
    
}
