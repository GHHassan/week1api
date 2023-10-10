<?php
function switchParam($data)
{
    if (count($_GET) > 1){
        return $data = [
            "error" => "only one paramteter (option) is supported"
        ];
    }
    if (isset($_GET["option"])) {
        $option = $_GET['option'];
        $param = null;
        switch ($option) {
            case 'name':
                $param = 'Name';
                break;
            case 'id':
                $param = 'Id';
                break;
            case 'module':
                $param = 'Module';
                break;
            case 'lever':
                $param = 'Level';
                break;
            case 'program':
                $param = 'Program';
                break;
            default:
                return $data = [
                    "error" => "invalid request"
                ];
        }
        return $data[$param];
    }
    return $data;
}