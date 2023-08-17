<?php
include_once 'config.php';
include_once 'bootstrap.php';
include_once 'routing.php';




$url = key($_GET);
$r = new Router();
$r->addRoute('/', 'index.php');
$r->addRoute('/users', 'view/users.php');
$r->addRoute('/departments', 'view/departments.php');
$r->addRoute('/add-user', 'view/add_user.php');
$r->route("/". $url);


?>

<!DOCTYPE html>
<html>
<head>
    <title>Test app</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<p>asd</p>
</body>
</html>