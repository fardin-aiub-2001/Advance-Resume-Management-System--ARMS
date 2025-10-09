<?php
    $host="127.0.0.1";
    $db="arms";
    $user="root";
    $pass="";
     
    function getConnection(){
        global $host;
        global $db;
        global $user;
        global $pass;
        $con= mysqli_connect($host, $user, $pass, $db);
        return $con;
    }
?>