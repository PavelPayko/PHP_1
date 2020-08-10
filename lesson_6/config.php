<?php
const SERVER = "localhost";
const DB = "reviews";
const LOGIN = "root";
const PASS = "";

$connect = mysqli_connect(SERVER, LOGIN, PASS, DB)  or die('ошибка подключения !');

?>