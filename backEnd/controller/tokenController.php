<?php
require_once __DIR__ . "../model/tokenDAO.php";

$funcion = $_GET['function'];

switch ($funcion) {
    case 'create':
        create();
        break;
}

function create(){
    $userName = $_POST['userName'];
    $password = $_POST['pass'];
    $token = (new token())->create($userName, $password);
    echo $token;
}