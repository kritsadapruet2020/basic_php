<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badland</title>
</head>
<body>

    <?php
    include("header.php");
    ?>

<main>
    <div class="container">
    <div class="card">
  <div class="card-header">
    สมัครสมาชิก
  </div>
  <div class="card-body">
   <form name="form1" action="insert.php" method="post">
        <div class="row">
            <div class="col-md-2"><label for="exampleFormControlInput1" class="form-label">คำนำหน้าชื่อ</label>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="txt_name_prefix">
            <option selected>เลือกนำหน้าชื่อ</option>
            <option value="นาย">นาย</option>
             <option value="นางสาว">นางสาว</option>
             <option value="นาง">นาง</option>
            </select>
        </div>
        <div class="col-md-5"><label for="exampleFormControlInput1" class="form-label">ชื่อ</label>
            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="ชื่อของคุณ" name="firstname">
        </div>
        <div class="col-md-5"><label for="exampleFormControlInput1" class="form-label" >นามสกุล</label>
            <input type="last" class="form-control" id="exampleFormControlInput1" placeholder="นามสกุลของคุณ" name="lastname">
        </div>
</div>

<div class="row">
    <div class="col-md-2"><label for="exampleFormControlInput1" class="form-label">เพศ</label>
    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="sex">
            <option selected>เลือกเพศ</option>
            <option value="ชาย">ชาย</option>
             <option value="หญิง">หญิง</option>
             <option value="อื่น ๆ">อื่น ๆ</option>
            </select>

        </div>

        <div class="col-md-3"><label for="exampleFormControlInput1" class="form-label">วันเกิด</label>
        <input type="date" class="form-control" id="txt_birthdate" name="birthdate" placeholder="00/00/0000" data-provide="datepicker" data-date-language="th-th">
        </div>

        <div class="col-md-7"><label for="exampleFormControlInput1" class="form-label">ที่อยู่</label>
        
        <textarea class="form-control"  name="address" id="txt_address"> </textarea>

        </div>

</div>
<div class="row">

<div class="col-md-6"><label for="exampleFormControlInput1" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="กรอกอีเมล" name="email">
        </div>

<div class="col-md-6"><label for="exampleFormControlInput1" class="form-label">เบอร์โทร</label>
            <input type="phonenumber" class="form-control" id="exampleFormControlInput1" placeholder="กรอกเบอร์" name="phonenumber">
        </div>

</div>
<br>
<center>
<button type="submit" class="btn btn-outline-warning"><i class="bi bi-arrow-90deg-right"></i>ตกลง</button>
<button type="button" class="btn btn-outline-warning"><i class="bi bi-x-circle"></i> ยกเลิก</button>
</center>
    </form>
  </div>
</div>
    </div>

</main>

    <?php
    include("footer.php");
    ?>
</body>
</html>