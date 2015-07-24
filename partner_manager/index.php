<?php
require('../model/database.php');
require('../model/partner_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_partners';
}

if ($action == 'list_partners') {
    // Get partner data
    $partners = get_partners();

    // Display the partner list
    include('partner_list.php');
} else if ($action == 'delete_partner') {
    $partner_id = $_POST['partner_id'];
    delete_partner($partner_id);
    header("Location: .");
} else if ($action == 'show_add_form') {
    include('partner_add.php');
} else if ($action == 'add_partner') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $url = $_POST['url'];
    $email = $_POST['email'];


    // Validate the inputs
    if (empty($name) || empty($phone) || empty($url) || empty($email)) {
        $error = "Invalid partner data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        add_partner($name, $phone, $url, $email);
        header("Location: .");
    }
}
?>