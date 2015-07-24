<?php
    $dsn = 'mysql:host=csrh9.seattleu.edu;dbname=student22db';
    $username = 'student22';
    $password = 'student22';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>