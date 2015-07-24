<?php

function get_student_opp() {
    global $db;
    $query = "SELECT * FROM StudentOpp";
    $student_opp = $db->query($query);
    return $student_opp;
}

function get_individual_opp( $LName ){
    global $db;
    $query = "SELECT * FROM StudentOpp
	      WHERE FName = '$LName'";
    $individual_opp = $db->query($query);
    return $individual_opp;
}
function get_opp_info(){
    global $db;
    $query = "SELECT * FROM StudentOppPartCom
	      ORDER BY OpportunityName";
    $opp_info = $db->query($query);
    return $opp_info;
}

function get_partner_opp(){
    global $db;
    $query = "SELECT * FROM PartnerOpportunity;
	     ORDER BY PartnerName";
    $partner_info = $db->query($query);
    return $partner_info;
}
?>
