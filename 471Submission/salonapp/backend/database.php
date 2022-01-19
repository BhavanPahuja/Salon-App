<?php

    // database connection
    $host = 'localhost';
    $user = 'root';
    $pwd = '';
    $db = 'salondatabase';
    $conn;

    function connect(){

        global $host;
        global $user;
        global $pwd;
        global $db;

        $conn = mysqli_connect($host, $user, $pwd, $db);

        return $conn;
    }


?>