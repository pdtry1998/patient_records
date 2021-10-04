<?php 
    require("dbconnect.php");
    $id_arr = $_POST["idcheckbox"];

    $multiple_id = implode(",",$id_arr);

    $sql = "DELETE FROM patient WHERE id in ($multiple_id)";

    $resule = mysqli_query($connect,$sql);

    if($resule){
        header("location:index.php");
        exit(0);
    }else{
        echo mysqli_error($connect);
    }

?>