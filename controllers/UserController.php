<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../connection/db.php';
require_once __DIR__ . '/../config/config.php';

if (isset($_POST['btnSave'])) {
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $UserController = new UserController();
    if (!empty($id)) {
        $UserController->updateUser();
    } else {
        $UserController->createUser();
    }
}

if (isset($_GET['delet_id'])) {
    $id = $_GET['delet_id'];                                                                                        
    $UserController = new UserController();
    $UserController->deleteUser($id);
}

class UserController {
    public function listUser() {
        global $conn;  

        $query = "
            SELECT 
                u.USERID,
                u.USERNAME,
                u.EMAIL,
                u.USERTYPEID,
                ut.USERTYPENAME,
                u.STATUS
            FROM 
                User_Tbl u
            JOIN 
                UserType_Tbl ut ON u.USERTYPEID = ut.USERTYPEID
        ";
        $stid = oci_parse($conn, $query);
        oci_execute($stid);

        $users = [];
        while ($row = oci_fetch_assoc($stid)) {
            $users[] = $row;
        }

        oci_free_statement($stid);

        return $users;
    }
    public function updateUser() {
        global $conn;
    
        $id = $_POST['id'];
        $username = $_POST['TxtUsername'];
        $email = $_POST['TxtEmail'];
        $password = $_POST['TxtPassword'];
        $userTypeID = $_POST['TxtUserTypeID'];
        $status = isset($_POST['TxtStatus']) ? $_POST['TxtStatus'] : 1;
    
        $sql = "UPDATE User_Tbl 
                SET USERNAME = :username, 
                    EMAIL = :email, 
                    PASSWORD = :password, 
                    USERTYPEID = :usertypeid, 
                    STATUS = :status
                WHERE USERID = :userid";
    
        $stid = oci_parse($conn, $sql);
    
        oci_bind_by_name($stid, ":userid", $id);
        oci_bind_by_name($stid, ":username", $username);
        oci_bind_by_name($stid, ":email", $email);
        oci_bind_by_name($stid, ":password", $password);
        oci_bind_by_name($stid, ":usertypeid", $userTypeID);
        oci_bind_by_name($stid, ":status", $status);
    
        $result = oci_execute($stid);
    
        if ($result) {
            oci_commit($conn);
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
            header('Location: ' . BASE_URL . 'views/admin/user/index.php');
            exit();
        } else {
            $e = oci_error($stid);
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
            echo "Error updating record: " . $e['message'];
        }
    
        oci_free_statement($stid);
    }
    public function editUser($id) {
        
        global $conn;
        $query = "
            SELECT 
                u.USERID,
                u.USERNAME,
                u.EMAIL,
                u.PASSWORD,
                u.USERTYPEID,
                ut.USERTYPENAME,
                u.STATUS
            FROM 
                User_Tbl u
            JOIN
                UserType_Tbl ut ON u.USERTYPEID = ut.USERTYPEID
            WHERE
                u.USERID = :userid
        ";
    
        $stid = oci_parse($conn, $query);
        oci_bind_by_name($stid, ":userid", $id);
    
        oci_execute($stid);
    
        $user = oci_fetch_assoc($stid);
    
        oci_free_statement($stid);
    
        return $user;
    }
    public function createUser() {
        global $conn;  
        
        $username = $_POST['TxtUsername'];
        $email = $_POST['TxtEmail'];
        $password = $_POST['TxtPassword'];
        $userTypeID = $_POST['TxtUserTypeID'];
        $status = 1; 

        $sql = "INSERT INTO User_Tbl (Username, Email, Password, UserTypeID, Status) 
                VALUES (:username, :email, :password, :usertypeid, :status)";
        
        $stid = oci_parse($conn, $sql);
        
        oci_bind_by_name($stid, ":username", $username);
        oci_bind_by_name($stid, ":email", $email);
        oci_bind_by_name($stid, ":password", $password);
        oci_bind_by_name($stid, ":usertypeid", $userTypeID);
        oci_bind_by_name($stid, ":status", $status);
        
        $result = oci_execute($stid);
        
        if ($result) {
            oci_commit($conn);
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
            header('location:' . BASE_URL . 'views/admin/user/index.php');
            exit();
        } else {
            $e = oci_error($stid);
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
            echo "Error inserting record: " . $e['message'];
        }
    }
    public function deleteUser($id) {
        global $conn; 

        $sql = "UPDATE User_Tbl SET STATUS = 0 WHERE USERID = :userid";
    
        $stid = oci_parse($conn, $sql);
        oci_bind_by_name($stid, ":userid", $id);
    
        $result = oci_execute($stid);
    
        if ($result) {
            oci_commit($conn);
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
            header('Location: ' . BASE_URL . 'views/admin/user/index.php');
            exit();
        } else {
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
            header('Location: ' . BASE_URL . 'views/admin/user/index.php');
            // $e = oci_error($stid);
            // echo "Error updating record: " . $e['message'];
        }
    
        oci_free_statement($stid);
    }
}
