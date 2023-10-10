<?php
include 'switchparam.php';
header('Content-Type: application/json');

$data = [
    "Name" => "Hassan",
    "Id" => "w20017074",
    "Lever" => 6,
    "Modules" => [
        [
            "Code" => "KF6012",
            "Title" => "Web Application Integration",
            "Credits" => 20
        ],
        [
            "Code" => "KF6003",
            "Title" => "Individual Computing Project",
            "Credits" => 40
        ],
        [
            "Code" => "KF6005",
            "Title" => "Smart Technology And Agile UX Design",
            "Credits" => 20
        ],
        [
            "Code" => "KF6013",
            "Title" => "Cloud Computing And Web API Programming",
            "Credits" => 20
        ],
        [
            "Code" => "KF6002",
            "Title" => "Team Project And Professionalism",
            "Credits" => 20
        ],
    ],
    "Program" => "BSc (Hons) Computer Science"
];

//parameter support
if( $_SERVER['REQUEST_METHOD'] !== 'GET'){
    $data = [
        "error"=> "Invalid Method",
        "Description"=> "Only GET Method is allowed"
    ];
}else {
    $data = switchParam($data);
}
echo json_encode($data);