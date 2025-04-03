<?php
session_start();
require_once __DIR__ . '/../../connection/db.php';
require_once __DIR__ . '/../../config/config.php';

if (isset($_POST['btnLogin'])) {
    // Get email and password from the form
    $email = $_POST['TxtEmail'];
    $password = $_POST['TxtPassword'];

    // Instantiate the LoginController and call the Login method
    $LoginController = new LoginController();
    $LoginController->Login($email, $password);
}

class LoginController
{
    public function Login($email, $password) {
        global $conn;  // Use the global connection variable
    
        // SQL query to select user details where email matches and account is active
        // $query = "SELECT USERID, USERNAME, EMAIL, PASSWORD, USERTYPEID
        //           FROM user_tbl 
        //           WHERE EMAIL = :email AND STATUS = '1'"; // Only active users
        $query = "SELECT u.USERID, u.USERNAME, u.EMAIL, u.PASSWORD, u.USERTYPEID, t.name_en AS USERTYPENAME 
                    FROM user_tbl u
                    INNER JOIN user_type_tbl t ON t.id = u.USERTYPEID
                    WHERE u.EMAIL = :email AND u.STATUS = '1'
                    ";
    
        // Prepare the SQL query
        $stid = oci_parse($conn, $query);
    
        // Bind the email parameter
        oci_bind_by_name($stid, ":email", $email);
    
        // Execute the query
        oci_execute($stid);
    
        // Fetch user data
        $user = oci_fetch_assoc($stid);
    
        // Check if user exists and verify the password
        if ($user && $password === $user['PASSWORD']) { 
            // Start session and store user data
            $_SESSION['user_id'] = $user['USERID'];
            $_SESSION['username'] = $user['USERNAME'];
            $_SESSION['user_type_id'] = $user['USERTYPEID'];
            $_SESSION['user_type_name'] = $user['USERTYPENAME'];
            // Redirect user based on role
            if ($user['USERTYPENAME'] === "Manager" || $user['USERTYPENAME'] === "Admin" || $user['USERTYPENAME'] === "Author") {
                header("Location: " . BASE_URL . "views/admin/index.php");
            } else {
                header("Location: " . BASE_URL . "views/auth/");
            }
            exit();
        } else {
            // Handle invalid login
            $_SESSION['error'] = "Invalid email or password.";
                header("Location: " . BASE_URL . "views/auth/");
            exit();
        }
    
        // Free the statement
        oci_free_statement($stid);
    }
}
?>
