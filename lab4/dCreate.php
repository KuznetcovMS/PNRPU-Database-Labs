<?php

require_once 'config/connect.php';
require_once 'func.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Employees</title>
</head>
<body align="center">
    <a href="index.php" style="background: #555;color: #fff;padding: 10px;">Главная страница</a>
    <a href="ddl.php" style="background: #555;color: #fff;padding: 10px;">DDL запросы</a>
    <a href="dml.php" style="background: #555;color: #fff;padding: 10px;">DML запросы</a>
    <a href="InnerJoin.php" style="background: #555;color: #fff;padding: 10px;">INNER JOIN</a>
    <br>
    <p><big>Ключевое слово CREATE используется для создания: баз данных, 
        таблиц, индексов, уникальных индексов, представлений, процедур.
    </big></p>

    <form name="CREATE query" action="qExec.php" method="post"> 
        <label>Запрос: </label><br>
        <textarea cols="40" rows="10" name="query">CREATE TABLE Aircraft(
    id INT NOT NULL,
    Модель CHAR(50) NOT NULL,
    Конструктор CHAR(50) NOT NULL,
    ГодыПроизводства CHAR(12) NOT NULL,
    КолВыпШтук INT NOT NULL,
    PRIMARY KEY(id)
);
        </textarea>
        <br>
        <input type="submit" value="Выполнить" name="button"></input>
    </form>

</body>
</html>