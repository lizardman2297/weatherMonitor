<?php
    function loadDashboard() {
        
        require_once 'class/sensorClass.php';
        require_once 'model/sensorModel.php';
        
        $sensorList = getAllSensor();
       
        
        
        //var_dump(count($connection));
        require_once 'view/dashboardView.php';;
    }