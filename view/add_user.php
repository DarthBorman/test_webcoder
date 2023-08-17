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
    <h1>Add new user</h1>
    <ul class="top-menu">
        <li><a href="/users">Users</a></li>
        <li><a href="/departments">Departments</a></li>
        <li><a href="/add-user" class="active">Add User</a></li>
    </ul>
    <form method="post">
        <input required type="email" name="email" placeholder="email">
        <input required type="text" name="name" placeholder="name">
        <input required type="text" name="address" placeholder="address">
        <input required type="tel" name="phone" placeholder="phone">
        <label>Comment
            <textarea required name="comment"></textarea>
        </label>
        <?php
        $myClass = new DepartmentController;
        $myClass->get('add-user');
        ?>
        <input type="submit" name="add-user" value="Add new user"/>
    </form>
    <?php
    $btnAddUserClick = new UserController;
    $btnAddUserClick->add();
    ?>
</div>
</body>
</html>