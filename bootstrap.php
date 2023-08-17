<?php

include_once 'controller/user_controller.php';
include_once 'controller/department_controller.php';
include_once 'models/user_model.php';
include_once 'models/department_model.php';

class FormingSelect
{
    public function formingSelect($arr_id, $arr_name)
    {
        ?>
        <select required name="selected-department">
            <option value="" selected disabled>Select Department</option>
            <?php
            for ($i = 0; $i < count($arr_id); $i++) {
                ?>
                <option value="<?php echo $arr_id[$i]; ?>"><?php echo $arr_name[$i]; ?></option>
                <?php
            }
            ?>
        </select>

        <?php
    }
}

class DeliveryUsersList
{
    public function delivery($arr_id, $arr_name)
    {
        for ($i = 0; $i < count($arr_id); $i++) {
            ?>
            <li>
                <a href="#"><?php echo $arr_name[$i];?></a>
                <form method="post" class="form-delete-user">
                    <input type="hidden" name="hidden-input" value="<?php echo $arr_id[$i];?>">
                    <input type="submit" name="delete-user" value="Delete">
                </form>
            </li>
            <?php
        }
    }
}

class DepartmensList{
    public function  departmensList($arr_id, $arr_name){
        for ($i=0; $i<count($arr_id); $i++){
            ?>
            <li>
                <a href="#"><?php echo $arr_name[$i]; ?></a>
                <form method="post" class="form-delete-department">
                    <input type="hidden" name="hidden-input" value="<?php echo $arr_id[$i]; ?>">
                    <input type="submit" name="delete-department" value="Delete">
                </form>
            </li>
            <?php
        }
    }
}
