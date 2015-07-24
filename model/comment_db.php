<?php
function get_comments()	{
	global $db;
	$query = 'SELECT * FROM COMMENTS
              ORDER BY SID';
    $comments = $db->query($query);
    return $comments;
}

function delete_comment($student_id, $opp_id, $date) {
    global $db;
    $query = "DELETE FROM COMMENTS
              WHERE ( SID = '$student_id' AND OppID = '$opp_id' ) AND InsertDate = '$date'";
    $db->exec($query);
}

function add_comment($comment) {
	global $db;
    $query = "INSERT INTO COMMENTS (OppID, SID, InsertDate, Assessment)
			  SELECT O.OppID, S.SID, CURDATE(), '$comment'
			  FROM OPPORTUNITY O, STUDENT S
			  WHERE O.OppName = '$_SESSION[opp_name]'
			  AND S.FName = '$_SESSION[student_name]'";

    $db->exec($query);
}

function update_comment($opp_id, $student_id, $date, $comment) {
    global $db;
    $query = "UPDATE COMMENTS
              SET OppId = '$opp_id',
                  SID = '$student_id',
                  InsertDate = '$date',
		          Assessment = '$comment',	
              WHERE SID = '$student_id'";
    $db->exec($query);
}

?>
