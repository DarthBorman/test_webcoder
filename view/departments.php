<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Test app</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="content-wrap">
    <h1>Departments</h1>
    <ul class="top-menu">
        <li><a href="/users">Users</a></li>
        <li><a href="/departments" class="active">Departments</a></li>
        <li><a href="/add-user">Add User</a></li>
    </ul>
    <form class="add-neq-department" method="POST">
        <input type="text" name="add-new-department">
        <input type="submit"  value="Add new department">
    </form>
    <ul class="departments-list">
        <?php
        $myClass = new departmentController;
        $myClass->get('departments');
        ?>
    </ul>
    <p class="department-message">
        <?php
        $myClass = new departmentController;
        $myClass->delete();
        ?>
    </p>
    <p class="department-message">
        <?php
        $myClass = new departmentController;
        $myClass->add();
        ?>
    </p>
</div>
</body>
</html>
