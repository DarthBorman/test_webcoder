<?php
class DepartmentModel{
    public function addNewDepartment(){

    }
    public function delDepartment($my_id){
        $sql = $GLOBALS['pdo']->query('SELECT id_department FROM users');
        while ($row = $sql->fetch())
        {
            if ($my_id == $row['id_department']){
                echo '<p id="mail-error">Нельзя удалить этот отдел, так как есть привязаные к нему пользователи!!!</p>';
                return;
            }
        }
        $sql = "DELETE FROM departments WHERE id = '$my_id'";
        $GLOBALS['pdo']->exec($sql);
        header("Refresh:0");
    }
}