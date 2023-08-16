<?php
$host = '127.0.0.1';
$dbname = 'nxxgegje_form_send';
$username = 'nxxgegje_dadmeta';
$password = 'asdfhjfds67354dksjf';
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$GLOBALS['pdo'] = new PDO("mysql:host=$host; dbname=$dbname", $username, $password, $opt);



include_once 'controller/user_controller.php';
include_once 'controller/department_controller.php';

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
