<?php
/**
 * Created by PhpStorm.
 * User: Dev
 * Date: 21/06/2019
 * Time: 18:25
 */

require_once 'db_connect/db.php';

if(!empty($_POST["usr_code_user"])){
    //Fetch all state data
    $usr_code_user=$_POST["usr_code_user"];
    $query = $db->query("SELECT * FROM users WHERE usr_code_user = '$usr_code_user'");

    //Count total number of rows
    $rowCount = $query->num_rows;

    //State option list
    if($rowCount > 0){
//        echo '<option value="">Selecione o professor</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['usr_name'].'">'.$row['usr_name'].'</option>';
        }
    }
}
?>