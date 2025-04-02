<?php 
 $mysqli = new mysqli('localhost', 'root', '', 'saloon');
 if($mysqli->connect_error){
    die("Подключение к базе не удалось" . $mysqli->connect_error);

 } 
// echo "Подключение успешно";
?>