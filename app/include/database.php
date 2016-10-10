<?php

$host = 'mysql.hostinger.ru';
$user = 'u897911195_bases';
$password = '12345678';
$database = 'u897911195_bases';

$link = mysqli_connect($host, $user, $password, $database);


if(mysqli_errno($link)) {
echo 'Ошибочка вышла';
exit();
}
   