<?php
class UserTypeController {
    public function listUserType() {
        global $conn;
        $query = " SELECT * FROM UserType_Tbl";
        $stid = oci_parse($conn, $query);
        oci_execute($stid);

        $usertypes = [];
        while ($row = oci_fetch_assoc($stid)) {
            $usertypes[] = $row;
        }

        oci_free_statement($stid);

        return $usertypes;
    }
}
