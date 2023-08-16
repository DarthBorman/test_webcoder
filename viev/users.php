<?php
include_once '../index.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Test app</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="content-wrap">
    <h1>Users</h1>
    <ul class="top-menu">
        <li><a href="users.php" class="active">Users</a></li>
        <li><a href="departments.php">Departments</a></li>
        <li><a href="add_user.php">Add User</a></li>
    </ul>
    <ul class="user-list">
        <?php
        $myClass = new UserController;
        $myClass->getUserList();
        ?>
    </ul>
</div>
<?php
    $myClass->delete();
?>
</body>
</html>
