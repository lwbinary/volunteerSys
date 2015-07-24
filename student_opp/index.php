<?php
require('../model/database.php');
require('../model/report_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'student_opp';
}

if ($action == 'student_opp') {
    // Get view data
    $student_opp = get_student_opp();

    // Display the class list
    include('student_opp.php');
}

?>
