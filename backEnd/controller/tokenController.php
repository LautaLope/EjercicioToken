<?php
require_once __DIR__ . "../model/tokenDAO.php";

$funcion = $_GET['function'];

switch ($funcion) {
    case 'show':
        show();
        break;
}

function show(){
    $userName = $_POST['userName'];
    $password = $_POST['pass'];
    $token = (new token())->create($userName, $password);
    echo $token;
}