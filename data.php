<?php
require("dbconnect.php");

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$tel = $_POST["tel"];
$history = $_POST["history"];


$sql = "INSERT INTO patient(fname,lname,gender,tel,history) VALUES('$fname','$lname','$gender','$tel','$history') ";

$result = mysqli_query($connect,$sql);

if($result){
    header("location:index.php");
    exit(0);
}else{
    echo "ไม่สามารถบันทึกข้อมูลได้";
}

?>