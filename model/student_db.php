<?php
function get_students()	{
	global $db;
	$query = 'SELECT * FROM STUDENT
              ORDER BY FName';
    $students = $db->query($query);
    return $students;
}

function delete_student($student_id) {
    global $db;
    $query = "DELETE FROM STUDENT
              WHERE SID = '$student_id'";
    $db->exec($query);
}

function add_student($fname, $lname, $initial, $phone, $email) {
    global $db;
    $query = "INSERT INTO STUDENT
                 (FName, LName, Initial, Phone, Email)
              VALUES
                 ('$fname', '$lname', '$initial', '$phone', '$email')";
    $db->exec($query);
}

function update_student($student_id, $fname, $lname, $initial, $phone, $email) {
    global $db;
    $query = "UPDATE STUDENT
              SET FName = '$fname',
                  LName = '$lname',
                  Initial = '$initial',
		  						Phone = '$phone',
		  						Email = '$email'	
              WHERE SID = '$student_id'";
    $db->exec($query);
}

?>
