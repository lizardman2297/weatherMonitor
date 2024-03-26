<?php
    function dbConnect() {
        $user = "root";
        $pass = "";
        $db = new PDO('mysql:host=localhost;dbname=weatherMonitor', $user, $pass);
        return $db;
    }