<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "laravel_cms";

$servername = "ui0tj7jn8pyv9lp6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "u7pbeubj6ga8pe6i";
$password = "ehtncz098sbfafvv";
$dbname = "fhzg7wv0o15wusmv";

?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/select_options/code_teacher_for_name_teacher.js"> </script>
<script src="js/select_options/code_student_for_name_student.js"> </script>
<script src="js/select_options/unit_name_for_unit_classes.js"> </script>
<script src="js/select_options/course_name_for_course_payment.js"> </script>

<div class="form-group col-lg-2">
    <label for="">Código do Professor</label>
    <select id="code_teacher" name="rsv_teacher_code" class="form-control">
        <option value="">Selecione...</option>
        <?php
        $conn = new mysqli($servername, $username, $password, $dbname);

        $query = "SELECT * from users where usr_role='professor';";
        $con1=$conn->query($query);

        ?>
        <?php while($dados=$con1->fetch_array() ){?>
        <option value="<?php echo $dados["usr_code_user"];?>"><?php echo $dados ["usr_code_user"];?> - <?php echo $dados ["usr_name"];?></option>
        <?php }?>

    </select>
</div>


<div class="form-group col-lg-5">
    <label for="name02">Professor</label>
    <select  id="name_teacher" name="rsv_teacher_name" class="form-control">
        <option value="">-----</option>
    </select>
</div>




