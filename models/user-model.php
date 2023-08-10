<?php
class UserModel{
    public function addNewUser(){
        echo '<script>if(document.getElementById("mail-error")){document.getElementById("mail-error").remove()};</script>';
        echo '<script>if(document.getElementById("new-user-added")){document.getElementById("new-user-added").remove()};</script>';
        $email = $_POST['email'];
        $sql = $GLOBALS['pdo']->query('SELECT email FROM users');
        while ($row = $sql->fetch())
        {
            if ($email == $row['email']){
                echo '<p id="mail-error">Error! This email is already in use</p>';
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
        echo '<p id="new-user-added">New user added successfully!!!</p>';
    }
    public function DeleteUser($my_id){
        $sql = "DELETE FROM users WHERE id = '$my_id'";
        $GLOBALS['pdo']->exec($sql);
        header("Refresh:0");
    }
}
