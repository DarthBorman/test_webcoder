<?php
class UserController
{
    public function add()
    {
        if (isset($_POST['add-user'])) {
            $myClass = new UserModel;
            $myClass->add();
        }
    }
    public function getUserList(){
        $myClass = new UserModel;
        $myClass->get();
    }
    public function delivery($arr_id, $arr_name){
        $myClass = new DeliveryUsersList;
        $myClass->delivery($arr_id, $arr_name);
    }
    public function delete(){
        if (isset($_POST['delete-user'])) {
            $my_id = $_POST['hidden-input'];
            $myClass = new UserModel;
            $myClass->delete($my_id);
        }
    }
}