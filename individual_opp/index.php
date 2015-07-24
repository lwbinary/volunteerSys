<?php
require('../model/database.php');
require('../model/student_db.php');
require('../model/report_db.php');


// create the CategoryDB and ProductDB objects

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_students';
}

if ($action == 'list_students') {
    $student = get_students();

    include('student_list.php');
}


?>
