<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "motors_db";

$conn = new mysqli($servername, $username, $password, $db);


try {
    if (isset($_POST['Forward'])) {
        $d1 = $_POST['Forward'];
    } else
        $d1 = 0;
    if (isset($_POST['Left'])) {
        $d2 = $_POST['Left'];
    } else
        $d2 = 0;
    if (isset($_POST['Stop'])) {
        $d3 = $_POST['Stop'];
    } else
        $d3 = 0;
    if (isset($_POST['Right'])) {
        $d4 = $_POST['Right'];
    } else
        $d4 = 0;
    if (isset($_POST['Backward'])) {
        $d5 = $_POST['Backward'];
    } else
        $d5 = 0;
    $query = "INSERT INTO directions (forward_dir,left_dir,stop_dir,right_dir,backward_dir) VALUES ($d1,$d2,$d3,$d4,$d5)";
    $conn->query($query);
    header("Location:/t2/index.html");
} catch (\Throwable $th) {
    echo $th;
}
?>