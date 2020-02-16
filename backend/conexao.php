<?php

//localhost não funcionou, tive que usar o iplocal
$hostname = '127.0.0.1:3306';
$username = 'root';
$password = '';
$db = 'mydb';

$link = mysqli_connect($hostname, $username, $password, $db);

if (!$link) {
    echo "Erro: " . mysqli_connect_error();
}
