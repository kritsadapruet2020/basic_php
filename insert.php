<?php
include("config.inc.php");
$txt_fname = $_POST["txt_fname"];
$F_name = $_POST["F_name"];
$L_name = $_POST["L_name"];
$sex = $_POST["sex"];
$txt_birthdate = $_POST["txt_birthdate"];
$txt_address = $_POST["txt_address"];
$txt_tel = $_POST["txt_tel"];
$txt_mail = $_POST["txt_mail"];

$sql = "INSERT INTO tbl_member (id, Firstname, name, lassname, sex, Birtsday, Address, tell, Email) 
VALUES ('', '$txt_fname','$F_name','$L_name','$sex','$txt_birthdate','$txt_address','$txt_tel','$txt_mail')";

echo $txt_fname;
echo $F_name ."&nbsp;";
echo $L_name."<br>";
echo $sex."<br>";
echo $txt_birthdate."<br>";
echo $txt_address."<br>";
echo $txt_tel."<br>";
echo $txt_mail."<br>";

if(mysqli_query($conn, $sql)) {
    echo "เพิ่มข้อมูลสำเร็จ";
}else{
    echo "เพิ่มข้อมูลไม่สำเร็จ";
}
$conn -> close();
?>