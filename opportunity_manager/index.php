<?php
require('../model/database.php');
require('../model/opp_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_opps';
}

if ($action == 'list_opps') {
    // Get opp data
    $opportunities = get_opps();

    // Display the opp list
    include('opp_list.php');
} else if ($action == 'delete_opp') {
    $opp_id = $_POST['opp_id'];
    delete_opp($opp_id);
    header("Location: .");
} else if ($action == 'show_add_form') {
    include('opp_add.php');
} else if ($action == 'add_opp') {
    $partner_name = $_POST['partner_name'];
    $class_name = $_POST['class_name'];
    $name = $_POST['name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $slots = $_POST['slots'];
    $location = $_POST['location'];	


    // Validate the inputs
    if (empty($partner_name) || empty($class_name) || empty($name) || empty($start_date) || empty($slots) || empty($location) ) {
        $error = "Invalid opportunity data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        add_opp($partner_name, $class_name, $name, $start_date, $end_date, $slots, $location);
        header("Location: .");
    }
}
?>
