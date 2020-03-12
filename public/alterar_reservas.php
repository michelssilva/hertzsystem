<?php
/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 01/06/2019
 * Time: 21:26
 */

$servername = "ui0tj7jn8pyv9lp6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "u7pbeubj6ga8pe6i";
$password = "ehtncz098sbfafvv";
$dbname = "fhzg7wv0o15wusmv";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_POST['id'];
$campo = $_POST['campo'];
$valor = $_POST['valor'];

$query  = "SELECT CURRENT_USER();";

$query .= "SELECT * from reserves where rsv_id=$id;";

if ($conn->multi_query($query)) {
    do {
        if ($result = $conn->use_result()) {              }{
            $result->close();
        }
    }while ($conn->next_result());
    $sql = "UPDATE reserves SET $campo = '$valor' where rsv_id=$id;";
}

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>