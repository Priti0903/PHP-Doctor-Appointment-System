<?php
include_once '../assets/conn/dbconnect.php';
// Get the variables.
$patientPhone = $_POST['ic'];
// echo $appid;

$delete = mysqli_query($con,"DELETE FROM patient WHERE patientPhone=$patientPhone");
// if(isset($delete)) {
//    echo "YES";
// } else {
//    echo "NO";
// }



?>

