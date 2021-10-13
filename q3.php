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
    <link rel="stylesheet" href="styles/style.css">
    <title>Employees</title>
</head>
<body align="center">
    <a href="index.php" style="background: #555;color: #fff;padding: 10px;">Вся таблица</a>
    <a href="q1.php" style="background: #555;color: #fff;padding: 10px;">ФИО телефон зарплата</a>
    <a href="q2.php" style="background: #555;color: #fff;padding: 10px;">Сортировка по адресу</a>
    <a href="q3.php" style="background: #555;color: #fff;padding: 10px;">Опыт больше 4</a>
    <br>
    <br>
    <table align="center">
        
    <tr>
        <th>id</th>
        <th>Full Name</th>
        <th>Phone</th>
        <th>Salary</th>
        <th>Address</th>
        <th>Experience</th>
        </tr>
        <?php
        query_exec($connect, 'SELECT * FROM employees WHERE Experience > 4;');

        ?>
    </table>
</body>
</html>
