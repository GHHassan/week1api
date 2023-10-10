<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'climatedata.php';
include 'fetchData.php';
include 'methoderror.php';
include '../htmlhead.php';
include '../htmlfoot.php';

// Output JSON data
header('Content-Type: application/json');
try {
    // output HTML head -- commented to make the output json only
    // echo htmlHead();
    
    // Retrieve data and handle parameters
    $data = climateData();
    $result = fetchData($data);
    
    if($_SERVER['REQUEST_METHOD'] !== 'GET'){
        $result = methodError();
    }
    echo json_encode($result);

    // End output HTML foot -- commented to make the output json only
    // echo htmlFoot();
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
