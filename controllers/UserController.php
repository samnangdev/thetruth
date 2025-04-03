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

    if (isset($_GET['update_id']) && isset($_GET['status'])) {
        $id = $_GET['update_id'];  
        $status = $_GET['status'];  
        $UserController = new UserController();
        $UserController->status($id, $status);
    }

    if (isset($_GET['delete_id'])) {
        $id = $_GET['delete_id'];                                                                                        
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
                    u.NAME_IN_KH,
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
        public function updateUser() {
            global $conn;
        
            $id = $_POST['id'];
            $username = $_POST['TxtUsername'];
            $name_in_kh = $_POST['TxtNameInKh'];
            $email = $_POST['TxtEmail'];
            $password = $_POST['TxtPassword'];
            $userTypeID = $_POST['TxtUserTypeID'];
            $status = isset($_POST['TxtStatus']) ? $_POST['TxtStatus'] : 1;
        
            $sql = "UPDATE User_Tbl 
                    SET USERNAME = :username, 
                        name_in_kh = :name_in_kh, 
                        EMAIL = :email, 
                        PASSWORD = :password, 
                        USERTYPEID = :usertypeid, 
                        STATUS = :status
                    WHERE USERID = :userid";
        
            $stid = oci_parse($conn, $sql);
        
            oci_bind_by_name($stid, ":userid", $id);
            oci_bind_by_name($stid, ":name_in_kh", $name_in_kh);
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
                    u.NAME_IN_KH,
                    u.EMAIL,
                    u.PASSWORD,
                    u.USERTYPEID,
                    ut.NAME_EN,
                    u.STATUS
                FROM 
                    User_Tbl u
                JOIN
                    User_Type_Tbl ut ON u.USERTYPEID = ut.ID
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
            
            $name_in_kh = $_POST['TxtNameInKh'];
            $username = $_POST['TxtUsername'];
            $email = $_POST['TxtEmail'];
            $password = $_POST['TxtPassword'];
            $userTypeID = $_POST['TxtUserTypeID'];
            $status = 1; 

            $sql = "INSERT INTO User_Tbl (Username, Email, Password, UserTypeID, Status, Name_In_Kh) 
                    VALUES (:username, :email, :password, :usertypeid, :status, :name_in_kh)";
            
            $stid = oci_parse($conn, $sql);
            
            oci_bind_by_name($stid, ":name_in_kh", $name_in_kh);
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

            $sql = "DELETE FROM User_Tbl WHERE USERID = :userid";
        
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
        public function status($id, $status) {
            global $conn; // Use global database connection
        
            // Ensure status is either 0 or 1
            $status = ($status == 1) ? 1 : 0;
        
            // Prepare SQL update query
            $sql = "UPDATE User_Tbl SET STATUS = :status WHERE USERID = :id";
        
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
            header('Location: ' . BASE_URL . 'views/admin/user/index.php');
            exit();
        }
    }
