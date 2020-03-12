<?php
/**
 * Created by PhpStorm.
 * User: Dev
 * Date: 21/06/2019
 * Time: 18:25
 */

require_once 'db_connect/db.php';

if(!empty($_POST["crs_name"])){
    //Fetch all state data
    $crs_name=$_POST["crs_name"];
    $query = $db->query("SELECT p.pay_value from
                                       payments p inner join courses c
                                       where c.crs_id='$crs_name'
                                       and p.pay_id=c.pay_id");

    //Count total number of rows
    $rowCount = $query->num_rows;

    //State option list
    if($rowCount > 0){
        echo '<option value=" ">Selecione a mensalidade</option>';
        while($row = $query->fetch_assoc()){
                echo '<option value="'.$row['pay_value'].'">R$ '.$row['pay_value'].',00</option>';

            }

    }
}
?>