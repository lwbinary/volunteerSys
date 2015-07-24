<?php
require('../model/database.php');
require('../model/class_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_classes';
}

if ($action == 'list_classes') {
    // Get class data
    $classes = get_classes();

    // Display the class list
    include('class_list.php');
} else if ($action == 'delete_class') {
    $class_id = $_POST['class_id'];
    delete_class($class_id);
    header("Location: .");
} else if ($action == 'show_add_form') {
    include('class_add.php');
} else if ($action == 'add_class') {
    $name = $_POST['name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $capacity = $_POST['capacity'];


    // Validate the inputs
    if (empty($name) || empty($start_date) || empty($end_date) || empty($capacity)) {
        $error = "Invalid class data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        add_class($name, $start_date, $end_date, $capacity);
        header("Location: .");
    }
}
?>