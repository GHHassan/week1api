<?php

function parameterError(){
    return [
        "error"=> "invalid parameters",
        "description"=>"parameter names should be year or year and month
                        year values should be 1884-2023
                        month valuse should be name of the months i.e 'jan', 'feb' etc"
    ];
}