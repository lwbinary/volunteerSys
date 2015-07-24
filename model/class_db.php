<?php
function get_classes() {
    global $db;
    $query = 'SELECT * FROM CLASS
              ORDER BY CID';
    $classes = $db->query($query);
    return $classes;
}

function delete_class($class_id) {
    global $db;
    $query = "DELETE FROM CLASS
              WHERE CID = '$class_id'";
    $db->exec($query);
}

function add_class($name, $start_date, $end_date, $capacity) {
    global $db;
    $query = "INSERT INTO CLASS
                 (ClassName, StartDate, EndDate, Capacity)
              VALUES
                 ('$name', '$start_date', '$end_date', '$capacity')";
    $db->exec($query);
}

function update_class($class_id, $name, $start_date, $end_date, $capacity) {
    global $db;
    $query = "UPDATE CLASS
              SET ClassName = '$name',
                  StartDate = '$start_date',
                  EndDate = '$end_date',
                  capacity = '$capacity',
              WHERE CID = '$class_id'";
    $db->exec($query);
}

?>