<?php
require('../model/database.php');
require('../model/report_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'individual_opp';
}

if ($action == 'individual_opp') {
    // Get view data
    $individual_opp = get_individual_opp( $FName );

    // Display the class list
    include('student_opp.php');
}

?>
