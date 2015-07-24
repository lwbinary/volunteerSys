<?php
function get_partners() {
    global $db;
    $query = 'SELECT * FROM COMMUNITY_PARTNER
              ORDER BY CommPartnerID';
    $partners = $db->query($query);
    return $partners;
}

function delete_partner($partner_id) {
    global $db;
    $query = "DELETE FROM COMMUNITY_PARTNER
              WHERE CommPartnerID = '$partner_id'";
    $db->exec($query);
}

function add_partner($name, $phone, $url, $email) {
    global $db;
    $query = "INSERT INTO COMMUNITY_PARTNER
                 (CommName, Phone, URL, Email)
              VALUES
                 ('$name', '$phone', '$url', '$email')";
    $db->exec($query);
}

function update_partner($partner_id, $name, $phone, $url, $email) {
    global $db;
    $query = "UPDATE COMMUNITY_PARTNER
              SET CommName = '$name',
                  Phone = '$phone',
                  URL = '$url',
                  Email = '$email',
              WHERE CommPartnerID = '$partner_id'";
    $db->exec($query);
}

?>