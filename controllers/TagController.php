<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../connection/db.php';
require_once __DIR__ . '/../config/config.php';

if (isset($_POST['btnSave'])) {
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $TagController = new TagController();
    if (!empty($id)) {
        $TagController->update();
    } else {
        $TagController->create();
    }
}

if (isset($_GET['delet_id'])) {
    $id = $_GET['delet_id'];                                                                                        
    $TagController = new TagController();
    $TagController->delete($id);
}
if (isset($_GET['update_id']) && isset($_GET['status'])) {
    $id = $_GET['update_id'];  
    $status = $_GET['status'];  
    $TagController = new TagController();
    $TagController->status($id, $status);
}
class TagController {
    public function list() {
        global $conn;  

        $query = "SELECT * FROM tag_tbl";
    
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

        $sql = "INSERT INTO tag_tbl (name_kh, name_en, status) 
                VALUES (:name_kh, :name_en, :status)";
        
        $stid = oci_parse($conn, $sql);
        
        oci_bind_by_name($stid, ":name_kh", $name_kh);
        oci_bind_by_name($stid, ":name_en", $name_en);
        oci_bind_by_name($stid, ":status", $status);
        
        $result = oci_execute($stid, OCI_COMMIT_ON_SUCCESS);
        
        if ($result) {
            oci_commit($conn);
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
            header('location:' . BASE_URL . 'views/admin/tag/index.php');
            exit();
        } else {
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
            header('location:' . BASE_URL . 'views/admin/tag/index.php');
            // $e = oci_error($stid);
            // echo "Error inserting record: " . $e['message'];
        }
    }
    public function update() {
        global $conn;
    
        $id = $_POST['id'];
        $name_kh = $_POST['TxtNameKH'];
        $name_en = $_POST['TxtNameEN'];
        $status = $_POST['TxtStatus'];

        $sql = "UPDATE tag_tbl 
                SET name_kh = :name_kh, 
                    name_en = :name_en,
                    status = :status
                WHERE id = :id";
    
        $stid = oci_parse($conn, $sql);
        
        oci_bind_by_name($stid, ":id", $id);
        oci_bind_by_name($stid, ":name_kh", $name_kh);
        oci_bind_by_name($stid, ":name_en", $name_en);
        oci_bind_by_name($stid, ":status", $status);
    
        $result = oci_execute($stid);
    
        if ($result) {
            oci_commit($conn);
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
            header('Location: ' . BASE_URL . 'views/admin/tag/index.php');
            exit();
        } else {
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
            // header('Location: ' . BASE_URL . 'views/admin/tag/index.php');
            $e = oci_error($stid);
            echo "Error updating record: " . $e['message'];
        }
    
        oci_free_statement($stid);
    }
    public function edit($id) {
        
        global $conn;
        $query = "
            SELECT * FROM tag_tbl WHERE id = :id
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

        $sql = "DELETE FROM tag_tbl WHERE id = :id";
    
        $stid = oci_parse($conn, $sql);
        oci_bind_by_name($stid, ":id", $id);
    
        $result = oci_execute($stid);
    
        if ($result) {
            oci_commit($conn);
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
            header('Location: ' . BASE_URL . 'views/admin/tag/index.php');
            exit();
        } else {
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
            header('Location: ' . BASE_URL . 'views/admin/tag/index.php');
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
        $sql = "UPDATE Tag_Tbl SET STATUS = :status WHERE id = :id";
    
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
        header('Location: ' . BASE_URL . 'views/admin/tag/index.php');
        exit();
    }
}
