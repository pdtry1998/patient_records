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

  <form action="data.php" method="POST">
     <div class="container my-3">
     <div  class="form-group">
        <label>ชื่อ</label>
        <input type="text" name="fname" placeholder="ป้อนชื่อคนไข้" class="form-control my-2">
     </div><br>
     <div class="form-group">
        <label>นามสกุล</label>
        <input type="text" name="lname" placeholder="ป้อนนามสกุลคนไข้" class="form-control my-2">
     </div><br>
     <div class="form-group">
        <label>เพศ</label>
        <input type="radio" name="gender" value="male">ชาย
        <input type="radio" name="gender" value="female">หญิง
        <input type="radio" name="gender" value="other">อื่น ๆ
     </div><br>
     <div class="form-group">
        <label>เบอร์ติดต่อ</label>
        <input type="text" name="tel" placeholder="ป้อนเบอร์ติดต่อ" class="form-control my-2">
     </div><br>
     <div class="form-group">
        <label>ประวัติคนไข้</label>
        <textarea type="text" name="history" placeholder="ป้อนข้อมูลคนไข้" class="form-control my-2"></textarea>
     </div><br>

     <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">

     <a href="index.php" class="btn btn-warning">ข้อมูลคนไข้</a>
     </div>
    </form>



</body>
</html>