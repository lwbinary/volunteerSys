<?php
function sign_up($opp_name) {
	global $db;
    $query1 = "INSERT INTO STUDENT_GET_OPPORTUNITY (OppID, SID)
			  SELECT OppID, SID 
			  FROM OPPORTUNITY O, STUDENT S
			  WHERE O.OppName = '$opp_name'
			  AND S.FName = '$_SESSION[student_name]'";
			  
	$query2 = "UPDATE OPPORTUNITY
			   SET Slots = Slots - 1
			   WHERE OppName = '$opp_name'";
    
	$db->exec($query1);
	$db->exec($query2);
}
?>