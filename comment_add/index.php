<?php
session_start();

require('../model/database.php');
require('../model/comment_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'select_partner';
}

if ($action == 'select_partner') {
    include('select_partner.php');
	
} else if ($action == 'select_opp'){
    $partner_name = $_POST['partner_name'];
	
	if (empty($partner_name)) {
		$error = "Invalid partner name. Try again.";
		include('../errors/error.php');
	} else
		include('select_opp.php');

} else if ($action == 'select_student'){
    $opp_name = $_POST['opp_name'];
	$_SESSION['opp_name'] = $_POST['opp_name'];

	if (empty($opp_name)) {
		$error = "Invalid opportunity name. Try again.";
		include('../errors/error.php');
	} else
		include('select_student.php');
		
} else if ($action == 'add_date_comment'){
    $student_name = $_POST['student_name'];
	$_SESSION['student_name'] = $_POST['student_name'];

	if (empty($student_name)) {
		$error = "Invalid student name. Try again.";
		include('../errors/error.php');
	} else
		include('add_date_comment.php');
		
} else if ($action == 'insert_comment') {
	$comment = $_POST['comment'];

	if (empty($comment)) {
		$error = "Invalid input. Try again.";
		include('../errors/error.php');
    } else {
        add_comment($comment);
        include('message.php');
	}
} 
?>
