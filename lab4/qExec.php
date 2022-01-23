<?php
require_once 'config/connect.php';
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

</body>
</html>

<?php
if($connect->query($_POST["query"]))
{
    print_r("Success");
}
else
{
    print_r("Error");
}
?>