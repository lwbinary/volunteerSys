<?php
require('../model/database.php');
require('../model/student_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_students';
}

if ($action == 'list_students') {
    // Get student data
    $students = get_students();

    // Display the student list
    include('student_list.php');
} else if ($action == 'delete_student') {
    $student_id = $_POST['student_id'];
    delete_student($student_id);
    header("Location: .");
} else if ($action == 'show_add_form') {
    include('student_add.php');
} else if ($action == 'add_student') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $initial = $_POST['initial'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Validate the inputs
    if (empty($fname) || empty($lname) || empty($phone) || empty($email)) {
        $error = "Invalid student data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        add_student($fname, $lname, $initial, $phone, $email);
        header("Location: .");
    }
}
?>