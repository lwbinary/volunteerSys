<?php
require('../model/database.php');
require('../model/report_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'opp_info';
}

if ($action == 'opp_info') {
    // Get view data
    $opp_info = get_opp_info();

    // Display the class list
    include('opp_info.php');
}

?>
