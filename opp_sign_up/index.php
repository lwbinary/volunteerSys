<?php
session_start();
require('../model/database.php');
require('../model/sign_up_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'select_student';
}

if ($action == 'select_student') {
    include('sign_up_student.php');

} else if ($action == 'select_class'){
    $student_name = $_POST['student_name'];
	$_SESSION['student_name'] = $_POST['student_name'];
	
	if (empty($student_name)) {
		$error = "Invalid student name. Try again.";
		include('../errors/error.php');
	} else
		include('sign_up_class.php');

} else if ($action == 'select_opp'){
    $class_name = $_POST['class_name'];
	
	if (empty($class_name)) {
		$error = "Invalid class name. Try again.";
		include('../errors/error.php');
	} else
		include('sign_up_opp.php');
		
} else if ($action == 'sign_up') {
    $opp_name = $_POST['opp_name'];
	
	if (empty($opp_name)) {
		$error = "Invalid opportunity name. Try again.";
		include('../errors/error.php');
    } else {
        sign_up($opp_name);
        include('message.php');
	}
} 
?>