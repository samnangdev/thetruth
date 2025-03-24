<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../connection/db.php';
require_once __DIR__ . '/../config/config.php';

if (isset($_POST['btnSave'])) {
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $UserTypeController = new UserTypeController();
    if (!empty($id)) {
        $UserTypeController->update();
    } else {
        $UserTypeController->create();
    }
}

if (isset($_GET['delet_id'])) {
    $id = $_GET['delet_id'];                                                                                        
    $UserTypeController = new UserTypeController();
    $UserTypeController->delete($id);
}

class UserTypeController {
    public function list() {
        global $conn;  

        $query = "SELECT * FROM user_type_tbl WHERE status = 1 ORDER BY ID ASC";
    
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

        $sql = "INSERT INTO user_type_tbl (name_kh, name_en, status) 
                VALUES (:name_kh, :name_en, :status)";
        
        $stid = oci_parse($conn, $sql);
        
        oci_bind_by_name($stid, ":name_kh", $name_kh);
        oci_bind_by_name($stid, ":name_en", $name_en);
        oci_bind_by_name($stid, ":status", $status);
        
        $result = oci_execute($stid, OCI_COMMIT_ON_SUCCESS);
        
        if ($result) {
            oci_commit($conn);
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
            header('location:' . BASE_URL . 'views/admin/user_type/index.php');
            exit();
        } else {
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
            header('location:' . BASE_URL . 'views/admin/user_type/index.php');
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

        $sql = "UPDATE user_type_tbl 
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
            header('Location: ' . BASE_URL . 'views/admin/user_type/index.php');
            exit();
        } else {
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
            // header('Location: ' . BASE_URL . 'views/admin/user_type/index.php');
            $e = oci_error($stid);
            echo "Error updating record: " . $e['message'];
        }
    
        oci_free_statement($stid);
    }
    public function edit($id) {
        
        global $conn;
        $query = "
            SELECT * FROM user_type_tbl WHERE id = :id
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

        $sql = "UPDATE user_type_tbl SET STATUS = 0 WHERE id = :id";
    
        $stid = oci_parse($conn, $sql);
        oci_bind_by_name($stid, ":id", $id);
    
        $result = oci_execute($stid);
    
        if ($result) {
            oci_commit($conn);
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
            header('Location: ' . BASE_URL . 'views/admin/user_type/index.php');
            exit();
        } else {
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
            header('Location: ' . BASE_URL . 'views/admin/user_type/index.php');
            // $e = oci_error($stid);
            // echo "Error updating record: " . $e['message'];
        }
    
        oci_free_statement($stid);
    }
}
