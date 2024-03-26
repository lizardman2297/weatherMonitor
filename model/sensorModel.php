<?php 


    
    function getAllSensor() {
        require_once 'model/database.php';
        require_once 'class/sensorClass.php';
        $db = dbConnect();
        
        $req = "SELECT * FROM sensor";
        $pdo = $db->query($req);
        
        
        if ($pdo) {
            $list = [];
            while ($test = $pdo->fetchObject()) {
                $list[$test->id] = new sensor($test->id, 
                                              $test->unite, 
                                              $test->maxValues,
                                              $test->minValues, 
                                              $test->accuracy, 
                                              $test->libelle, 
                                              $test->ip, 
                                              $test->description);
            }
        }else {
            echo "error";
        }
        
        
        return $list;
    }
    
    function getValuesOfSensor($id) {
        require_once 'model/database.php';
        require_once 'class/sensorClass.php';
        $db = dbConnect();
        
        $req = "SELECT recordValues, recordDate FROM record WHERE sensor = $id ORDER BY recordDate desc";
        $pdo = $db->query($req);
        

        
        if ($pdo) {
            $value = new stdClass();
            $pdo = $pdo->fetchObject();
            $value->value = $pdo->recordValues;
            $value->date = $pdo->recordDate;
        }else {
            $value =  "error";
        }
        
        return $value;
    }
    
    function getUnite($id) {
        require_once 'model/database.php';
        $db = dbConnect();
        
        $req = "SELECT * FROM unite WHERE id = $id";
                
        return $db->query($req)->fetchObject();
    }

    
   

?>