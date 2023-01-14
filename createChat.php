<?php
$name = $_POST['channel_name'];

try {
    // подключаемся к серверу
    $conn = new PDO("mysql:host=localhost;dbname=chat", "root", "root");

    // SQL-выражение для создания таблицы
    $sql = "create table ". $name ." (id integer auto_increment primary key, message text(256), sender varchar(16), created timestamp default current_timestamp);";

    // выполняем SQL-выражение
    $conn->exec($sql);

}
catch (PDOException $e) {

}
