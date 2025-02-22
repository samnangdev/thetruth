<?php
session_start();
require_once '../config/config.php';
require_once '../connection/db.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the 'id' parameter exists (for editing), if not, we're adding a new record


if (isset($_POST['btnAdd']) || isset($_POST['btnEdit'])) {
    $id = $_POST['ProgramID'];
    $MajorID = $_POST['MajorID'];
    $YearID = $_POST['YearID'];
    $SemesterID = $_POST['SemesterID'];
    $ShiftID = $_POST['ShiftID'];
    $AcademicYearID = $_POST['AcademicYearID'];
    $DegreeID = $_POST['DegreeID']; 
    $BatchID = $_POST['BatchID'];
    $CampusID = $_POST['CampusID'];
    $StartDate = $_POST['StartDate'];
    $EndDate = $_POST['EndDate'];
    $CreatedDate = $_POST['CreatedDate'];
    if ($id) {
        // $sql = "UPDATE tblprogram 
        //         SET FName='$FName', LName='$LName', KhName='$KhName', SexID='$SexID', 
        //             KhmerIdentityCard='$KhmerIdentityCard', NationalityID='$NationalityID', 
        //             IDCard='$IDCard', DOB='$DOB', HighestDegree='$HighestDegree', 
        //             HighestMajor='$HighestMajor', HighestDegreeFrom='$HighestDegreeFrom', 
        //             FunctionID='$FunctionID', SubDepID='$SubDepID', MainDepID='$MainDepID', 
        //             Phone='$Phone', Email='$Email', Photo='$Photo', WorkStartDate='$WorkStartDate', 
        //             CampusID='$CampusID', PersonTypeID='$PersonTypeID', 
        //             MaritalStatusID='$MaritalStatusID', FatherName='$FatherName', 
        //             FunctionFID='$FunctionFID', MotherName='$MotherName', FunctionMID='$FunctionMID', 
        //             Hobbies='$Hobbies', ReasonResign='$ReasonResign', PersonSort='$PersonSort', 
        //             SpecialNote='$SpecialNote'
        //         WHERE PersonID='$PersonID'";
        // if (mysqli_query($conn, $sql)) {
        //     $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
        //     header('location:' . BASE_URL . 'views/admin/program/index.php');
        // } else {
        //     echo "Error updating record: " . mysqli_error($conn);
        // }
    } else {  
        // SQL INSERT statement for adding a new person record
        $sql = "INSERT INTO tblprogram 
                (MajorID, YearID, SemesterID, AcademicYearID, DegreeID, BatchID, CampusID, StartDate, 
                EndDate, CreatedDate)
                VALUES ('$MajorID', '$YearID', '$SemesterID', '$AcademicYearID', '$DegreeID', 
                        '$BatchID', '$CampusID', '$StartDate', '$EndDate', '$CreatedDate')";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
        } else {
            $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
            // echo "Error inserting record: " . mysqli_error($conn);
        }
    }
    header('location:' . BASE_URL . 'views/admin/program/index.php');
    mysqli_close($conn);
}
if (isset($_GET['id'])) {
    // Get and sanitize the ID from the URL
    $PersonID = $_GET['id'];
    $PersonID = mysqli_real_escape_string($conn, $PersonID);

    // Update the Status column to 0 instead of deleting the record
    $sql = "UPDATE Person_Tbl SET Status = 0 WHERE PersonID = '$PersonID'";

    // Execute the query and set session messages based on the result
    if (mysqli_query($conn, $sql)) {
        $_SESSION['snackbar'] = ['message' => 'Action completed successfully! ', 'type' => 'success'];
    } else {
        $_SESSION['snackbar'] = ['message' => 'Oops! Something went wrong.', 'type' => 'error'];
    }

    // Redirect back to the index page
    header('Location: indexEmployee.php');
    exit(); 
}
?>
