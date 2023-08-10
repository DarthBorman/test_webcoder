<?php
include_once 'config.php';
include_once 'models/user-model.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Test app</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="content-wrap">
    <h1>Users</h1>
    <ul class="top-menu">
        <li><a href="users.php" class="active">Users</a></li>
        <li><a href="departments.php">Departments</a></li>
        <li><a href="index.php">Add User</a></li>
    </ul>
    <ul class="user-list">
        <?php
        $sql = $GLOBALS['pdo']->query('SELECT name, id FROM users');
        while ($row = $sql->fetch())
        {
            ?>
            <li>
                <a href="#"><?php echo $row['name'];?></a>
                <form method="post" class="form-delete-user">
                    <input type="hidden" name="hidden-input" value="<?php echo $row['id'];?>">
                    <input type="submit" name="delete-user" value="Delete">
                </form>
            </li>
            <?
        }
        ?>
    </ul>
</div>
<?php
if (isset($_POST['delete-user'])) {
    $my_id = $_POST['hidden-input'];
    $myClass =  new UserModel;
    $myClass->DeleteUser($my_id);
}
?>
</body>
</html>
