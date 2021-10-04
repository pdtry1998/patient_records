<?php
    require("dbconnect.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM patient WHERE id = $id";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกข้อมูลคนไข้</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid "  >
    <a class="navbar-brand" href="#">
      <img src="images\hos.svg" alt="" width="40" height="54"  >
      บันทึกข้อมูลคนไข้
    </a>
  </div>
  
</nav>

  

     <div class="container my-3">
     <form action="updateData.php" method="POST" >

      <input type="hidden" value="<?php echo $row["id"]; ?>" name="id"> 

     <div  class="form-group">
        <label>ชื่อ</label>
        <input type="text" name="fname" placeholder="ป้อนชื่อคนไข้" class="form-control my-2" value="<?php echo $row["fname"]; ?>">
     </div><br>

     <div class="form-group">
        <label>นามสกุล</label>
        <input type="text" name="lname" placeholder="ป้อนนามสกุลคนไข้" class="form-control my-2" value="<?php echo $row["lname"]; ?>">
     </div><br>
     <div class="form-group">
        <label>เพศ</label>
         <?php 
            if($row["gender"] == "male" ){
               echo "<input type='radio' name='gender' value='male' checked>ชาย";
               echo "<input type='radio' name='gender' value='female' >หญิง";
               echo "<input type='radio' name='gender' value='other' >อื่น ๆ";
            }else if($row["gender"] == "female"){
               echo "<input type='radio' name='gender' value='male' >ชาย";
               echo "<input type='radio' name='gender' value='female' checked>หญิง";
               echo "<input type='radio' name='gender' value='other' >อื่น ๆ";
            }else{
               echo "<input type='radio' name='gender' value='male' >ชาย";
               echo "<input type='radio' name='gender' value='female' >หญิง";
               echo "<input type='radio' name='gender' value='other' checked>อื่น ๆ";
            }
         ?>
     </div><br>
     <div class="form-group">
        <label>เบอร์ติดต่อ</label>
        <input type="text" name="tel" placeholder="ป้อนเบอร์ติดต่อ" class="form-control my-2" value="<?php echo $row["tel"] ?>">
     </div><br>
     <div class="form-group">
        <label>ประวัติคนไข้</label>
        <input type="text" name="history" placeholder="ป้อนข้อมูลคนไข้" class="form-control my-2" value="<?php echo $row["history"] ?>" >
     </div><br>

     <input type="submit" value="อัปเดตข้อมูล" class="btn btn-success">

     <a href="index.php" class="btn btn-warning">ข้อมูลคนไข้</a>
     </div>
    </form>



</body>
</html>