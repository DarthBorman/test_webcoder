<?php

class departmentModel
{
    public function get($page_name)
    {
        $stmt = $GLOBALS['pdo']->query('SELECT * FROM departments');
        while ($row = $stmt->fetch()) {
            $arr_id[] = $row['id'];
            $arr_name[] = $row['name'];
        }
        $myclass = new departmentController;
        $myclass->deliveryDepartments($arr_id, $arr_name, $page_name);
    }

    public function add()
    {
        $name = $_POST['add-new-department'];
        $sql = $GLOBALS['pdo']->query('SELECT * FROM departments');
        while ($row = $sql->fetch())
        {
            if ($row == $row['name']){
                echo '<script>alert("Error! This department already exists!!!")</script>';
                return;
            }
        }
        $sql = "INSERT INTO departments (name) Values ('$name')";
        $GLOBALS['pdo']->exec($sql);
        header("Refresh:0");
        echo '<script>alert("New department added successfully!!!")</script>';
    }

    public function delDepartment($my_id)
    {
        $sql = $GLOBALS['pdo']->query('SELECT id_department FROM users');
        while ($row = $sql->fetch()) {
            if ($my_id == $row['id_department']) {
                echo '<script>alert("You cannot delete this section because there are users attached to it!!!")</script>';
                return;
            }
        }
        $sql = "DELETE FROM departments WHERE id = '$my_id'";
        $GLOBALS['pdo']->exec($sql);
        header("Refresh:0");
        echo '<script>alert("Removal was successful!!!")</script>';
    }

}