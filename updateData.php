<?php
    require("dbconnect.php");
    $id = $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $tel = $_POST["tel"];
    $history = $_POST["history"];

    $sql = "UPDATE patient SET fname='$fname',lname='$lname',gender='$gender',tel='$tel',history='$history' WHERE id = $id ";
    $result = mysqli_query($connect,$sql);

    if($result){
        header("location:index.php");
        exit(0);
    }else{
        echo mysqli_error($connect);
    }
?>