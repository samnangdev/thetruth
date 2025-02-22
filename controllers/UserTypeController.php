<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // Call createUser function when form is submitted
//     $userAction = new userAction();
//     $userAction->createUser();
// }

class UserTypeController {
    // Function to fetch users from the database
    public function listUserType() {
        global $conn;
        $query = " SELECT * FROM UserType_Tbl";
        $stid = oci_parse($conn, $query);
        oci_execute($stid);

        // Store results in the $users array
        $usertypes = [];
        while ($row = oci_fetch_assoc($stid)) {
            $usertypes[] = $row;
        }

        // Free the statement
        oci_free_statement($stid);

        return $usertypes;
    }

    public function createUser(){
        echo "JUi";
    }
}
