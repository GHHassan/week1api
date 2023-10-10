<?php
include 'parametererror.php';
function fetchData($data) {
    if (isset($_GET["year"]) && isset($_GET['month'])) {
        return $data[$_GET['year']][$_GET['month']];
    } elseif (isset($_GET['year'])) {
        return $data[$_GET['year']];
    } elseif (!isset($_GET["year"]) && isset($_GET['month'])) {
        $result =[];
        foreach( $data as $year => $yData){
            if(isset($yData[$_GET['month']])){
                $result += array($year => [$_GET['month']]);
            }
        }
        return $result;
    }
    return $data;
}