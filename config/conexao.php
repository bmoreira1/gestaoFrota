<?php 
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'gestaoFrota');

    $conect = new mysqli(HOST, USER, PASS, BASE);

    if($conect->error){
        die($conect->error);
    }