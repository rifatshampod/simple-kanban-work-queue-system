<?php
    function get_connection(){
        $dsn = "mysql:host=localhost;dbname=kanbanqueue";
        $user = "root";
        $passwd = "";
        $conn = new PDO($dsn, $user, $passwd);
        return $conn;
    }

?>