<?php
    if (isset($_GET) || empty($_GET)) {
        require_once 'controller/dashboardController.php';
        loadDashboard();
    } else {
        
    }