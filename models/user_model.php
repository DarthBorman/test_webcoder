<?php
class UserModel{
    public function add(){
        $email = $_POST['email'];
        $sql = $GLOBALS['pdo']->query('SELECT email FROM users');
        while ($row = $sql->fetch())
        {
            if ($email == $row['email']){
                echo '<script>alert("Error! This email is already in use")</script>';
                return;
            }
        }
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $comment = $_POST['comment'];
        $selected_department = $_POST['selected-department'];
        $selected_department = (int)$selected_department;
        $sql = "INSERT INTO users (email, name, address, phone, comment, id_department) Values ('$email', '$name', '$address', '$phone', '$comment', '$selected_department')";
        $GLOBALS['pdo']->exec($sql);
        echo '<script>alert("New user added successfully!!")</script>';
    }
    public function delete($my_id){
        $sql = "DELETE FROM users WHERE id = '$my_id'";
        $GLOBALS['pdo']->exec($sql);
        header("Refresh:0");
        echo '<script>alert("Removal was successful!!")</script>';
    }
    public function get(){
        $sql = $GLOBALS['pdo']->query('SELECT name, id FROM users');
        while ($row = $sql->fetch())
        {
            $arr_id[] = $row['id'];
            $arr_name[] = $row['name'];
        }
        $myClass = new UserController;
        $myClass->delivery($arr_id, $arr_name);
    }
}
