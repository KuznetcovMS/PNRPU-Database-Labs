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
    <p><big>Ключевое слово DELETE используется для удаления существующих записей в таблице.
    </big></p>
    
    <form name="CREATE query" action="qExec.php" method="post"> 
        <label>Запрос: </label><br>
        <textarea cols="75" rows="10" name="query">DELETE FROM aircraft
        WHERE id = 2;
        </textarea>
        <br>
        <input type="submit" value="Выполнить" name="button"></input>
    </form>


    
</body>
</html>