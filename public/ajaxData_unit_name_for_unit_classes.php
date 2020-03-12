<?php
/**
 * Created by PhpStorm.
 * User: Dev
 * Date: 21/06/2019
 * Time: 18:25
 */

require_once 'db_connect/db.php';

if(!empty($_POST["unt_name"])){
    //Fetch all state data
    $unt_name=$_POST["unt_name"];
    $query = $db->query("SELECT * FROM units WHERE unt_id = '$unt_name'");

    //Count total number of rows
    $rowCount = $query->num_rows;

    //State option list
    if($rowCount > 0){
//        echo '<option value="">Selecione o professor</option>';
        while($row = $query->fetch_assoc()){
            $contador=1;   $final_contagem= $row['unt_number_classes']+1;
            while($contador< $final_contagem  ){
                echo '<option value="'.$contador.'">SALA '.$contador.'</option>';
                $contador+=1;
            }

        }
    }
}
?>