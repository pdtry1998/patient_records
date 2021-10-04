<?php 
    require("dbconnect.php");
    $name = $_POST["name"];
    $sql = "SELECT * FROM patient WHERE fname LIKE '%$name%' ORDER BY fname ASC";
    $result=mysqli_query($connect,$sql);
    $count = mysqli_num_rows($result);
    $order =1;
?>

้้<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลคนไข้</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="images\hos.svg" alt="" width="40" height="54" >
      ข้อมูลคนไข้
    </a>
  </div>
</nav>


<div class="container my-4">

    <form action="search.php" method="POST">
    <label class="my-2 ">ค้นหาคนไข้</label>
    <input type="text" placeholder="ป้อนชื่อคนไข้เพื่อค้นหา" class="form-control" name="name">
    <input type="submit" value="Seacch" class="btn btn-dark my-2 ">
    </form>


    <table  class="table table-bordered">
    <thead>
        <tr>
            <th>ลำดับที่</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>เพศ</th>
            <th>เบอร์โทร</th>
            <th>ประวัติคนไข้</th>
            <th>แก้ไขข้อมูล</th>
            <th>ลบข้อมูล(checkbox)</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row=mysqli_fetch_assoc($result)){?>
        <tr>
            <td><?php echo $order++ ?></td>
            <td><?php echo $row["fname"] ?></td>
            <td><?php echo $row["lname"] ?></td>
            <td>  <?php if($row["gender"]=="male"){ ?>
                        ชาย
                    <?php } else if($row["gender"]=="female"){ ?>
                        หญิง
                    <?php } else { ?>
                        อื่น ๆ
                    <?php }  ?>
                </td>
            <td><?php echo $row["tel"] ?></td>
            <td><?php echo $row["history"] ?></td>
            <td>
                <a href="editFormData.php?id=<?php echo $row["id"]; ?>" class="btn btn-info" >แก้ไขข้อมูล</a>
            </td>

        <form action="multipleDelete.php" method="POST">

            <td>
                <input type="checkbox" name="idcheckbox[]" value="<?php echo$row["id"] ?>"
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

        <a href="insertform.php" class="btn btn-success">บันทึกข้อมูลคนไข้</a>
        <input type="submit" value="ลบข้อมูล (Checkbox)" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลที่เลือกหรือไม่')">
        </form>

        <button class="btn btn-primary" onclick="checkAll()">เลือกทั้งหมด</button>
        <button class="btn btn-warning" onclick="uncheckAll()">ยกเลิก</button>
    

    </div>

    <script>
       function checkAll(){
           var form_element = document.forms[1].length
           for(i=0; i<form_element-1 ;i++){
               document.forms[1].elements[i].checked=true;
           }
       }
       function uncheckAll(){
           var form_element = document.forms[1].length
           for(i=0; i<form_element-1 ;i++){
               document.forms[1].elements[i].checked=false;
           }
       }
    </script>
</body>
</html>