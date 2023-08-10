<?php
include_once 'config.php';
include_once 'models/department-model.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Test app</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="content-wrap">
    <h1>Departments</h1>
    <ul class="top-menu">
        <li><a href="users.php">Users</a></li>
        <li><a href="departments.php" class="active">Departments</a></li>
        <li><a href="index.php">Add User</a></li>
    </ul>
    <form class="add-neq-department" method="POST">
        <input type="text">
        <input type="submit" name="add-new-department" value="Add new department">
    </form>
    <ul class="departments-list">
        <?php
        $sql = $GLOBALS['pdo']->query('SELECT name, id FROM departments');
        while ($row = $sql->fetch())
        {
            ?>
            <li>
                <a href="#"><?php echo $row['name'];?></a>
                <form method="post" class="form-delete-department">
                    <input type="hidden" name="hidden-input" value="<?php echo $row['id'];?>">
                    <input type="submit" name="delete-department" value="Delete">
                </form>

            </li>
            <?
        }
        ?>
    </ul>
    <p class="department-message">
        <?php
        if (isset($_POST['delete-department'])) {
            $my_id = $_POST['hidden-input'];
            $myClass =  new DepartmentModel;
            $myClass->delDepartment($my_id);
        }
        ?>
    </p>
    <p class="department-message">
        <?php
        if (isset($_POST['add-new-department'])) {
            echo 'ok';
        }
        ?>
    </p>
</div>
<?php
if (isset($_POST['delete-department'])) {
    $my_id = $_POST['hidden-input'];
    $myClass =  new DepartmentModel;
    $myClass->delDepartment($my_id);
}
?>
</body>
</html>
