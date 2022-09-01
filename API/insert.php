
<?php
#ملف الاتصال بالقاعده البيانات
include 'con.php';
#شرط اضافه البيانات
if(isset($_POST['insert'])){
   #md5 تستعمل للتشفير
   $password = md5($_POST['password']);
   #كود اضافه البيانات داخل الجدول 
   mysqli_query($conn, "INSERT INTO `std`(name,it,address, numberuni,email,password) VALUES('$_POST[name]','$_POST[it]','$_POST[address]','$_POST[number]', '$_POST[email]', '$password')") or die('عفوا الرقم الجامعي الذي ادخلته محجوز بالفعل');

      header('location:../html/view.php');

}

?>
