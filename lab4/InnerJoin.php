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
    <a href="index.php" style="background: #555;color: #fff;padding: 10px;">Главная страница</a>
    <a href="ddl.php" style="background: #555;color: #fff;padding: 10px;">DDL запросы</a>
    <a href="dml.php" style="background: #555;color: #fff;padding: 10px;">DML запросы</a>
    <a href="InnerJoin.php" style="background: #555;color: #fff;padding: 10px;">INNER JOIN</a>
    <br>
    <br>

    <table align="center">
    <tr>
        <th>id</th>
        <th>Full Name</th>
        <th>Profession</th>
    </tr>
    <?php query_exec($connect, 'SELECT id, FullName, Название FROM c_employees INNER JOIN profession ON id = id_p;');?>
    </table>
</body>
</html>