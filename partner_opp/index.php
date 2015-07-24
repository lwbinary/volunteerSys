<?php
require('../model/database.php');
require('../model/report_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'partner_opp';
}

if ($action == 'partner_opp') {
    // Get view data
    $partner_opp = get_partner_opp();

    // Display the class list
    include('partner_opp.php');
}


?>
