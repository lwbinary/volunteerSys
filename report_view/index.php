<?php
require('../model/database.php');
require('../model/report_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'partner_opp_list_student_com';
}

if ($action == 'partner_opp_student_com_list') {
    // Get view data
    $partner_opp_student_com = get_partner_opp_student_com();

    // Display the class list
    include('partner_opp_student_com_list.php');
}

?>
