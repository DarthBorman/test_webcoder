<?php
include_once '../models/department_model.php';
class departmentController{

    public function delete(){
        if (isset($_POST['delete-department'])) {
            $my_id = $_POST['hidden-input'];
            $myClass = new DepartmentModel;
            $myClass->delDepartment($my_id);
        }
    }
    public function get($page_name){
        $myclass = new departmentModel;
        $myclass->get($page_name);
    }
    public function deliveryDepartments($arr_id, $arr_name, $page_name ){
        $this->b = $page_name == 'add-user';
        if($this->b){
            $myClass = new FormingSelect();
            $myClass->formingSelect($arr_id, $arr_name);
        }elseif ($page_name == 'departments'){
            $myClass = new DepartmensList();
            $myClass->departmensList($arr_id, $arr_name);
        }
    }
    public function add(){
        if (isset($_POST['add-new-department'])) {
            $myClass = new DepartmentModel;
            $myClass->add();
        }
    }
}