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
    <h1>Add new user</h1>
    <ul class="top-menu">
        <li><a href="users.php">Users</a></li>
        <li><a href="departments.php">Departments</a></li>
        <li><a href="index.php" class="active">Add User</a></li>
    </ul>
    <form method="post">
        <input required type="email" name="email" placeholder="email">
        <input required type="text" name="name" placeholder="name">
        <input required type="text" name="address" placeholder="address">
        <input required type="tel" name="phone" placeholder="phone">
        <label>Comment
            <textarea required type="text" name="comment"></textarea>
        </label>
        <select required name="selected-department">
            <?php
            $stmt = $GLOBALS['pdo']->query('SELECT * FROM departments');
            while ($row = $stmt->fetch()) {
                ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                <?
            }
            ?>
        </select>
        <input type="submit" name="add-user" value="Add new user"/>
    </form>
    <?php
    if (isset($_POST['add-user'])) {
       $myClass =  new UserModel;
       $myClass->addNewUser();
    }
    ?>
</div>
</body>
</html>