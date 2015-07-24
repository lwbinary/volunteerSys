<?php
function get_opps()	{
	global $db;
	$query = 'SELECT * FROM OPPORTUNITY
              ORDER BY OppName';
    $opportunities = $db->query($query);
    return $opportunities;
}

function delete_opp($opp_id) {
    global $db;
    $query = "DELETE FROM OPPORTUNITY
              WHERE OppID = '$opp_id'";
    $db->exec($query);
}

function add_opp($partner_name, $class_name, $name, $start_date, $end_date, $slots, $location){
    global $db;
    $query = "INSERT INTO OPPORTUNITY (CommPartnerID, CID, OppName, StartDate, EndDate, Slots, Location)
              SELECT CommPartnerID, CID, '$name', '$start_date', '$end_date', '$slots', '$location'
			  FROM COMMUNITY_PARTNER CP, CLASS C
			  WHERE CP.CommName = '$partner_name'
			  AND C.ClassName = '$class_name'";
    $db->exec($query);
}

function update_opp($opp_id, $partner_id, $class_id, $name, $start_date, $end_date, $slots, $location) {
    global $db;
    $query = "UPDATE OPPORTUNITY
              SET CommPartnerID = '$partner_id',
				  CID = '$class_id',
				  OppName = '$name',
                  StartDate = '$start_date',
                  EndDate = '$end_date',
				  Slots = '$slots',
				  Location = '$location'	
              WHERE OppID = '$opp_id'";
    $db->exec($query);
}  

?>
