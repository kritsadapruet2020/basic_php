<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condominium</title>
</head>
<body>
    <?php
    include("header.php");
    ?>

<main>
    <div class="container">
    <div class="card">
  <div class="card-header">
    ระบบสมัครสมาชิก
  </div>
  <div class="card-body">
   <form name="form1" action="insert.php" method="post">
        <div class="row">
            <div class="col-md-2"><label for="exampleFormControlInput1" class="form-label">คำนำหน้าชื่อ</label>
            <select class="form-select" aria-label="Default select example" name="txt_fname" id="txt_fname">
             <option selected>กดเพื่อเลือก</option>
             <option value="นาย">นาย</option>
            <option value="นาง">นาง</option>
             <option value="นางสาว">นางสาว</option>
            </select>
        </div>
        <div class="col-md-5"><label for="exampleFormControlInput1" class="form-label">ชื่อ</label>
            <input type="text" class="form-control" id="F_name"  name="F_name" placeholder="ชื่อของคุณ">
        </div>
        <div class="col-md-5    "><label for="exampleFormControlInput1" class="form-label">นามสกุล</label>
            <input type="text" class="form-control" id="L_name"  name="L_name" placeholder="นามสกุลของคุณ">
        </div>
        <br>
        <br>
        <br>
        
        

        <div class="row">
            <div class="col-md-2"><label for="exampleFormControlInput1" class="form-label">เพศ</label>
            <div class="form-check">
            <input type="radio" class="form-check-input" name="sex" id="sex" value="ชาย"> ชาย
            </div>
            <div class="form-check">   
            <input type="radio" class="form-check-input" name="sex" id="sex" value="หญิง"> หญิง
        </div>
        </div>
        <div class="col-md-3"><label for="exampleFormControlInput1" class="form-label">วันเกิด</label>
        <input type="date" class="form-control" id="txt_birthdate" name="txt_birthdate"
                                     placeholder="00/00/0000" data-provide="datepicker" data-date-language="th-th">
        </div>

        <div class="col-md-7"><label for="exampleFormControlInput1" class="form-label">ที่อยู่</label>
           <textarea class="form-control" name="txt_address" id="txt_address"></textarea>
        </div>
        <br>
        <br>
        <br>
    
        <br>


        <div class="row">

        <div class="col-md-6    "><label for="exampleFormControlInput1" class="form-label">เบอร์โทร</label>
            <input type="number" class="form-control" name="txt_tel" id="txt_tel" placeholder="เบอร์โทรของคุณ">
        </div>
        <div class="col-md-6    "><label for="exampleFormControlInput1" class="form-label">อีเมล</label>
            <input type="email" class="form-control" name="txt_mail" id="txt_mail" placeholder="อีเมลของคุณ">
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>

    <center>
    <button class="btn btn-success" type="submit"><i class="bi bi-check2-circle"></i></button>
    <button class="btn btn-danger" type="reset"> <i class="bi bi-x-circle"></i></button>
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